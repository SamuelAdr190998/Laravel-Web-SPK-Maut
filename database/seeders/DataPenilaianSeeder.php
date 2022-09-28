<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_penilaian')->insert([
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 1
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 2
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 3
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 6
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 7
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 8
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 15
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 16
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 17
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 22
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 26
            ],
            [
                'id_alternatif' => 1,
                'id_sub_kriteria' => 31
            ]
        ]);
    }
}
