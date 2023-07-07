<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('administracion/usuario/usuario');
    }

    public function create(Request $request)
    {
        $validate = Validator::make($request->all(),
        [
            'name' => 'required',
            'lastname' => 'required',
            'numDocument' => 'required|min:8',
            'correo' => 'required',
        ],[
            'required' => 'Ingrese datos solicitados',
            'numDocument.min' => 'Ingrese 8 caracteres como mínimo',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput()->with('user', 'miss');

          }else{
            try{
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

            /* return redirect('agregar/usuario'); */
            return redirect()->route('User.index')->with('user', 'ok');

            } catch (\Throwable $th) {
                    
                return redirect()->route('User.index')->with('user', 'fail');
            }
        }
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
        try{
        /* ACTUALIZACION DE DATOS BASICOS */
        /* Nota: la actualizacion de roles se encuentra el RolController */
        $datosUser = $request->except(['_token','_method']);
        User::where('id',$id)->update($datosUser);
            
        return redirect()->route('User.show')->with('user', 'update');

        } catch (\Throwable $th) {
            
            return redirect()->route('User.show')->with('user', 'fail');

        }
    }

    public function destroy(User $user, $id)
    {
        try{
        $user->where(['id'=>$id])->delete();

        return redirect()->route('User.show')->with('user', 'ok');

        } catch (\Throwable $th) {

            return redirect()->route('User.show')->with('user', 'fail');
        }
    }
}
