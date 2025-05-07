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
                        </div>

                        <div class="table-responsive mt-4">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Nama Ruangan</td>
                                        <td>{{$data->nama_ruangan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Ruangan</td>
                                        <td>{{$data->nomor_ruangan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>{{$data->ukuran}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        {{-- area header --}}
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h4>Detail Barang</h4>
                                <span>Menampilkan barang yang ada di ruangan {{$data->nama_ruangan}}.</span>
                            </div>
                        </div>

                        <div class="table-responsive mt-4">

                            <table class="table table-hover">
                                <thead>
                                    <th>Nama Barang</th>
                                    <th>Brand</th>
                                </thead>
                                <tbody>
                                    @if (!$barang)
                                        <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                                            Barang belum ada
                                        </div>
                                    @else
                                        @foreach ($barang as $item)
                                            <tr>
                                                <td>{{$item->nama_barang}}</td>
                                                <td>{{$item->brand}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection