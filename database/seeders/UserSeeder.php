<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('operator123'),
            'role' => 'operator',
        ]);

        DB::table('users')->insert([
            'name' => 'Masyarakat',
            'email' => 'masyarakat@gmail.com',
            'password' => bcrypt('masyarakat123'),
            'role' => 'masyarakat',
        ]);
    }
}