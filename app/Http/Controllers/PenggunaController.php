<?php

namespace App\Http\Controllers;
use App\Pengguna;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    //
    public function all(){
        $pengguna = pengguna::all();
        return response()->json($pengguna);
    }

    public function create(Request $request){
        $pengguna = new pengguna;

        $pengguna->username = $request->input('username');
        $pengguna->password = $request->input('password');
        $pengguna->nama_lengkap = $request->input('nama_lengkap');
        $pengguna->nohp = $request->input('nohp');

        $pengguna->save();

        if($pengguna->save()){
            return response()->json('Created Successful', 201);
        }

        else{
            return response()->json('Failed', 400);
        }
    }
    public function main()
    {
        return view('layout/main');
    }
    public function detail()
    {
        return view('layout/detail');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
}
