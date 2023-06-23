<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleUser = Role::create(['name' => 'usuario']);

        /* $permission = Permission::create(['name' => 'Home.home'])->syncRoles([$roleAdmin, $roleUser]); */

        $permission = Permission::create(['name' => 'Role.index'])->syncRoles([$roleAdmin]);
        $permission = Permission::create(['name' => 'Role.edit'])->syncRoles([$roleAdmin]);
        $permission = Permission::create(['name' => 'Role.update'])->syncRoles([$roleAdmin]);

        $permission = Permission::create(['name' => 'licencias.index'])->syncRoles([$roleAdmin, $roleUser]);
        $permission = Permission::create(['name' => 'licencias.show'])->syncRoles([$roleAdmin, $roleUser]);
        $permission = Permission::create(['name' => 'licencias.edit'])->syncRoles([$roleAdmin, $roleUser]);
        $permission = Permission::create(['name' => 'licencias.anulaciones'])->syncRoles([$roleAdmin, $roleUser]);
        $permission = Permission::create(['name' => 'licencias.update'])->syncRoles([$roleAdmin, $roleUser]);
        
        $permission = Permission::create(['name' => 'User.index'])->syncRoles([$roleAdmin]);
        $permission = Permission::create(['name' => 'User.show'])->syncRoles([$roleAdmin]);
        $permission = Permission::create(['name' => 'User.create'])->syncRoles([$roleAdmin]);
        $permission = Permission::create(['name' => 'User.edit'])->syncRoles([$roleAdmin]);
        $permission = Permission::create(['name' => 'User.update'])->syncRoles([$roleAdmin]);
        $permission = Permission::create(['name' => 'User.destroy'])->syncRoles([$roleAdmin]);
    }
}
