<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengelola;
use DB;

class PengelolaController extends Controller
{
    //
    public function all(){
        $pengelola = pengelola::all();
        return response()->json($pengelola);
    }

    public function create(Request $request){
        $pengelola = new pengelola;

        $pengelola->username = $request->input('username');
        $pengelola->password = $request->input('password');
        $pengelola->save();

        if($pengelola->save()){
            return response()->json('Created Successful', 201);
        }

        else{
            return response()->json('Failed', 400);
        }
    }
    public function pengelola_tempat()
    {
        $data = DB::table('tempats')->get();

        return view('pengelola/pengelola_tempat',['data'=> $data]);
    }
    public function pengelola_tambahtempat()
    {
        $res = DB::table('pengelolas')->get();
        return view('pengelola/pengelola_tambahtempat',['data'=> $res]);
    }
    public function store(Request $request){
        DB::table('tempats')->insert([
            'IDpengelola' => $request->IDpengelola,
            'IDtempat' => $request->IDtempat,
            'nama_tempat' => $request->nama_tempat,
            'deskripsi_tempat' => $request->deskripsi_tempat,
            'dokumentasi_tempat' => $request->dokumentasi_tempat,
            'kapasitas' => $request->kapasitas,
            'status' => $request->status,
            'biaya' => $request->biaya,
        ]);
        return redirect('/pengelolatempat');
    }
    public function pengelola_reservasi()
    {
        $data = DB::table('reservasis')->get();

        return view('pengelola/pengelola_reservasi',['data'=> $data]);
    }
}
