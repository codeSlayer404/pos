<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('resources/assets/bs4/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
            <h1>Daftar Produk</h1>
        
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Nama Kategori</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
            </tr>

            <?php $no = 1 ; ?>

            @foreach( $produk as $data )
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->nama_produk }}</td>
                    <td>{{ $data->nama_kategori }}</td>
                    <td>{{ $data->harga_beli }}</td>
                    <td>{{ $data->harga_jual }}</td>                
                </tr>
                <?php $no++ ?>
            @endforeach
        </table>
    </div>
</div>
    
</body>
</html>