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
                <a href="{{ ('pbarang') }}" class="btn btn-light">
                    <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="{{url('tambah')}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nama" class="col-form-label col-2">Nama Produk</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nama_produk">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-form-label col-2">Harga</label>
                        <div class="col-10">
                            <input type="number" class="form-control" name="harga">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-form-label col-2">Stok</label>
                        <div class="col-10">
                            <input type="number" class="form-control" name="stok">
                        </div>
                    </div>
                    
                   
                    <div class="mb-3">
                        <button class="btn btn-success" type="reset"><i class="bi bi-x-square-fill"></i> Batal</button>
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-save-fill"></i>&nbsp;Simpan 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection