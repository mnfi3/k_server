<?php


namespace App\Http\Controllers\Api\Crypt;


class TokenManager {

  //this is kiosk token key
  private $token_key = '9u8jk434j3098u43';

  public function generateTokenKey($user_name){
    $str = $user_name . time();
    return MyCrypt::encrypt_pkcs7($str);
  }

  public function generateToken($token_key){
    return MyCrypt::encrypt_pkcs7($token_key, $this->token_key);
  }


  public function getKeyFromToken($token){
    return MyCrypt::decrypt_pkcs7($token, $this->token_key);
  }

}