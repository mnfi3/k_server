<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\Crypt\KAuth;
use App\Http\Controllers\Api\Webservice\ms;
use App\Http\Controllers\Api\Webservice\ws;
use Closure;

class KioskAuthMiddleware
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


      KAuth::init($request);
      if (KAuth::kiosk() != null) {
        return $next($request);
      }else{
        return ws::r(0, '', 200, ms::KIOSK_MUST_LOGIN);
      }
    }
}
