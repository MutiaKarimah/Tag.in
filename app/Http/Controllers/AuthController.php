<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\User;
use DB;


class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return 'true';
        }
        else{

            return 'false';
        }
    }
            // return redirect()->route('main');
        // }
        // return view('login');
    // }

    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];

        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('main');

        } else { // false

            //Login Fail
            Session::flash('error', 'Email atau password salah');
            // return redirect()->route('login');
            return (Auth::user());
        }

    }

    public function showFormRegister()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $rules = [
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed',
            'name'                  => 'required|min:3|max:35'
        ];

        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password',
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User;
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->name = ucwords(strtolower($request->name));
        $simpan = $user->save();

        if($simpan){
            Session::flash('success', 'Sign Up berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Sign Up gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('signup');
        }

    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        Session::flush();
        return redirect()->route('login');
    }


}