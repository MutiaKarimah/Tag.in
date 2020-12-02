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

                <form action="#" method="post">
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Username * </h5>
                            <div class="name">
                                <input type="text" name="username" placeholder="Masukkan Username" required="">
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
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Nomor HP</h5>
                                <input type="number" name="phone" placeholder="Masukkan Nomor HP" required="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="aitssubmitw3ls">
                        <input type="submit" name="submit" value="Sign Up">
                    </div>
                </form>
            </div>
		</div>
		<div class="clear"></div>
	</div>
<!-- //main-section -->

@endsection