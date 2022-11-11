<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
           'fname' => 'Simon',
           'lname' => 'Lawrence',
           'email' => 'simon@gmail.com',
           'password' => bcrypt('password')
        ]);
    }
}
