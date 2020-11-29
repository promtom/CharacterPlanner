<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karakter extends Model {
    protected $table='karakter';

    protected $fillable = [
        'name',
        'title',
        'ket',
        'id_kelas',
        'power'
    ];
    public function kelas(){
        return $this->belongsTo('App\Models\Kelas','id_kelas');
    }
}