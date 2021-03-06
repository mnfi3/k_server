<?php

namespace App\Http\Controllers\Api;

use App\Discount;
use App\Http\Controllers\Api\Crypt\KAuth;
use App\Http\Controllers\Api\Webservice\ms;
use App\Http\Controllers\Api\Webservice\ws;
use App\Http\Controllers\Util\Pdate;
use App\Order;
use App\OrderContent;
use App\OrderContentDessert;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
  public function __construct() {
    $this->middleware('auth:api', ['except'=>['orders']]);
    $this->middleware('kiosk_user', ['except'=>['orders']]);
    $this->middleware('kiosk', ['only'=>['orders']]);
  }


  public function restaurantInfo(){
    $user = Auth::user();
    return ws::r(1, $user);
  }

  public function products(){
    $restaurant = Auth::user();
    $categories = $restaurant->categories;
    foreach ($categories as $category){
      $category->products;
    }
    $sides = $restaurant->sides;
    return ws::r(1, ['categories' => $categories, 'sides' => $sides]);
  }



  public function discountValidate(Request $request){
    $code = $request->discount_code;
    $now = date('Y-m-d H:i:s');
    $discount = Discount::where('user_id', '=', Auth::user()->id)->where('code', '=', $code)
      ->where('started_at', '<=', $now)
      ->where('invoked_at', '>=', $now)
      ->where('count', '>', 0)->first();

    if($discount != null){
      return ws::r(1, $discount, 200, ms::DISCOUNT_VALID);
    }else{
      return ws::r(0, '', 200, ms::DISCOUNT_INVALID);
    }
  }







  public function  orders(Request $request){
    $orders = json_decode($request->orders);
    $pdate = new Pdate();
    $orders_ids = array();
    foreach ($orders as $data) {
      $dateTime = new DateTime($data->time);
      $time = $dateTime->format('Y-m-d H:i:s');

      $orders_ids [] = $data->id;

      $kiosk_id = KAuth::kiosk()->id;
      $order = Order::where('kiosk_id', '=', $kiosk_id)->where('local_time', '=', $time)->first();
      if ($order != null) {
        continue;
      }

      $discount = Discount::find($data->discount_id);
      if ($discount != null) {
        $discount->count = $discount->count - 1;
        $discount->save();
      }

      $order = Order::create([
        'local_id' => $data->id,
        'user_id' => $data->restaurant_id,
        'kiosk_id' => KAuth::kiosk()->id,
        'is_delivered' => 0,
        'order_number' => $data->order_number,
        'is_out' => $data->is_out,
        'discount_id' => $data->discount_id,
        'cost' => $data->cost,
        'd_cost' => $data->d_cost,
        'local_time' => $time,
        'pan' => $data->pan,
        'req_id' => $data->req_id,
        'serial_transaction' => $data->serial_transaction,
        'terminal_no' => $data->terminal_no,
        'trace_number' => $data->trace_number,
        'transaction_date' => $pdate->toGregorian($data->transaction_date),
        'transaction_time' => $data->transaction_time,
      ]);

      $order_items = $data->items;
      foreach ($order_items as $item) {
        $order_content = OrderContent::create([
          'order_id' => $order->id,
          'product_id' => $item->product_id,
          'count' => $item->count,
          'cost' => $item->cost,
        ]);

        $desserts = $item->desserts;
        foreach ($desserts as $dessert) {
          $order_content_dessert = OrderContentDessert::create([
            'order_content_id' => $order_content->id,
            'dessert_id' => $dessert->dessert_id,
            'price' => $dessert->price,
          ]);
        }
      }
    }


    return ws::r(1, ['orders_ids' => $orders_ids], 200, ms::ORDERS_INSERTED);
  }




}
