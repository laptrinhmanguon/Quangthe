<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qls')->insert([
            'nickname' => 'A1',
            'fullname'  => 'QUANG THE',
            'address'   => 'Da Nang',
            'email'     =>'quangtheprozz2@gmail.com',
            'phone_number' =>'90999',
            'created_at'    => date('Y-m-d H:i:s'),
            'update_at'     => date('Y-m-d H:i:s')
        ]);
         DB::table('qls')->insert([
            'nickname' => 'A2', 
            'fullname'  => 'NGUYEN HO QUANG THE',
            'address'   => 'Da Nang',
            'email'     =>'quangtheprozz1@gmail.com',
            'phone_number' =>'90999',
            'created_at'    => date('Y-m-d H:i:s'),
            'update_at'     => date('Y-m-d H:i:s')
        ]);
    }
}
