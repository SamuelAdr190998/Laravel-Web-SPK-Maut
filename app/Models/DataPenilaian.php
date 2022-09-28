<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPenilaian extends Model
{
    protected $table = 'data_penilaian';
    protected $fillable = [
        'id_alternatif',
        'id_sub_kriteria'
    ];
}
