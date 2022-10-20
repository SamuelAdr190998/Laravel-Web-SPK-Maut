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
                'id_kriteria' => 1,
                'kode_sub_kriteria_array' => json_encode([
                    'SB1',
                    'SB2',
                    'SB3',
                    'SB4'
                ])
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 2,
                'kode_sub_kriteria_array' => json_encode([
                    'SB6',
                    'SB7',
                    'SB8',
                    'SB9',
                    'SB10'
                ])
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 3,
                'kode_sub_kriteria_array' => json_encode([
                    'SB17',
                    'SB18',
                    'SB20'
                ])
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 4,
                'kode_sub_kriteria_array' => json_encode([
                    'SB22',
                    'SB23',
                    'SB24',
                    'SB25'
                ])
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 5,
                'kode_sub_kriteria_array' => json_encode([
                    'SB26',
                    'SB27',
                    'SB28',
                    'SB29'
                ])
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria' => 6,
                'kode_sub_kriteria_array' => json_encode([
                    'SB31',
                    'SB32',
                    'SB33'
                ])
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 1,
                'kode_sub_kriteria_array' => json_encode([
                    'SB1',
                    'SB2',
                    'SB3'
                ])
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 2,
                'kode_sub_kriteria_array' => json_encode([
                    'SB6',
                    'SB7',
                    'SB8',
                    'SB9'
                ])
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 3,
                'kode_sub_kriteria_array' => json_encode([
                    'SB15',
                    'SB16',
                    'SB17',
                    'SB18',
                    'SB19'
                ])
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 4,
                'kode_sub_kriteria_array' => json_encode([
                    'SB22',
                    'SB23',
                    'SB24',
                    'SB25'
                ])
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 5,
                'kode_sub_kriteria_array' => json_encode([
                    'SB26',
                    'SB27',
                    'SB28'
                ])
            ],
            [
                'id_alternatif' => 2,
                'id_kriteria' => 6,
                'kode_sub_kriteria_array' => json_encode([
                    'SB31',
                    'SB32',
                    'SB33'
                ])
            ],
        ]);
    }
}
