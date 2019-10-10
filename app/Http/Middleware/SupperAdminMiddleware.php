<?php

namespace App\Http\Middleware;

use Closure;

class SupperAdminMiddleware
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
      $user = $request->user();
      if($user != null) {
        if ($user->role == 'super-admin') {
          return $next($request);
        }
      }

      return redirect(route('home'));
    }
}
