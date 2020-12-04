<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel Agency Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- For Testimonials slider -->
<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="all" />
<!-- //For Testimonials slider -->
<!-- //custom-theme files-->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files-->

<!-- font-awesome-icons -->
<link href="/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<!-- googlefonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!-- //googlefonts -->

<link rel="stylesheet" href="/css/jquery-ui.css" />
<link href="/css/bookingstyle.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
<!-- banner -->
<!-- Top-Bar -->
<div class="top-bar">
	<div class="container">
		<div class="header">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">Tag.in</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-15" id="cl-effect-15">
						<ul class="nav navbar-nav">
							<li><a>Halo, Nama Admin</a></li>
							<li><a href="/login">Log Out</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- //Top-Bar -->

<!-- typography -->
<div class="typo">
    <div class="container">
        <div class="grid_3 grid_5 wthree">
            <div class="col-md-2 w3-agileits">
                <div class="list-group list-group-alternate">
                    <a href="/adminreservasi" class="list-group-item"><span class="badge badge-primary">1</span> <i class="ti ti-email"></i> Reservasi </a>
                    <a href="/admintempat" class="list-group-item"><span class="badge">1</span> <i class="ti ti-eye"></i> Tempat </a>
                    <a href="/adminpengguna" class="list-group-item"><span class="badge">1</span> <i class="ti ti-headphone-alt"></i> Pengguna </a>
                    <a href="/adminpengelola" class="list-group-item"><span class="badge">1</span> <i class="ti ti-comments"></i> Pengelola </a>
                    <a href="/adminadmin" class="list-group-item"><span class="badge">1</span> <i class="ti ti-bookmark"></i> Admin </a>
                    <a href="/adminpengelola/tambah" class="list-group-item"><span class="badge badge-danger"></span> <i class="ti ti-bell"></i> Tambah Pengelola </a>
                </div>
			</div>
		@yield('container')
    </div>
</div>
<!-- //typography -->

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-4 agile_footer_grid">
			<h3>Contact Info</h3>
			<ul class="w3_address">
				<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
				<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
				<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
			</ul>
		</div>
		<div class="col-md-4 agile_footer_grid">
			<h3>About Us</h3>
			<p>Donec purus neque, vulputate id est id, pretium semper enim. Morbi viverra
				congue nisi vel pulvinar posuere sapien eros, sed faucibus.</p>
			<ul class="agileits_social_list">
				<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="col-md-4 agile_footer_grid">
			<h3>Latest News</h3>
			<ul class="agileits_w3layouts_footer_grid_list">
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Donec purus neque, vulputate
						id est id</a>
				</li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Nullam fringilla sed quam vitae</a>
				</li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Cras libero arcu, accumsan ac </a>
				</li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Aenean porttitor accumsan</a>
				</li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Nullam sed turpis gravida</a>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="w3_agileits_footer_grids">
			<div class="col-md-12 wthree_footer_grid_right">
				<h3>Sign up for our Newsletter</h3>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Enter your email..." required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Travel Agency
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<img src="images/1.jpg" alt=" " class="img-responsive" />
				<p>Ut enim ad minima veniam, quis nostrum
					exercitationem ullam corporis suscipit laboriosam,
					nisi ut aliquid ex ea commodi consequatur? Quis autem
					vel eum iure reprehenderit qui in ea voluptate velit
					esse quam nihil molestiae consequatur, vel illum qui
					dolorem eum fugiat quo voluptas nulla pariatur.
					<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
						esse quam nihil molestiae consequatur.</i></p>
			</div>
		</div>
	</div>
</div>
<!-- //bootstrap-modal-pop-up -->
<!-- js -->
<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
<!-- for bootstrap working -->
<script src="/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js -->
<!-- //here starts scrolling icon -->
<script src="/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<!-- here stars scrolling script -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/

		$().UItoTop({ easingType: 'easeOutQuart' });

		});
</script>
<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //scrolling script -->
<!-- responsiveslides -->
<script src="/js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
	// Slideshow 4
	$("#slider3").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		namespace: "callbacks",
		before: function () {
	$('.events').append("<li>before event fired.</li>");
	},
	after: function () {
		$('.events').append("<li>after event fired.</li>");
		}
		});
		});
</script>
<!-- //responsiveslides -->
<!-- stats -->
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!-- FlexSlider-JavaScript -->
<script defer src="/js/jquery.flexslider.js"></script>
<script type="text/javascript">

			$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
		});
	});
</script>
<!-- //FlexSlider-JavaScript -->
<!-- //Calendar -->
<script src="/js/jquery-ui.js"></script>
<script>
	$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
	});
</script>
								<!-- //Calendar -->
<!--script-->
<script src="/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
	});
</script>
</body>
</html>