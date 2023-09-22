<!DOCTYPE html>
<html lang="en">
<head>
	<title>add auction</title>
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
<style>
	 label {
    display: block;
    position: relative;
    background-color: #025bee;
    color: #ffffff;
    font-size: 1.12em;
    font-weight: 500;
    text-align: center;
    width: 18.75em;
    padding: 1.12em 0;
    margin: auto;
    border-radius: 0.31em;
    cursor: pointer;
  }
  #num-of-files {
    font-weight: 400;
    text-align: center;
    margin: 1.25em 0 1.87em 0;
  }
  p {
    list-style-type: none;
  }
  .a{
		color: white;
	}
	.a:hover{
		color: gold;
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


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="margin-bottom: -100px;">
		<h2 class="tit6 t-center" style="color: white;">
			Add Auction
		</h2>
	</section>

<form action = "{{ route('AuctionAdd') }}" method = "POST" enctype = "multipart/form-data">
	@csrf
	<section class="vh-100 gradient-custom">
		<div class="container py-5 h-100">
		  <div class="row justify-content-center align-items-center h-100">
			<div class="col-12 col-lg-9 col-xl-7">
			  <div class="card shadow-2-strong card-registration" style=" background-color: #2a2b38;
			  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); border-radius: 50px; ">

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
	
				<div class="card-back">
				  <div class="center-wrap">
					<div class="section text-center">
					  <br>
				<br>
	
	
	
                      <div class="form-group">
						
						<input type="file" id="file-input" name="images[]" multiple/>
						<label for="file-input" style="background-color: white; width: 90%; border-radius: 10px; height: 72px; text-align: center;  color: black; font-size: 25px;">
							<i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
													Select A Photo
						</label>
						<br>
						<div id="num-of-files" style="color: white;">No Files Choosen</div>
							<p id="files-list" style="color: white;"></p>
								@error('images[]')
								<br><span class = "text-warning">{{ $message }}</span>
								@enderror
							</div>	

					  <label style="background-color: transparent; color: white;">Manfuctiuner</label>
					  <div class="form-group">
						
						<input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="manifutiuner" class="form-style" placeholder="manifuctiuner" id="logname" autocomplete="off">
						@error('manifutiuner')
						<br><span class = "text-warning">{{ $message }}</span>
						@enderror
					  </div>	
	
	
	
					 
	
	
	
                   
	
                      <label style="background-color: transparent; color: white;">Model</label>
					  <div class="form-group">
						
						<input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="model" class="form-style" placeholder="model" id="logname" autocomplete="off">
						@error('model')
						<br><span class = "text-warning">{{$message}}</span>
						@enderror
					  </div>
                     	
                 
                      <label style="background-color: transparent; color: white;">Year</label>
					  <div class="form-group">
						
						<input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="year" class="form-style" placeholder="year" id="logname" autocomplete="off">
						@error('year')
  							<br><span class = "text-warning">{{$message}}</span>
						@enderror
					  </div>
					 	
	
                  
	
					  <label style="background-color: transparent; color: white;">Start price</label>
					  	<div class="form-group" style="color: white;">
						<input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="startprice" class="form-style" placeholder="start price" id="logname" autocomplete="off">
						@error('startprice')
						<br><span class = "text-warning">{{$message}}</span>
						@enderror
					  </div>	
	
	
	
					    

				
                      <label style="background-color: transparent; color: white;">Describtion</label>
					<div class="form-group">	
						<textarea style=" width: 90%; border-radius: 10px; text-align: center;
						height: 350px;" name = "description"  placeholder="TextArea"></textarea>
						@error('description')
						<br><span class = "text-warning">{{$message}}</span>
						@enderror
					</div>	


					  <label style="background-color: transparent; color: white;">Auction Ends At</label>
					  <div class="form-group">
						
						<input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="datetime-local" name="AuctionEndsAt" class="form-style" placeholder="Auction Ends At" id="logname" autocomplete="off">
						@error('AuctionEndsAt')
						<br><span class = "text-warning">{{$message}}</span>
						@enderror
					  </div>
	
	
	<br>
					 
					  <div class="form-group" style="color: white;">
						<button class="btn btn-primary" type="submit" style="border-radius: 50px;">Start An Auction</button>
					  </div>
                      <br>		  
			  </form>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	</form>



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
	<script>
		let fileInput = document.getElementById("file-input");
let fileList = document.getElementById("files-list");
let numOfFiles = document.getElementById("num-of-files");

fileInput.addEventListener("change", () => {
  fileList.innerHTML = "";
  numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

  for (i of fileInput.files) {
    let reader = new FileReader();
    let listItem = document.createElement("li");
    let fileName = i.name;
    let fileSize = (i.size / 1024).toFixed(1);
    
    if (fileSize >= 1024) {
      fileSize = (fileSize / 1024).toFixed(1);
      
    }
    fileList.appendChild(listItem);
  }
});
	</script>


</body>
</html>
