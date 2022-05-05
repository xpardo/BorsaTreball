<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([[
            'id' => 1,
            'name' => 'admin',
        ],[
   
            'id' => 2,
            'name' => 'alumne',
        ],[
            
            'id' => 3,
            'name' => 'empresa',
        ]]);
    }
}
