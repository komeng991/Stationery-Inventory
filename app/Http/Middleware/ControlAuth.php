<?php

namespace App\Http\Middleware;

use Closure;

class Controlauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role = null)
    {
       /** if (! $request->user()->hasAnyRole(['exco'])) {
            *return redirect('/');
        *}
		*/

		if($role != null) {
            if (!$request->user()->hasAnyRole(explode("|", $role))) {
            return back();
            }
        }

            return $next($request);


    }
}
