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
                            <span>Form menambahkan barang.</span>
                        </div>
                    </div>
                    {{-- form input --}}
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" required class="form-control" placeholder="Laptop">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Brand</label>
                            <input type="text" name="brand" id="brand" required class="form-control" placeholder="macbook pro">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Disimpan di</label>
                            <select name="ukuran" id="ukuran" required class="form-control">
                                <option value="">-Pilih Ukuran-</option>
                                <option value="small">small</option>
                                <option value="large">large</option>
                                <option value="extra large">extra large</option>
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection