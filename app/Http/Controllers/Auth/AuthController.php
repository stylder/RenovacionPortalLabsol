<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use laracast\flash\flash;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
        protected $redirectPath = 'admin/auth/login';
        protected $loginPath = 'admin.users.iniadmin';
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected $redirectTo = 'login';
    protected function resetPassword($user, $password){
        $user->password = $password;
        $user->save();
        Auth::login($user);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
           
    }
 
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function getLogin(){
        return view('admin.auth.login');
        /*if(Auth::check()){
            $tipoUsuario = Auth::user()->type;
            
            if ($tipoUsuario == 'admin'){
                return Redirect::to('admin/administrador');      
            }elseif ($tipoUsuario == 'DT'){
                return Redirect::to('coordinador/index');
            }elseif ($tipoUsuario == 3){
                return Redirect::to('admin/periodo');
            }
        }
        Session::flash('message-error','Datos incorrectos');
        return redirect::to('/');*/

    }

}
