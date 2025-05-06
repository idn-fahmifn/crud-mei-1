@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-body">
                    <h4>Data Ruangan</h4>
                    <span>Data semua ruangan.</span>
                    <div class="table-responsive">
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