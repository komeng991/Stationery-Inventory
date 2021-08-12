<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\Roles;
use App\Models\RolesUsers;
use App\Models\RolesSchemes;
use App\Models\Schemes;
use App\Models\Concession;
use App\Models\States;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(Request $request)
    {
      $schemes= Schemes::all();
      $rolesUsers= RolesUsers::all();
      $concessions = Concession::where('status',1)->get();
      //dd($rolesUsers);

      return view('auth.register',
      [
        'schemes' => $schemes,
        'rolesUsers' => $rolesUsers,
        'concessions' => $concessions,

      ]);

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

     public function store(Request $request)
     {

     $rules = array(
         'name'  => 'required',
         'email'      => 'required|email|unique:users',
         'password' => 'confirmed',
         'terms'  => 'required'
     );

     $validator = Validator::make(Input::all(), $rules);

     if ($validator->fails()) {
         return Redirect::to('register')
             ->withErrors($validator)
             ->withInput(Input::except('password'));
     } else {

        $user  = new Users;

       if ( ! Input::get('password') == '')
       {
         if (Input::get('password') === Input::get('password_confirmation')){
           $user->password = bcrypt(Input::get('password'));
         }
       }


       $user->name       = Input::get('name');
       $user->email      = Input::get('email');
       $user->staff_id       = Input::get('staff_id');
       $user->email_token       = base64_encode(Input::get('email'));
       $user->concession_id       = Input::get('concession_id');
       $user->state_id       = Input::get('state_id');
       $user->save();

       $rolesUsers= RolesUsers::all();

       foreach ($rolesUsers as $key) {
         if (Input::get('role_id') == $key->id){
           $user
                 ->roles()
                 ->attach(Roles::where('name', $key->name)->first());
         }
       }
     }

        if (is_array(Input::get('scheme_id')))
      {

        foreach (Input::get('scheme_id') as $schemeId) {

          $user_role_scheme = new RolesSchemes;
          $user_role_scheme->user_id       = $user->id;
          $user_role_scheme->scheme_id       = $schemeId;
          $user_role_scheme->save();
        }
      }

      Session::flash('message', 'Pendaftaran berjaya !');
      return Redirect::to('login');

     }


    protected function create(array $data)
    {
      // echo json_encode($data);exit;
      //  $user = New User;
      // dd($data);

        $user = User::create([
            'name' => $data['name'],
            'staff_id' => $data['staff_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phoneno' =>  $data['phoneno'],
			      'verified' => 1,
            'registration_type' =>'role_marketeer',
            'email_token' => base64_encode($data['email'])
        ]);

        $user->verified = 1;
        $user->phoneno = $data['phoneno'];
        $user->document_submission = 'approve';
        $user->save();
        /*if ($data['registration_type']=='role_lawyer'){
          $user
                ->roles()
                ->attach(Roles::where('name', 'lawyer')->first());
        }
        if ($data['registration_type']=='role_lms'){
          $user
                ->roles()
                ->attach(Roles::where('name', 'lms')->first());
        }*/

          $user
                ->roles()
                ->attach(Roles::where('name', 'marketeer')->first());

        return $user;
        //echo json_encode($user); exit;

    }

    /**
    * Handle a registration request for the application.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
  public function register(Request $request)
  {
      $this->validator($request->all())->validate();
      event(new Registered($user = $this->create($request->all())));
      // dispatch(new SendVerificationEmail($user));
      // dd($user->id);
      Auth::loginUsingId($user->id);
      return Redirect::to('penyelia/');
      // return view('email.verification');
  }

  /**
  * Handle a registration request for the application.
  *
  * @param $token
  * @return \Illuminate\Http\Response
  */
  public function verify($token)
  {
    $user = User::where('email_token',$token)->first();
    $user->verified = 1;
    if($user->save()){
      return view('email.emailconfirm',['user'=>$user]);
    }
  }

  public function getStateList(Request $request)
  {
      $states = DB::table("state")
      ->where("concessionId",$request->concessionID)
      ->pluck("shortName","id");
      return response()->json($states);

  }

  public function getPbtList(Request $request)
 {
     $pbts = DB::table("pbt")
     ->where("stateId",$request->stateID)
     ->pluck("pbtName","id");
     return response()->json($pbts);
 }

 public function getSchemeList(Request $request)
 {
   $selectedPbt = $request->pbtID;
    $decode = json_decode($selectedPbt, true);

   foreach ($decode as $value) {
     $schemes = DB::table("scheme")
     ->where("pbtId",$value)
     ->select("schemeName","id")
     ->get();

     foreach ($schemes as $value) {
       $listofschemes[] =[
           'schemeName'      =>$value->schemeName,
           'id'     =>$value->id
       ];
     }
   }

   return response()->json($listofschemes);
 }
}
