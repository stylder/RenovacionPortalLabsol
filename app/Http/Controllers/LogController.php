<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use App\User;
use Auth;
use Laracasts\Flash\Flash;


class LogController extends Controller{

    public function logeo(LoginRequest $request){
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        
            $tipoUsuario = Auth::user()->type;
            
            if ($tipoUsuario == 'admin'){
                return Redirect::to('admin/administrador');      
            }elseif ($tipoUsuario == 'DT'){
                return Redirect::to('DT/DT');
            }elseif ($tipoUsuario == 'inovacion'){
                return Redirect::to('inovacion/inovacion');
            }elseif ($tipoUsuario == 'difucion'){
                return Redirect::to('difucion/difucion');
            }elseif ($tipoUsuario == 'cecodic'){
                return Redirect::to('cecodic/cecodic');
            }elseif ($tipoUsuario == 'transparencia'){
                return Redirect::to('transparencia/transparencia');
            }
        }
        Session::flash('message-error','Datos incorrectos');
        return redirect::to('login');

    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect::to('/');
    }
}