<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
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
                'name' => 'nadin',
                'email' => 'nadin@gmail.com',
                'password' => Hash::make('nadin917'),

            ],
            [
                'name' => 'siti',
                'email' => 'siti@gmail.com',
                'password' => Hash::make('siti917'),
                
            ]
            ]);
    }
}
