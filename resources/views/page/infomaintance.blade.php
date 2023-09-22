<!DOCTYPE html>
<html lang="en">
<head>
	<title>Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="{{ asset('fontend/images/logo.jpeg') }}"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fontend/css/main.css')}}">
<!--===============================================================================================-->
</head>
<style>
	.a{
		color: white;
	}
	.a:hover{
		color: gold;
	}

	.a7a{
			margin:10px;font-family: Arial, Helvetica, sans-serif;
			font-weight: 400;
			font-size: 14px; background-color: black;
			color: white;
			border-radius: 20px; 
			height: 50px;
			width:80px;
		}

		.a7a:hover{
			color: yellow;
			transition: 1s;
			
		}
</style>
<body class="animsition" style="text-align: center;">

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
									<a href="{{ route('HomeLoggedView') }}">Home</a>
								</li>

								<li>
									<a href="{{ route('page.infomaintance') }}">check car</a>
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
									<a href="{{ route('AuctionView') }}">auctions</a>
								</li>

								<li>
									<a href="{{ route('workshoppostview') }}">work shops</a>
								</li>

								<li>
									<a href="{{ route('page.categorysell') }}">Sell</a>
								</li>
								
							</ul>
						</nav>
					</div>

										<!-- Social -->
                                        <div class="social flex-w flex-l-m p-r-20">
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


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/topcar2.jpg);">
		<h2 class="tit6 t-center">
			Details
		</h2>
	</section>

	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Enter
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Details
						</h3>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" action="#"  method="">
						<div class="row">
						@if(session('message'))
                        {{session('message')}}
                        @endif
							
						</div>

						<div class="row">
							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									Brands :
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="brandcar" placeholder="Brands">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt9">
									Model :
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="modelcar" placeholder="Model">
								</div>
							</div>

							

                            <div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									Year :
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class=" bo-rad-10 sizefull txt10 p-l-20" type="text" name="yearcar">
									
								</div>
							</div>

						</div>
						<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									KM :
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="brandcar" placeholder="Brands">
								</div>
							</div>

<span>
								<button type="submit" class = "a7a" >oil</button>
								<button type="submit" class = "a7a">spark plug</button>
								<button type="submit" class = "a7a">belts</button>
								<button type="submit" class = "a7a">asisstan</button>
								<button type="submit" class = "a7a">battery</button>


</span>
				</div>
			</div>

			
		</div>
						
                        
					</form>
					
	</section>


	


	



<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{ asset('fontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('fontend/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('fontend/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/parallax100/parallax100.js')}}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('fontend/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/js/main.js')}}"></script>

</body>
</html>
