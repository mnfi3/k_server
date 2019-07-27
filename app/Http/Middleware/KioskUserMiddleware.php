<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\Crypt\KAuth;
use App\Http\Controllers\Api\Crypt\KUAuth;
use App\Http\Controllers\Api\ms;
use App\Http\Controllers\Api\ws;
use Closure;

class KioskUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      if($request->header('x-api-key') != KAuth::X_API_KEY){
        return ws::r(0, '', 200, ms::KIOSK_APP_KEY_ERROR);
      }

      $user = $request->user();
      if ($user == null){
        return ws::r(0, '', 200, ms::MUST_BE_LOGIN);
      }

      KAuth::init($request);
      $kiosk = KAuth::kiosk();
      if($kiosk == null){
        return ws::r(0, '', 200, ms::KIOSK_MUST_LOGIN);
      }

      if(!KUAuth::check($kiosk, $user)){
        return ws::r(0, '', 200, ms::KIOSK_USER_NOT_MATCH);
      }


      return $next($request);
    }
}
