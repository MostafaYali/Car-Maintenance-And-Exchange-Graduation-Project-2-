<!DOCTYPE html>
<html>
<title>Brands</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('fontend/images/logo.jpeg') }}"/>
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
    <link rel="stylesheet" href="{{asset('fontend/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css')}}" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="{{asset('fontend/css/c3.css')}}">
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
	<br><br><br><br><br><br><br><br>



<!-- .................................................................................................. -->
@php($i=1)
    @foreach($favorites as $f)

		
<section class="bg1-pattern p-t-120 p-b-105" style="background-color: #171717; ">

    @if( $f->type == null)
	<form  class="myForm" action="" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="container">
		<input type="hidden" name="username" value="{{$f->username}}">
		<input type="hidden" name="ad_username" value="{{$f->ad_username}}">
		<input type="hidden" name="image" value="{{$f->image}}">
		<input type="hidden" name="model" value="{{$f->model}}">
		<input type="hidden" name="price" value="{{$f->price}}">
		<input type="hidden" name="brand" value="{{$f->brand}}">
		<input type="hidden" name="time" value="{{($f->created_at)}}">
            <div class="row " style="background-color: gray;">
				<div class="col-md-6 ">
					<div class="wrap-pic-romantic  bo-rad-10 hov-img-zoom m-l-r-auto" style="margin-top: 10px;">
						<img src="{{asset($f->image)}}"  alt="IMG-OUR" style="width: 250px;height: 250px;">
					</div>
          <br>
				</div>

				<div class="col-md-6 " style="position:absolute;margin-top: 7px;">
					<div class="wrap-text-romantic t-center">
           <button class="submitBtn" value="submit"> <span  class="liked" id = "{{'heart'.$i}}" style="margin-left: 1150px ;"><i class="fa fa-heart fa-2x" aria-hidden="true"  ></i> </span></button>
						<br>
            <span class="tit2 "style="color:black; margin-left:45px;" >
							model:
                    </span>
					<span class="tit2 "style="color:black;" >{{$f->model}}</span>
                 <br>
                        <span class="tit2"style="color:black; margin-left:20px;" >
							price:
						</span>
						<span class="tit2 "style="color:black;" >{{$f->price}}</span>
            <br>
            <span class="tit2 " style="color:black; margin-left:100px;">
							brand:
						
                    </span>
					<span class="tit2 "style="color:black;"  >{{$f->brand}}</span>
                    <br>
					<br><br><br><br>
					  <div style="color:black;" >
					  {{Carbon\Carbon::parse($f->created_at)->diffForHumans()}}
							</div>

            
                            <br>
							                
							<button onclick="window.location.href='{{ url('/detail ads')}}/<?php echo $f->username;?>/<?php echo $f->created_at;?>';" class="btn btn-primary" style="width: 200px;margin-left: 983px;margin-top: 55px;"  > show</button>
                        

					</div>
				</div>
                
			</div>
		</div>
		<br><br>
</form>
        @else
		<form  class="myForm" action="" method="POST" enctype="multipart/form-data">
		@csrf
        <div class="container">
			<input type="hidden" name="username" value="{{$f->username}}">
			<input type="hidden" name="ad_username" value="{{$f->ad_username}}">
			<input type="hidden" name="image" value="{{$f->image}}">
			<input type="hidden" name="model" value="{{$f->model}}">
			<input type="hidden" name="price" value="{{$f->price}}">
			<input type="hidden" name="brand" value="{{$f->brand}}">
			<input type="hidden" name="type" value="{{$f->type}}">
			<input type="hidden" name="time" value="{{($f->created_at)}}">
		
		<div class="row " style="background-color: gray;">
			<div class="col-md-6 ">
				<div class="wrap-pic-romantic  bo-rad-10 hov-img-zoom m-l-r-auto" style="margin-top: 10px;">
					<img src="{{asset($f->image)}}" alt="IMG-OUR" style="width: 250px;height: 250px;">
				</div>
	  <br>
			</div>

			<div class="col-md-6 " style="position:absolute;margin-top: 7px;">
				<div class="wrap-text-romantic t-center">
	   <button   class="submitBtn" value="submit"> <span class="liked" id = "{{'heart'.$i}}" style="margin-left: 1150px ;"><i class="fa fa-heart fa-2x " aria-hidden="true"  ></i> </span></button>
					<br>
		<span class="tit2 "style="color:black; margin-left:45px;" >
						model:
				</span>
				<span class="tit2 "style="color:black;" >{{$f->model}}</span>
			 <br>
					<span class="tit2"style="color:black; margin-left:20px;" >
						price:
					</span>
					<span class="tit2 "style="color:black;" >{{$f->price}}</span>
		<br>
		<span class="tit2 " style="color:black; margin-left:100px;">
						brand:
					
				</span>
				<span class="tit2 "style="color:black;" >{{$f->brand}}</span>
				<br>
				<span class="tit2 " style="color:black; margin-left:100px;" >
				  type:
				
						</span>
						<span class="tit2 "style="color:black;" >{{$f->type}}</span>
		
						<br>
						<br><br>
					  <div style="color:black;">
					  {{Carbon\Carbon::parse($f->created_at)->diffForHumans()}}
							</div>
										
						<button onclick="window.location.href='{{ url('/detail ads')}}/<?php echo $f->username;?>/<?php echo $f->created_at;?>';" class="btn btn-primary" style="width: 200px;margin-left: 983px;margin-top: 55px;"  > show</button>
					

				</div>
			</div>
			
		</div>
	</div>
	<br><br>
	</form>
    @endif
		
	</section>


@php($i++)
@endforeach







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


	@php($i=1)
    @foreach($favorites as $f)

	<script>
       $(document).ready(function(){
  $("{{'#heart'.$i}}").click(function(){
    if($("{{'#heart'.$i}}").hasClass("liked")){
      $("{{'#heart'.$i}}").html('<i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>');
      $("{{'#heart'.$i}}").removeClass("liked");
    }else{
      $("{{'#heart'.$i}}").html('<i class="fa fa-heart fa-2x" aria-hidden="true"></i>');
      $("{{'#heart'.$i}}").addClass("liked");
    }
  });
});
    </script>
	@php($i++)
    @endforeach
	<script>
	$(document).ready(function() {
        $('.submitBtn').click(function(e) {
        e.preventDefault();
        var form = $(this).closest('.myForm');
        $.ajax({
            type: 'POST',
            url: '/favorites/{username}',
            data: form.serialize(),
        });
    });
});
</script>

</body>
</html>