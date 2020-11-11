<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tempat;

class TempatController extends Controller
{
    //
    public function all(){
        $tempat = tempat::all();
        return response()->json($tempat);
    }

    public function create(Request $request){
        $tempat = new tempat;

        $tempat->IDpengelola = $request->input('IDpengelola');
        $tempat->nama_tempat = $request->input('nama_tempat');
        $tempat->deskripsi_tempat = $request->input('deskripsi_tempat');
        $tempat->dokumentasi_tempat = $request->input('dokumentasi_tempat');
        $tempat->kapasitas = $request->input('kapasitas');
        $tempat->status = $request->input('status');
        $tempat->biaya = $request->input('biaya');

        $tempat->save();

        if($tempat->save()){
            return response()->json('Created Successful', 201);
        }

        else{
            return response()->json('Failed', 400);
        }
    }
}
