<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSubKriteria extends Model
{
    protected $table = 'data_sub_kriteria';
    protected $fillable = [
        'id_kriteria',
        'nama_sub_kriteria',
        'bobot_sub_kriteria'
    ];
}
