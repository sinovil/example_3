<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $fillable = ['users_id', 'nik', 'nama', 'kelamin_id', 'notelp', 'alamat'];

    public function kelamin()
    {
        return $this->belongsTo('App\Models\Kelamin');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\Users');
    }
}