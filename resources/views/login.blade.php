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
                <form action="#" method="post">
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <div class="agileits_grid">
                            <h5>Email * </h5>
                            <div class="name">
                                <input type="email" name="email" placeholder="Ex : yourmail@gmail.com" required="">
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
                        <div class="clearfix"></div>
                        <div class="aitssubmitw3ls">
                            <input type="submit" name="submit" value="Log In">
                        </div>
                </form>
			</div>
		</div>
		<div class="clear"></div>
	</div>
<!-- //main-section -->

@endsection