<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TypeTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('type')->insert([
            'id' => '1',
            'nama_type' => 'test',
            'jumlah_slide' => '20',
            'harga' => '20000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('type')->insert([
            'id' => '2',
            'nama_type' => 'test 2',
            'jumlah_slide' => '21',
            'harga' => '100000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('type')->insert([
            'id' => '3',
            'nama_type' => 'test 3',
            'jumlah_slide' => '7',
            'harga' => '10000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
