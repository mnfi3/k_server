<?php


namespace App\Http\Controllers\Api\Crypt;


use App\Kiosk;

class TokenManager {

  //this is kiosk token key **important key**
  private $token_key = '9u8jk434j3098u43';

  public function generateTokenKey($user_name){
    while (1) {
      $str = $this->generateRandomString(). '--' . $user_name . '--' . date('Y-m-d h:i:s');
      $token = MyCrypt::encrypt($str, $this->token_key);
      $kiosk = Kiosk::where('token', '=', $token)->first();
      if ($kiosk == null) break;
    }
    return $token;
  }



  public function generateToken($token_key){
    return MyCrypt::encrypt($token_key, $this->token_key);
  }


  public function getKeyFromToken($token){
    return MyCrypt::decrypt($token, $this->token_key);
  }



  private function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

}