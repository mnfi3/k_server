<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
      $user = $request->user();
      if($user != null) {
        if ($role=$user->role !== null) {
          if ($role->name == 'admin') {
            return $next($request);
          }
        }
      }

      return redirect(route('home'));

    }
}
