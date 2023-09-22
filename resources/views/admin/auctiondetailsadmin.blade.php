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
</head>
<body class="animsition">

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
											Car DATA        </h4>
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
											DESCRIPTION        </h4>
									</div>
									<div class="card-body word-break pt-2 pb-3">
												
								<div class="row mb-3">
									<div class="col beschreibung">
								
								<ul>
								<p>
									{{ $details->description }}
								</p>
								
								</ul>            </div>
								</div>
												
								
								
											</div>
								</div>
							</div>
						</div>

						
						

						

						

					

						
						
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						
						

						
						<div class="search-sidebar2 size12 bo2 pos-relative">
                            <span style = "color:yellow; ">
                                <lable>Start Price => {{ $details->price }}</lable>
                            </span>
							<a class="btn3 flex-c-m size13 txt11 trans-0-4" href = "{{ route('admin.auctionapproval') }}">Return To Admin Page</a>
						</div>
						

						

						


						
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
