<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\Roles;
use App\Models\RoleUser;
use App\Models\RolesSchemes;
use App\Models\Schemes;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;


use App\Jobs\SendVerificationEmail;

// class UsersController extends Controller
// //{
//   /**
//    * Create a new controller instance.
//    *
//    * @return void
//    */
//    private $isAdmin = false;
//     private $isSwcorp = false;
//     private $isAdminSwm = false;
//     private $isAdminAf = false;
//     private $isAdminIdaman = false;
//     private $isOpuSwm = false;
//     private $isOpuAf = false;
//     private $isOpuIdaman = false;
//     private $StrRole = "";
//   public function __construct()
//   {
//       $this->middleware('auth');
//   }

//     /**
//      * Display a listing of the resource.
//      *
//      * @return Response
//      */
//     public function index(Request $request)
//     {

//       if(Auth::check() && ( Auth::user()->verified != '1')){
//         return redirect('/home');
//       }
//       $this->checkAuthRoles($request);

//       $request->user()->authorizeRoles(['isAdmin','isSwcorp','isAdminSwm','isAdminAf','isAdminIdaman']);


//       if ($this->isAdmin){

//         $users = RoleUser::with('user')->join ('roles','roles.id', '=', 'role_user.role_id')
//                  ->distinct('user_id')
//                  ->select('user_id')
//                  ->where(["roles.name"=>"isAdmin"])
//                  ->orWhere(["roles.name"=>"isSwcorp"])
//                  ->orWhere(["roles.name"=>"isAdminSwm"])->orWhere(["name"=>"isOpuSwm"])
//                  ->orWhere(["roles.name"=>"isAdminAf"])->orWhere(["name"=>"isOpuAf"])
//                  ->orWhere(["roles.name"=>"isAdminIdaman"])->orWhere(["name"=>"isOpuIdaman"])
//                  ->get();


//       }
//       elseif ($this->isSwcorp){
//         $users = RoleUser::with('user')->join ('roles','roles.id', '=', 'role_user.role_id')
//                  ->distinct('user_id')
//                  ->select('user_id')
//                  ->where(["roles.name"=>"isSwcorp"])
//                  ->get();
//       }
//       elseif($this->isAdminSwm){
//         $users = RoleUser::with('user')->join ('roles','roles.id', '=', 'role_user.role_id')
//                  ->distinct('user_id')
//                  ->select('user_id')
//                  ->where(["roles.name"=>"isAdminSwm"])->orWhere(["name"=>"isOpuSwm"])
//                  ->get();
//       }
//       elseif($this->isAdminAf){
//         $users = RoleUser::with('user')->join ('roles','roles.id', '=', 'role_user.role_id')
//                  ->distinct('user_id')
//                  ->select('user_id')
//                   ->where(["roles.name"=>"isAdminAf"])->orWhere(["name"=>"isOpuAf"])
//                  ->get();
//       }
//       elseif($this->isAdminIdaman){
//         $users = RoleUser::with('user')->join ('roles','roles.id', '=', 'role_user.role_id')
//                  ->distinct('user_id')
//                  ->select('user_id')
//                  ->where(["roles.name"=>"isAdminIdaman"])->orWhere(["name"=>"isOpuIdaman"])
//                  ->get();
//       }
//       else {
//         return redirect('/home');
//       }


//       $UserRoles = array();
//       // dd($users->toA5rray());
//       foreach ($users as $user) {

//             $arrUser =Users::find($user->user->id);
//             $i= 0;
//             $arrRoles= array();
//             foreach ($arrUser->roles as $role) {
//                 $arrRoles[$i]= $role->name;
//                 $i=$i+1;
//             }
//             $UserRoles[$user->user->id] = implode(',',$arrRoles);
//       }

//       // foreach ($users as $user) {
//       //     $arrUser =Users::find($user->id);
//       //     $i= 0;
//       //     $arrRoles= array();
//       //     foreach ($arrUser->roles as $role) {
//       //         $arrRoles[$i]= $role->name;
//       //         $i=$i+1;
//       //     }
//       //     $UserRoles[$user->id] = implode(',',$arrRoles);
//       // }



//       //  return json_encode ($UserRoles);

//       return view('users.index',
//            [

