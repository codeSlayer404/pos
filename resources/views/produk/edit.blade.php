@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="border:1px solid lightgray;padding :20px;">
                    <div class="panel-heading" style="margin:-20px -20px 0px -20px ;border-bottom:1px solid lightgray;background-color:rgba(0,0,0,0.4); padding: 20px 0px 10px 20px;color:whitesmoke;">
                        <h4>Edit Produk</h4>
                    </div>
                    <div class="panel-body" style="margin-top:15px">
                        <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST" role="form" class="form-horizontal">
                                {{ csrf_field() }} {{ method_field('PATCH') }}
    
                                @if( $errors->any() )
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach( $errors->all() as $error )
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
    
                                
    
                                <div class="form-group" style="margin:auto">
                                    <label for="nama" class="col-lg-12 col-md-6 control-label">Nama Produk</label>
                                    <div class="col-lg-12 col-md-6">
                                        <input value="{{ $produk->nama_produk }}" id="nama" type="text" class="form-control" name="nama" autofocus>
                                    </div>
                                </div><br>
    
                                <div class="form-group">
                                    <label for="kategori" class="col-lg-12 col-md-6 control-label">Kategori</label>
                                    <div class="col-lg-12 col-md-6">
                                        <select name="kategori" id="kategori" class="form-control">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach( $kategori as $list )
                                                <option value="{{ $list->id_kategori }}" {{ $produk->id_kategori==$list->id_kategori? 'selected' : '' }}>{{ $list->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label for="beli" class="col-md-6 control-label">Harga Beli</label>
                                    <div class=" col-md-6">
                                        <input value="{{ $produk->harga_beli }}" id="beli" type="number" class="form-control" name="beli" autofocus>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label for="jual" class="col-md-6 control-label">Harga Jual</label>
                                    <div class=" col-md-6">
                                        <input value="{{ $produk->harga_jual }}" id="jual" type="number" class="form-control" name="jual" autofocus>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <div class="col-md-3 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ url('produk') }}" class="btn btn-warning">Batal</a>
                                    </div>
                                </div>
    
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection