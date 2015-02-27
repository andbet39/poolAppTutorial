<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class SimpleAuthMiddleware
{

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

 		return Auth::onceBasic('username') ?: $next($request);
	}

}