//              'name' => Auth::user()->name,
//              'UserRoles'=> $UserRoles,
//              'users' => $users,
//              'isAdmin'=>$this->isAdmin,
//              'isSwcorp'=>$this->isSwcorp,
//              'isAdminSwm'=>$this->isAdminSwm,
//              'isOpuSwm'=>$this->isOpuSwm,
//              'isAdminAf' =>$this->isAdminAf,
//              'isOpuAf' =>$this->isOpuAf,
//              'isAdminIdaman' =>$this->isAdminIdaman,
//              'isOpuIdaman' =>$this->isOpuIdaman
//            ]
//           );
//     }




//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return Response
//      */
//     public function create(Request $request)
//     {
//       if(Auth::check() && ( Auth::user()->verified != '1')){
//         return redirect('/home');
//       }
//       $this->checkAuthRoles($request);

//       $request->user()->authorizeRoles(['isAdmin','isSwcorp','isAdminSwm','isAdminAf','isAdminIdaman']);

//         return view('users.create',
//                  [
//                    'name' => Auth::user()->name,
//                    'isAdmin'=>$this->isAdmin,
//                    'isSwcorp'=>$this->isSwcorp,
//                    'isAdminSwm'=>$this->isAdminSwm,
//                    'isOpuSwm'=>$this->isOpuSwm,
//                    'isAdminAf' =>$this->isAdminAf,
//                    'isOpuAf' =>$this->isOpuAf,
//                    'isAdminIdaman' =>$this->isAdminIdaman,
//                    'isOpuIdaman' =>$this->isOpuIdaman
//                  ]
//                 );
//       //  return abort(401, 'This action is unauthorized.');
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @return Response
//      */
//     public function store(Request $request)
//     {
//       //return abort(401, 'This action is unauthorized.');
//       $rules = array(
//           'name'  => 'required',
//           'email'      => 'required|email|unique:users',
//           'password' => 'confirmed'
//       );
//       $validator = Validator::make($request->all(), $rules);
//       //
//       // // process the login
//       if ($validator->fails()) {
//           return Redirect::to('users/create')
//               ->withErrors($validator)
//               ->withInput($request->password);
//       } else {

//        $user  = new Users;

//        if ( ! $request->password == '')
//        {
//          if ($request->password ===$request->password_confirmation){
//            $user->password = bcrypt($request->password);
//          }
//        }

//        $user->name       = $request->name;
//        $user->email      = $request->email;
//        $user->staff_id       = $request->staff_id;
//        $user->hp_no       = $request->hp_no;
//        $user->email_token       = base64_encode($request->email);

//        if ( $request->verified == "1" ){
//          $user->verified       = 1;
//        }

//        if ($request->verified=="0"){
//          $user->verified       =0;
//        }

//        $currentuserid = Auth::user()->id;

//        if ($request->isAdmin){
//          if(!$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if ($request->isSwcorp){
//          if(!$request->user()->hasRole('isSwcorp') && !$request->user()->hasRole('isAdmin') ){
//            return back();
//          }
//        }
//        if ($request->isAdminSwm){
//          if(!$request->user()->hasRole('isAdminSwm') && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if ($request->isAdminAf){
//          if(!$request->user()->hasRole('isAdminAf') && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if ($request->isAdminIdaman){
//          if(!$request->user()->hasRole('isAdminIdaman') && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if ($request->isOpuSwm){
//          if(!$request->user()->hasRole('isAdminSwm') && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if ($request->isOpuAf){
//          if(!$request->user()->hasRole('isAdminAf') && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if ($request->isOpuIdaman){
//          if(!$request->user()->hasRole('isAdminIdaman') && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        $user->save();

//       if ($request->isAdmin){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isAdmin')->first());
//       }
//         if ($request->isSwcorp){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isSwcorp')->first());
//         }
//         if ($request->isAdminSwm){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isAdminSwm')->first());
//         }
//         if ($request->isAdminAf){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isAdminAf')->first());
//         }
//         if ($request->isAdminIdaman){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isAdminIdaman')->first());
//         }
//         if ($request->isOpuSwm){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isOpuSwm')->first());
//         }
//         if ($request->isOpuAf){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isOpuAf')->first());
//         }
//         if ($request->isOpuIdaman){
//           $user
//                 ->roles()
//                 ->attach(Roles::where('name', 'isOpuIdaman')->first());
//         }

