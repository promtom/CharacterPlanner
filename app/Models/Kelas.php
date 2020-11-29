<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='kelas';

    protected $fillable = [
        'name_kelas',
        'ket_kelas'
    ];
}
