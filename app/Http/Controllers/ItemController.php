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

    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'nama_barang' => 'required|string|min:5|max:60',
            'brand' => 'required|string|min:5|max:60',
            'id_room' => 'required',
        ]);
        Item::create($input);
        return redirect()->route('item.index')
        ->with('success', 'Barang berhasil ditambahkan');
    }

    public function show($id)
    {
        $data = Item::findOrFail($id);
        return view('barang.detail', compact('data'));
    }

}
