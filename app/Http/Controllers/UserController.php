<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use RegistersUsers;
    public function index(){
        $users = User::all();
        $id = Auth::user()->id;

        return view("user.index", ["users" => $users], ["id"=>$id]);
    }
    public function adminUser(){
        $semuaUser = User::latest()->paginate(10);

        return view("user.admin", ["semuaUser" => $semuaPengiriman]);
    }

    public function add(){
        return view('user.add');
    }
    public function processAdd(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->is_admin = $request->input('is_admin');
        $user->umur = $request->input('umur');
        $user->jeniskelamin = $request->input('jeniskelamin');
        $user->alamat = $request->input('alamat');
        $user->notelp = $request->input('notelp');
        $user->save();

        return redirect('/user');
    }

    public function edit($id){
        $user = User::find($id);

        return view('user.edit',["user" => $user ]);
    }

    public function processEdit(Request $request){
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->is_admin = $request->input('is_admin');
        $user->umur = $request->input('umur');
        $user->jeniskelamin = $request->input('jeniskelamin');
        $user->alamat = $request->input('alamat');
        $user->notelp = $request->input('notelp');
        $user->save();

        return redirect('/user');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/user');
    }
}
