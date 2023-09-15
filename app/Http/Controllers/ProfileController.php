<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    
    public function index(Request $request){
        $user = User::when($request != null, function($query) use ($request) {
            return $query->where('_id', Auth::User()->id);
        })->get();
    return view("profile.index", ["user" => $user]);
}
public function edit($id){
    $user = User::find($id);

    return view('profile.edit',["user" => $user ]);
}

public function processEditProfile(Request $request){
    $user= Auth::User(); // Mengambil pengguna yang sedang login
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->is_admin = $request->input('is_admin');
    $user->umur = $request->input('umur');
    $user->jeniskelamin = $request->input('jeniskelamin');
    $user->alamat = $request->input('alamat');
    $user->notelp = $request->input('notelp');
    $user->save();

    return redirect('/profile');
}
    public function delete($id){
        $user = user::find($id);
        $user->delete();

        return redirect('/profile');
    }
}
