<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            if(Auth::user()->type =='admin'){
                return redirect('admin/administrador');
            }elseif(Auth::user()->type =='DT'){
                return redirect('DT/DT');
            }elseif(Auth::user()->type =='inovacion'){
                return redirect('inovacion/inovacion');
            }elseif(Auth::user()->type =='difucion'){
                return redirect('difucion/difucion');
            }elseif(Auth::user()->type =='cecodic'){
                return redirect('cecodic/cecodic');
            }elseif(Auth::user()->type =='transparencia'){
                return redirect('transparencia/transparencia');
            }else{
                return redirect('login');
            }
            
        }

        return $next($request);
    }
}
