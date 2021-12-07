<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [ 'judul_buku' => 'Fisika SMA Kelas 10',
            'penerbit' => 'ERLANGGA',
            'tahun_terbit' => '2016',
            ],
            [ 'judul_buku' => 'Biologi SMA Kelas 10',
            'penerbit' => 'ERLANGGA',
            'tahun_terbit' => '2014',
            ],
            [ 'judul_buku' => 'Kimia SMA Kelas 10',
            'penerbit' => 'Ghalia Indonesia',
            'tahun_terbit' => '2016',
            ],
            [ 'judul_buku' => 'Biologi SMA Kelas 11',
            'penerbit' => 'MEDIATAMA',
            'tahun_terbit' => '2016',
            ],
            [ 'judul_buku' => 'Fisika SMA Kelas 12',
            'penerbit' => 'ERLANGGA',
            'tahun_terbit' => '2014',
            ],
            [ 'judul_buku' => 'Sosiologi SMA Kelas 11',
            'penerbit' => 'ERLANGGA',
            'tahun_terbit' => '2019',
            ],
            [ 'judul_buku' => 'Geografi SMA Kelas 11',
            'penerbit' => 'MEDIATAMA',
            'tahun_terbit' => '2017',
            ],
            [ 'judul_buku' => 'Sejarah SMA Kelas 11',
            'penerbit' => 'MEDIATAMA',
            'tahun_terbit' => '2018',
            ],
            [ 'judul_buku' => 'Sejarah SMA Kelas 12',
            'penerbit' => 'ERLANGGA',
            'tahun_terbit' => '2017',
            ],
            [ 'judul_buku' => 'Sosiologi SMA Kelas 10',
            'penerbit' => 'MEDIATAMA',
            'tahun_terbit' => '2021',
            ],
            [ 'judul_buku' => 'Matematika kelas 1 SMA Kelompok Peminatan K13 New',
            'penerbit' => 'PT. Penerbit Erlangga',
            'tahun_terbit' => '2016',
            ],
            [ 'judul_buku' => 'Fisika XII SMA 3 K13 Revisi',
            'penerbit' => 'PT. Penerbit Erlangga',
            'tahun_terbit' => '2018',
            ],
            [ 'judul_buku' => 'PJOK SMA/MA/SMK KELAS 12 REVISI K13',
            'penerbit' => 'Facil',
            'tahun_terbit' => '2017',
            ],
            [ 'judul_buku' => 'INFORMATIKA SMA/MA KELAS 12 KURIKULUM 2013',
            'penerbit' => 'Grafindo',
            'tahun_terbit' => '2019',
            ],
            [ 'judul_buku' => 'PPKN-PKN Kelas X-10 SMA Revisi 2017',
            'penerbit' => 'Depdiknas',
            'tahun_terbit' => '2018',
            ],
            [ 'judul_buku' => 'Pendidikan Agama Islam Kelas X-10 SMA',
            'penerbit' => ' Depdiknas',
            'tahun_terbit' => '2018',
            ],
            [ 'judul_buku' => 'Biologi Kelas 1 / X 10 Sma Peminatan K13N',
            'penerbit' => 'PT. Penerbit Erlangga',
            'tahun_terbit' => '2019',
            ],
            [ 'judul_buku' => 'MTK Wajib SMA kelas 1 semester 1 k13 Revisi',
            'penerbit' => 'Intan Pariwara',
            'tahun_terbit' => '2018',
            ],
            [ 'judul_buku' => 'Patway to English SMA kls 1 k13',
            'penerbit' => 'PT. Penerbit Erlangga',
            'tahun_terbit' => '2017',
            ],
            [ 'judul_buku' => 'MATEMATIKA KELAS XII SMA KELOMPOK PEMINATAN',
            'penerbit' => 'PT. Penerbit Erlangga',
            'tahun_terbit' => '2019',
            ],
           
            ];

            DB::table('books')->insert($books);
            }
    }

