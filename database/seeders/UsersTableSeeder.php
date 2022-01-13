<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'role_id' => '1',
                'name'    => 'MD. Admin',
                'username'=> 'admin',
                'email'   => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'role_id' => '2',
                'name'    => 'MD. Doctor',
                'username'=> 'doctor',
                'email'   => 'doctor@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'role_id' => '3',
                'name'    => 'MD. receptionist',
                'username'=> 'receptionist',
                'email'   => 'receptionist@gmail.com',
                'password' => bcrypt('12345'),
            ]
            ];

            DB::table('users')->insert($data);
    }
}
