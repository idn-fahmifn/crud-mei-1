<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('room.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all(); //mengambil semua value yang dimasukan dari form

        //validasi
        $request->validate([
            'nama_ruangan' => 'required|string|min:5|max:60',
            'nomor_ruangan' => 'required|string|min:1|max:100',
            'ukuran' => 'required',
        ]);

        //memanggil model untuk menambahkan data yang nilainya dari $input.
        Room::create($input);

        //jika data sudah dikirim, maka akan di redirect ke halaman index.
        return redirect()->route('room.index')
        ->with('success', 'Data ruangan berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
