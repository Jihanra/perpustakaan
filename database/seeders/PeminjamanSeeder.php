<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peminjaman = [
            [ 'id_anggota' => '1',
            'id_buku' => '61',
            'tgl_pinjam' => '2021-10-10',
            ],

            [ 'id_anggota' => '1',
            'id_buku' => '62',
            'tgl_pinjam' => '2021-10-10',
            ],

            [ 'id_anggota' => '1',
            'id_buku' => '63',
            'tgl_pinjam' => '2021-10-10',
            ],

            [ 'id_anggota' => '2',
            'id_buku' => '67',
            'tgl_pinjam' => '2021-10-11',
            ],

            [ 'id_anggota' => '2',
            'id_buku' => '66',
            'tgl_pinjam' => '2021-10-11',
            ],

            [ 'id_anggota' => '3',
            'id_buku' => '69',
            'tgl_pinjam' => '2021-10-12',
            ],

            [ 'id_anggota' => '3',
            'id_buku' => '73',
            'tgl_pinjam' => '2021-10-12',
            ],

            [ 'id_anggota' => '6',
            'id_buku' => '64',
            'tgl_pinjam' => '2021-10-13',
            ],
        ];
        DB::table('peminjaman')->insert($peminjaman);
    }
}
