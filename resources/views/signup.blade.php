@extends('layout/user')

@section('title', 'Sign Up')

@section('container')

<!-- main-section -->
	<div class="head agile">
	<div class="wthree_head_section">
				<h3 class="w3l_header">Sign <span>Up</span></h3>
			</div>
		<div class="login w3">
            <div class="login-top agileinfo">
                <h2>Silakan daftarkan diri anda!</h2>

                <form action="{{ route('signup') }}" method="post">
                @csrf
                <div>
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Email * </h5>
                            <div class="name">
                                <input type="text" name="email" placeholder="Masukkan Email" required="">
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Password</h5>
                                <input type="password" name="password" placeholder="Masukkan Password" required="">
                        </div>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Ulangi Password</h5>
                                <input type="password" name="password" placeholder="Masukkan Ulang Password" required="">
                        </div>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Nama Lengkap</h5>
                                <input type="text" name="name" placeholder="Masukkan Nama Lengkap" required="">
                        </div>
                    </div>
                    {{-- <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Nomor HP</h5>
                                <input type="number" name="phone" placeholder="Masukkan Nomor HP" required="">
                        </div>
                    </div> --}}
                    <div class="clearfix"></div>
                </div>
                    <div class="aitssubmitw3ls">
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                        {{-- <input type="submit" name="submit" value="Sign Up"> --}}
                    </div>
                </form>
            </div>
		</div>
		<div class="clear"></div>
	</div>
<!-- //main-section -->

@endsection