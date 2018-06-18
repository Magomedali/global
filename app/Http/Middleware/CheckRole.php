<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole{




	public function handler($request,Closure $next, $role){

		if(!$request->user()->hasRole($role)){
			return response('forbidden.', 301);
		}

		return $next($request);

	}
}