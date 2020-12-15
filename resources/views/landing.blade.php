@extends('pengguna.layout')

@section('title', 'Welcome to Tag.in')

@section('container')

<div class="banner">
	<div class="banner-dott1">
		<div class="w3-banner">
			<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">

							<h3>Mau cari tempat buat acara?</h3>
							<p>Located in SEC 24, TWP 58 N., 101 W., in Park County, WY.
								A part of Record of Survey # 2008-3512 in Cabinet J, Page 19, Park
								County Records.</p>
								<a href="detail" class="read-agileits">View Details</a>
						</div>
					</li>
					<li>
						<div class="banner-text">

							<h3>Butuh tempat buat nikahan?</h3>
							<p>Located in SEC 24, TWP 58 N., 101 W., in Park County, WY.
								A part of Record of Survey # 2008-3512 in Cabinet J, Page 19, Park
								County Records.</p>
								<a href="detail" class="read-agileits">View Details</a>
						</div>
					</li>
					<li>
						<div class="banner-text">

							<h3>Cari lokasi buat seminar?</h3>
							<p>Located in SEC 24, TWP 58 N., 101 W., in Park County, WY.
								A part of Record of Survey # 2008-3512 in Cabinet J, Page 19, Park
								County Records.</p>
								<a href="detail" class="read-agileits">View Details</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</div>
</div>

<!-- pricing -->
<div class="w3ls-section wthree-pricing" id="pricing">
	<div class="container">
		<div class="w3ls-section wthree-pricing" id="pricing">
			<div class="container">
				<div class="wthree_head_section">
					<h3 class="w3l_header">Welcome to <span>Tag.in</span></h3>
					<p>Silakan Login Terlebih Dahulu untuk Memilih Gedung!</p>
				</div>
			</div>
		</div>

		<div class="pricing-grids-info">
			<div class="pricing-grid grid-box">
				<div class="w3ls-top">
					<img src="images/g8.jpg" class="img-responsive" alt="">
				</div>
				<div class="w3ls-bottom">
					<ul class="count">
						<h3>PSBJ</h3>
						<li>100 Orang</li>
					</ul>
					<h4><span class="sup">Rp</span> 300000</h4>
					<div class="more">
						<a href="/detail">Book Now</a>
					</div>
				</div>
			</div>
		<div class="pricing-grid grid-box">
				<div class="w3ls-top">
					<img src="images/g5.jpg" class="img-responsive" alt="">
				</div>
				<div class="w3ls-bottom">
					<ul class="count">
						<h3>PPBS</h3>
						<li>200 Orang</li>
					</ul>
					<h4><span class="sup">Rp</span> 100000</h4>
					<div class="more">
						<a href="/detail">Book Now</a>
					</div>
				</div>
			</div>
			<div class="zb pricing-grid grid-box">
				<div class="w3ls-top">
					<img src="images/g11.jpg" class="img-responsive" alt="">
				</div>
				<div class="w3ls-bottom">
					<ul class="count">
						<h3>Bale Santika</h3>
						<li>500 Orang</li>
					</ul>
					<h4><span class="sup">Rp</span> 500000</h4>
					<div class="more">
						<a href="/detail">Book Now</a>
					</div>
				</div>
			</div>
			<div class="pricing-grid grid-box">
				<div class="w3ls-top">
					<img src="images/g8.jpg" class="img-responsive" alt="">
				</div>
				<div class="w3ls-bottom">
					<ul class="count">
						<h3>Bale Wilasa</h3>
						<li>300 Orang</li>
					</ul>
					<h4><span class="sup">Rp</span> 900000</h4>
					<div class="more">
						<a href="/detail">Book Now</a>
					</div>
				</div>
			</div>
		<div class="pricing-grids-info">

			{{-- @foreach($res as $val)
				<div class="pricing-grid grid-box">
					<div class="w3ls-top">
						<img src="images/g8.jpg" class="img-responsive" alt="">
					</div>
					<div class="w3ls-bottom">

						<ul class="count">
							<h3>{{$val->nama_tempat}}</h3>

						</ul>
						<h4> {{$val->kapasitas}}<span class="sup"></span> </h4>
						<div class="more">
							<a href="{{url('/detail/'.$val->IDtempat)}}">Book Now</a>
						</div>
					</div>
				</div>
			@endforeach --}}
			<div class="clearfix"> </div>
			<!--End-slider-script-->
		</div>
	</div>
</div>

<div class="clients">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">What People  <span>Say</span></h3>
			<p>Tag.in adalah website yang menyediakan layanan terkait pemesanan ruangan/tempat kepada publik atas nama pegelola gedung sendiri tanpa perantara.</p>
		</div>


		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="images/c1.jpg" alt="" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
							<div class="client">
								<h5>Mutia Karimah</h5>
							</div>
					</li>
					<li>
						<img src="images/c2.jpg" alt="" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
							<div class="client">
								<h5>Azka Kasyfi Zulkifli</h5>
							</div>
					</li>
					<li>
						<img src="images/c3.jpg" alt="" />
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
							<div class="client">
								<h5>Felia Sri Indriyani</h5>
							</div>
					</li>
				</ul>
			</div>
		</section>
	</div>
</div>

@endsection