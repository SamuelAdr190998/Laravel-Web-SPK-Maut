<?php

namespace App\Modules;

use App\Models\DataKriteria;
use App\Models\DataSubKriteria;

class SPKMautAlgorithms
{
    protected $DataKriteria;
    protected $DataSubKriteria;
    public function __construct()
    {
        $this->DataKriteria = [];
        $this->DataSubKriteria = [];
    }

    public function GenerateDataPenilaian()
    {
        $this->NormalisasiDataKriteria();
        $this->NormalisasiDataSubKriteria();
        $this->testPrintData();
    }

    public function NormalisasiDataKriteria()
    {
        $fetchDataKriteria = DataKriteria::all();
        $nilaiPenjumlahanBobotKriteria = 0;

        foreach ($fetchDataKriteria as $key => $value) {
            $nilaiPenjumlahanBobotKriteria += $value->bobot_kriteria;
        }

        if ($nilaiPenjumlahanBobotKriteria == 1) {
            $this->DataKriteria = $fetchDataKriteria;
        } else {
            foreach ($fetchDataKriteria as $key => $value) {
                $value->bobot_kriteria = round($value->bobot_kriteria / $nilaiPenjumlahanBobotKriteria, 2);
            }

            $this->DataKriteria = $fetchDataKriteria;
        }
    }

    public function NormalisasiDataSubKriteria()
    {
        $fetchDataKriteria = DataKriteria::all();
        $defaultIndex = 5;

        foreach ($fetchDataKriteria as $key => $value) {
            $dataSubKriteria[$value->id] = DataSubKriteria::where('id_kriteria', $value->id)->get();
            $jumlahDataSubKriteria[$value->id] = DataSubKriteria::where('id_kriteria', $value->id)->count();

            foreach ($dataSubKriteria[$value->id] as $a => $b) {
                if ($b->bobot_sub_kriteria == null) {
                    $b->bobot_sub_kriteria = round($defaultIndex / $jumlahDataSubKriteria[$value->id], 2);
                }
            }
        }

        $this->DataSubKriteria = $dataSubKriteria;
    }

    public function testPrintData()
    {
        foreach ($this->DataKriteria as $key => $value) {
            print_r($value->bobot_kriteria);
        }

        foreach ($this->DataSubKriteria as $key => $value) {
            foreach ($value as $a => $b) {
                print_r($b->bobot_sub_kriteria);
            }
        }
        // print_r($this->DataSubKriteria);
        dd('Test Print Data');
    }
}
