<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('administrador/usuario');
    }

    public function create()
    {
        $user = new User();

        $user->name = request('name');
        $user->numDocument = request('numDocument');
        $user->lastname = request('lastname');
        $user->username = request('numDocument');
        $user->email = request('email');
        $user->password = Hash::make(request('numDocument'));
        
        $user->save();

        return redirect('aUsuario');
    }

    public function store(Request $request)
    {
        //
    }
  
    public function show(User $user)
    {
        $user = $user->get();
        return view('administrador/listaUsuario', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('administrador/editUsuario', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $datosUser = $request->except(['_token','_method']);
        User::where('id',$id)->update($datosUser);
        $user = User::findOrFail($id);

        return redirect('lUsuario');
    }

    public function destroy(User $user, $id)
    {
        $user->where(['id'=>$id])->delete();
        return redirect()->back();
    }
}
