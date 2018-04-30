<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk ;
use App\Kategori ;

use Redirect ;

class produkController extends Controller
{
    protected $pesan = array(
        'nama.required' => 'Isi nama produk!' ,
        'kategori.required' => 'Pilih kategori!' ,
        'beli.required' => 'Isi harga beli!' ,
        'jual.required' => 'Isi harga jual!' ,       
    ) ;
    protected $aturan = array(
        'nama' => 'required',
        'kategori' => 'required',
        'beli' => 'required',
        'jual' => 'required',
    ) ;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 5 ;
        $produk = Produk::join('kategori', 'kategori.id_kategori', '=', 'produk.id_kategori')->orderBy('produk.id_produk', 'desc')->paginate($batas) ;

        $no = $batas * ( $produk->currentPage() - 1 ) ;

        return view('produk.index', compact('produk', 'no')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all() ;
        return view('produk.create', compact('kategori')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, $this->aturan, $this->pesan) ;

        $produk = new Produk ;
        $produk->nama_produk = $request['nama'] ;
        $produk->id_kategori = $request['kategori'] ;
        $produk->harga_beli = $request['beli'] ;
        $produk->harga_jual = $request['jual'] ;
        $produk->save() ;

        return Redirect::route('produk.index') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all() ;
        $produk = Produk::find($id) ;

        return view('produk.edit', compact('kategori', 'produk')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request, $this->aturan, $this->pesan ) ;

        $produk = Produk::find($id) ;
        $produk->nama_produk = $request['nama'] ;
        $produk->id_kategori = $request['kategori'] ;
        $produk->harga_beli = $request['beli'] ;
        $produk->harga_jual = $request['jual'] ;
        $produk->update() ;

        return Redirect::route('produk.index') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id) ;
        $produk->delete() ;
        return Redirect::route('produk.index') ;
    }
}
