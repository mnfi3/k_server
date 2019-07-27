<?php

namespace App\Http\Controllers\Api\Webservice;


class ws {
  public static function r($status, $data, $httpCode = 200, $message = ''){
    return response()->json(['status' => $status, 'message' => $message, 'data' => $data], $httpCode )->setEncodingOptions(JSON_UNESCAPED_UNICODE);
  }
}