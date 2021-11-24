<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Kicau | Check Out - Status</title>
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
	{{-- data client --}}
	<script type="text/javascript"
	src="https://app.sandbox.midtrans.com/snap/snap.js"
	data-client-key="SB-Mid-client-RKWwqAWnG_Q3pkK3"></script>
	<!-- //custom-theme -->
	<link href="{{url('src/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{url('src/css/shop.css')}}" type="text/css" media="screen" property="" />
	<link href="{{url('src/css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('src/css/checkout.css')}}">
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
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="{{url('/dashboard')}}"><span>Burung</span> <i>Kicau</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
					<nav>
						<ul>
							<li><a href="{{url('/')}}" class="active">Beranda</a></li>
							<li><a href="{{url('/about')}}">Tentang kami</a></li>
							<li><a href="{{ url('/bird') }}">Pesan sekarang</a></li>
							<li><a href="{{ url('/checkout') }}">Check Out</a></li>
							<li><a href="{{url('/contact')}}">Kontak</a></li>
							@if(Route::has('login'))
							@auth
							<li><a href="{{ url('/checkout/'.Auth::id()) }}">Check Out</a></li>
							<li>
								<a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
								class="fa fa-power-off me-1 ms-1"></i> Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</li>
							@else
							<li><a href="{{route('login')}}">Login</a></li>
							@endauth
							@endif
							</li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">
				<ul class="short">
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Check Out - Pembayaran</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3><span> Pembayaran</span></h3>
				<div class="checkout-right" style="margin-bottom:5px;">
					<h4>Nama Pembeli : <span>{{$order->name}} < {{$order->email}} ></span></h4> 
					<h4>Nama Penjual : <span>{{$seller->name}}</span></h4>
					<h4><span></span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>No.</th>
								<th>Jenis Burung</th>
								<th>Total Bayar</th>
								<th>Bayar</th>
							</tr>
						</thead>
						<tbody>
							@php
								$i=1;
							@endphp
							<tr class="rem1">
								<td class="invert">{{$i}}</td>
								<td class="invert">{{$order->jenis_burung}}</td>
								<td class="invert">Rp.{{$order->harga}}</td>
								<td class="invert">
									<button class="btn btn-primary btn-lg" id="pay-button">Make Payment</button>
								</td>
								
								{{-- <td><img src="{{url('src/bukti_transfer/'.$c->file)}}" alt=""></td> --}}
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<br>
			<div class="row mt-4">
				<div class="d-flex flex-row-reverse">
					<div class="p-2">
					</div>
				</div>
			</div>
		</div>
		<!-- //top products -->
<br>

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
	<!-- /nav -->
	<script src="{{url('src/js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{url('src/js/classie.js')}}"></script>
	<script src="{{url('src/js/demo1.js')}}"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="{{url('src/js/search.js')}}"></script>
	<!--//search-bar-->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
{{-- kurang redirect update status --}}
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
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();
            snap.pay('{{ $snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                    // location.href = 'http://www.google.com'
                    window.location.href = '/payment/redirect/{{$snap_token}}';
					
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                    window.location.href = '/payment/redirect/{{$snap_token}}';

                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                    window.location.href = '/payment/redirect/{{$snap_token}}';
                }
            });
        });
    </script>

</body>

</html>
