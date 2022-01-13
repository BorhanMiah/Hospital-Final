<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
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
                'name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'name' => 'Doctor',
                'slug' => 'doctor',
            ],
            [
                'name' => 'Receptionist',
                'slug' => 'receptionist',
            ],
            ];

            DB::table('roles')->insert($data);
    }
}
