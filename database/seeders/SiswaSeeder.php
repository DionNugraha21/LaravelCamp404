<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Ibrahomovic',
            'nim' => 301,
            'tgl_lahir' => '1989-05-01'
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Ronaldo',
            'nim' => 302,
            'tgl_lahir' => '1983-06-05'
        ]);
    }
}
