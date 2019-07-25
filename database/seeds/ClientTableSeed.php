<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('client')->insert([
            'id' => '1',
            'type_id' => '1',
            'nama' => 'test',
            'no_hp' => '08221922401',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('client')->insert([
            'id' => '2',
            'type_id' => '1',
            'nama' => 'test 2',
            'no_hp' => '08221922401',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('client')->insert([
            'id' => '3',
            'type_id' => '1',
            'nama' => 'test 3',
            'no_hp' => '08221922401',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
