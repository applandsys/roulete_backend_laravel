<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
                        [
                            'name' => 'Sameer Dubai',
                            'email' => 'sameer@gmail.com',
                            'password' => Hash::make('12345678'),
                        ],
                        [
                            'name' => 'Tarique Mosharraf',
                            'email' => 'tariq@gmail.com',
                            'password' => Hash::make('12345678'),
                        ]
    
        ]);
    }
}
