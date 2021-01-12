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
            'name'=>'Asif',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('123456'),
            'status'=>1,
            'role'=>'user',
            'pnone'=>'+00801774445',
            'designation'=>'Additional Officer',
            'organization'=>'WHO orgnization'
        ]);
    }
}
