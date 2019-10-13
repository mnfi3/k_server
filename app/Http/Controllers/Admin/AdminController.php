<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\Uploader;
use App\Kiosk;
use App\User;
use App\UserKiosk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
    $this->middleware('super-admin');
  }


  public function index(){
    $kiosks = Kiosk::orderBy('id', 'desc')->paginate(30);
    return view('sys-admin.home', compact('kiosks'));
  }

  public function kioskInsert(Request $request){
    $password1 = $request->pass1;
    $password2 = $request->pass2;
    $kiosk = Kiosk::withTrashed()->where('user_name', '=', $request->user_name)->get();
    if (count($kiosk) > 0) return back()->with('mess', 'این نام کاربری از قبل وجود دارد');
    if($password2 != $password1 || strlen($password1) < 6 || strlen($password2) < 6) return back()->with('mess', 'رمز های عبور را به درستی وارد کنید');

    Kiosk::create([
      'name' => $request->name,
      'user_name' => $request->user_name,
      'client_key' => $request->client_key,
      'password' => Hash::make($request->pass1),
    ]);
    return back()->with('mess', 'کیوسک با موفقیت ایجاد شد');
  }

  public function kioskEdit($id){
    $kiosk = Kiosk::find($id);
    return view('sys-admin.kiosk-edit', compact('kiosk'));
  }

  public function kioskUpdate(Request $request){
    $kiosk = Kiosk::find($request->kiosk_id);
    $kiosk->name = $request->name;
    $kiosk->client_key = $request->client_key;
    if(strlen($request->password) > 0) {
      if (strlen($request->password) >= 6) {
        $kiosk->password = Hash::make($request->password);
      }else{
        return back()->with('mess', 'پسورد وارد شده اشتباه است');
      }
    }
    $kiosk->save();
    return back()->with('mess', 'کیوسک با موفقیت آپدیت شد');;
  }

  public  function restaurants(){
    $restaurants = User::orderBy('id', 'desc')->where('role', '=', 'restaurant-admin')->paginate(30);
    $kiosks = Kiosk::orderBy('id', 'desc')->get();
    return view('sys-admin.res', compact('restaurants', 'kiosks'));
  }

  public function restaurantInsert(Request $request){
    if(strlen($request->password) < 6 || strlen($request->app_password) < 6) return back()->with('mess', 'مشکل در پسورد ها');
    $image = Uploader::image($request->file('image'));
    $user = User::create([
      'type' => 'restaurant',
      'role' => 'restaurant-admin',
      'name' => $request->name,
      'phone' => $request->phone,
      'address' => $request->address,
      'image' => $image,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    $user_kiosk = UserKiosk::create([
      'user_id' => $user->id,
      'kiosk_id' => $request->kiosk_id,
    ]);

    return back()->with('mess', 'رستوران با موفقیت ایجاد شد');
  }

  public function restaurantEdit($id){
    $restaurant = User::find($id);
    $kiosks = Kiosk::orderBy('id', 'desc')->get();
    $orders = $restaurant->restaurantOrders()->orderBy('id', 'desc')->paginate(30);
    return view('sys-admin.res-edit', compact('restaurant', 'kiosks', 'orders'));
  }

  public function restaurantUpdate(Request $request){
    $rest = User::find($request->restaurant_id);
    $rest->name = $request->name;
    $rest->phone = $request->phone;
    $rest->address = $request->address;
    if($request->hasFile('image')) $rest->image = Uploader::image($request->file('image'));
    if(strlen($request->password) > 0) {
      if (strlen($request->password) >= 6) {
        $rest->password = Hash::make($request->password);
      }else{
        return back()->with('mess', 'پسورد وارد شده اشتباه است');
      }
    }

    $rest->save();
    $user_kiosk = UserKiosk::where('user_id', '=', $rest->id)->first();
    $user_kiosk->kiosk_id = $request->kiosk_id;
    $user_kiosk->save();
    return back()->with('mess', 'تغییرات با موفقیت انجام شد');


  }


}
