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


<style>
	.search-box{
  position: relative;
  height: 60px;
  width: 60px;
  border-radius: 50%;
  box-shadow: 5px 5px 30px rgba(0,0,0,.2);
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.search-box.active{
  width: 350px;
}
.search-box input{
  width: 100%;
  height: 100%;
  border: none;
  border-radius: 50px;
  background: #fff;
  outline: none;
  padding: 0 60px 0 20px;
  font-size: 18px;
  opacity: 0;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.search-box input.active{
  opacity: 1;
}
.search-box input::placeholder{
  color: #a6a6a6;
}
.search-box .search-icon{
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  height: 60px;
  width: 60px;
  background: #fff;
  border-radius: 50%;
  text-align: center;
  line-height: 60px;
  font-size: 22px;
  color: #664AFF;
  cursor: pointer;
  z-index: 1;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.search-box .search-icon.active{
  right: 5px;
  height: 50px;
  line-height: 50px;
  width: 50px;
  font-size: 20px;
  background: #664AFF;
  color: #fff;
  transform: translateY(-50%) rotate(360deg);
}
.search-box .cancel-icon{
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 25px;
  color: #fff;
  cursor: pointer;
  transition: all 0.5s 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.search-box .cancel-icon.active{
  right: -40px;
  transform: translateY(-50%) rotate(360deg);
}
.search-box .search-data{
  text-align: center;
  padding-top: 7px;
  color: #fff;
  font-size: 18px;
  word-wrap: break-word;
}
.search-box .search-data.active{
  display: none;
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
                                        @if($logged == 'ok')
											<div class="social flex-w flex-l-m p-r-20">
												<img src = "{{ asset($Logged['image']) }}" style = "margin:10px; height:50px; width:60px; border-radius: 150px 150px 150px 150px"><a href = "{{ route($Logged['route']) }}">{{$Logged['name']}}</a>
												<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
											</div>
										@elseif($logged == 'no')
											<div class="social flex-w flex-l-m p-r-20">
												<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
											</div>
										@endif
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


<div class="search-box">
      <input type="text" placeholder="Type to search..">
      <div class="search-icon">
	  <i class="fa fa-search" aria-hidden="true"></i>
      </div>
<div class="cancel-icon">
<i class="fa fa-window-close" aria-hidden="true"></i>
      </div>
<div class="search-data">
</div>
</div>
							
							<button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
						</div>

		
<section class="bg1-pattern p-t-120 p-b-105" >
@php($i=1)
	
    @foreach($cfs as $s)
	@foreach($favorites as $favorite)
	<?php
	$image =explode('|',$s->images);
	?>
	@if($logged == 'ok')
		@if($favorite->username == $Logged['logusername'] && $favorite->ad_username == $s->user_name && $favorite->model == $s->car_model && $favorite->price == $s->price && $favorite->brand == $s->brand && $favorite->created_at == $s->created_at && $favorite->image == $image[0])

	<form class="myForm" action="" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="container">
		<input type="hidden" name="username" value="{{ $Logged['logusername'] }}">
		<input type="hidden" name="ad_username" value="{{$s->user_name}}">
		<input type="hidden" name="image" value="{{$image[0]}}">
		<input type="hidden" name="model" value="{{$s->car_model}}">
		<input type="hidden" name="price" value="{{$s->price}}">
		<input type="hidden" name="brand" value="{{$s->brand}}">
		<input type="hidden" name="time" value="{{($s->created_at)}}">
            <div class="row " style="background-color: gray;">
				<div class="col-md-6 ">
					<div class="wrap-pic-romantic  bo-rad-10 hov-img-zoom m-l-r-auto" style="margin-top: 10px;">
						<img src="{{asset($image[0])}}"  alt="IMG-OUR" style="width: 250px;height: 250px;">
					</div>
          <br>
				</div>

				<div class="col-md-6 " style="position:absolute;margin-top: 7px;">
					<div class="wrap-text-romantic t-center">
           <button class="submitBtn"  value="submit"> <span class="liked" id = "{{'heart'.$i}}" style="margin-left: 1150px ;"><i class="fa fa-heart fa-2x" aria-hidden="true"  ></i> </span></button>
						<br>
            <span class="tit2 "style="color:black;position: absolute;
            top: 3px;
            left: 275px;
            width: 300;
            height: 30px" >
							model:
                    </span>
					<span class="tit2 "style="color:black; position: absolute;
                    top: 3px;
                    left: 370px;
                    width: 300;
                    height: 30px" >{{$s->car_model}}</span>
                 <br>
                        <span class="tit2"style="color:black; margin-left:20px; position: absolute;
                        top: 40px;
                        left: 255px;
                        width: 300;
                        height: 30px" >
							price:
						</span>
						<span class="tit2 "style="color:black;position: absolute;
            top: 40px;
            left: 355px;
            width: 300;
            height: 30px" >{{$s->price}}</span>
            <br>
            <span class="tit2 " style="color:black; margin-left:100px; position: absolute;
            top: 80px;
            left: 170px;
            width: 300;
            height: 30px">
							brand:
						
                    </span>
					<span class="tit2 "style="color:black;position: absolute;
                    top: 160 px;
                    left: 360px;
                    width: 300;
                    height: 30px"  >{{$s->brand}}</span>
                    <br>
					<br><br><br>
					  <div style="color:black; margin-top:34px; margin-left:-35px" >
					  {{Carbon\Carbon::parse($s->created_at)->diffForHumans()}}
							</div>

            
                           
							                
							<a href="{{ url('/detail ads')}}/<?php echo $s->user_name;?>/<?php echo $s->created_at;?>';" class="btn btn-primary" style="width: 200px;margin-left: 983px;"  > show</a>
                        

					</div>
				</div>
                
			</div>
		</div>
		<br><br>
		</form>
		@break

	@elseif($favorite->username !== $Logged['logusername']  && $favorite->ad_username !== $s->user_name && $favorite->model !== $s->car_model && $favorite->price !== $s->price && $favorite->brand !== $s->brand && $favorite->created_at !== $s->created_at && $favorite->image !== $image[0])
	<form  class="myForm" action="" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="container">
		<input type="hidden" name="username" value="{{$Logged['logusername']}}">
		<input type="hidden" name="ad_username" value="{{$s->user_name}}">
		<input type="hidden" name="image" value="{{$image[0]}}">
		<input type="hidden" name="model" value="{{$s->car_model}}">
		<input type="hidden" name="price" value="{{$s->price}}">
		<input type="hidden" name="brand" value="{{$s->brand}}">
		<input type="hidden" name="time" value="{{($s->created_at)}}">
            <div class="row " style="background-color: gray;">
				<div class="col-md-6 ">
					<div class="wrap-pic-romantic  bo-rad-10 hov-img-zoom m-l-r-auto" style="margin-top: 10px;">
						<img src="{{asset($image[0])}}"  alt="IMG-OUR" style="width: 250px;height: 250px;">
					</div>
          <br>
				</div>

				<div class="col-md-6 " style="position:absolute;margin-top: 7px;">
					<div class="wrap-text-romantic t-center">
           <button class="submitBtn" value="submit"> <span id = "{{'heart'.$i}}" style="margin-left: 1150px ;"><i class="fa fa-heart-o fa-2x" aria-hidden="true"  ></i> </span></button>
						<br>
            <span class="tit2 "style="color:black;position: absolute;
            top: 3px;
            left: 275px;
            width: 300;
            height: 30px" >
							model:
                    </span>
					<span class="tit2 "style="color:black; position: absolute;
                    top: 3px;
                    left: 370px;
                    width: 300;
                    height: 30px" >{{$s->car_model}}</span>
                 <br>
                        <span class="tit2"style="color:black; margin-left:20px; position: absolute;
                        top: 40px;
                        left: 255px;
                        width: 300;
                        height: 30px" >
							price:
						</span>
						<span class="tit2 "style="color:black;position: absolute;
            top: 40px;
            left: 355px;
            width: 300;
            height: 30px" >{{$s->price}}</span>
            <br>
            <span class="tit2 " style="color:black; margin-left:100px; position: absolute;
            top: 80px;
            left: 170px;
            width: 300;
            height: 30px">
							brand:
						
                    </span>
					<span class="tit2 "style="color:black;position: absolute;
                    top: 160 px;
                    left: 360px;
                    width: 300;
                    height: 30px"  >{{$s->brand}}</span>
                    <br>
					<br><br><br>
					  <div style="color:black;  margin-top:34px; margin-left:-35px" >
					  {{Carbon\Carbon::parse($s->created_at)->diffForHumans()}}
							</div>

            
                           
							                
							<a href="{{ url('/detail ads')}}/<?php echo $s->user_name;?>/<?php echo $s->created_at;?>';" class="btn btn-primary" style="width: 200px;margin-left: 983px;"  > show</a>
                        

					</div>
				</div>
                
			</div>
		</div>
		<br><br>
		</form>
		@endif
	@elseif($logged == 'no')
	<form class="myForm" action="" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="container">
		<input type="hidden" name="image" value="{{$image[0]}}">
		<input type="hidden" name="model" value="{{$s->car_model}}">
		<input type="hidden" name="price" value="{{$s->price}}">
		<input type="hidden" name="brand" value="{{$s->brand}}">
		<input type="hidden" name="time" value="{{($s->created_at)}}">
            <div class="row " style="background-color: gray;">
				<div class="col-md-6 ">
					<div class="wrap-pic-romantic  bo-rad-10 hov-img-zoom m-l-r-auto" style="margin-top: 10px;">
						<img src="{{asset($image[0])}}"  alt="IMG-OUR" style="width: 250px;height: 250px;">
					</div>
          <br>
				</div>

				<div class="col-md-6 " style="position:absolute;margin-top: 7px;">
					<div class="wrap-text-romantic t-center">
           <button class="submitBtn"  value="submit"> <span class="liked" id = "{{'heart'.$i}}" style="margin-left: 1150px ;"><i class="fa fa-heart fa-2x" aria-hidden="true"  ></i> </span></button>
						<br>
            <span class="tit2 "style="color:black;position: absolute;
            top: 3px;
            left: 275px;
            width: 300;
            height: 30px" >
							model:
                    </span>
					<span class="tit2 "style="color:black; position: absolute;
                    top: 3px;
                    left: 370px;
                    width: 300;
                    height: 30px" >{{$s->car_model}}</span>
                 <br>
                        <span class="tit2"style="color:black; margin-left:20px; position: absolute;
                        top: 40px;
                        left: 255px;
                        width: 300;
                        height: 30px" >
							price:
						</span>
						<span class="tit2 "style="color:black;position: absolute;
            top: 40px;
            left: 355px;
            width: 300;
            height: 30px" >{{$s->price}}</span>
            <br>
            <span class="tit2 " style="color:black; margin-left:100px; position: absolute;
            top: 80px;
            left: 170px;
            width: 300;
            height: 30px">
							brand:
						
                    </span>
					<span class="tit2 "style="color:black;position: absolute;
                    top: 160 px;
                    left: 360px;
                    width: 300;
                    height: 30px"  >{{$s->brand}}</span>
                    <br>
					<br><br><br>
					  <div style="color:black; margin-top:34px; margin-left:-35px" >
					  {{Carbon\Carbon::parse($s->created_at)->diffForHumans()}}
							</div>

            
                           
							                
							<a href="{{ url('/detail ads')}}/<?php echo $s->user_name;?>/<?php echo $s->created_at;?>';" class="btn btn-primary" style="width: 200px;margin-left: 983px;"  > show</a>
                        

					</div>
				</div>
                
			</div>
		</div>
		<br><br>
		</form>
		@break
	@endif
	
	@endforeach
	@php($i++)
@endforeach

	</section>

	<script>
      const searchBox = document.querySelector(".search-box");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const searchInput = document.querySelector("input");
      const searchData = document.querySelector(".search-data");
      searchBtn.onclick =()=>{
        searchBox.classList.add("active");
        searchBtn.classList.add("active");
        searchInput.classList.add("active");
        cancelBtn.classList.add("active");
        searchInput.focus();
        if(searchInput.value != ""){
          var values = searchInput.value;
          searchData.classList.remove("active");
          searchData.innerHTML = "You just typed " + "<span style='font-weight: 500;'>" + values + "</span>";
        }else{
          searchData.textContent = "";
        }
      }
      cancelBtn.onclick =()=>{
        searchBox.classList.remove("active");
        searchBtn.classList.remove("active");
        searchInput.classList.remove("active");
        cancelBtn.classList.remove("active");
        searchData.classList.toggle("active");
        searchInput.value = "";
      }
    </script>







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
		@foreach($cfs as $s)

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
            url: '/new cars ads',
            data: form.serialize(),
        });
    });
});
</script>


</body>
</html>