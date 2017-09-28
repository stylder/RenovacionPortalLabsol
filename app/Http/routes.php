 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', [
    'as' =>'welcome',
    'uses' => 'FontController@welcom'
]);
Route::get('Inicio', [
    'as' =>'welcome',
    'uses' => 'FontController@welcom'
]);

Route::get('publicacionesCozcyt', [
    'as' =>'cozcytp',
    'uses' => 'FontController@secciones'
]);
Route::get('publicacioninova', [
    'as' =>'inovacionp',
    'uses' => 'FontController@seccionInnova'
]);
Route::get('publicacionDif', [
    'as' =>'difucionp',
    'uses' => 'FontController@seccionDifu'
]);

Route::get('publicacionBecas', [
    'as' =>'becasp',
    'uses' => 'FontController@seccionBeca'
]);

Route::get('publicacionCecodic', [
    'as' =>'cecodicp',
    'uses' => 'FontController@seccionCecodic'
]);

Route::get('publicacionTrans', [
    'as' =>'transparenciap',
    'uses' => 'FontController@seccionTrans'
]);


Route::post('log' , 'LogController@logeo');


Route::get('logout', 'LogController@logout');


Route::get('QuienesSomos', function () {
    return view('qs');
});

Route::get('Directorio', function () {
    return view('directorio');
});
Route::get('Fomix', function () {
    return view('fomix');
});

Route::get('Ekk', [
    'as' =>'ekk',
    'uses' => 'FontController@revista'
]);
Route::get('Transparencia',function () {
    return view('transparencia');
});
Route::get('login', function () {
    return view('admin.auth.login');
})->middleware('guest');
Route::get('home', function () {
    return view('admin.auth.login');
})->middleware('guest');
Route::resource('file', 'FileController');

Route::get('publicaciones/{fecha}/{titulo}', 'PublicacionController@index');

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');



//------------------------------------------grupos de usuarios -----------------------------------------------

Route::group(['prefix'=>'admin','middleware'=>['auth','administrador']], function(){
    Route::resource('user', 'UsersController');
    Route::resource('publicacion','PublicacionController');
	Route::post('store',"UsersController@store");
    Route::get('crearusuario',"UsersController@create");
    
    Route::get('inicio', "UsersController@inicio");

    Route::get('subirimagen', function () {
    return view('admin.users.subirImagen');
    });
    Route::get('publicacion', [
    'uses' =>'imagenController@index',
    'as' =>'admin.users.vistaad',
    ]);
    Route::post('Pub/create', 'PublicacionController@store');
    
    Route::get('administrador', [
    'as' =>'admin.users.iniadmin',
    'uses' => 'FontController@index'
    ]);
     
    Route::get('usuarios', "UsersController@index");
    
    Route::get('users/{id}/destroy', [ 

    'uses' => "UsersController@destroy",
    'as' =>'admin.users.destroy'

    ]);
    Route::get('users/{id}/edit', [ 

    'uses' => "UsersController@edit",
    'as' =>'admin.users.edit'

    ]);
    
     Route::get('publicaciones', [
    'uses' =>'PublicacionController@publica',
    'as' =>'admin.users.publica',
    ]);
      Route::get('publicacion/{id}/edit', [ 

    'uses' => "PublicacionController@edit",
    'as' =>'admin.publicacion.editpubli'

    ]);
    Route::get('publicacio/{id}/destroy', [ 

    'uses' => "PublicacionController@destroy",
    'as' =>'admin.publicacion.destroy'

    ]);
});

