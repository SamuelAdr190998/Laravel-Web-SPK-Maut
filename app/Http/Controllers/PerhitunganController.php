<?php

namespace App\Http\Controllers;

use App\Modules\SPKMautAlgorithms;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $rumusSPKMautAlgorithms = new SPKMautAlgorithms();
        $rumusSPKMautAlgorithms->GenerateDataPenilaian();
    }
}
