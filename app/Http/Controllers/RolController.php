<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{
    public function index(User $user)
    {

        $users = $user->where('admin', null)
                        ->get();
                        
        $admins = $user->where('admin', '=', 'admin')
                        ->get();

        return view('adminRol/rolIndex', compact('users','admins'));
    }

    public function edit($id)
    {
        $roles = Role::all();
        $users = User::findOrFail($id);

        return view('adminRol/rolEdit', compact('roles','users'));
    }
    
    public function update(Request $request, User $user, $id)
    {
        $user->roles()->sync($request->roles);
        return redirect('r&p');
    }
}
