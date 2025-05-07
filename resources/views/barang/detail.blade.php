@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- area header --}}
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h4>Detail Ruangan</h4>
                                <span>Menampilkan detail ruangan.</span>
                            </div>
                            <div class="">
                                <button type="button" class="btn text-muted" data-bs-toggle="modal"
                                    data-bs-target="#editData">
                                    Edit Data
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>{{$data->nama_barang}}</td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>{{$data->brand}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ruang penyimpanan</td>
                                        <td>{{$data->room->nama_ruangan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data {{$data->nama_barang}} - {{$data->brand}}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{route('item.store')}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" required class="form-control"
                                placeholder="ex. laptop">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Brand</label>
                            <input type="text" name="brand" id="brand" required class="form-control"
                                placeholder="ex. Macbook pro M1">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Disimpan di</label>
                            <select name="id_room" id="id_room" required class="form-control">
                                <option value="">-Pilih tempat penyimpanan-</option>
                                @foreach ($room as $item)
                                    <option value="{{$item->id}}">{{$item->nama_ruangan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection