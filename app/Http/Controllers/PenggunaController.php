<?php

namespace App\Http\Controllers;
use App\Pengguna;
use DB;


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
        // $IDTempat = decrypt($id);

        $tes ['res'] = DB::table('tempats')->get();

        return view('pengguna.main', $tes);

    }
    public function detail(Request $request,$id)
    {
        $IDtempat = ($id);
        $res ['dat'] = DB::table('tempats')->where('IDtempat', $IDtempat)->first();;

        return view('pengguna.detail', $res);

    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function booking()
    {
        return view('pengguna/booking');
    }

    public function index()
    {
        // $IDTempat = decrypt($id);

        $tes ['res'] = DB::table('tempats')->get();

        return view('landing', $tes);
    }
}
