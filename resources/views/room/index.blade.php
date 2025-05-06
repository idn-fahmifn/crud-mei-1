@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="">
                            <h4>Data Ruangan</h4>
                            <span>Data semua ruangan.</span>
                        </div>
                        <div class="">
                            <a href="" class="btn btn-success">Buat Data</a>
                        </div>
                    </div>

                    <div class="table-responsive mt-4">
                        <table class="table table-striped">
                            <thead>
                                <th>Nama Ruangan</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ruangan A</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Detail</a>
                                        <a href="#" class="btn btn-danger">Hapus</a>
                                    </td>
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