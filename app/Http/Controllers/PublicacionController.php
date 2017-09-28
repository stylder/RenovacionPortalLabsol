<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\publicacionRequest;
use App\Http\Controllers\Controller;
use App\Publicacion;
use Auth;
use Carbon\Carbon;
use Laracasts\Flash\Flash;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($fecha, $titulo)
    {
       $url=$fecha.'/'.$titulo;
       $publicacion= DB::table('publicaciones')->where('url','=',$url)->get();

       return view('prueba')
            ->with('publicacion', $publicacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            }

    public function publica()
     {

            $publicacion =Publicacion::orderBy('id','ASC')->paginate(5);

            
            $tipoUsuario = Auth::user()->type;

            
            if ($tipoUsuario == 'admin'){
                 $publicacion= DB::table('publicaciones')->paginate(5);
                    return view('admin.users.publica')->with('publicacion', $publicacion);


            }elseif ($tipoUsuario == 'DT'){
                 $publicacion= DB::table('publicaciones')->where('seccion','=', 'Becas')->paginate(5);
                    return view('DT.publica')->with('publicacion', $publicacion);

            }elseif ($tipoUsuario == 'inovacion'){
                 $publicacion= DB::table('publicaciones')->where('seccion','=','FOMIX')->orwhere('seccion','=','PEI')->paginate(5);
                    return view('inovacion.publica')->with('publicacion', $publicacion);

            }elseif ($tipoUsuario == 'difucion'){
                    $publicacion= DB::table('publicaciones')->where('seccion','=', 'EEK')->paginate(5);
                    return view('difucion.publica')->with('publicacion', $publicacion);

            }elseif ($tipoUsuario == 'cecodic'){
                    $publicacion= DB::table('publicaciones')->where('seccion','=','Servicios')
                    ->orwhere('seccion','=','Instalaciones')
                    ->orwhere('seccion','=','Instalaciones')->paginate(5);
                    
                    return view('cecodic.publica')->with('publicacion', $publicacion);

            }elseif ($tipoUsuario == 'transparencia'){
                $publicacion= DB::table('publicaciones')->where('seccion','=', 'Transparencia')->paginate(5);
                return view('transparencia.publica')->with('publicacion', $publicacion);
            }
     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(publicacionRequest $request)
    {   

        


        $nom = $request->file->getClientOriginalName() ;
        $fecha=Carbon::now();
        $fecha=$fecha->format('d-m-Y');
        $url=$fecha . '/' . $request-> article_titulo;
        $datosPub = array('name'=>$request->article_autor,'title'=>$request->article_titulo,'imagen'=>$nom,'content'=>$request->contenido,'url'=>$url,'seccion'=>$request->seccion,'importante'=>$request->importante);
         $Publica = new publicacion ($datosPub);

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
            

             $tipoUsuario = Auth::user()->type;
            
            if ($tipoUsuario == 'admin'){
                return Redirect::to('admin/publicacion');      
            }elseif ($tipoUsuario == 'DT'){
                return Redirect::to('DT/publicacion');
            }elseif ($tipoUsuario == 'inovacion'){
                return Redirect::to('inovacion/publicacion');
            }elseif ($tipoUsuario == 'difucion'){
                return Redirect::to('difucion/publicacion');
            }elseif ($tipoUsuario == 'cecodic'){
                return Redirect::to('cecodic/publicacion');
            }elseif ($tipoUsuario == 'transparencia'){
                return Redirect::to('transparencia/publicacion');
            }
            return redirect()->to('/');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::find($id);
        
        $imagenes = DB::table('imagenes')->where('seccion', '=', 'admin')->get();
        
       


             $tipoUsuario = Auth::user()->type;
            
            if ($tipoUsuario == 'admin'){
                return view('admin.users.editpub')->with('publicacion',$publicacion)->with('imagenes', $imagenes);     
            }elseif ($tipoUsuario == 'DT'){
                 return view('DT.editpub')->with('publicacion',$publicacion)->with('imagenes', $imagenes); 
            }elseif ($tipoUsuario == 'inovacion'){
                return view('inovacion.editpub')->with('publicacion',$publicacion)->with('imagenes', $imagenes); 
            }elseif ($tipoUsuario == 'difucion'){
                return view('difucion.editpub')->with('publicacion',$publicacion)->with('imagenes', $imagenes); 
            }elseif ($tipoUsuario == 'cecodic'){
                 return view('cecodic.editpub')->with('publicacion',$publicacion)->with('imagenes', $imagenes); 
            }elseif ($tipoUsuario == 'transparencia'){
                 return view('transparencia.editpub')->with('publicacion',$publicacion)->with('imagenes', $imagenes); 
            }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $file = $request->file('file');
            //obtenemos el nombre del archivo
         $nombre = $file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        $publicacion = Publicacion::find($id);
        $nom = $request->file->getClientOriginalName() ;
        $publicacion->name =$request->article_autor;
        $publicacion->title =$request->article_titulo;
        $publicacion->imagen =$nom;
        $publicacion->content =$request->contenido;
        $publicacion->importante =$request->importante;
        $publicacion->seccion =$request->seccion;
         
               $publicacion->save();
         flash::success('la publicaciòn ha sido editada!');
          $tipoUsuario = Auth::user()->type;
            
            if ($tipoUsuario == 'admin'){
                return Redirect::to('admin/publicaciones');      
            }elseif ($tipoUsuario == 'DT'){
                return Redirect::to('DT/publicaciones');
            }elseif ($tipoUsuario == 'inovacion'){
                return Redirect::to('inovacion/publicaciones');
            }elseif ($tipoUsuario == 'difucion'){
                return Redirect::to('difucion/publicaciones');
            }elseif ($tipoUsuario == 'cecodic'){
                return Redirect::to('cecodic/publicaciones');
            }elseif ($tipoUsuario == 'transparencia'){
                return Redirect::to('transparencia/publicaciones');
            }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $publicacion = Publicacion::find($id);
        $publicacion->delete();
        Flash::success('La publicacion "'.$publicacion->name .'" a sido borrada!');
        
         $tipoUsuario = Auth::user()->type;
            
            if ($tipoUsuario == 'admin'){
                return redirect('admin/publicaciones');      
            }elseif ($tipoUsuario == 'DT'){
                return Redirect::to('DT/publicaciones');
            }elseif ($tipoUsuario == 'inovacion'){
                return Redirect::to('inovacion/publicaciones');
            }elseif ($tipoUsuario == 'difucion'){
                return Redirect::to('difucion/publicaciones');
            }elseif ($tipoUsuario == 'cecodic'){
                return Redirect::to('cecodic/publicaciones');
            }elseif ($tipoUsuario == 'transparencia'){
                return Redirect::to('transparencia/publicaciones');
            }
    }
}
