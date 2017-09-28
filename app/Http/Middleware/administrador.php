<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;
class administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    public function handle($request, Closure $next){
        switch ($this->auth->user()->type){
            case 'admin':
               //Administrador
                //return redirect()->to('admin/index');
                break;
            case 'DT':
                //Desarrollo de talento
                return redirect()->to('DT/iniDT');
                break;
            case 'inovacion':
                //inovacion
                return redirect()->to('inovacion/iniinovacion');
                break;
             case 'difucion':
                //difucion
                return redirect()->to('difucion/inidifucion');
                break;
            case 'cecodic':
                //cecodic
                return redirect()->to('cecodic/inicecodic');
                break;
            case 'transparencia':
                //transparencia
                return redirect()->to('transparencia/initransparencia');
                break;
            default:
                 return redirect()->to('login');
                break;
        }

        return $next($request);
    }
}
