<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{
    public function index(User $user)
    {
        $alls = $user->get();

        $users = $user->where('rol', '=', '2')
                        ->get();
                        
        $admins = $user->where('rol', '=', '1')
                        ->get();

        return view('administracion/rol/rolIndex', compact('users', 'admins', 'alls'));
    }

    public function edit($id)
    {
        $roles = Role::all();
        $users = User::findOrFail($id);

        return view('administracion/rol/rolEdit', compact('roles','users'));
    }
    
    public function update(Request $request, User $user, $id)
    {
        $datosUser = $request->except(['_token','_method']);
        User::where('id',$id)->update($datosUser);

        $user = User::findOrFail($id);
        /* $user->where('rol','=',$request->roles)->update(); */
        $user->roles()->sync($request->rol);
        
        return redirect('ryp');
    }

}