//         // dispatch(new SendVerificationEmail($user));

//         Session::flash('message', 'Successfully user  created!');
//         return Redirect::to('users');

//     }
// }
//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return Response
//      */
//     public function show($id)
//     {
//       // // get the nerd
//       // $lead = Lead::find($id);
//       //
//       // // show the view and pass the nerd to it
//       // // return View::make('leads.show')
//       // //     ->with('nerd', $nerd);
//       // return view('leads.show',
//       //          [
//       //            'lead' => $lead,
//       //            'isStaff'=>$this->isStaff,
//       //            'isSeller'=>$this->isSeller,
//       //            'isAdmin'=>$this->isAdmin
//       //          ]
//       //         );
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return Response
//      */
//     public function edit(Request $request,$id)
//     {

//       if(Auth::check() && ( Auth::user()->verified != '1')){
//         return redirect('/home');
//       }
//       $this->checkAuthRoles($request);

//       $request->user()->authorizeRoles(['isAdmin','isSwcorp','isAdminSwm','isAdminAf','isAdminIdaman']);

//       $user = Users::find($id);

//       $arrRoles = array();
//       $template ="admin";

//       $i=0;
//       foreach ($user->roles as $role) {
//           $arrRoles[$i]= $role->name;
//           $i=$i+1;
//       }

//     foreach ($arrRoles as $role) {
//       if($role=="isAdmin"){
//         if(!$request->user()->hasRole($role)){
//           return back();
//         }
//       }
//       if($role=="isSwcorp"){
//         if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin') ){
//           return back();
//         }
//       }
//       if($role=="isAdminSwm"){
//         if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin')){
//           return back();
//         }
//       }
//       if($role=="isAdminAf"){
//         if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin')){
//           return back();
//         }
//       }
//       if($role=="isAdminIdaman"){
//         if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin')){
//           return back();
//         }
//       }
//       if($role=="isOpuAf"){
//         if(!$request->user()->hasRole('isAdmin') && !$request->user()->hasRole('isAdminAf')){
//           return back();
//         }
//       }
//       if($role=="isOpuSwm"){
//         if(!$request->user()->hasRole('isAdmin') && !$request->user()->hasRole('isAdminSwm')){
//           return back();
//         }
//       }
//       if($role=="isOpuIdaman"){
//         if(!$request->user()->hasRole('isAdmin') && !$request->user()->hasRole('isAdminIdaman')){
//           return back();
//         }
//       }
//     }


//     if ($this->isAdmin || $this->isSwcorp){
//       $schemes = Schemes::all();
//     }

//     elseif($this->isAdminSwm || $this->isOpuSwm){
//       $schemes = Schemes::join('pbt', 'scheme.pbtId', '=', 'pbt.id')->join('state','pbt.stateId', '=', 'state.id')
//       ->select('scheme.*')
//       ->where(['state.concessionId' => 2])
//       ->get();
//     }

//     elseif($this->isAdminAf || $this->isOpuAf){
//       $schemes = Schemes::join('pbt', 'scheme.pbtId', '=', 'pbt.id')->join('state','pbt.stateId', '=', 'state.id')
//       ->select('scheme.*')
//       ->where(['state.concessionId' => 1])
//       ->get();

//     }

//     elseif($this->isAdminIdaman || $this->isOpuIdaman){
//       $schemes = Schemes::join('pbt', 'scheme.pbtId', '=', 'pbt.id')->join('state','pbt.stateId', '=', 'state.id')
//       ->select('scheme.*')
//       ->where(['state.concessionId' => 3])
//       ->get();

