@extends('pengguna/layout')

@section('title', 'Sign Up')

@section('container')

<!-- main-section -->
<div class="head agile">
<div class="wthree_head_section">
            <h3 class="w3l_header">Sign <span>Up</span></h3>
        </div>
    <div class="login w3">
        <div class="login-top agileinfo">
            <h2>Silakan Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Name</h5>
                        <div class="name @error('name') is-invalid @enderror"">
                            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>E-Mail Address</h5>
                        <div class="name @error('email') is-invalid @enderror">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Ex : yourmail@gmail.com" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Password</h5>
                        <div class="name @error('password') is-invalid @enderror">
                            <input id="password" type="password" name="password" placeholder="Enter your password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                    <input type="submit" name="submit" value="Sign Up">
                </div>
                <center>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                    <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                    </div>
                </div>
                </center>
            </form>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- //main-section -->

@endsection
