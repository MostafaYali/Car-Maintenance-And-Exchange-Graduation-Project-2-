<!doctype html>
<html lang="en">
<head>
	<title>Change Password</title>
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
</head>
<style>
	.a{
		color: white;
	}
	.a:hover{
		color: gold;
	}
</style>
  <body>


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
									<a href="{{ route('AuctionView') }}">Auctions</a>
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

	


	<!-- Title Page -->
	

  <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" >
		
		<h2 class="tit6 t-center">
			Change Password
		</h2>
	</section>
	





  <section>
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style=" background-color: #2a2b38;
          background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); ">

      @if(Session::get('passwordstate'))
        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
          <i class="fa fa-check-circle"></i>
          <strong class="mx-2">Success!</strong> {{ Session::get('passwordstate') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
			@endif
									
			@if(Session::get('passworderror'))
				<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
					<i class="fa fa-exclamation-circle"></i>
					<strong class="mx-2">Error!</strong> {{ Session::get('passworderror') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
			@endif

          <form action = "{{ route('workshopupdatepassword') }}" method = "POST">
            @csrf
            <div class="card-back">
              <div class="center-wrap">
                <div class="section text-center">
              



                  <label style="background-color: transparent; color: white;margin-top: 10px;">Old Password</label>
                  <br>
                  <div class="form-group">
                    
                    <input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="OldPassword" class="form-style" placeholder="Old Password" id="logname" autocomplete="off">
                    @error('OldPassword')
                        <br><lable class = "text-warning">{{ $message }}</lable>
                    @enderror
                    
                  </div>	

<br>
                  <label style="background-color: transparent; color: white;">New Password</label>
                  <br>
                  <div class="form-group">
                    
                    <input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="NewPassword" class="form-style" placeholder="New Password" id="logname" autocomplete="off">
                    @error('NewPassword')
                      <br><lable class = "text-warning">{{ $message }}</lable>
                    @enderror
                    
                  </div>	

                  <label style="background-color: transparent; color: white;margin-top: 10px;">Confirm Password</label>
                  <br>
                  <div class="form-group">
                    
                    <input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="ConfirmPassword" class="form-style" placeholder="Confirm Password" id="logname" autocomplete="off">
                    @error('ConfirmPassword')
                        <br><lable class = "text-warning">{{ $message }}</lable>
                    @enderror
                    
                  </div>	


                 <br>
                  <div class="form-group" style="color: white;">
                    <button class="btn btn-primary" type="submit">Change</button>
                  </div>	
          </form>
            </div>
          </div>
        </div>
      </div>
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
	<script type="text/javascript" src="{{ asset('fontend/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('fontend/js/main.js') }}"></script>
  </body>
</html>