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
                                <h4>Data Barang</h4>
                                <span>Data semua barang.</span>
                            </div>
                            <div class="">
                                <a href="{{route('item.create')}}" class="btn btn-success">Buat Data</a>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                <strong>Yeay!</strong> {{session('success')}}.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif


                        {{-- area table --}}
                        <div class="table-responsive mt-4">
                            <table class="table table-striped">
                                <thead>
                                    <th>Nama Barang</th>
                                    <th>Penyimpanan</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->nama_barang}}</td>
                                            <td>{{$item->room->nama_ruangan}}</td>
                                            <td>
                                                <form action="" method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <a href="" class="btn text-muted">Detail</a>
                                                    <a href="" class="btn text-muted">Edit</a>
                                                    <button type="submit" class="btn text-danger"
                                                        onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                                                </form>
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