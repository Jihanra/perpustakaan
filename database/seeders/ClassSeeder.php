<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = [
            ['nama_kelas' => '10 IPA 1',],
            ['nama_kelas' => '10 IPA 2',],
            ['nama_kelas' => '10 IPA 3',],
            ['nama_kelas' => '10 IPS 1',],
            ['nama_kelas' => '10 IPS 2',],
            ['nama_kelas' => '10 IPS 3',],
            ['nama_kelas' => '11 IPA 1',],
            ['nama_kelas' => '11 IPA 2',],
            ['nama_kelas' => '11 IPA 3',],
            ['nama_kelas' => '11 IPS 1',],
            ['nama_kelas' => '11 IPS 2',],
            ['nama_kelas' => '11 IPS 3',],
            ['nama_kelas' => '12 IPA 1',],
            ['nama_kelas' => '12 IPA 2',],
            ['nama_kelas' => '12 IPA 3',],
            ['nama_kelas' => '12 IPS 1',],
            ['nama_kelas' => '12 IPS 2',],
            ['nama_kelas' => '12 IPS 3',],
        ];

        DB::table('classes')->insert($class);
    }
}
