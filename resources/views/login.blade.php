@extends('layout/user')

@section('title', 'Login')

@section('container')

<!-- main-section -->
	<div class="head agile">
	<div class="wthree_head_section">
				<h3 class="w3l_header">Log <span>In</span></h3>
			</div>
		<div class="login w3">
			<div class="login-top agileinfo">
                <h2>Silakan Log In</h2>
                <form method="post" action="{{ route('login') }}">
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
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Email * </h5>
                            <div class="name">
                                <input id="email" type="email" name="email" placeholder="Ex : yourmail@gmail.com" required="">
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Password </h5>
                                <input type="password" name="password" placeholder="Enter your password" required="">
                        </div>
                    </div>
                    </div>
                        <div class="clearfix"></div>
                        <div class="aitssubmitw3ls">
                            <input type="submit" name="submit" value="Log In">
                        </div>
                        <center>
                        Belum punya akun?
                        <a href="{{ route('signup') }}">
                            Sign up
                        </center>
                </form>
			</div>
		</div>
		<div class="clear"></div>
	</div>
<!-- //main-section -->

@endsection