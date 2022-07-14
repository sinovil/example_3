<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenispengaduan extends Model
{
    protected $table = 'jenispengaduans';
    protected $fillable = ['jenis_pengaduan', 'definisi'];
}