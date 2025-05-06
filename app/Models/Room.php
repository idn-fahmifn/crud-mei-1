<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'nama_ruangan','nomor_ruangan', 'deskripsi'
    ];
}
