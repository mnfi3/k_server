<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Crypt\KAuth;
use App\Http\Controllers\Api\Webservice\ws;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KioskController extends Controller
{
  public function __construct() {
    $this->middleware('kiosk');
  }


  public function users(){
    $kiosk = KAuth::kiosk();
    $users = $kiosk->users;

    return ws::r(1, ['users' => $users]);
  }

}
