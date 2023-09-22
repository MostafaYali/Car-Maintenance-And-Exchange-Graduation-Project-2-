<!DOCTYPE html>
<html>
<title>Maintenance Schedule</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.logout{
			background-color : red;
			position: relative;
			text-align:center;
			border-radius : 5px 5px 5px 5px;
		}

		.logout:hover{
			color : white;
		}
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

.logout{
    background-color : red;
    position: relative;
    text-align:center;
    border-radius : 5px 5px 5px 5px;
}

.logout:hover{
    color : yellow;
}

a {
    color: #fff;
    text-decoration: none;
}




.ticker {
    display: flex;
    flex-wrap: wrap;
    width: 80%;
    height: 60px;
    margin: 0 auto;
}
.news {
    width: 100%;
}
.title {
    width: 20%;
    text-align: center;
    background: #c81c1c;
    position: relative;
}
.title:after {
    position: absolute;
    content: "";
    right: -16%;
    border-left: 20px solid #c81c1c;
    border-top: 33px solid transparent;
    border-right: 20px solid transparent;
    border-bottom: 33px solid transparent;
    top: 0;
}
.title h5 {
    font-size: 18px;
    margin: 8% 0;
}
.news marquee {
    font-size: 18px;
}

.text-white{
	color: white;
}


	.a{
		color: white;
	}
	.a:hover{
		color: gold;
	}


</style>
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
						<a href="{{ route('HomeView')}}">
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

	

    <section class="section-chef bgwhite p-t-115 p-b-95">
		
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

		<div class="container t-center">
			<form action = "{{ route('averageOil') }}" method = "POST">
                @csrf

				<section class="vh-100 gradient-custom">
					<div class="container py-5 h-100">
					  <div class="row justify-content-center align-items-center h-100">
						<div class="col-12 col-lg-9 col-xl-7">
						  <div class="card shadow-2-strong card-registration" style=" background-color: #2a2b38;
						  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); border-radius: 50px; ">
				
				
				
							<div class="card-back">
							  <div class="center-wrap">
								<div class="section text-center">
								  <br>
								  <h4 class="mb-4 pb-3" style="color: white;">Average Oil</h4>


								  <h3 class = "text-warning">{{$message}}</h3><br>
								  <h2 class = "text-warning">{{$not_at}}</h2>
								  
				
								  <label style="background-color: transparent; color: white;">Today Date</label>
								  <div class="form-group">
                					<input type="text" name="todaydate" style = "text-align:center;" value = "{{ now()->format('Y-m-d') }}" disabled>
								  </div>

								  <label style="background-color: transparent; color: white;">Average km Per Day</label>
								  <div class="form-group">
									
									<input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="number" name = "averagekmday" autocomplete="off" value = "{{$average_km}}" {{$disable}}>
									
								  </div>	
						@error('averagekmday')
							<div>
								<label class ="text-warning">{{ $message }}</label>
							</div>
						@enderror
                

				<label style="background-color: transparent; color: white;">Km That Oil Changed At </label>
				<div class="form-group">
				  
				  <input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="number" name = "kmthatoilchangedat" value = "{{$km_changed_at}}" {{$disable}} autocomplete="off">
				  
				</div>	
				@error('kmthatoilchangedat')
					<div>
						<label class = "text-warning">{{ $message }}</label>
					</div>
				@enderror
				<label style="background-color: transparent;color:white;">Km Of Oil</label>
				<div class="form-group">  
				  <select style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" class="select form-control-lg" name="kmoftheoil" value = "{{$km_of_oil}}" {{$disable}}>
						<option>10000</option>
						<option>5000</option>
				  </select>
				</div>	
				@error('kmoftheoil')
					<div>
						<br><label class = "text-warning">{{ $message }}</label>
					</div>
				@enderror

			<div  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													<div  class="modal-dialog modal-dialog-centered" role="document">
													<div style="border-radius: 40px; background-color:#F4E9F3; " class="modal-content">
														<div class="modal-header">
			
														
														<h5 class="modal-title" id="exampleModalLongTitle" style="color: #2B4D8D;">Oil Change</h5>
			
			
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
														</div>

														
														
												
												
													
					<label style="color: #2B4D8D;" >There An Email Will Sent On Your Gmail Inbox To Aleart You Befor The Genrated Date</label>
				<div class="border border-danger">
						<p class = "text-dark">
							<b style="color: #2B4D8D;">Notice : Oil To Change On  Because The Car Gadge Does 
							Not Calculate The Engine Running In Traffic Or In Stop So Please Commit With The Data Genrated 
						</p>
					</div>
					@foreach($oildata as $oildatas)
						<div class="border border-danger">
							<p class = "text-danger">
								<u><b>Warning : </b></u> The Data Genrated Is According To The Entered Data From You That Your Average Km You Make In The Day Is ( {{ $oildatas->average_km_per_day }} Km )
								Any Change On That Data WithOut Updating Could Effect The Car Condition And Could Cause Some Parts To Maulfunction ....!
							</p>
						</div>
					@endforeach
										<button class="btn btn-primary" type="submit">Save Data</button>	
													
													</div>
													</div>
												</div>
												
												<button type="button" class="btn btn-primary" style="text-align: center" data-toggle="modal" data-target="#exampleModalCenter" style="justify-content: flex-end;margin-left: 75px; ">
													save
												</button><br>
				</form>
			</div>
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
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
		<script src="{{ asset('fontend/js/map-custom.js') }}"></script>
	<!--===============================================================================================-->
		<script src="{{ asset('fontend/js/main.js') }}"></script>
    
    </body>
    </html>