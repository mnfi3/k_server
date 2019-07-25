<?php

namespace App\Http\Controllers\Api\Crypt;


use App\Kiosk;
use Illuminate\Http\Request;

class KAuth {


  const X_API_KEY = '81.e[UaHaR8I,5t,qA}<ozm-6?5SxgC-&~%c>8yM=nG:_s_dTxYNb@|P%L5';
  private static $kiosk = null;

  public static function kiosk(){
    return self::$kiosk;
  }

  public static function init(Request $request){
    $token = $request->header('k-token');
    $tm = new TokenManager();
    $token_key = $tm->getKeyFromToken($token);
    if (strlen($token_key) > 2) {
      self::$kiosk = Kiosk::where('token', '=', $token_key)->first();
    }
  }
}