<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
use HasFactory;
    
    // Mengizinkan field ini diisi secara massal (Mass Assignment)
    protected $fillable = ['kode_matkul', 'nama_matkul', 'sks', 'semester'];
}
