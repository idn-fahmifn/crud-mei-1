<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Room;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $data = Item::all();
        return view('barang.index', compact('data'));
    }

    public function create()
    {
        // memanggil model room agar bisa ditampilkan di halaman create
        $room = Room::all();
        return view('barang.create', compact('room'));
    }

}
