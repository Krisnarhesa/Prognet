<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function index(){
        $pembelians = Pembelian::all();

        return view("pembelian.index", ["pembelians" => $pembelians]);
    }
    public function add(){
        return view('pembelian.add');
    }
    public function processAdd(Request $request){
        $pembelian = new Pembelian();
        $pembelian->IDCustomer = $request->input('IDCustomer');
        $pembelian->totalproduk = $request->input('totalproduk');
        $pembelian->totalpembelian = $request->input('totalpembelian');
        $pembelian->IDAdmin = $request->input('IDAdmin');
        $pembelian->tanggal = $request->input('tanggal');
        $pembelian->status = $request->input('status');
        $pembelian->save();

        return redirect('/pembelian');
    }

    public function edit($id){
        $pembelian = Pembelian::find($id);

        return view('pembelian.edit',["pembelian" => $pembelian ]);
    }

    public function processEdit(Request $request){
        $pembelian = Pembelian::find($request->input('id'));
        $pembelian->IDCustomer = $request->input('IDCustomer');
        $pembelian->totalproduk = $request->input('totalproduk');
        $pembelian->totalpembelian = $request->input('totalpembelian');
        $pembelian->IDAdmin = $request->input('IDAdmin');
        $pembelian->tanggal = $request->input('tanggal');
        $pembelian->status = $request->input('status');
        $pembelian->save();

        return redirect('/pembelian');
    }

    public function delete($id){
        $pembelian = Pembelian::find($id);
        $pembelian->delete();

        return redirect('/pembelian');
    }
}
