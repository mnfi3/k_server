<?php

namespace App\Http\Controllers\Api\Crypt;


class MyCrypt {

  private static $key = '2ac59075';

  public static function encrypt_pkcs7($str, $key = null){
    if (is_null($key)){
      $key = self::$key;
    }

    $ciphertext = OpenSSL_encrypt($str,"DES-EDE3", $key, OPENSSL_RAW_DATA);
    return base64_encode($ciphertext);
  }



  public static function decrypt_pkcs7($encrypted, $key = null){
    if (is_null($key)){
      $key = self::$key;
    }

    $encrypted = base64_decode($encrypted);
    $ciphertext = OpenSSL_decrypt($encrypted,"DES-EDE3", $key, OPENSSL_RAW_DATA);
    return $ciphertext;
  }



}