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
    @extends('admin.admin_master')
@section('admin')



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
											Update Image
										</label>
								</div>	
								@error('userlogo')
									<label class = "text-warning">{{ $message }}</label>
								@enderror

								<button type = "submit" class="btn3 flex-c-m size13 txt11 trans-0-4" style="margin:10px;margin-left: 75px;">Update Photo</button>

							</form>

							<p class="t-center">
								<form action = "{{ route('update.email') }}" method = "POST">
									@csrf
									<label class = "text-white">Email :</label> <input type = "text" name = "emailforupdate" value = "{{ $Logged['logemail'] }}">
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
								<form action = "{{ route('updatepassword') }}" method = "POST">
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
														<label class = "text-black">Old Password :</label>
													<input style="border-radius: 50px; width: 250px; text-align: center;" type="password" placeholder="Old Password" name = "OldPassword" value = "{{ old('OldPassword') }}">
													</div>

													@error('OldPassword')
														<label class = "text-danger">{{ $message }}</label>
													@enderror
											
											
													<div class="modal-body">
														<label class = "text-black">New Password :</label>
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
										</div>
								</form>
							</table>
						</div>
					</div>
				</div>   
			</div>
		</div>
        @endsection
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