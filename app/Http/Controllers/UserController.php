<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('administracion/usuario/usuario');
    }

    public function create()
    {
        $user = new User();

        $user->name = request('name');
        $user->lastname = request('lastname');
        $user->numDocument = request('numDocument');
        $user->email = request('correo');
        $user->username = request('numDocument');
        $user->password = Hash::make(request('numDocument'));

        /* ASIGNACION DEL ROL */
        $user->assignRole(request('rol'));
        $user->save();

        return redirect('agregar/usuario');
    }

    public function store(Request $request)
    {
        //
    }
  
    public function show(User $user)
    {
        $user = $user->get();
        return view('administracion/usuario/listaUsuario', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('administracion/usuario/editUsuario', compact('user'));
    }

    public function update(Request $request, $id)
    {
        /* ACTUALIZACION DE DATOS BASICOS */
        /* Nota: la actualizacion de roles se encuentra el RolController */
        $datosUser = $request->except(['_token','_method']);
        User::where('id',$id)->update($datosUser);

        return redirect('lista/usuario');
    }

    public function destroy(User $user, $id)
    {
        $user->where(['id'=>$id])->delete();
        return redirect()->back();
    }
}
