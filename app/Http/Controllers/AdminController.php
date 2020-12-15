<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;
use App\Pengelola;
use App\Tempat;

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
        $users = DB::table('tempats')->get();

        return view('admin/admin_tempat',['users' => $users]);
    }
    public function admin_reservasi()
    {
        $users = DB::table('reservasis')->get();

        return view('admin/admin_reservasi',['users' => $users]);
    }
    public function admin_pengguna()
    {
        $ses = DB::table('penggunas')->get();

        return view('admin/admin_pengguna', ['ses' => $ses]);
    }
    public function admin_pengelola()
    {
        $data = DB::table('pengelolas')->get();

        return view('admin/admin_pengelola',['data'=> $data]);
    }
    public function admin_admin()
    {
        $users = DB::table('admins')->get();

        return view('admin/admin_admin',['users' => $users]);
    }
    public function admin_tambahpengelola()
    {
        return view('admin/admin_tambahpengelola');
    }
    public function store(Request $request){
        DB::table('pengelolas')->insert([
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return redirect('/adminpengelola');
    }
}
