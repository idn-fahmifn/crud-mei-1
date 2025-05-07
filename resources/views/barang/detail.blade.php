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
    </div>
</div>
@endsection