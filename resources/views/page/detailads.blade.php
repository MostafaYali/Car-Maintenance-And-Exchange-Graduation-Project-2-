<!DOCTYPE html>
<html lang="en">
<head>
	<title>Check Car</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="{{asset('fontend/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="{{route('HomeView')}}">
							<img src="{{asset('fontend/images/logo.jpeg')}}" alt="IMG-LOGO" data-logofixed="{{asset('fontend/images/logo.jpeg')}}">
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
									<a href="{{ route('AuctionView') }}">auctions</a>
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
                                            <a href="profile.html"><i class="fa fa-user" aria-hidden="true"></i>profile</a>
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


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url();">
		<h2 class="tit6 t-center">
			Check Car
		</h2>
	</section>
	@if (count($detailads) === 1 && count($detailads2) === 0 && count($detailads3) === 0 && count($detailads4) === 0)
	@foreach($detailads as $d)
	<?php
	$image =explode('|',$d->images);
	?>
	<div class="categories">
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
		<span style='color:white;'>{{Carbon\Carbon::parse($d->created_at)->diffForHumans()}}<span>

		<h4 class="txt33 bo5-b p-b-35 p-t-58">
			Details
		</h4>
		
		<ul style="color:white;">
		<li class="bo5-b p-t-8 p-b-8">
				<label  style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic; font-size:22px ; color: #2B4D8D;">
				 Username 

				 
				 :<span>{{$d->user_name}}</span>
				</label>

			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Brand :<span>{{$d->brand}}</span>
				</label>
			</li>

			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Model :<span>{{$d->car_model}}</span>
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Body Type :<span>{{$d->body_type}}</span>
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Transmission Type :<span>{{$d->transmission_type}}</span>
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Year :<span>{{$d->year}}</span>
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Engine Capacity :<span>{{$d->engine_capacity}}</span> 
				</label>
				
			</li>

			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Fuel Type :<span>{{$d->fuel_type}}</span> 
				</label>
			</li>
			
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Location :<span>{{$d->location}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Color :<span>{{$d->color}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Rental Option :<span>{{$d->rental_option}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Rental Period :<span>{{$d->rental_period}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Price :<span>{{$d->price}}</span>  
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
					Description :<span>{{$d->description}}</span>  
				</label>
			</li>

			
		</ul>
		
	</div>
	@endforeach
	@elseif (count($detailads) === 0 && count($detailads2) === 1 && count($detailads3) === 0 && count($detailads4) === 0)
	@foreach($detailads2 as $d2)
	<?php
	$image =explode('|',$d2->images);
	?>
	<div class="categories">
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
					<div class="carousel-item active" data-bs-interval="100" >
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
		<span style='color:white;'>{{Carbon\Carbon::parse($d2->created_at)->diffForHumans()}}<span>
		<h4 class="txt33 bo5-b p-b-35 p-t-58">
			Details
		</h4>
		
		<ul style="color:white;">
		<li class="bo5-b p-t-8 p-b-8">
				<label  style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic; font-size:22px ; color: #2B4D8D;">
				Username :<span>{{$d2->user_name}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Ad Type :<span>{{$d2->ad_type}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Brand :<span>{{$d2->brand}}</span> 
				</label>
				
			</li>

			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Model :<span>{{$d2->car_model}}</span> 
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Body Type :<span>{{$d2->body_type}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Transmission Type :<span>{{$d2->transmission_type}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Year:<span>{{$d2->year}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Engine Capacity :<span>{{$d2->engine_capacity}}</span> 
				</label>
				
			</li>

			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Fuel Type :<span>{{$d2->fuel_type}}</span> 
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Condition :<span>{{$d2->condition}}</span> 
				</label>
			</li>
			
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Location :<span>{{$d2->location}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Color :<span>{{$d2->color}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Price :<span>{{$d2->price}}</span> 
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Payment method :<span>{{$d2->payment_method}}</span> 
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
					Description :<span>{{$d2->description}}</span>  
				</label>
			</li>
			
		</ul>
		
	</div>
	@endforeach
	@elseif (count($detailads) === 0 && count($detailads2) === 0 && count($detailads3) === 1 && count($detailads4) === 0)
	@foreach($detailads3 as $d3)
	<?php
	$image =explode('|',$d3->images);
	?>
	<div class="categories">
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
		<span style='color:white;'>{{Carbon\Carbon::parse($d3->created_at)->diffForHumans()}}<span>
		<h4 class="txt33 bo5-b p-b-35 p-t-58">
			Details
		</h4>
		
		<ul style="color:white;">
		<li class="bo5-b p-t-8 p-b-8">
				<label  style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic; font-size:22px ; color: #2B4D8D;">
				Username :<span>{{$d3->user_name}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Type :<span>{{$d3->type}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Brand :<span>{{$d3->brand}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Model :<span>{{$d3->car_model}}</span> 
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Condition :<span>{{$d3->condition}}</span> 
				</label>
			</li>
			
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Location :<span>{{$d3->location}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Price :<span>{{$d3->price}}</span>
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
					Description :<span>{{$d3->description}}</span>  
				</label>
			</li>

			
		</ul>
		
	</div>
	@endforeach
	@elseif (count($detailads) === 0 && count($detailads2) === 0 && count($detailads3) === 0 && count($detailads4) === 1)
	@foreach($detailads4 as $d4)
	<?php
	$image =explode('|',$d4->images);
	?>
	<div class="categories">
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
					<div class="carousel-item active" data-bs-interval="100">>
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
		<span style='color:white;'>{{Carbon\Carbon::parse($d4->created_at)->diffForHumans()}}<span>
		<h4 class="txt33 bo5-b p-b-35 p-t-58">
			Details
		</h4>
		
		<ul style="color:white;">
		<li class="bo5-b p-t-8 p-b-8">
				<label  style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic; font-size:22px ; color: #2B4D8D;">
				Username :<span>{{$d4->user_name}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Type :<span>{{$d4->type}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Brand :<span>{{$d4->brand}}</span> 
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Model :<span>{{$d4->car_model}}</span> 
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Condition :<span>{{$d4->condition}}</span> 
				</label>
			</li>
			
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Location :<span>{{$d4->location}}</span>
				</label>
				
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
				Price :<span>{{$d4->price}}</span>
				</label>
			</li>
			<li class="bo5-b p-t-8 p-b-8">
				<label>
					Description :<span>{{$d4->description}}</span>   
				</label>
			</li>

			
		</ul>
		
	</div>
	@endforeach
	@endif

	


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('fontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('fontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('fontend/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('fontend/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/parallax100/parallax100.js')}}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('fontend/js/main.js')}}"></script>


</body>
</html>
