<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Crypt\KAuth;
use App\Http\Controllers\Api\Crypt\TokenManager;
use App\Kiosk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class KioskAuthController extends Controller
{
  public function __construct() {
    $this->middleware('kiosk', ['except' => ['login']]);
  }



  public function login(Request $request){
    $user_name = $request->user_name;
    $client_key = $request->client_key;
    $password = $request->password;

    $kiosk = Kiosk::where('user_name', '=', $user_name)->where('client_key', '=', $client_key)->first();
    if ($kiosk != null){
      if (Hash::check($password, $kiosk->password) == true) {
        $tm = new TokenManager();
        $token_key = $tm->generateTokenKey($user_name);
        $token = $tm->generateToken($token_key);
        $kiosk->token = $token_key;
        $kiosk->save();

        return ws::r(1, ['kiosk' => $kiosk, 'token' => $token], 200, ms::KIOSK_LOGIN_SUCCESS);
      }
    }

    return ws::r(0, '', 200, ms::KIOSK_LOGIN_FAIL);
  }



  public function logout(Request $request){
    $kiosk = KAuth::kiosk();
    $kiosk->token = '';
    $kiosk->save();
    return ws::r(1, '', 200, ms::KIOSK_LOGOUT_SUCCESS);
  }
}
