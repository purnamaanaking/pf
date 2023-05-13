<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Purnama',
                'lastname' => 'Anaking',
                'email'=> 'purnama.anaking@gmail.com',
                'age' => '30',
                'position_id' => 1
            ],
            [
                'firstname' => 'Yupit',
                'lastname' => 'Sudianto',
                'email'=> 'yupit.sudianto@gmail.com',
                'age' => '31',
                'position_id' => 3
            ]
        ]);
    }
}
