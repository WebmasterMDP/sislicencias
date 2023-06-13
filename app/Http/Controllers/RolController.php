<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RolController extends Controller
{
    public function index(User $user)
    {

        $users = $user->where('admin', null)
                        ->get();
                        
        $admins = $user->where('admin', '=', 'admin')
                        ->get();

        return view('roles&privilegios/roles&priv', compact('users','admins'));
    }

    public function reg_usuario()
    {
        
    }
}
