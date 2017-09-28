<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\imagenes;
use App\revista;
use DB;
class imagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $imagenes = DB::table('imagenes')->where('seccion', '=', 'admin')->get();
       return view('admin.users.vistaad')
       ->with('imagenes',$imagenes);
    }
    public function dt()
    {
       $imagenes = DB::table('imagenes')->where('seccion', '=', 'DT')->get();
       return view('DT.pubDT')
       ->with('imagenes',$imagenes);
    }
    public function inovacion()
    {
       $imagenes = DB::table('imagenes')->where('seccion', '=', 'inovacion')->get();
       return view('inovacion.pubinovacion')
       ->with('imagenes',$imagenes);
    }
    public function difucion()
    {
      $imagenes = DB::table('imagenes')->where('seccion', '=', 'difucion')->get();
       return view('difucion.pubdifucion')
       ->with('imagenes',$imagenes);
    }
    public function cecodic()
    {
       $imagenes = DB::table('imagenes')->where('seccion', '=', 'cecodic')->get();
       return view('cecodic.pubcecodic')
       ->with('imagenes',$imagenes);
    }
    public function transparencia()
    {
       $imagenes = DB::table('imagenes')->where('seccion', '=', 'transparencia')->get();
       return view('transparencia.pubtransparencia')
       ->with('imagenes',$imagenes);
    }

     public function guarda(Request $request){
      $nom = $request->file->getClientOriginalName() ;
       $datosPub = array('name'=>$request->name_autor,'title'=>$request->name_title,'imagen'=>$nom,'url'=>$request->URL);
       
         $Publica = new revista ($datosPub);

         $file = $request->file('file');
            //obtenemos el nombre del archivo
         $nombre = $file->getClientOriginalName() ;
            //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

       $estado= $Publica->save();

       if ($estado == true) {
                flash("Se ha guardado la publicacion", "success");
                
            }else {
                flash("Error al guardar la publicacion", "danger");

            }
            return Redirect::to('difucion/revista'); 
      
     }
}