Route::group(['prefix'=>'DT','middleware'=>['auth','DT']], function(){
    Route::resource('publicacion','PublicacionController');
    Route::get('publicacion', [
    'uses' =>'imagenController@dt',
    'as' =>'DT.pubDT',
    ]);
   
    Route::get('DT', [
    'as' =>'iniDT',
    'uses' => 'FontController@index'
    ]);
    Route::get('subirimagen', function () {
    return view('DT.subirImagenDT');
    });
    Route::post('Pub/create', 'PublicacionController@store');

    Route::get('publicaciones', [
        'uses' =>'PublicacionController@publica',
        'as' =>'DT.publicaciones.publica',
        ]);
        Route::get('publicacio/{id}/destroy', [ 

        'uses' => "PublicacionController@destroy",
        'as' =>'DT.publicacion.destroy'

        ]);
        Route::get('publicacion/{id}/edit', [ 

        'uses' => "PublicacionController@edit",
        'as' =>'DT.publicacion.editpub'

        ]);

});
Route::group(['prefix'=>'inovacion','middleware'=>['auth','inovacion']], function(){
    Route::resource('publicacion','PublicacionController');
    Route::get('publicacion', [
    'uses' =>'imagenController@inovacion',
    'as' =>'inovacion.pubinovacion',
    ]);
     Route::get('inovacion', [
    'as' =>'iniinovacion',
    'uses' => 'FontController@index'
    ]);
     Route::get('subirimagen', function () {
    return view('inovacion.subirImageninovacion');
    });
    Route::post('Pub/create', 'PublicacionController@store');
    Route::get('publicaciones', [
    'uses' =>'PublicacionController@publica',
    'as' =>'inovacion.publicaciones.publica',
    ]);
    Route::get('publicacio/{id}/destroy', [ 

    'uses' => "PublicacionController@destroy",
    'as' =>'inovacion.publicacion.destroy'

    ]);
    Route::get('publicacion/{id}/edit', [ 

    'uses' => "PublicacionController@edit",
    'as' =>'inovacion.publicacion.editpub'

    ]);
});
Route::group(['prefix'=>'difucion','middleware'=>['auth','difucion']], function(){
   Route::resource('publicacion','PublicacionController');
        Route::get('publicacion', [
        'uses' =>'imagenController@difucion',
        'as' =>'difucion.pubdifucion',
        ]);
       
        Route::get('difucion', [
        'as' =>'inidifucion',
        'uses' => 'FontController@index'
        ]);
        Route::get('subirimagen', function () {
        return view('difucion.subirImagendifucion');
        });
        Route::post('Pub/create', 'PublicacionController@store');

        Route::post('revistaa', [
        'uses' =>'imagenController@guarda',
        'as' =>'difucion.revista',
        ]);
        Route::get('revista', function () {
            return view('difucion.revista');
        });

        Route::get('publicaciones', [
        'uses' =>'PublicacionController@publica',
        'as' =>'difucion.publicaciones.publica',
        ]);
        Route::get('publicacio/{id}/destroy', [ 

        'uses' => "PublicacionController@destroy",
        'as' =>'difucion.publicacion.destroy'

        ]);
        Route::get('publicacion/{id}/edit', [ 

        'uses' => "PublicacionController@edit",
        'as' =>'difucion.publicacion.editpub'

        ]);
});

Route::group(['prefix'=>'cecodic','middleware'=>['auth','cecodic']], function(){
    Route::resource('publicacion','PublicacionController');
        Route::get('publicacion', [
        'uses' =>'imagenController@cecodic',
        'as' =>'cecodic.pubcecodic',
        ]);
        
        Route::get('cecodic', [
        'as' =>'inicecodic',
        'uses' => 'FontController@index'
        ]);
        Route::get('subirimagen', function () {
        return view('cecodic.subirImagencecodic');
        });
        Route::post('Pub/create', 'PublicacionController@store');
        Route::get('publicaciones', [
        'uses' =>'PublicacionController@publica',
        'as' =>'cecodic.publicaciones.publica',
        ]);
         Route::get('publicacio/{id}/destroy', [ 

        'uses' => "PublicacionController@destroy",
        'as' =>'cecodic.publicacion.destroy'

        ]);
        Route::get('publicacion/{id}/edit', [ 

        'uses' => "PublicacionController@edit",
        'as' =>'cecodic.publicacion.editpub'

        ]);
});
Route::group(['prefix'=>'transparencia','middleware'=>['auth','transparencia']], function(){
    Route::resource('publicacion','PublicacionController');
    Route::get('publicacion', [
    'uses' =>'imagenController@transparencia',
    'as' =>'transparencia.pubtransparencia',
    ]);
   
    Route::get('transparencia', [
    'as' =>'initransparencia',
    'uses' => 'FontController@index'
    ]);
    Route::get('subirimagen', function () {
    return view('transparencia.subirImagentransparencia');
    });
    Route::post('Pub/create', 'PublicacionController@store');

    Route::get('publicaciones', [
    'uses' =>'PublicacionController@publica',
    'as' =>'transparencia.publicaciones.publica',
    ]);
    Route::get('publicacio/{id}/destroy', [ 

    'uses' => "PublicacionController@destroy",
    'as' =>'transparencia.publicacion.destroy'

    ]);
    Route::get('publicacion/{id}/edit', [ 

    'uses' => "PublicacionController@edit",
    'as' =>'transparencia.publicacion.editpub'

    ]);

    
});


//------------------------------------------Fin del grupos de usuarios -----------------------------------

    
Route::post('storage/create', 'StorageController@save');
Route::get('uploads/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/uploads/'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);

});





