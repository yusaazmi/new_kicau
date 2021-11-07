<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Kicau</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="{{url('src/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{url('src/css/shop.css')}}" type="text/css" media="screen" property="" />
	<link href="{{url('src/css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('src/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="{{url('src/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top" id="home">
		<div class="wrapper_top_w3layouts">

			<div class="header_agileits">
				<div class="logo">
					<h1><a class="navbar-brand" href="{{url('/')}}"><span>Burung</span> <i>Kicau</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="{{url('/')}}" class="active">Beranda</a></li>
							{{-- @if(Route::has('login'))
								@auth
								@if(count($notif) != 0)
								<li><a href="{{url('/notification')}}">Notifikasi <span class="badge badge-danger">{{count($notif)}}</span></a></li>									
								@else
								<li><a href="">Notifikasi <span class="badge badge-danger"></span></a></li>				
								@endif					
								@endauth
							@endif	 --}}
							<li><a href="{{url('/about')}}">Tentang kami</a></li>
							<li><a href="{{ url('/bird') }}">Pesan sekarang</a></li>
							<li><a href="{{ url('/checkout') }}">Check Out</a></li>
							<li><a href="{{url('/contact')}}">Kontak</a></li>
							<li><a href="{{route('login')}}">Login</a></li>
							
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- search -->
				<div class="search_w3ls_agileinfo">
					<div class="cd-main-header">
						<ul class="cd-header-buttons">
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>
					</div>
					<div id="cd-search" class="cd-search">
						<form action="{{url('/search')}}" method="GET">
							<input name="search" type="text" placeholder="Click enter after typing...">
						</form>
					</div>
				</div>
				<!-- //search -->

				<div class="clearfix"></div>
			</div>
			<!-- /slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="banner-top2">
								<div class="banner-info-wthree">
									<h3>Kacer</h3>
									<p>Kicauannya selalu bernada riang dan gemar menirukan suara burung lain.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-top3">
								<div class="banner-info-wthree">
									<h3>Kolibri</h3>
									<p>Burung ini juga mempunyai rekor kepakan sayap tercepat di dunia.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-top">
								<div class="banner-info-wthree">
									<h3>Murai Batu</h3>
									<p>Kucica Hutan juga dikenal sebagai Murai Batu termasuk ke dalam famili Muscicapidae atau burung cacing.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-top1">
								<div class="banner-info-wthree">
									<h3>Love Bird</h3>
									<p>Satu burung dari sembilan jenis spesies genus Agapornis.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //slider -->
			<ul class="top_icons">
				<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

			</ul>
		</div>
	</div>
	<!-- //banner -->
	<!-- /girds_bottom-->
	<div class="grids_bottom">
		<div class="style-grids">
			<div class="col-md-6 style-grid style-grid-1">
				<img src="{{url('src/images/burung10.jpg')}}" alt="shoe">
			</div>
		</div>
		<div class="col-md-6 style-grid style-grid-2">
			<div class="style-image-1_info">
				<div class="style-grid-2-text_info">
					<h3>Burung Kolibri</h3>
					<p>Keistimewaan burung Kolibri tidak hanya terletak pada ukuran saja. Burung ini juga mempunyai rekor kepakan sayap tercepat di dunia.</p>
					<div class="shop-button">
						<a href="{{url('/bird')}}">Beli Sekarang</a>
					</div>
				</div>
			</div>
			<div class="style-image-2">
				<img src="{{url('src/images/burung34.png')}}" alt="shoe">
				<div class="style-grid-2-text">
					<h3>Burung Kecer</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
	<!-- //grids_bottom-->
	<!-- /girds_bottom2-->
	<div class="grids_sec_2">
		<div class="style-grids_main">
			<div class="col-md-6 grids_sec_2_left">
				<div class="grid_sec_info">
					<div class="style-grid-2-text_info">
						<h3>Cucak Rowo</h3>
						<p>Cucak rawa adalah sejenis burung pengicau dari suku Pycnonotidae. Burung ini juga dikenal umum sebagai krakau, nama di Kapuas Hulu, Kalbar, cucakrawa, cangkurawah, dan barau-barau.</p>
						<div class="shop-button">
							<a href="{{url('/bird')}}">Beli Sekarang</a>
						</div>
					</div>
				</div>
				<div class="style-image-2">
					<img src="{{url('src/images/b11.png')}}" alt="shoe">
					<div class="style-grid-2-text">
						<h3></h3>
					</div>
				</div>
			</div>
			<div class="col-md-6 grids_sec_2_left">

				<div class="style-image-2">
					<img src="{{url('src/images/b12.jpg')}}" alt="shoe">
					<div class="style-grid-2-text">
						<h3></h3>
					</div>
				</div>
				<div class="grid_sec_info last">
					<div class="style-grid-2-text_info">
						<h3>Murai Api</h3>
						<p>Burung murai atau shamas merupakan burung pemakan serangga berukuran sedang dalam genus Copsychus. Burung jenis ini banyak ditemukan di area taman dan hutan di Afrika dan Asia. </p>
						<div class="shop-button two">
							<a href="{{url('/bird')}}">Beli Sekarang</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //grids_bottom2-->
	<!-- /Properties -->
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Birds</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1" class=""></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb8.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb9.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb10.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb11.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb11.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb10.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb9.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{url('src/images/gb8.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
				<!-- The Modal -->

			</div>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!--//banner -->

	<!-- /newsletter-->
	<!-- //newsletter-->
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><span>K</span>icauku </a></h2>
				<p>Kicauku merupakan perusahaan perdagangan elektronik yang berfokus pada penjualan burung</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-6 sign-gd">
						<h4>Informasi <span>Kami</span></h4>
						<ul>
							<li><a href="{{url('/')}}">Beranda</a></li>
							<li><a href="{{url('/about')}}">Tentang Kami</a></li>
							<li><a href="{{url('/contact')}}">Kontak</a></li>
						</ul>
					</div>

					<div class="col-md-6 sign-gd-two">
						<h4>Informasi <span>Toko</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Nomor Telfon</h6>
									<p>082140603663</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Alamat Email</h6>
									<p>Email :<a href="mailto:example@email.com">kicau@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Lokasi</h6>
									<p>Jln Welahan km 05 Desa Limbangan, Wonosobo

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2021 Kicauku. All rights reserved</p>
		</div>
	</div>
	</div>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="{{url('src/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->
	<!-- /nav -->
	<script src="{{url('src/js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{url('src/js/classie.js')}}"></script>
	<script src="{{url('src/js/demo1.js')}}"></script>
	<!-- //nav -->
	<!-- cart-js -->
	<script src="{{url('src/js/minicart.js')}}"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!--search-bar-->
	<script src="{{url('src/js/search.js')}}"></script>
	<!--//search-bar-->
	<script src="{{url('src/js/responsiveslides.min.js')}}"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
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
	<!-- js for portfolio lightbox -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{url('src/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{url('src/js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->

	<script type="text/javascript" src="{{url('src/js/bootstrap-3.1.1.min.js')}}"></script>


</body>

</html>