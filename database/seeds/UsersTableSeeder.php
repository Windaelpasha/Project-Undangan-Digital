<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
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

        	'id' => '1',
        	'name' => 'admin',
        	'email'=>'admin@admin.com',
        	'password'=>bcrypt('admin1234'),
        	'status'=>'admin',
        	'remember_token'=> '1',
        	'created_at'=>Carbon::now(),
        	'updated_at'=>Carbon::now(),

        ]);
    }
}
