<?php

namespace App\Http\Controllers\Api\Crypt;


use App\Kiosk;
use App\User;
use App\UserKiosk;

class KUAuth {

  public static function check(Kiosk $kiosk, User $user){

    $ku = UserKiosk::where('user_id', '=', $user->id)->where('kiosk_id', '=', $kiosk->id)->first();
    if ($ku != null){
      return true;
    }

    return false;
  }
}