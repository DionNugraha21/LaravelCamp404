<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
            'role' => 'admin',
            'email' => 'admin@camp404.com',
            'password' => bcrypt('admin12345')
        ]);
        DB::table('users')->insert([
            'name' => 'Siswa 1',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'siswa@camp404.com',
            'password' => bcrypt('siswa12345')
        ]);
        DB::table('users')->insert([
            'name' => 'Siswa 2',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'siswaDua@camp404.com',
            'password' => bcrypt('siswaDua12345')
        ]);
    }
}
