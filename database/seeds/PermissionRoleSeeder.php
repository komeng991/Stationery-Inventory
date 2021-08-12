<?php

namespace Database\Seeders;

use DB;
use App\Models\Permission_Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder{
    public function run()
    {
        DB::table('permission_role')->delete();

        Permission_Role::create([
            'role_id' => '9',
            'permission_id' => '1',
        ]);

        Permission_Role::create([
            'role_id' => '9',
            'permission_id' => '2',
        ]);

        Permission_Role::create([
            'role_id' => '9',
            'permission_id' => '3',
        ]);

        Permission_Role::create([
            'role_id' => '9',
            'permission_id' => '4',
        ]);

        Permission_Role::create([
            'role_id' => '9',
            'permission_id' => '5',
        ]);

        Permission_Role::create([
            'role_id' => '10',
            'permission_id' => '2',
        ]);

        Permission_Role::create([
            'role_id' => '10',
            'permission_id' => '3',
        ]);

        Permission_Role::create([
            'role_id' => '10',
            'permission_id' => '4',
        ]);

        Permission_Role::create([
            'role_id' => '11',
            'permission_id' => '1',
        ]);

        Permission_Role::create([
            'role_id' => '11',
            'permission_id' => '2',
        ]);

        Permission_Role::create([
            'role_id' => '11',
            'permission_id' => '3',
        ]);

        Permission_Role::create([
            'role_id' => '11',
            'permission_id' => '4',
        ]);

        Permission_Role::create([
            'role_id' => '11',
            'permission_id' => '5',
        ]);

       
    }
}