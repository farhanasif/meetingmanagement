<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Farhan',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('123456'),
            'status'=>1,
            'role'=>'user',
            'pnone'=>'+0080172344556',
            'designation'=>'Executive Officer',
            'organization'=>'WHO orgnization'
        ]);
    }
}
