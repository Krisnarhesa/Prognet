<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;

class PengirimanController extends Controller
{
    public function index(){
        $pengirimans = Pengiriman::all();

        return view("pengiriman.index", ["pengirimans" => $pengirimans]);
    }
    public function add(){
        return view('pengiriman.add');
    }
    public function processAdd(Request $request){
        $pengiriman = new Pengiriman();
        $pengiriman->tanggalkirim = $request->input('tanggalkirim');
        $pengiriman->tanggalsampai = $request->input('tanggalsampai');
        $pengiriman->status = $request->input('status');
        $pengiriman->IDPembelian = $request->input('IDPembelian');
        $pengiriman->save();

        return redirect('/pengiriman');
    }

    public function edit($id){
        $pengiriman = Pengiriman::find($id);

        return view('pengiriman.edit',["pengiriman" => $pengiriman ]);
    }

    public function processEdit(Request $request){
        $pengiriman = Pengiriman::find($request->input('id'));
        $pengiriman->tanggalkirim = $request->input('tanggalkirim');
        $pengiriman->tanggalsampai = $request->input('tanggalsampai');
        $pengiriman->status = $request->input('status');
        $pengiriman->IDPembelian = $request->input('IDPembelian');
        $pengiriman->save();

        return redirect('/pengiriman');
    }

    public function delete($id){
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete();

        return redirect('/pengiriman');
    }
}
