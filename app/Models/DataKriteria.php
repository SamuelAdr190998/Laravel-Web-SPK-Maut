<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataKriteria extends Model
{
    protected $table = 'data_kriteria';
    protected $fillable = [
        'nama_kriteria',
        'bobot_kriteria'
    ];
}
