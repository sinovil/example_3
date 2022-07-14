<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable =
    [
        'users_id',
        'jenispengaduan_id',
        'nama_terlapor',
        'nip_terlapor',
        'tgl_kejadian',
        'waktu_kejadian',
        'lokasi_kejadian',
        'kronologis_kejadian',
        'file_bukti',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\Users');
    }

    public function jenispengaduan()
    {
        return $this->belongsTo('App\Models\Jenispengaduan');
    }
}