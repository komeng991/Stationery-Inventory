<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\Roles;

class CheckVerified
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
       $response = $next($request);

       if(Auth::check() && Auth::user()->verified != '1'){
           Auth::logout();
           return redirect('/login')->withErrors([
                    'email' => "Akaun dalam proses pengesahan. Sila hubungi admin.",
                ]);

          // ->with('erro_login', 'Please verify your email.');
       }

       $role ="";

       if (!Auth::check()){
         return redirect('/login');
       }

       if ($request->user()->hasRole("isAdmin")){
         return $response;
       }

       // if ($request->user()->hasRole("super_admin")){
       //   return $response ;
       // }


       // if(Auth::check() && Auth::user()->verified == '1' && Auth::user()->document_submission != 'approve'){
       //     //Auth::logout();
       //     return redirect('/registration/step2')->withErrors([
       //              'email' => "Please submit all the documents required.",
       //          ]);
       //     //->with('erro_login', 'Please verify your email.');
       // }


      return $response;
    }
}
