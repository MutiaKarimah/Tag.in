<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservasi;
use DB;

class ReservasiController extends Controller
{
    //
    public function all(){
        $reservasi = Reservasi::all();
        return response()->json($reservasi);
    }

    public function create(Request $request)
    {
        DB::table('reservasis')->insert([
            'IDtempat' => $request->IDtempat,
            'IDpengguna' => $request->IDpengguna,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'lama_reservasi' => $request->lama_reservasi
        ]);
        return redirect('/main');
    }
}
