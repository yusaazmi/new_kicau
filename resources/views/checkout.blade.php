<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Kicau | Check Out</title>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCut1kbJTdXbPbTN068TCWABqR57w4nfzk"></script>
</head>

<body>
	<style>
		.autocomplete-container {
        /*the container must be positioned relative:*/
        position: relative;
        }

        .autocomplete-container input {
        width: calc(100% - 43px);
        outline: none;
        
        border: 1px solid rgba(0, 0, 0, 0.2);
        padding: 10px;
        padding-right: 31px;
        font-size: 16px;
        }
        .autocomplete-items {
        position: absolute;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0px 2px 10px 2px rgba(0, 0, 0, 0.1);
        border-top: none;
        background-color: #fff;

        z-index: 99;
        top: calc(100% + 2px);
        left: 0;
        right: 0;
        }

        .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        }

        .autocomplete-items div:hover {
        /*when hovering an item:*/
        background-color: rgba(0, 0, 0, 0.1);
        }
        .clear-button {
        color: rgba(0, 0, 0, 0.4);
        cursor: pointer;
        
        position: absolute;
        right: 5px;
        top: 0;

        height: 100%;
        display: none;
        align-items: center;
        }

        .clear-button.visible {
        display: flex;
        }

        .clear-button:hover {
        color: rgba(0, 0, 0, 0.6);
        }
        .autocomplete-items .autocomplete-active {
        /*when navigating through the items using the arrow keys:*/
        background-color: rgba(0, 0, 0, 0.1);
        }
	</style>
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
							<li><a href="{{url('/contact')}}">Kontak</a></li>
							@if(Route::has('login'))
							@auth
							<li><a href="{{ url('/checkout/'.Auth::id()) }}">Check Out</a></li>
							<li><a href="/status">Status</a></li>
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
					<li>Check Out</li>
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
				<h3>Chec<span>kout</span></h3>
				<div class="checkout-right">
					<h4>Your shopping cart contains: <span> Burung</span></h4>
					@if(session('status'))
						<div class="alert alert-success">
							{{session('status')}}
						</div>
					@endif
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>No.</th>
								<th>Gambar Burung</th>
								<th>Jenis Burung</th>
								<th>Harga</th>
                                <th>Nama Toko</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							@php
							$i = 1;	
							@endphp
							@foreach ($cart as $c)
							<tr class="rem1">
								<td class="invert">{{$i}}</td>
								<td class="invert-image"><a href="single.html"><img src="{{asset('src/images/birds/'.$c->gambar)}}" alt=" " class="img-responsive"></a></td>
								<td class="invert">{{$c->jenis_burung}}</td>
								<td class="invert">Rp.{{number_format($c->harga)}}</td>
								<td class="invert">{{($c->seller_name)}}</td>
								<td class="invert">
									<div class="rem">
										{{-- <button class="close1" style="border: none; position:sticky; left:10px;" type="submit"></button> --}}
										<a href="/checkout/delete/{{$c->id}}" class="close1"></a>	
									</div>
								</td>
							</tr>
							@php
								$i++;
							@endphp
							@endforeach	
							<td> </td>
							<td> </td>
							<td> </td>
							@php
								$total1 = 0
							@endphp
							@foreach($cart as $ct)
								@php
									$total1 = $total1 + $ct->harga
								@endphp
							@endforeach
							<td>Rp.{{number_format($total1)}}</td>
							<td> </td>
							<td></td>
						</tbody>
						<th></th>
						<th></th>
						<th>Jumlah</th>
						<th>Total</th>
						<th></th>
						<th></th>
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4>Continue to basket</h4>
						<ul>
							@php
								$total = 0
							@endphp
							@foreach($cart as $ct)
								@php
									$total = $total + $ct->harga
								@endphp
							<li>{{$ct->jenis_burung}} <i>-</i> <span>Rp.{{number_format($ct->harga)}} </span></li>
							@endforeach
							<li>Total Service Charges <i>-</i> <span></span></li>
							<li>Total <i>-</i> <span>Rp.{{number_format($total)}}</span></li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Add a new Details</h4>
						<form action="/checkout/order/payment/{{$c->id_cart}}" method="POST" class="creditly-card-form agileinfo_form">
							@csrf
							{{-- <h2>{{$c->id_cart}}</h2> --}}
							{{-- <input type="hidden" value="{{$c->id_cart}}" name="id_cart"> --}}
							{{-- @foreach ($cart as $ct) --}}
								<input type="hidden" name="id_burung" value="{{$ct->id_burung}}">
								<input type="hidden" name="seller_id" value="{{$ct->seller_id}}">
							{{-- @endforeach --}}
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Nama : </label>
											<p> {{Auth::user()->name}}</p>
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Email:</label>
													<p>{{Auth::user()->email}}</p>
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<div class="form-group">
														<label class="control-label">Lokasi COD: </label>
														{{-- <p>{{$ct->user->alamat}}</p> --}}
														{{-- <input type="text" id="cod" class="form-control" name="cod" value="" placeholder="Ketik lokasi COD.." required> --}}
														<div class="autocomplete-container" id="autocomplete-container"></div>
														<div id="cod"></div>
														<input type="hidden" name="total_price" value="{{$total}}">
													</div>
												</div>
											</div>
											<div class="clear"> </div>
											<div id="test_map"></div>
											<br>
											<button class="submit check_out" type="submit">Buat Pembayaran</button>
										</div>
									</div>
								</div>
								{{-- <iframe src="https://maps.geoapify.com/v1/staticmap?style=osm-carto&width=800&height=400&center=lonlat:106.5693576,-6.3443326&zoom=14&bias=circle:106.5693576,-6.3443326,5000&apiKey=d37474eec7b84b1f9bbd36fc7b46809e" frameborder="0" width="500" height="300"></iframe> --}}
								{{-- <iframe src="https://maps.geoapify.com/v1/staticmap?style=osm-bright-grey&width=600&height=400&center=lonlat:106.5693576,-6.3443326&zoom=16.231&marker=lonlat:106.5693576,-6.3443326;type:material;color:%231f63e6;size:x-large;icon:cloud;icontype:awesome;text:1;whitecircle:no&apiKey=d37474eec7b84b1f9bbd36fc7b46809e" frameborder="0" width="500" height="300"></iframe> --}}
							</section>
						</form>
						
						{{-- <div class="checkout-right-basket">
							<a href="payment.html">Make a Payment </a>
						</div> --}}
						<br>
					</div>

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //top products -->
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
		<!-- /newsletter-->
		<!-- //newsletter-->
		<!-- footer -->
		<div class="footer_agileinfo_w3">
			<div class="footer_inner_info_w3ls_agileits">
				<div class="col-md-3 footer-left">
					<h2><a href="index.html"><span>K</span>icau.com </a></h2>
					<p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
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
						<div class="col-md-4 sign-gd">
							<h4>Our <span>Information</span> </h4>
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="404.html">Services</a></li>
								<li><a href="404.html">Short Codes</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>

						<div class="col-md-5 sign-gd-two">
							<h4>Store <span>Information</span></h4>
							<div class="address">
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Phone Number</h6>
										<p>+1 234 567 8901</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Email Address</h6>
										<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Location</h6>
										<p>Broome St, NY 10002,California, USA.

										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 sign-gd flickr-post">
							<h4>Flickr <span>Posts</span></h4>
							<ul>
								<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

				<p class="copy-right-w3ls-agileits">&copy 2021 Kicau. All rights reserved | Design by <a href="http://w3layouts.com/">w3layouts</a></p>
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
    <script>
		var searchInput = 'cod';
		$(document).ready(function(){
			var autocomplete;
			autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)),{
				types: ['geocode'],

			});
			google.maps.event.addListener(autocomplete,'place_changed',function(){
				var near_place = autocomplete.getPlace();
			});
		});

	</script>
	<script>
        function addressAutocomplete(containerElement, callback, options) {
            // create input element
            var inputElement = document.createElement("input");
            inputElement.setAttribute("type", "text");
			inputElement.name = "cod";
			inputElement.id = "id_cod";
            inputElement.setAttribute("placeholder", "Enter an address here");
            containerElement.appendChild(inputElement);
            var currentItems;

            /* Active request promise reject function. To be able to cancel the promise when a new request comes */
            var currentPromiseReject;
            var clearButton = document.createElement("div");
			var clearMap = document.getElementById("test_map");
            clearButton.classList.add("clear-button");
            addIcon(clearButton);
            clearButton.addEventListener("click", (e) => {
                e.stopPropagation();
                inputElement.value = '';
				clearMap.innerHTML = '';
                callback(null);
                clearButton.classList.remove("visible");
                closeDropDownList();
            });
            inputElement.parentNode.appendChild(clearButton);
            /* Execute a function when someone writes in the text field: */
            inputElement.addEventListener("input", function(e) {
            var currentValue = this.value;

            // Cancel previous request promise
            if (currentPromiseReject) {
                currentPromiseReject({
                canceled: true
                });
            }

            if (!currentValue) {
                clearButton.classList.remove("visible");
                return false;
            }
            clearButton.classList.add("visible");
            /* Create a new promise and send geocoding request */
            var promise = new Promise((resolve, reject) => {
                currentPromiseReject = reject;

                var apiKey = "d37474eec7b84b1f9bbd36fc7b46809e";
                var url = `https://api.geoapify.com/v1/geocode/autocomplete?text=${encodeURIComponent(currentValue)}&limit=5&apiKey=${apiKey}`;

                if (options.type) {
                    url += `&type=${options.type}`;
                }

                fetch(url)
                .then(response => {
                    // check if the call was successful
                    if (response.ok) {
                    response.json().then(data => resolve(data));
                    } else {
                    response.json().then(data => reject(data));
                    }
                });
            });

            promise.then((data) => {
                currentItems = data.features;
                currentPromiseReject;

                var autocompleteItemsElement = document.createElement("div");
                autocompleteItemsElement.setAttribute("class", "autocomplete-items");
                containerElement.appendChild(autocompleteItemsElement);

                data.features.forEach((feature, index) => {
                    /* Create a DIV element for each element: */
                    var itemElement = document.createElement("DIV");
                    /* Set formatted address as item value */
                    itemElement.innerHTML = feature.properties.formatted;
                    autocompleteItemsElement.appendChild(itemElement);

                    itemElement.addEventListener("click", function(e) {
                    inputElement.value = currentItems[index].properties.formatted;
                    callback(currentItems[index]);
                    /* Close the list of autocompleted values: */
                    closeDropDownList();
                    });
                    autocompleteItemsElement.appendChild(itemElement);
                });
                // we will process data here
            }, (err) => {
                if (!err.canceled) {
                console.log(err);
                }
                });
            });
            inputElement.addEventListener("keydown", function(e) {
            var autocompleteItemsElement = containerElement.querySelector(".autocomplete-items");
            if (autocompleteItemsElement) {
            var itemElements = autocompleteItemsElement.getElementsByTagName("div");
            if (e.keyCode == 40) {
                e.preventDefault();
                /*If the arrow DOWN key is pressed, increase the focusedItemIndex variable:*/
                focusedItemIndex = focusedItemIndex !== itemElements.length - 1 ? focusedItemIndex + 1 : 0;
                /*and and make the current item more visible:*/
                setActive(itemElements, focusedItemIndex);
            } else if (e.keyCode == 38) {
                e.preventDefault();

                /*If the arrow UP key is pressed, decrease the focusedItemIndex variable:*/
                focusedItemIndex = focusedItemIndex !== 0 ? focusedItemIndex - 1 : focusedItemIndex = (itemElements.length - 1);
                /*and and make the current item more visible:*/
                setActive(itemElements, focusedItemIndex);
            } else if (e.keyCode == 13) {
                /* If the ENTER key is pressed and value as selected, close the list*/
                e.preventDefault();
                if (focusedItemIndex > -1) {
                closeDropDownList();
                }
            }
            } else {
            if (e.keyCode == 40) {
                /* Open dropdown list again */
                var event = document.createEvent('Event');
                event.initEvent('input', true, true);
                inputElement.dispatchEvent(event);
            }
            }
        });
            function closeDropDownList() {
                var autocompleteItemsElement = containerElement.querySelector(".autocomplete-items");
                if (autocompleteItemsElement) {
                containerElement.removeChild(autocompleteItemsElement);
                }
                focusedItemIndex = -1;
            }
            function addIcon(buttonElement) {
                var svgElement = document.createElementNS("http://www.w3.org/2000/svg", 'svg');
                svgElement.setAttribute('viewBox', "0 0 24 24");
                svgElement.setAttribute('height', "24");

                var iconElement = document.createElementNS("http://www.w3.org/2000/svg", 'path');
                iconElement.setAttribute("d", "M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z");
                iconElement.setAttribute('fill', 'currentColor');
                svgElement.appendChild(iconElement);
                buttonElement.appendChild(svgElement);
            }
            function setActive(items, index) {
                if (!items || !items.length) return false;

                for (var i = 0; i < items.length; i++) {
                items[i].classList.remove("autocomplete-active");
                }

                /* Add class "autocomplete-active" to the active element*/
                items[index].classList.add("autocomplete-active");

                // Change input value and notify
                inputElement.value = currentItems[index].properties.formatted;
                callback(currentItems[index]);
            }
            document.addEventListener("click", function(e) {
                if (e.target !== inputElement) {
                closeDropDownList();
                } else if (!containerElement.querySelector(".autocomplete-items")) {
                // open dropdown list again
                var event = document.createEvent('Event');
                event.initEvent('input', true, true);
                inputElement.dispatchEvent(event);
                }
            });
        }
        addressAutocomplete(document.getElementById("autocomplete-container"), (data) => {
        console.log("Selected option: ");
        console.log(data['properties']['lon']);
        console.log(data['properties']['lat']);
		var apis = "d37474eec7b84b1f9bbd36fc7b46809e";
		// $("#test_map").append("<iframe src='https://maps.geoapify.com/v1/staticmap?style=osm-bright-grey&width=600&height=400&center=lonlat:"+data[properties][lon]+","+data[properties][lon]+"&zoom=16.231&marker=lonlat:"+data[properties][lon]+","+data[properties][lon]+";type:material;color:%231f63e6;size:x-large;icon:cloud;icontype:awesome;text:1;whitecircle:no&apiKey=d37474eec7b84b1f9bbd36fc7b46809e' frameborder='0' width='500' height='300'></iframe>");
		document.getElementById("test_map").innerHTML += "<iframe src='https://maps.geoapify.com/v1/staticmap?style=osm-bright-grey&width=600&height=400&center=lonlat:"+data["properties"]["lon"]+","+data["properties"]["lat"]+"&zoom=16.231&marker=lonlat:"+data["properties"]["lon"]+","+data["properties"]["lat"]+";type:material;color:%231f63e6;size:x-large;icon:cloud;icontype:awesome;whitecircle:no&apiKey=d37474eec7b84b1f9bbd36fc7b46809e' frameborder='0' width='900' height='500'></iframe>";
		
		document.getElementById("cod").innerHTML += "<input type='hidden' name='cod' value='https://maps.geoapify.com/v1/staticmap?style=osm-bright-grey&width=600&height=400&center=lonlat:"+data["properties"]["lon"]+","+data["properties"]["lat"]+"&zoom=16.231&marker=lonlat:"+data["properties"]["lon"]+","+data["properties"]["lat"]+";type:material;color:%231f63e6;size:x-large;icon:cloud;icontype:awesome;text:1;whitecircle:no&apiKey=d37474eec7b84b1f9bbd36fc7b46809e'>"
        }, {
            placeholder: "Enter an address here"
        });
        // addressAutocomplete(document.getElementById("autocomplete-container"));
        addressAutocomplete(document.getElementById("autocomplete-container-country"), (data) => {
        console.log("Selected country: ");
        console.log(data);
        }, {
            placeholder: "Enter a country name here",
        type: "country"
        });

        addressAutocomplete(document.getElementById("autocomplete-container-city"), (data) => {
        console.log("Selected city: ");
        console.log(data);
        }, {
            placeholder: "Enter a city name here"
        });
    </script>
</body>

</html>