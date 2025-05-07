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
                            <span>Form menambahkan ruangan.</span>
                        </div>
                    </div>
                    {{-- form input --}}
                    <form action="{{route('room.store')}}" method="post">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="">Nama Ruangan</label>
                            <input type="text" name="nama_ruangan" id="nama_ruangan" required class="form-control" placeholder="ex. garasi">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Nomor Ruangan</label>
                            <input type="text" name="nomor_ruangan" id="nomor_ruangan" required class="form-control" placeholder="ex. garasi">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Ukuran</label>
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