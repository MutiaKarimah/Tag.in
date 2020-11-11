<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    //
    public function all(){
        $admin = admin::all();
        return response()->json($admin);
    }

    public function create(Request $request){
        $admin = new admin;

        $admin->username = $request->input('username');
        $admin->password = $request->input('password');

        $admin->save();

        if($admin->save()){
            return response()->json('Created Successful', 201);
        }

        else{
            return response()->json('Failed', 400);
        }
    }
}
