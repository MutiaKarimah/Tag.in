<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservasi;

class ReservasiController extends Controller
{
    //
    public function all(){
        $reservasi = Reservasi::all();
        return response()->json($reservasi);
    }

    public function create(Request $request){
        $reservasi = new reservasi;

        $reservasi->IDtempat = $request->input('IDtempat');
        $reservasi->IDpengguna = $request->input('IDpengguna');
        $reservasi->lama_reservasi = $request->input('lama_reservasi');
        $reservasi->tanggal_reservasi = $request->input('tanggal_reservasi');

        $reservasi->save();

        if($reservasi->save()){
            return response()->json('Created Successful', 201);
        }

        else{
            return response()->json('Failed', 400);
        }
    }
}
