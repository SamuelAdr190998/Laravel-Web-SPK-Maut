<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_sub_kriteria')->insert([
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Tamu Lawan Jenis Diizinkan Masuk',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Biaya Kebersihan Termasuk Biaya Kos',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Tamu Boleh Berkunjung',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Biaya Bulanan Termasuk Listrik',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Tamu Lawan Jenis Dilarang Masuk',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Kamar Mandi Diluar',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Kulkas',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'TV Bersama',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Dapur',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Cleaning Service',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Ruang Tamu',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Penjaga Kos',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'CCTV',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'WiFi',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => 'TV',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => 'AC',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => 'Kipas Angin',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => 'Meja Belajar',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => 'Lemari',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => 'Kasur',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => 'Kamar Mandi Didalam',
                'bobot_sub_kriteria' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => '5 KM',
                'bobot_sub_kriteria' => 1.25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => '3 - 4 KM',
                'bobot_sub_kriteria' => 2.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => '1 - 2 KM',
                'bobot_sub_kriteria' => 3.75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => 'Kurang dari 1 KM',
                'bobot_sub_kriteria' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => 'Lebih dari 2 Juta/Bulan',
                'bobot_sub_kriteria' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => '1.6 Juta - 1.9 Juta/Bulan',
                'bobot_sub_kriteria' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => '1.2 Juta - 1.5 Juta/Bulan',
                'bobot_sub_kriteria' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => '800 Ribu - 1.1 Juta/Bulan',
                'bobot_sub_kriteria' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => '400 Ribu - 700 Ribu/Bulan',
                'bobot_sub_kriteria' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 6,
                'nama_sub_kriteria' => '>Berdua',
                'bobot_sub_kriteria' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 6,
                'nama_sub_kriteria' => 'Berdua',
                'bobot_sub_kriteria' => 3.4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_kriteria' => 6,
                'nama_sub_kriteria' => 'Sendiri',
                'bobot_sub_kriteria' => 1.8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
