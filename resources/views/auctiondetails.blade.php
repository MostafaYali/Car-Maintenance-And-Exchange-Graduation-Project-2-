<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auction Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('fontend/images/logo.jpeg') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/fonts/themify/themify-icons.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/lightbox2/css/lightbox.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/css/main.css') }}"> 
<!--===============================================================================================-->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<style>
	.a{
		color: white;
	}
	.a:hover{
		color: gold;
	}
</style>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="{{ route('HomeView') }}">
							<img src="{{ asset('fontend/images/logo.jpeg') }}" alt="IMG-LOGO" data-logofixed="{{ asset('fontend/images/logo.jpeg') }}">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
						<ul class="main_menu">
								<li>
									<a href="{{route('HomeView')}}">Home</a>
								</li>

								<li>
									<a href="{{ route('page.infomaintance')}}">check car</a>
								</li>

								<li>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="{{ route('page.ads')}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">View <span class="caret"></span></a>
										<ul class="dropdown-menu">
										   <li><a href="{{ route('page.newcarads')}}">New cars ads</a></li>
										   <li><a href="{{ route('page.usedcarads')}}">Used cars ads</a></li>
										   <li><a href="{{ route('page.rentcarads')}}">Rent ads</a></li>
										   <li><a href="{{ route('page.tboaads')}}">Tyres, batteries, oils, & accessories ads</a></li>
										   <li><a href="{{ route('page.sparepartads')}}">Spareparts ads</a></li> 
										</ul>
									 </li>
								</li>

								<li>
									<a href="{{ route('AuctionAddView') }}">Start Auction</a>
								</li>

								<li>
									<a href="{{route('workshoppostview')}}">work shops</a>
								</li>

								<li>
									<a href="{{ route('page.categorysell')}}">sells</a>
								</li>
							</ul>
						</nav>
					</div>

										<!-- Social -->
                                        <div class="social flex-w flex-l-m p-r-20">
                        <img src = "{{ asset($Logged['image']) }}" style = "margin:10px; height:50px; width:60px; border-radius: 150px 150px 150px 150px"><a href = "{{ route($Logged['route']) }}">{{$Logged['name']}}</a>
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                                    </div>
                                </div>
                            </div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70 bg-dark">
			<li class="t-center m-b-13">
				<a href="{{ route('HomeView') }}" class="a">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('page.infomaintance') }}" class="a" >CHECK CAR</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('AuctionView') }}" class="a">AUCTIONS</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('workshoppostview') }}" class="a">WORKSHOPS</a>
			</li>
			@if($logged == 'ok')
				@if($Logged['UserType'] == "user")
					<li class="t-center m-b-13">
						<a href="{{ route('page.categorysell') }}" class="a">SELL</a>
					</li>
					<li class="t-center m-b-13">
						<a href="{{ route('logged.main')}}" class="a">Profile</a>
					</li>
				@elseif($Logged['UserType'] == "workshop")
					<li class="t-center m-b-13">
						<a href="{{ route('workshopaddpostview') }}" class="a">Add Offer</a>
					</li>
					<li class="t-center m-b-13">
						<a href="{{ route('workshop.main')}}" class="a">Profile</a>
					</li>
					
				@endif

			<li class="t-center m-b-13">
				<a href="{{ url('/favorites') }}/<?php echo $Logged['logusername'] ?>" class="a">Favorites</a>
			</li>
			
			<li class="t-center m-b-13">
				<a href="{{ route('user.logout')}}" class="a">Logout</a>
			</li>
			
			@elseif($logged == 'no')
				<li class="t-center m-b-13">
					<a href="{{ route('view')}}" class="a">Login</a>
				</li>
			@endif
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40 bg-dark">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="images/esy-054424167.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/esy-054424167.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/Oil-1.png" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/Oil-1.png') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/YsAxc5zK1615525562.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/YsAxc5zK1615525562.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/kn-vf1001_11.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/kn-vf1001_11.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/O1CN012bmtpB1IVKGi7x1mi_!!6000000000898-0-m_tb_svideo_preimg.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/O1CN012bmtpB1IVKGi7x1mi_!!6000000000898-0-m_tb_svideo_preimg.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/H6fd4dfdce23542328ffc2cea9429d321L.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/H6fd4dfdce23542328ffc2cea9429d321L.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/O1CN017CQmIY1XrVm01pWqZ_!!6000000002977-0-tbvideo.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/O1CN017CQmIY1XrVm01pWqZ_!!6000000002977-0-tbvideo.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/wiper.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/wiper.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/tyres.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/tyres.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/ac.jpg_.webp" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/ac.jpg_.webp') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/MWR-600007.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/MWR-600007.jpg') }}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/shock.jpg" data-lightbox="gallery-footer">
					<img class="im" src="{{ asset('fontend/images/shock.jpg') }}" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>


	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/topcar2.jpg);">
		<h2 class="tit6 t-center">
			Auction Details 
		</h2>
	</section>


	<!-- Content page -->
	<section>
	@foreach($auctiondetails as $details)
		<?php
			$image = explode('|',$details->auction_image);
		?>

		@if(Session::get('ok'))
				<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
   					<i class="fa fa-check-circle"></i>
    				<strong class="mx-2">Success!</strong> {{ Session::get('ok') }}
    				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  				</div>
			@endif
									
			@if(Session::get('error'))
				<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
					<i class="fa fa-exclamation-circle"></i>
					<strong class="mx-2">Error!</strong> {{ Session::get('error') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
			@endif

		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			
		</div>

		<div class="container">			
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
						<!-- Block4 -->
                        <div class="text-blo4 p-t-33">
                            <h4 class="p-b-16">
                                <span class = "tit9"> {{ $details->manufacturer }} {{ $details->model }}  {{ $details->year }}</span>
                            </h4>
                        </div>

						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@php($x=0)
			@foreach($image as $i)
			@if($x==0)
				<li data-target="#carouselExampleIndicators" data-slide-to="{{$x}}" class="active"></li>
			@else
				<li data-target="#carouselExampleIndicators" data-slide-to="{{$x}}"></li>
			@endif
			@php($x++)
			@endforeach
		</ol>
  		<div class="carousel-inner">
			
				@php($x=1)
				@foreach($image as $i)
				@if($x==1)
					<div class="carousel-item active" data-bs-interval="100">
						<img src="{{asset($i)}}" class="d-block w-100" width="100%" height="450px">
					</div>
				@else
					<div class="carousel-item" data-bs-interval="100">
						<img src="{{asset($i)}}" class="d-block w-100" width="100%" height="450px">
					</div>
				@endif
				@php($x++)
				@endforeach
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


						  <div class="blo4 p-b-63">
							

							<div class="text-blo4 p-t-33">
								

								<div class="card shadow listing-card mb-4">
									<div class="card-header ">
										<h4 class="card-title mb-0">
											CAR DATA        
										</h4>
									</div>
									<div class="card-body word-break pt-2 pb-3">
												
								
								
								
									
								<dl class="d-flex flex-column flex-lg-row border-bottom my-2 p-0 pb-2 ">
											<dt class="mr-2 max-content ">Manufacturer:</dt>
										<dd class="m-0">{{$details->manufacturer}}</dd>
								</dl>
								
									
								<dl class="d-flex flex-column flex-lg-row border-bottom my-2 p-0 pb-2 ">
											<dt class="mr-2 max-content ">Model:</dt>
										<dd class="m-0">{{$details->model}}</dd>
								</dl>
							</div>
						</div>

								

								<!-- second table DESCRIPTION -->
								<div class="card shadow listing-card mb-4">
									<div class="card-header ">
										<h4 class="card-title mb-0">
											DESCRIPTION        
										</h4>
									</div>
									<div class="card-body word-break pt-2 pb-3">
												
								<div class="row mb-3">
									<div class="col beschreibung">
								
								<ul>
									<p style="color:black;">
										{{ $details->description }}
									</p>
								</ul>
								
							</div>

							
								</div>
							</div>
								</div>
								<div class = "tit9" style="text-align: center;">
									<img src = "{{ asset($details->users->image) }}" style = "margin:10px; height:100px; width:110px; border-radius: 150px 150px 150px 150px">
									<p>{{$details->users->name}}</p>

									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
		
													
													<h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
		
		
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													</div>

													<p class="tit9 text-dark">
														Contact Number Is : 0{{$details->users->phone}}
													</p>

													<div class="modal-footer" >
														<button type="submit" class="btn flex-c-m size15 txt11 trans-0-4" style="background-color: black;"><iconify-icon icon="logos:whatsapp-icon" style="margin: 5px"></iconify-icon><a style="margin: 5px" href="https://wa.me/0{{$details->users->phone}}">Send Message</a></button>
													</div>
												</div>
												</div>
											</div>
											<button type="button" class="btn3 flex-c-m size13 txt11 trans-0-4" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:38%;width:80px;height:50px ;">
												<i class="fa fa-phone" aria-hidden="true"></i>
										  	</button>
											<a class="btn3 flex-c-m size13 txt11 trans-0-4" style = "margin-top:-6%;margin-left:50%;width:80px;height:50px;" href="{{ url('/chat')}}/<?php echo $details->id; ?>" >Chat</a>
										</div>
								</div>
								
							</div>
							
						</div>
							
					</div>
				</div>

				<div class="col-md-4 col-lg-3" style="margin-left:85% ;position: absolute; top: 45%; right: 0px;">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<form action = "{{ url('/auction/add/bid')}}/<?php echo $details->id; ?>" method = "GET">
							@csrf
							<span class="tit9 text-warning"> <span><p class="tit9 text-Warning">Car Price Started At : </p></span>{{$details->price_start}}</span>
							<br><br>
							<div class="search-sidebar2 size12 bo2 pos-relative">
								
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="bid" placeholder="place single bid" style="border-color: red;" autocomplete="off">
								<button type = "submit" class="btn-search-sidebar2 flex-c-m trans-0-4"><i class="fa fa-gavel" aria-hidden="true"></i></button>
								@error('bid')
									<span class = "text-warning">{{ $message }}</span>
								@enderror
								<br><br><span class="tit9 text-warning"> <span><p class="tit9 text-Warning">Price Is Now At : </p></span>{{$details->price}}</span>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</section>



	
	



<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/bootstrap/js/popper.js') }}"></script>
	<script type="text/javascript" src="{{ asset('fontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/daterangepicker/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('fontend/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/slick/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('fontend/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/parallax100/parallax100.js') }}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/js/main.js') }}"></script>

</body>
</html>
