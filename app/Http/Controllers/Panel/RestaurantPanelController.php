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
use App\ProductDessert;
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
    $desserts = $user->desserts;
    return view('site.manage-products.food', compact('categories', 'desserts'));
  }

  public function insertProduct(Request $request){
    $user = Auth::user();
    $desserts = $user->desserts;
    $ids =  $request->desserts_id;
    $categories = $user->categories;

    //check dessert ids and category_id validity
    $is_exist = false;
    foreach ($desserts as $dessert){
      foreach ($ids as $id) {
        if ($dessert->id == $id){
          $is_exist = true;
          break;
        }
      }
      if ($is_exist == true) break;
    }
    if ($is_exist == false) return back();

    $is_exist = false;

    foreach ($categories as $category) {
      if ($category->id == $request->category_id) {
        $is_exist = true;
      }
    }
    if ($is_exist == false) return back();





    $image = Uploader::image($request->file('image'));
    $product = Product::create([
      'user_id' => $user->id,
      'category_id' => $request->category_id,
      'name' => $request->name,
      'price' => $request->price,
      'discount_percent' => $request->discount_percent,
      'description' => $request->description,
      'image' => $image,
    ]);

    foreach ($ids as $id) {
      $product_dessert = ProductDessert::create([
        'product_id' => $product->id,
        'dessert_id' => $id,
      ]);
    }

    return back();
  }

  public function productEdit($id){
    $user = Auth::user();
    $categories = $user->categories;
    $products = $user->products()->orderBy('id', 'desc')->get();
    $desserts = $user->desserts;
    $product = Product::find($id);
    if ($product->user_id != $user->id) return back();
    foreach ($desserts as $dessert){
      $dessert->is_exist = false;
      foreach ($product->desserts as $pd) {
        if ($dessert->id == $pd->id){
          $dessert->is_exist = true;
          break;
        }
      }
    }
    return view('site.manage-products.food-edit',compact('product', 'categories', 'products', 'desserts'));
  }

  public function productUpdate(Request $request){
    $user = Auth::user();
    $product = Product::find($request->product_id);
    if ($product->user_id != $user->id) return back();

    $product->category_id = $request->category_id;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->discount_percent = $request->discount_percent;
    if($request->hasFile('image')) {
      $image = Uploader::image($request->file('image'));
      $product->image = $image;
    }
    $product->save();



    //update desserts
    $ids = $request->desserts_id;
    $current_product_desserts = ProductDessert::where('product_id', '=', $product->id)->get();
    if (is_null($ids)){
      foreach ($current_product_desserts as $item){
        $item->forceDelete();
      }
      return back();
    }

    //remove unchecked desserts
    foreach ($current_product_desserts as $product_dessert) {
      $is_exist = false;
      foreach ($ids as $id){
        if ($id == $product_dessert->dessert_id){
          $is_exist = true;
          break;
        }
      }
      if ($is_exist == false){
        $product_dessert->forceDelete();
      }
    }

    //add new checked desserts
    foreach ($ids as $id){
      $is_exist = false;
      foreach ($current_product_desserts as $product_dessert) {
        if ($id == $product_dessert->dessert_id){
          $is_exist = true;
          break;
        }
      }
      if ($is_exist == false){
        $pd = ProductDessert::create([
          'product_id' => $product->id,
          'dessert_id' => $id,
        ]);
      }
    }
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

  public function desserts(){
    $user = Auth::user();
    $desserts = $user->desserts;
    return view('site.manage-products.dessert', compact('desserts'));
  }

  public function dessertInsert(Request $request){
    $image = Uploader::image($request->file('image'));
    Dessert::create([
      'user_id' => Auth::user()->id,
      'name' => $request->name,
      'type' => $request->type,
      'price' => $request->price,
      'image' => $image,
    ]);
    return back();
  }

  public function dessertEdit($id){
    $dessert = Dessert::find($id);
    if ($dessert->user_id != Auth::user()->id) return back();
    return view('site.manage-products.dessert-edit', compact('dessert'));
  }

  public function dessertUpdate(Request $request){
    $dessert = Dessert::find($request->dessert_id);
    if ($dessert->user_id != Auth::user()->id) return back();
    $dessert->name = $request->name;
    $dessert->price = $request->price;
    $dessert->type = $request->type;
    if ($request->hasFile('image')){
      $dessert->image = Uploader::image($request->file('image'));
    }
    $dessert->save();
    return back();
  }

  public function dessertDelete(Request $request){
    $dessert = Dessert::find($request->dessert_id);
    if ($dessert->user_id != Auth::user()->id) return back();
    $dessert->delete();
    return back();
  }

  public function todayReport(){
    $user = Auth::user();
    $orders = DB::select("select * from orders where DATE(`local_time`) = CURDATE() and is_delivered = 1");
    $orders = Order::hydrate($orders);
    return view('site.report.today', compact('orders'));
  }

  public function report(Request $request){
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

//    return $from_date;

    $orders = Order::where('local_time', '>=', $from_date)->where('local_time', '<=', $to_date)->where('is_delivered', '=', 1)->paginate(40);

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

  public function dessertAvailable($id){
    $dessert = Dessert::find($id);
    if($dessert->is_available == 1){
      $dessert->is_available = 0;
    }else{
      $dessert->is_available = 1;
    }
    $dessert->save();
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










}
