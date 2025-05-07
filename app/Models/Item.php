<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nama_barang', 'brand', 'id_room'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'id_room');
    }

}
