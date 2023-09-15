<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all();

        return view("produk.index", ["produks" => $produks]);
    }
    public function add(){
        return view('produk.add');
    }
    public function processAdd(Request $request){
        $produk = new Produk();
        $produk->produk = $request->input('produk');
        $produk->kategori = $request->input('kategori');
        $produk->stok = $request->input('stok');
        $produk->harga = $request->input('harga');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->save();

        return redirect('/produk');
    }

    public function edit($id){
        $produk = Produk::find($id);

        return view('produk.edit',["produk" => $produk ]);
    }

    public function processEdit(Request $request){
        $produk = Produk::find($request->input('id'));
        $produk->produk = $request->input('produk');
        $produk->kategori = $request->input('kategori');
        $produk->stok = $request->input('stok');
        $produk->harga = $request->input('harga');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->save();

        return redirect('/produk');
    }

    public function delete($id){
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('/produk');
    }
}
