<?php

namespace App\Http\Controllers\Panel;

use App\Category;
use App\Dessert;
use App\Discount;
use App\Http\Controllers\Util\Pdate;
use App\Http\Controllers\Util\Pnum;
use App\Http\Controllers\Util\Uploader;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RestaurantPanelController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
    $this->middleware('restaurant-admin');
  }


  public function index(){
    $user = Auth::user();
    $orders = $user->restaurantOrders()->orderBy('id', 'asc')->where('is_delivered', '=', 0)->get();
    return view('site.latest-orders', compact('orders'));
  }

  //ajax api
  public function latestOrders(){
    $user = Auth::user();
    $orders = $user->restaurantOrders()->orderBy('id', 'asc')->where('is_delivered', '=', 0)->get();
    return json_encode($orders, JSON_UNESCAPED_UNICODE);
  }

  public function orderDelivered($id){
    $order = Order::find($id);
    $user = Auth::user();
    if ($order->user_id != $user->id) return back();
    $order->is_delivered = 1;
    $order->save();
    return back();
  }

  public function products(){
    $user = Auth::user();
    $categories = $user->categories;
    return view('site.manage-products.food', compact('categories'));
  }

  public function insertProduct(Request $request){
    $user = Auth::user();
    $category = Category::find($request->category_id);
    if ($category->user_id != $user->id) return back();
    is_null($request->is_suggest) ? $is_suggest = 0 : $is_suggest =1;

    $image = Uploader::image($request->file('image'));
    $product = Product::create([
      'user_id' => $user->id,
      'category_id' => $request->category_id,
      'is_side' => 0,
      'name' => $request->name,
      'price' => $request->price,
      'discount_percent' => $request->discount_percent,
      'description' => $request->description,
      'image' => $image,
      'is_suggest' => $is_suggest,
      'is_available' => 1,
    ]);

    return back();
  }

  public function productEdit($id){
    $user = Auth::user();
    $categories = $user->categories;
    $products = $user->products()->orderBy('id', 'desc')->get();
    $product = Product::find($id);
    if ($product->user_id != $user->id) return back();
    return view('site.manage-products.food-edit',compact('product', 'categories', 'products'));
  }

  public function productUpdate(Request $request){
    $user = Auth::user();
    $product = Product::find($request->product_id);
    if ($product->user_id != $user->id) return back();

    $product->category_id = $request->category_id;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->discount_percent = $request->discount_percent;
    $product->description = $request->description;
    is_null($request->is_suggest) ? $product->is_suggest = 0 : $product->is_suggest = 1;
    if($request->hasFile('image')) {
      $image = Uploader::image($request->file('image'));
      $product->image = $image;
    }
    $product->save();

    return back();
  }


  public function productDelete(Request $request){
    $product = Product::find($request->product_id);
    if ($product->user_id == Auth::user()->id){
      $product->delete();
    }
    return back();
  }

  public function productAvailable($id){
    $product = Product::find($id);
    if ($product->user_id != Auth::user()->id) return back();
    if($product->is_available == 1){
      $product->is_available = 0;
    }else{
      $product->is_available = 1;
    }
    $product->save();
    return back();
  }

  public function categories(){
    $categories = Auth::user()->categories;
    return view('site.manage-products.categories', compact('categories'));
  }

  public function categoryInsert(Request $request){
    $image = Uploader::image($request->file('image'));
    $category = Category::create([
      'user_id' => Auth::user()->id,
      'name' => $request->name,
      'image' => $image,
    ]);
    return back();
  }

  public function categoryEdit($id){
    $category = Category::find($id);
    $user = Auth::user();
    if ($category->user_id != $user->id) return back();
    return view('site.manage-products.category-edit', compact('category'));
  }

  public function categoryUpdate(Request $request){
    $category = Category::find($request->category_id);
    $user = Auth::user();
    if ($category->user_id != $user->id) return back();
    $category->name = $request->name;
    if ($request->has('image')){
      $category->image = Uploader::image($request->file('image'));
    }
    $category->save();
    return back();
  }

  public function categoryDelete(Request $request){
    $category = Category::find($request->category_id);
    if ($category->user_id != Auth::user()->id) return back();
    $category->delete();
    return back();
  }

  public function sides(){
    $user = Auth::user();
    $sides = $user->sides()->orderBy('id', 'desc')->get();
    return view('site.manage-products.sides', compact('sides'));
  }

  public function sideInsert(Request $request){
    $user = Auth::user();
    $image = Uploader::image($request->file('image'));
    $side = Product::create([
      'user_id' => $user->id,
      'category_id' => 0,
      'is_side' => 1,
      'name' => $request->name,
      'price' => $request->price,
      'discount_percent' => 0,
      'description' => '',
      'image' => $image,
      'is_suggest' => 0,
      'is_available' => 1,
    ]);
    return back();
  }

  public function sideEdit($id){
    $side = Product::find($id);
    if(!$this->isForUser($side)) return back();
    return view('site.manage-products.sides-edit', compact('side'));
  }

  public function sideUpdate(Request $request){
    $side = Product::find($request->id);
    if (!$this->isForUser($side)) return back();
    $side->name = $request->name;
    $side->price = $request->price;
    if ($request->hasFile('image')){
      $side->image = Uploader::image($request->file('image'));
    }
    $side->save();
    return back();
  }

  public function sideDelete(Request $request){
    $side = Product::find($request->side_id);
    if (!$this->isForUser($side)) return back();
    $side->delete();
    return back();
  }

  public function todayReport(){
    $user = Auth::user();
    $orders = DB::select("select * from orders where user_id='$user->id' and DATE(`local_time`) = CURDATE() and is_delivered = 1");
    $orders = Order::hydrate($orders);
    return view('site.report.today', compact('orders'));
  }

  public function report(Request $request){
    $user = Auth::user();
    $from_date = Pnum::toLatin($request->from_date);
    $to_date = Pnum::toLatin($request->to_date);
    if (strlen($from_date) < 5 || strlen($to_date) < 5) {
      $from_date = date('Y-m-d');
      $to_date =  date('Y-m-d');
    }else {
      $date = new Pdate();
      $from_date = $date->toGregorian($from_date);
      $to_date = $date->toGregorian($to_date);

    }
    $date = new \DateTime($from_date);
    $date->setTime(0, 0, 0);
    $from_date = $date->format('Y-m-d H:i:s');
    $date = new \DateTime($to_date);
    $date->setTime(23, 59, 59);
    $to_date = $date->format('Y-m-d H:i:s');


    $orders = Order::where('user_id', '=', $user->id)->where('local_time', '>=', $from_date)->where('local_time', '<=', $to_date)->where('is_delivered', '=', 1)->paginate(40);
//    $orders = Order::hydrate($orders);
    return view('site.report.all', compact('orders', 'from_date', 'to_date'))->with('from_date', $from_date)->with('to_date', $to_date);
  }


  public function discount(){
    $discounts = Auth::user()->discounts()->orderBy('id', 'desc')->paginate(20);
    return view('site.manage-discount.discount-code', compact('discounts'));
  }

  public function discountInsert(Request $request){
    $date = new Pdate();
    $started_at = $date->toGregorian(Pnum::toLatin($request->started_at));
    $invodek_at = $date->toGregorian(Pnum::toLatin($request->invoked_at));

    Discount::create([
      'user_id' => Auth::user()->id,
      'code' => $request->code,
      'percent' => $request->percent,
      'count' => $request->count,
      'started_at' => $started_at,
      'invoked_at' => $invodek_at,
    ]);
    return back();
  }

  public function discountEdit($id){
    $discount = Discount::find($id);
    if ($discount->user_id != Auth::user()->id) return back();
    return view('site.manage-discount.edit', compact('discount'));
  }

  public function discountUpdate(Request $request){
    $discount = Discount::find($request->discount_id);
    if ($discount->user_id != Auth::user()->id) return back();
    $date = new Pdate();
    $started_at = $date->toGregorian(Pnum::toLatin($request->started_at));
    $invodek_at = $date->toGregorian(Pnum::toLatin($request->invoked_at));
    $discount->percent = $request->percent;
    $discount->count = $request->count;
    $discount->started_at = $started_at;
    $discount->invoked_at = $invodek_at;
    $discount->save();
    return back();
  }

  public function discountDelete(Request $request){
    $discount = Discount::find($request->discount_id);
    if ($discount->user_id == Auth::user()->id) $discount->delete();
    return back();
  }



  public function profileImage(){
    return view('site.profile.image');
  }

  public function profileImageInsert(Request $request){
    $image = Uploader::image($request->file('image'));
    $user = Auth::user();
    $user->image = $image;
    $user->save();
    return back();
  }

  public function profileDescription(){
    $description = Auth::user()->description;
    return view('site.profile.description',compact('description'));
  }

  public function profileDescriptionUpdate(Request $request){
    $user = Auth::user();
    $user->description = $request->description;
    $user->save();
    return back();
  }

  public function address(){
    $user = Auth::user();
    return view('site.profile.address', compact('user'));
  }

  public function addressUpdate(Request $request){
    $user = Auth::user();
    $user->address = $request->address;
    $user->phone = $request->phone;
    $user->save();
    return back();
  }

  public function password(){
    return view('site.profile.password');
  }

  public function passwordUpdate(Request $request){
    $user = Auth::user();
    $old_pass = $request->old_pass;
    $new_pass1 = $request->new_pass1;
    $new_pass2 = $request->new_pass2;

    if($new_pass1 != $new_pass2){
      return back()->with('fail', 'عدم مطابقت در پسورد ها');
    }elseif (strlen($new_pass1) < 6){
      return back()->with('fail', 'پسورد شما باید حداقل 6 کاراکتر داشته باشد');
    }else if(Hash::check($old_pass, $user->password) == false){
      return back()->with('fail', 'پسورد فعلی وارد شده اشتباه است');
    }

    $user->password = Hash::make($new_pass1);
    $user->save();
    return back()->with('success', 'پسورد شما با موفقیت تغییر یافت');
  }













  private function isForUser($obj){
    if (Auth::user()->id != $obj->user_id) return false;
    return true;
  }








}
