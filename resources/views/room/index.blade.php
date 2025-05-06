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
                                <h4>Data Ruangan</h4>
                                <span>Data semua ruangan.</span>
                            </div>
                            <div class="">
                                <a href="{{route('room.create')}}" class="btn btn-success">Buat Data</a>
                            </div>
                        </div>

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Yeay!</strong> {{session('success')}}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    
                        {{-- area table --}}
                        <div class="table-responsive mt-4">
                            <table class="table table-striped">
                                <thead>
                                    <th>Nama Ruangan</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->nama_ruangan}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Detail</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection