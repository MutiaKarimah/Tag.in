@extends('pengguna/layout')

@section('title', 'Tag.in Home')

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
		<div class="wthree_head_section">
			<h3 class="w3l_header">Welcome to <span>Tag.in</span></h3>
			<p>Silakan pilih gedung yang anda inginkan!</p>
			<div class="row">
				<div class="col-lg-3 in-gp-tb">
				</div>
				<div class="col-lg-6 in-gp-tb">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Cari berdasarkan nama tempat">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Cari</button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				<div class="col-lg-3 in-gp-tb">
				</div>
			</div>
		</div>
		<div class="pricing-grids-info">
			@foreach($res as $val)
				<div class="pricing-grid grid-box">
					<div class="w3ls-top">
						<img src="images/g8.jpg" class="img-responsive" alt="">
					</div>
					<div class="w3ls-bottom">

						<ul class="count">
							<h3>{{$val->nama_tempat}}</h3>
							<li>{{$val->kapasitas}} Orang</li>
						</ul>
						<h4><span class="sup">Rp </span>{{$val->biaya}}</h4>
						<div class="more">
							<a href="{{url('/detail/'.$val->IDtempat)}}">Book Now</a>
						</div>
					</div>
				</div>
			@endforeach
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