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
        $data = Room::all();
        return view('room.index', compact('data'));
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
        $data = Room::findOrFail($room->id);
        return view('room.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $data = Room::findOrFail($room->id);
        return view('room.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $data = Room::findOrFail($room->id); //mengambil data yang akan diedit
        $input = $request->all(); //mengamnil value terbaru dari form 

         //validasi
         $request->validate([
            'nama_ruangan' => 'required|string|min:5|max:60',
            'nomor_ruangan' => 'required|string|min:1|max:100',
            'ukuran' => 'required',
        ]);

        $data->update($input); //perintah untuk mengedit data.
        return back()->with('success', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
