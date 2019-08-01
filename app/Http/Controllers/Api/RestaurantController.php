<?php

namespace App\Http\Controllers\Api;

use App\Discount;
use App\Http\Controllers\Api\Webservice\ms;
use App\Http\Controllers\Api\Webservice\ws;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
  public function __construct() {
    $this->middleware('kiosk_user');
  }


  public function products(){
    $restaurant = Auth::user();
    $categories = $restaurant->categories;
    foreach ($categories as $category){
      foreach ($category->products as $product){
        $product->sides;
      }
    }

    return ws::r(1, $categories);
  }



  public function discountValidate(Request $request){
    $code = $request->discount;
    $now = date('Y-m-d H:i:s');
    $discount = Discount::where('user_id', '=', Auth::user()->id)->where('code', '=', $code)->where('started_at', '<=', $now)->where('invoked_at', '>=', $now)->first();
    if($discount != null){
      return ws::r(1, $discount, 200, ms::DISCOUNT_VALID);
    }else{
      return ws::r(0, '', 200, ms::DISCOUNT_INVALID);
    }
  }
}
