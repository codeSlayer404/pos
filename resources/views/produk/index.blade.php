@extends('layouts.app')


    @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="border:1px solid lightgray;padding :20px;">
                <div class="panel-heading" style="margin:-20px -20px 0px -20px ;border-bottom:1px solid lightgray;background-color:rgba(0,0,0,0.4); padding: 20px 0px 20px 20px;color:whitesmoke;">
                    <h3>Daftar Produk

                        <a href="{{ Route('produk.create') }}" class="btn btn-success pull-right" style="float:right;margin-right : 15px;">Tambah</a><br>
                    </h3>
                </div>
                <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Nama Kategori</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach( $produk as $data )
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $data->nama_produk }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->harga_beli }}</td>
                                <td>{{ $data->harga_jual }}</td>    
                                <td>
                                    <form method="POST" action="{{ route('produk.destroy', $data->id_produk) }}">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                            <a href="{{ route('produk.edit', $data->id_produk) }}" class="btn btn-primary">Edit</a>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>    
                                </td>            
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $produk->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
