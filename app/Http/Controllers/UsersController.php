<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =User::orderBy('id','ASC')->paginate(5);

            return view('admin.users.usuariosadmin')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosUsuarios = array('name'=>$request->name,'email'=>$request->email,'password'=>bcrypt($request->password),'type'=>$request->type);


       $user = new user ($datosUsuarios);
      
       $estado= $user->save();
            if ($estado == true) {
                flash("Se ha registrado el usuario", "success");
            }else {
                flash("Error al registrar usuario", "danger");
            }
       
       return redirect()->to('admin/crearusuario');
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
        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);
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
       $user =User::find($id);
       $user->name =$request->name;
       $user->email =$request->email;
       $user->type =$request->type;
       $user->save();
       flash::success('El usuario ha sido editado!');
       return redirect()->to('admin/usuarios');
    }
    public function inicio()
    {
        return view('admin.users.iniadmin');    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Flash::success('El usuario "'.$user->name .'" a sido borrado!');
        return redirect()-> to('admin/usuarios');
    }
}
