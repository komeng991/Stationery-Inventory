<?php

namespace Database\Seeders;

use DB;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder{
    public function run()
    {
        DB::table('permissions')->delete();

        Permission::create([
            'id' => '1',
            'title' => 'ManageStat',
        ]);

        Permission::create([
            'id' => '2',
            'title' => 'ReqStat',
        ]);

        Permission::create([
            'id' => '3',
            'title' => 'EditStat',
        ]);

        Permission::create([
            'id' => '4',
            'title' => 'ReturnStat',
        ]);

        Permission::create([
            'id' => '5',
            'title' => 'StatStatus',
        ]);


    }
}