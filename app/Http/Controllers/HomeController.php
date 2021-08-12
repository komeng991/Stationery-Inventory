<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\Product;
use App\Models\Roles;
use Auth;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     private $isSuperAdmin = false;
     private $isAdmin = false;
     private $isLawyer = false;
     private $isLMS = false;
     private $isMarketeer = false;
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $products=Product::all();


        return view('home',
                 [
                   'name' => Auth::user()->name,
                   'isAdmin'=>$this->isAdmin,
                   'isSuperAdmin'=>$this->isSuperAdmin,
                   'isLMS'=>$this->isLMS,
                   'isLawyer'=>$this->isLawyer,
                   'isMarketeer' =>$this->isMarketeer,
                   'products' =>$products
                 ]
                );

               
             
    }
}