//     }
//     else {
//       return back();
//     }
//     $roles_schemes_user = RolesSchemes::where('user_id',$user->id)->join('scheme','role_scheme.scheme_id', '=', 'scheme.id')->select('scheme.id')->pluck('scheme.id');
//       // dd($arrRoles);
//       return view('users.edit.'.$template,
//                [
//                  'name' => Auth::user()->name,
//                  'arrRoles'=> $arrRoles,
//                  'user' => $user,
//                  'isAdmin'=>$this->isAdmin,
//                  'isSwcorp'=>$this->isSwcorp,
//                  'isAdminSwm'=>$this->isAdminSwm,
//                  'isOpuSwm'=>$this->isOpuSwm,
//                  'isAdminAf' =>$this->isAdminAf,
//                  'isOpuAf' =>$this->isOpuAf,
//                  'isAdminIdaman' =>$this->isAdminIdaman,
//                  'isOpuIdaman' =>$this->isOpuIdaman,
//                  'roles_schemes_user' =>$roles_schemes_user,
//                  'schemes'=>$schemes
//                ]
//               );

//     }


//     public function update(Request $request,$id)
//    {
//      $rules = array(
//          'name'  => 'required',
//          // 'email'      => 'unique:users,email,'.$id.'|required|email'
//          'password' => 'confirmed'
//      );
//      $validator = Validator::make($request->all(), $rules);
//      //
//      // // process the login
//      if ($validator->fails()) {
//          return Redirect::to('users/' . $id . '/edit')
//              ->withErrors($validator)
//              ->withInput($request->except('password'));
//      } else {
//        $user = Users::find($id);

//        $arrRoles = array();

//        $i=0;
//        foreach ($user->roles as $role) {
//            $arrRoles[$i]= $role->name;
//            $i=$i+1;
//        }

//      foreach ($arrRoles as $role) {
//        if($role=="isAdmin"){
//          if(!$request->user()->hasRole($role)){
//            return back();
//          }
//        }
//        if($role=="isSwcorp"){
//          if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin') ){
//            return back();
//          }
//        }
//        if($role=="isAdminSwm"){
//          if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if($role=="isAdminAf"){
//          if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if($role=="isAdminIdaman"){
//          if(!$request->user()->hasRole($role) && !$request->user()->hasRole('isAdmin')){
//            return back();
//          }
//        }
//        if($role=="isOpuAf"){
//          if(!$request->user()->hasRole('isAdmin') && !$request->user()->hasRole('isAdminAf')){
//            return back();
//          }
//        }
//        if($role=="isOpuSwm"){
//          if(!$request->user()->hasRole('isAdmin') && !$request->user()->hasRole('isAdminSwm')){
//            return back();
//          }
//        }
//        if($role=="isOpuIdaman"){
//          if(!$request->user()->hasRole('isAdmin') && !$request->user()->hasRole('isAdminIdaman')){
//            return back();
//          }
//        }
//      }

//        $user->name       = $request->name;
//        $user->staff_id       = $request->staff_id;
//        $user->hp_no       = $request->hp_no;
//        if ( ! $request->password == '')
//        {
//          if ($request->password === $request->password_confirmation){
//            $user->password = bcrypt($request->password);
//          }
//        }

//        if ($request->verified==1){
//          $user->verified       = 1;
//        }

//        if ($request->verified==0){
//          $user->verified       = 0;
//        }


//        $currentuserid = Auth::user()->id;
//        $i=0;
//        // foreach ($user->roles as $role) {
//        //     $arrRoles[$i]= $role->name;
//        //     $i=$i+1;
//        // }

//        $user->save();

//        if ($request->isAdmin && !$user->hasRole("isAdmin")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isAdmin')->first());
//        }

//        if (!$request->isAdmin && $user->hasRole("isAdmin")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isAdmin')->first());
//        }

//        if ($request->isSwcorp && !$user->hasRole("isSwcorp")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isSwcorp')->first());
//        }

//        if (!$request->isSwcorp && $user->hasRole("isSwcorp")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isSwcorp')->first());
//        }

//        if ($request->isAdminSwm && !$user->hasRole("isAdminSwm")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isAdminSwm')->first());
//        }

//        if (!$request->isAdminSwm && $user->hasRole("isAdminSwm")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isAdminSwm')->first());
//        }
//        if ($request->isAdminAf && !$user->hasRole("isAdminAf")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isAdminAf')->first());
//        }

//        if (!$request->isAdminAf && $user->hasRole("isAdminAf")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isAdminAf')->first());
//        }
//        if ($request->isAdminIdaman && !$user->hasRole("isAdminIdaman")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isAdminIdaman')->first());
//        }

