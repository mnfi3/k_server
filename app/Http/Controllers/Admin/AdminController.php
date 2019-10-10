<?php

namespace App\Http\Controllers\Admin;

use App\Kiosk;
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



}
