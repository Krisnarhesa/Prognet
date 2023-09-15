<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    function index(Request $request){
        $semuaUser = User::when($request->searchname != null, function($query) use ($request) {
            return $query->where('name', $request->searchname);
        })
        ->when($request->searchis_admin != null, function($query) use ($request) {

            return $query->where('is_admin', $request->searchis_admin);
        })
        ->when($request->searchumur != null, function($query) use ($request) {

            return $query->where('umur', $request->searchumur);
        })
        ->when($request->searchjeniskelamin != null, function($query) use ($request) {

            return $query->where('jeniskelamin', $request->searchjeniskelamin);
        })
        ->when($request->search != null, function($query) use ($request) {
            
            return $query->where('notelp', $request->search);
        })
        ->paginate(10);

    
        return view("report.index", ["semuaUser" => $semuaUser]);
    }

    function admin(Request $request){
        $semuaUser = User::when($request->searchname!= null , function($query) use ($request) {

            return $query->where('name', $request->searchname);
        })
        ->when($request->searchis_admin != null, function($query) use ($request) {

            return $query->where('is_admin', $request->searchis_admin);
        })
        ->when($request->searchumur != null, function($query) use ($request) {

            return $query->where('umur', $request->searchumur);
        })
        ->when($request->searchjeniskelamin != null, function($query) use ($request) {

            return $query->where('jeniskelamin', $request->searchjeniskelamin);
        })
        ->when($request->search != null, function($query) use ($request) {
            
            return $query->where('notelp',  $request->search );
        })
        ->paginate(10);
    
        return view("report.index", ["semuaUser" => $semuaUser]);
    }
}
