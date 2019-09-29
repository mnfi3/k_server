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




  public function products(){
    $kiosk = KAuth::kiosk();
    $users = $kiosk->users;
    foreach ($users as $user){
      $user->validDiscounts;
      $categories = $user->categories;
      foreach ($categories as $category){
        foreach ($category->products as $product){
          $product->desserts;
        }
      }
    }

    return ws::r(1, ['data' => $users]);
  }
}
