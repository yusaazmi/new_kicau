@extends('layouts.header')
@section('title','Kicau | Burung')
@section('page','shop')
@section('container')


	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Cari disini</h3>
					<form action="{{url('/search')}}" method="get">
						<input type="search" placeholder="Jenis Burung..." name="search" required="">
						<input type="submit" value=" ">
					</form>
					<div class="">
						<a href="{{url('/popular')}}" class="badge badge-primary">Terpopuler</a>
					</div>
				</div>
				<!-- price range -->
				{{-- <div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>
							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div> --}}
				<!-- //price range -->
				<!--preference -->
			</div>
			<!-- //product left -->
			<!-- product right -->
			
			<div class="left-ads-display col-md-9">
				@if(session('status'))
						<div class="alert alert-success">
							{{session('status')}}
						</div>
					@endif
				<div class="wrapper_top_shop">
					<div class="clearfix"></div>
					<!-- product-sec1 -->
					<div class="product-sec1">
						<!--/mens-->
                        @foreach ($bird as $b)
						<div class="col-md-4 product-men women_two">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="{{asset('src/images/birds/'.$b->gambar)}}" style="width:235px;height:248px;" alt="">
										{{-- <span>{{$trimmed}}</span> --}}
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="bird/detail/{{$b->id}}" class="link-product-add-cart">Lihat</a>
											</div>
										</div>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="bird/detail/{{$b->id}}">{{$b->jenis_burung}}</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">Rp. {{number_format($b->harga)}}</span>
													</div>
													<div class="grid-price ">
														<span class="money ">Nama Toko : {{$b->name}}</span>
													</div>
												</div>
											</div>
											<div class="shoe single-item hvr-outline-out">
												{{-- <h1>{{$b->id}}</h1> --}}
												<form action="{{url('/bird/add_cart')}}" method="POST">
													@csrf
													<input type="hidden" name="id_user" value="">
													<input type="hidden" name="id_burung" value="{{$b->id}}">
													<input type="hidden" name="jumlah" value="1">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>

					<!-- //product-sec1 -->
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //top products -->
@endsection