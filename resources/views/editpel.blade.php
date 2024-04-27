@extends('index')
@section('index')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icons/bootstrap-icons.min.css">
</head>
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="{{ ('pelanggan') }}" class="btn btn-light">
                    <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
                </a>
            </div>
            <div class="card-body">
               
                @foreach ($data as $item)
                    
                <form id="formAuthentication" class="mb-3" method="POST" ">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nama" class="col-form-label col-2">Nama Pelanggan</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nama_pelanggan"
                            value="{{ $item->nama_pelanggan }}" autofocus
                            >

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Alamat" class="col-form-label col-2">Alamat</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="Alamat"
                            value="{{ $item->Alamat }}" autofocus
                            >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nomor_telepon" class="col-form-label col-2">Nomor Telepon</label>
                        <div class="col-10">
                            <input type="number" class="form-control" name="nomor_telepon"
                            value="{{ $item->nomor_telepon }}" autofocus
                            >
                        </div>
                    </div>
                    
                   
                    <div class="mb-3">
                        <button class="btn btn-success" type="reset"><i class="bi bi-x-square-fill"></i> Batal</button>
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-save-fill"></i>&nbsp;Simpan 
                        </button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
@endsection