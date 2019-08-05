<?php


namespace App\Http\Controllers\Api\Crypt;


class TokenManager {

  //this is kiosk token key **important key**
  private $token_key = '9u8jk434j3098u43';

  public function generateTokenKey($user_name){
    $str = date('Y-m-d h:i:s') . $user_name . time();
    return base64_encode($str);
  }



  public function generateToken($token_key){
    return MyCrypt::encrypt($token_key, $this->token_key);
  }


  public function getKeyFromToken($token){
    return MyCrypt::decrypt($token, $this->token_key);
  }

}