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
          

          <form action = "{{ route('ForgetResetdone') }}" method = "POST">
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
			@csrf
            <div class="card-back">
              <div class="center-wrap">
                <div class="section text-center">
              

				<label style="background-color: transparent; color: white;margin-top: 10px;">OTP Send With This Link</label>
                  <br>
                  <div class="form-group">
                    
                    <input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="otpforreset" class="form-style" placeholder="OTP" id="logname" autocomplete="off">
                    @error('otpforreset')
                      <br><lable class = "text-warning">{{ $message }}</label>
                    @enderror
                    
                  </div>

                  <label style="background-color: transparent; color: white;margin-top: 10px;">New password</label>
                  <br>
                  <div class="form-group">
                    
                    <input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="NewPassword" class="form-style" placeholder="New Password" id="logname" autocomplete="off">
                    @error('NewPassword')
                    <br><lable class = "text-warning">{{ $message }}</label>
                    @enderror
                  </div>	

<br>
                  <label style="background-color: transparent; color: white;">Confrim Password</label>
                  <br>
                  <div class="form-group">
                    
                    <input style="width: 90%; border-radius: 10px; height: 55px; text-align: center;" type="text" name="ConfirmPassword" class="form-style" placeholder="Confrim Password" id="logname" autocomplete="off">
                    @error('ConfirmPassword')
                    <br><lable class = "text-warning">{{ $message }}</label>
                    @enderror
                  </div>	


                 <br>
                  <div class="form-group" style="color: white;">
                    <button class="btn btn-primary" type="submit">Change</button>
                  </div>	
          </form>
            <a href="/" class = "text-warning">Home Page</a>
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