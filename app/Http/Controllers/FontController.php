<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Publicacion;
use App\revista;
use DB;
use Auth; 
use Laracasts\Flash\Flash;
class FontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=DB::table('publicaciones')->where('importante','=','1')->orderBy('id', 'DESC')->paginate(7);
    	$publicacion=publicacion::orderBy('id', 'DESC')->paginate(3);
    	$publicacion->each(function ($publicacion){
    		$publicacion->images;
    	});

         
            if (Auth::user()->type == 'DT') {
                return view('DT.iniDT')
                     ->with('publicacion', $publicacion)->with('slider', $slider);
                 }elseif (Auth::user()->type == 'admin') {
                  return view('admin.users.iniadmin')
                     ->with('publicacion', $publicacion)->with('slider', $slider);
                }elseif (Auth::user()->type == 'inovacion') {
                  return view('inovacion.iniinovacion')
                     ->with('publicacion', $publicacion)->with('slider', $slider);
                }elseif (Auth::user()->type == 'difucion') {
                    return view('difucion.inidifucion')
                     ->with('publicacion', $publicacion)->with('slider', $slider);
                }elseif (Auth::user()->type == 'cecodic') {
                  return view('cecodic.inicecodic')
                     ->with('publicacion', $publicacion)->with('slider', $slider);
                }elseif (Auth::user()->type == 'transparencia') {
                  return view('transparencia.initransparencia')
                     ->with('publicacion', $publicacion)->with('slider', $slider);
                }else {
                 
                }
        
        
    }
     public function welcom()
    {
      $slider=DB::table('publicaciones')->where('importante','=','1')->orderBy('id', 'DESC')->paginate(7);
      $publicacion=Publicacion::orderBy('id', 'DESC')->paginate(3);
      $publicacion->each(function ($publicacion){
        $publicacion->images;
    });

       return view('welcome')
            ->with('publicacion', $publicacion)->with('slider', $slider);
    }


    public function secciones(){

        $publicacionCo= DB::table('publicaciones')->where('seccion','=','principal')->orderBy('id', 'DESC')->get();
       

        return view('publicaciones/cozcytp')
            ->with('publicacion', $publicacionCo);


    }

    public function seccionInnova(){

        $publicacion= DB::table('publicaciones')->where('seccion', '=', 'FOMIX')->orWhere('seccion', '=', 'PEI')->orderBy('id', 'DESC')->get();
         return view('publicaciones/inovacionp')
            ->with('publicacion', $publicacion);


    }
    public function seccionDifu(){

        $publicacion= DB::table('publicaciones')->where('seccion','=','EEK')->orderBy('id', 'DESC')->get();
              
        return view('publicaciones/difucionp')
            ->with('publicacion', $publicacion);


    }

    public function seccionBeca(){

        $publicacion= DB::table('publicaciones')->where('seccion','=','Becas')->orderBy('id', 'DESC')->get();
              
        return view('publicaciones/becasp')
            ->with('publicacion', $publicacion);


    }

    public function seccionCecodic(){

        $publicacion= DB::table('publicaciones')->where('seccion', '=', 'Instalaciones')->orWhere('seccion', '=', 'Servicios')->orWhere('seccion', '=', 'Galeria')->orderBy('id', 'DESC')->get();
               



        return view('publicaciones/cecodicp')
            ->with('publicacion', $publicacion);


    }

    public function seccionTrans(){

        $publicacion= DB::table('publicaciones')->where('seccion','=','Transparencia')->orderBy('id', 'DESC')->get();
              
        return view('publicaciones/transparenciap')
            ->with('publicacion', $publicacion);


    }
    public function revista(){

           

            $publicacion = DB::table('revista')
                ->orderBy('id', 'desc')
                ->get();
                  
            return view('ekk')
                ->with('publicacion', $publicacion);


        }

    public function destroy($id)
    {

        $publicacion = publicacion::find($id);
        $publicacion->delete();
        Flash::success('la publicacion "'.$publicacion->title .'" a sido borrada!');
        


         if (Auth::user()->type == 'DT') {
                
                return redirect()-> to('publicacionBecas');
                    
                 }elseif (Auth::user()->type == 'admin') {
                 return redirect()-> to('publicacionesCozcyt');

                }elseif (Auth::user()->type == 'inovacion') {
                  return redirect()-> to('publicacioninova');

                }elseif (Auth::user()->type == 'difucion') {
                     return redirect()-> to('publicacionDif');

                }elseif (Auth::user()->type == 'cecodic') {
                  return redirect()-> to('publicacionCecodic');

                }elseif (Auth::user()->type == 'transparencia') {
                   return redirect()-> to('publicacionTrans');
                }else {
                 
                }


    }


}
    