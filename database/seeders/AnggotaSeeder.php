<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
            'nisn' => '1234567890',
            'nama' => 'Putri Aurelia',
            'kelas' => '10',
            'jurusan' => 'IPA',
            'no_tlp' => '081927354681',
        ]);
        DB::table('anggotas')->insert([
            'nisn' => '2345678901',
            'nama' => 'Dani Ramadan',
            'kelas' => '11',
            'jurusan' => 'IPS',
            'no_tlp' => '082537891652',
        ]);
        DB::table('anggotas')->insert([
            'nisn' => '1273654890',
            'nama' => 'Angreini Yulianti',
            'kelas' => '12',
            'jurusan' => 'IPS',
            'no_tlp' => '0812536489324',
        ]);
    }
}
