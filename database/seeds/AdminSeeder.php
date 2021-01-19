<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Adnan',
            'email'=>'promotor@gmail.com',
            'password'=>Hash::make('123456'),
            'status'=>1,
            'role'=>'promotor',
            'pnone'=>'+00801723456789',
            'designation'=>'Senior Officer',
            'organization'=>'WPH orgnization'
        ]);
    }
}
