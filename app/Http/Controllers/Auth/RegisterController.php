<?php

namespace App\Http\Controllers\Auth;
use Carbon\Carbon;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Storage;

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

    public function index()
    {
        return view('Auth.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    { //dd($data);
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
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            //'imagen' => ($data['imagen'] == null)? $data=null : $data['imagen']->getClientOriginalName()

        ]);
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {

      $rq= $request->all();
      $inputs = ($request['imagen'] == null) ? $request['imagen'] : $request['imagen']->getClientOriginalName();
      $rq['imagen']=$inputs;
      $user->imagen = $inputs;
      $this->UploadAvtar($request["imagen"]);
      $user->save();

    }

    public function UploadAvtar($imagen){

            $dt = Carbon::parse(Carbon::now());
            $destinationPath = public_path(). '/img/avatars/';
            if ($imagen != null) {
              $imagen->move($destinationPath, $imagen->getClientOriginalName());
            }else {
              return "";
            }





    }
}
