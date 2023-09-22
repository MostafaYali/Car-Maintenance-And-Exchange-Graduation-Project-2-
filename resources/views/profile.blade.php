<!DOCTYPE html>
<html>
<title>Profile</title>
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
			color : black;
		}
	.a{
		color: white;
	}
	.a:hover{
		color: gold;
	}

	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
/* Custom style to set icon size */
.alert i[class^="bi-"]{
  font-size: 1.5em;
  line-height: 1;
}

.text-white{
	color: white;
}
</style>
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
						<a href="{{route('HomeLoggedView')}}">
							<img src="{{ asset('fontend/images/logo.jpeg') }}" alt="IMG-LOGO" data-logofixed="{{ asset('fontend/images/logo.jpeg') }}">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="{{route('HomeLoggedView')}}">Home</a>
								</li>

								<li>
									<a href="{{ route('page.infomaintance') }}">check car</a>
								</li>

								<li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="{{ route('page.ads')}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">cars <span class="caret"></span></a>
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
									<a href="{{ route('page.categorysell')}}">Sells</a>
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
			{{-- @if($logged == 'ok') --}}
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
			
			{{-- @elseif($logged == 'no') --}}
				{{-- <li class="t-center m-b-13">
					<a href="{{ route('view')}}" class="a">Login</a>
				</li>
			@endif --}}
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
		<div class="container t-center">
			

			<h3 class="tit5 t-center m-b-50 m-t-5">
				Profile
			</h3>
									
			

			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							
							<img src = "{{ asset($Logged['image']) }}" alt="User_Icon">
							
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							
							<span class="dis-block t-center txt35 p-b-25">
								
							</span>
							
							<form method = "POST" action = "{{ route ('updateuserimage') }}" enctype = "multipart/form-data">
								@csrf

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
								
								<div class="form-group">
						
									<input style="width: 90%; border-radius: 10px; height: 55px; text-align: center; background-color: white;"  id="file"  type = "file" name = "userlogo" class="form-style">
										<label for="file" style="background-color: white; width: 90%; border-radius: 10px; height: 55px; text-align: center;  color: black; font-size: 25px;">
											<i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
											Select Image
										</label>
								</div>	
								@error('userlogo')
									<label class = "text-warning">{{ $message }}</label>
								@enderror

								<button type = "submit" class="btn3 flex-c-m size13 txt11 trans-0-4" style="margin:10px;margin-left: 75px;">Update Photo</button>

							</form>

							<p class="t-center">
								<form action = "{{ url('/auth/user/editemail/update') }}" method = "POST">
									@csrf
									<label class = "text-white">Email :</label> <input class="bo-rad-10 sizefull txt10 p-l-20" style="height: 40px" type = "text" name = "emailforupdate" value = "{{ $Logged['logemail'] }}">
									<button type = "submit" class="btn3 flex-c-m size13 txt11 trans-0-4" style="margin:10px;margin-left: 75px;" w>Update</button>
								</form>
							</p>
							<p class="t-center">
								<label class = "text-white">Account Updated At: {{ $Logged['updated_at']->diffForHumans() }}</label>
							</p>
							<p class="t-center">
								<label class = "text-white">Account Type : {{ $Logged['UserType'] }}</label>
							</p>
							<table>
								<form action = "{{ url('/auth/user/editpassword/update') }}" method = "POST">
									@csrf
									@if(Session::get('passwordupdated'))
										<label class = "text-warning">{{ Session::get('passwordupdated') }}</label>
									@endif
									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
		
													
													<h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
		
		
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													</div>

													
													
											
											
													<div class="modal-body">
														<label class = "text-black">Old Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<input style="border-radius: 50px; width: 250px; text-align: center;" type="password" placeholder="Old Password" name = "OldPassword" value = "{{ old('OldPassword') }}">
													</div>

													@error('OldPassword')
														<label class = "text-danger">{{ $message }}</label>
													@enderror
											
											
													<div class="modal-body">
														<label class = "text-black">New Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<input style="border-radius: 50px; width: 250px; text-align: center;" type="text" placeholder="New Password" name = "NewPassword" value = "{{ old('NewPassword') }}">
													</div> 
													@error('NewPassword')
														<label class = "text-danger">{{ $message }}</label>
													@enderror

													
													<div class="modal-body">
														<label class = "text-black">Confirm New Password :</label>
													<input style="border-radius: 50px; width: 250px; text-align: center;" type="text" placeholder="Confirm New Password" name = "ConfirmPassword" value = "{{ old('ConfirmPassword') }}">
													</div>

													@error('ConfirmPassword')
														<label class = "text-danger">{{ $message }}</label>
													@enderror
											
													<div class="modal-footer" >
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">Update</button>
													</div>
												</div>
												</div>
											</div>
												@if(Session::get('passwordstate'))
													<label class = "text-warning">{{ Session::get('passwordstate') }}</label>
												@endif
											<button type="button" class="btn3 flex-c-m size13 txt11 trans-0-4" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left: 50px;text-align:center;width:200px;height:70px ;">
												Change Password   
										  	</button><br>

											<a class="btn3 flex-c-m size13 txt11 trans-0-4" href = "{{ route('averageview') }}" style="margin-left: 50px;text-align: center;width:200px;height:70px; ">Add Schedule For Maintenance</a>
											<br>

											<a class="btn3 flex-c-m size13 txt11 trans-0-4" href = "{{ url('/auction/add/credit/main') }}/<?php echo $Logged['id']; ?>" style="margin-left: 50px;text-align: center;width:200px;height:70px; ">Add Card</a>
										</div>
								</form>
							</table>
						</div>
					</div>
				</div>   
			</div>
		</div>
	</section>
    

	<script type="text/javascript" src="{{ asset('fontend/js.js') }}"></script>
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