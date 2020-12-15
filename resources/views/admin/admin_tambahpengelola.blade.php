@extends('admin/layout')

@section('title', 'Tambah Pengelola')

@section('container')

<!-- main-section -->
<div class="head agile">
<div class="wthree_head_section">
            <h3 class="w3l_header">Tambah <span>Pengelola</span></h3>
        </div>
    <div class="login w3">
        <div class="login-top agileinfo">
            <h2>Silakan Masukkan Data Pengelola</h2>
            <form method="post" action="{{url('/admintambahpengelola/store')}}">
                @csrf
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Name</h5>
                        <div class="name @error('name') is-invalid @enderror">
                            <input id="username" type="text" name="username" placeholder="Enter your name" required autocomplete="name" autofocus>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Password</h5>
                        <div class="name @error('password') is-invalid @enderror">
                            <input id="password" type="password" name="password" placeholder="Enter your password" required autocomplete="new-password" >
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Confirm Password</h5>
                            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Re-enter your password" required autocomplete="new-password">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="aitssubmitw3ls">
                    <input type="submit" name="submit" value="Daftar Pengelola">
                </div>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- //main-section -->

@endsection
