@extends('index')
@section('judul')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pelanggan</h1>
    
</div>
@endsection
@section('index')
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data Pelanggan</h4>
                <a href="{{url('tambahpel')}}" class="btn btn-light">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th >Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->pelanggan_id}}</td>
                            <td>{{$item->nama_pelanggan}}</td>
                            <td>{{$item->Alamat}}</td>
                            <td>{{$item->nomor_telepon}}</td>
                            
                            
                            
                            <td>
                                <a href="{{ url('editpel/'.$item->pelanggan_id) }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection