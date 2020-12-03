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
    public function admin_tempat()
    {
        return view('admin/admin_tempat');
    }
    public function admin_reservasi()
    {
        return view('admin/admin_reservasi');
    }
    public function admin_pengguna()
    {
        return view('admin/admin_pengguna');
    }
    public function admin_pengelola()
    {
        return view('admin/admin_pengelola');
    }
    public function admin_admin()
    {
        return view('admin/admin_admin');
    }
}
