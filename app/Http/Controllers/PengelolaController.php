<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengelola;

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
        return view('pengelola/pengelola_tempat');
    }
    public function pengelola_tambahtempat()
    {
        return view('pengelola/pengelola_tambahtempat');
    }
    public function pengelola_reservasi()
    {
        return view('pengelola/pengelola_reservasi');
    }
}