//        if (!$request->isAdminIdaman && $user->hasRole("isAdminIdaman")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isAdminIdaman')->first());
//        }
//        if ($request->isOpuSwm && !$user->hasRole("isOpuSwm")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isOpuSwm')->first());
//        }

//        if (!$request->isOpuSwm && $user->hasRole("isOpuSwm")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isOpuSwm')->first());
//        }

//        if ($request->isOpuAf && !$user->hasRole("isOpuAf")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isOpuAf')->first());
//        }

//        if (!$request->isOpuAf && $user->hasRole("isOpuAf")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isOpuAf')->first());
//        }
//        if ($request->isOpuIdaman && !$user->hasRole("isOpuIdaman")){
//          $user
//                ->roles()
//                ->attach(Roles::where('name', 'isOpuIdaman')->first());
//        }

//        if (!$request->isOpuIdaman && $user->hasRole("isOpuIdaman")){
//          $user
//                ->roles()
//                ->detach(Roles::where('name', 'isOpuIdaman')->first());
//        }


//        $roles_scheme = RolesSchemes::where('user_id',$user->id)->delete();

//        if (is_array($request->roles_schemes_user)){
//          foreach ($request->roles_schemes_user as $roles_scheme) {
//            $roles_schemes = RolesSchemes::where('scheme_id',$roles_scheme)->where('user_id',$user->id)->first();
//            if(is_null($roles_schemes)){
//              $roles_schemes = new RolesSchemes;
//              $roles_schemes->user_id = $user->id;
//              $roles_schemes->scheme_id = $roles_scheme;
//              $roles_schemes->save();
//            }
//          }
//        }

//        Session::flash('message', 'Successfully updated user details!');
//        return Redirect::to('users/' . $id . '/edit');

//      }


//    }
//    /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return Response
//      */
//     public function destroy($id)
//     {
//         // delete
//         $user = Users::find($id);

//         if ($user->hasRole("isAdmin")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isAdmin')->first());
//         }
//         if ($user->hasRole("isSwcorp")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isSwcorp')->first());
//         }
//         if ($user->hasRole("isAdminSwm")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isAdminSwm')->first());
//         }
//         if ($user->hasRole("isAdminAf")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isAdminAf')->first());
//         }
//         if ($user->hasRole("isAdminIdaman")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isAdminIdaman')->first());
//         }
//         if ($user->hasRole("isOpuSwm")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isOpuSwm')->first());
//         }
//         if ($user->hasRole("isOpuAf")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isOpuAf')->first());
//         }
//         if ($user->hasRole("isOpuIdaman")){
//           $user
//                 ->roles()
//                 ->detach(Roles::where('name', 'isOpuIdaman')->first());
//         }

//         $user->delete();

//         // redirect
//         Session::flash('message', 'Successfully deleted the user!');
//         return Redirect::to('users');
//     }
//     public function checkAuthRoles(Request $request){

//       $this->StrRole ="";
//       if ($request->user()->hasRole("isAdmin")){
//         $this->isAdmin = true ;
//         $this->StrRole ="Admin";

//       }
//       if ($request->user()->hasRole("isSwcorp")){
//         $this->isSwcorp = true ;
//         $this->StrRole ="SWcorp Admin";
//       }

//       if ($request->user()->hasRole("isAdminSwm")){
//               $this->isAdminSwm = true ;
//               $this->StrRole ="SWM Admin";
//       }

//       if ($request->user()->hasRole("isAdminAf")){
//               $this->isAdminAf = true ;
//               $this->StrRole ="AF Admin";
//       }

//       if ($request->user()->hasRole("isAdminIdaman")){
//               $this->isAdminIdaman = true ;
//               $this->StrRole ="E-Idaman Admin";
//       }

//       if ($request->user()->hasRole("isOpuSwm")){
//               $this->isOpuSwm = true ;
//               $this->StrRole ="SWM OPU";
//       }

//       if ($request->user()->hasRole("isOpuAf")){
//               $this->isOpuAf = true ;
//               $this->StrRole ="AF OPU";
//       }

//       if ($request->user()->hasRole("isOpuIdaman")){
//               $this->isOpuIdaman = true ;
//               $this->StrRole ="Idaman OPU";
//       }

//     }

// }
