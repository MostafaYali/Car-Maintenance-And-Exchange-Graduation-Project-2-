<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auction Ads</title>

    <!--===============================================================================================-->
	  <link rel="icon" type="image/png" href="{{ asset('fontend/images/logo.jpeg')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/css/util.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/css/main.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/css/c3.css')}}">
    <link rel='stylesheet' href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!--===============================================================================================-->
    {{-- <script src="https://kit.fontawesome.com/c6743d7730.js" crossorigin="anonymous"></script> --}}
    <!--==============================================================================================-->
  </head>
  <style>
	.a{
		color: white;
	}
	.a:hover{
		color: gold;
	}
  .button{
    position:absolute;margin-top: -80px;width: 200px;margin-left: 205px ; background-color:#1b2741 ; color:white; border-radius:7px; font-size: 18px;
    text-transform: capitalize;
    cursor: pointer;
    transition: .5s;
    padding: 10px 20px;

  }
  .button:hover{
     transform: scale(1.1);
  }
</style>
  <body style="background-color: #171717;">


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
                    <div class="social flex-w flex-l-m p-r-20">
                        <img src = "{{ asset($Logged['image']) }}" style = "margin:10px; height:50px; width:60px; border-radius: 150px 150px 150px 150px"><a href = "{{ route($Logged['route']) }}">{{$Logged['name']}}</a>
                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
							</ul>
						</nav>
					</div>

										<!-- Social -->
                                       
                </div>
              </div>
            </div>
	</header>

	


	<!-- Title Page -->
	

   <section class="bg1-pattern p-t-30 p-b-20" style="background-color: #171717; ">
  
	</section>
  
    <section class="bg1-pattern p-t-120 p-b-105" style="background-color: #171717; ">
    @foreach($all as $allads)
      <?php
        $image = explode('|',$allads->auction_image);
      ?>
		<div class="container">
            <div class="row " style="height:320px; background-color:#dbdbdbe9; border-radius:20px">
				<div class="col-md-6 ">
					<div class="wrap-pic-romantic  bo-rad-10 hov-img-zoom m-l-r-auto" style="margin-top: 10px;">
						<img src="{{asset($image[0])}}" alt="IMG-OUR" style="width: 250px;height: 250px; border-radius:30px;">
					</div>
          <br>
				</div>
				<div class="col-md-6" style="position:absolute;margin-top: 7px;margin-left: 70px;">
					<div class="wrap-text-romantic t-center">
            <br>
            <span class="tit2" style="color: black">
             <i class="uil uil-car-sideview"></i>
               Manufacturer : {{ $allads->manufacturer }}
            </span>
              <br>
            <span style = "margin-right:85px;">
              <span class="tit2" style="color: black">
                <i class="uil uil-star"></i> 
                  Model : {{ $allads->model }}
              </span>
            </span>
              <br>
            <span style = "margin-right:130px;">
              <span class="tit2" style="color: black">
                <iconify-icon icon="uil:calender"></iconify-icon> Year : {{ $allads->year }}
              </span>
            </span>
              <br>
            <span style = "margin-right:110px;">  
              <span class="tit2" style="color: black">
                <iconify-icon icon="solar:tag-price-outline"></iconify-icon>
                  <span style = "margin-right:110px;"> Starts From : </span><br><span style="color:rgb(234, 234, 0)"> {{ $allads->price }} </span> EGP<br>
              </span>
            </span>
              <br>
              <span style = "margin-right:10px;">
                <span class="tit2" style="color: black">
                 <iconify-icon icon="ri:numbers-line"></iconify-icon> Number Of Bids : {{ $allads->number_of_pids }}
                </span>
              </span>
              <br>
                  @if($allads->ends_at < $now || $allads->ends_at == $now)
                      <span class = "tit2" style="color: black; margin-left:150px;"> <iconify-icon icon="mingcute:auction-line"></iconify-icon> Auction Ended From : {{ Carbon\Carbon::parse($allads->ends_at)->diffForHumans() }}</span>
                      <a class="button"><lable style="color: white">@if($allads->last_user_make_apid == null)<lable>None</lable>@else{{$allads->last_user_make_apid}}@endif</lable></a>
                  @else
                    <span class = "tit2" style="color: black; margin-left:70px;"><iconify-icon icon="mingcute:auction-line"></iconify-icon> Auction will End In : {{ Carbon\Carbon::parse($allads->ends_at)->diffForHumans() }}</span>
                    <a href="{{ url('/auction/details/main/')}}/<?php echo $allads->id; ?>" class="button">Bid</a>
                  @endif
              <br>                    
					</div>
				</div>
			</div>
		</div>
      <br>
    @endforeach
	</section>


   <!--===============================================================================================-->
   <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
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
    <script src="js/main.js"></script>
    <script>
       $(document).ready(function(){
  $("#heart1").click(function(){
    if($("#heart1").hasClass("liked")){
      $("#heart1").html('<i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>');
      $("#heart1").removeClass("liked");
    }else{
      $("#heart1").html('<i class="fa fa-heart fa-2x" aria-hidden="true"></i>');
      $("#heart1").addClass("liked");
    }
  });
});
    </script>
    <script>
         $(document).ready(function(){
  $("#heart2").click(function(){
    if($("#heart2").hasClass("liked")){
      $("#heart2").html('<i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>');
      $("#heart2").removeClass("liked");
    }else{
      $("#heart2").html('<i class="fa fa-heart fa-2x" aria-hidden="true"></i>');
      $("#heart2").addClass("liked");
    }
  });
});
    </script>
  </body>
</html>