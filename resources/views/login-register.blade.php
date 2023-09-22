<!DOCTYPE html>
<html lang="en" >
<head>

	<meta charset="UTF-8">
	<title>CMX</title>
	<link rel="shortcut icon" href="{{ asset('fontend/images/logo.jpeg') }}">
	<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel='stylesheet' href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<link rel="stylesheet" href="{{ asset('fontend/css/style-for-login.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
						<form action = "/auth/user" method = "POST">
							@csrf
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											@if(Session::get('ok'))
												<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
													<i class="fa fa-check-circle"></i>
													<strong class="mx-2">Success!</strong> {{ Session::get('ok') }}
												</div>
											@endif
											

											@if(Session::get('error'))
												<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
													<i class="fa fa-exclamation-circle"></i>
													<strong class="mx-2">Error!</strong> {{ Session::get('error') }}
												</div>
											@endif
											
											<div class="form-group">
												<input type="text" name="logemail_username" class="form-style" placeholder="Your UserName Or Email" id="logemail" autocomplete="off" value = "{{ old('logemail_username') }}">
												<i class="input-icon uil uil-user"></i>
												

												@error('logemail_username')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
												
												
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass1" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" value = "{{ old('logpass1') }}">
												<i class="input-icon uil uil-lock-alt"></i>
												@error('logpass1')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
												
											</div>
											<button type = "submit" class="btn mt-4">Submit</button>
                            				<p class="mb-0 mt-4 text-center"><a href="{{ route('ForgetView') }}" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
						</form>
							<form class="card-back" action ="/add/user" method = "POST">
								@csrf
								<div>
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off" value = "{{ old('logname') }}">
												<i class="input-icon uil uil-user"></i>
											</div>
												@error('logname')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" value = "{{ old('logemail') }}">
												<i class="input-icon uil uil-at"></i>
												@error('logemail')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" value = "{{ old('logpass') }}">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
												@error('logpass')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
											<div class="form-group mt-2">
												<input type="text" name="logusername" class="form-style" placeholder="Your UserName" id="logusername" autocomplete="off" value = "{{ old('logusername') }}">
												<i class="input-icon uil uil-user"></i>
											</div>
												@error('logusername')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
											<div class="form-group mt-2">
												<input type="text" name="logaddr" class="form-style" placeholder="Your Address"  autocomplete="off" value = "{{ old('logaddr') }}">
												<i class="input-icon uil uil-map-marker-alt"></i>
											</div>
												@error('logaddr')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
											<div class="form-group mt-2">
												<input type="text" name="logphone" class="form-style" placeholder="Your Phone"  autocomplete="off" value = "{{ old('logphone') }}">
												<i class="input-icon uil uil-phone-alt"></i>
											</div>
												@error('logphone')
													<label class = "text-warning">{{ $message }}</label>
												@enderror
											<div class="form-group mt-2">
												<label>Select Your Profile Type :</label>
												<label>User</label> <input type="radio" name="logtype"   autocomplete="off" value = "user">
												<label>WorkShop</label> <input type="radio" name="logtype"   autocomplete="off" value = "workshop">
											</div>
												@error('logtype')
													<label class = "text-danger">{{ $message }}</label>
												@enderror
											<button type = "submit" class="btn mt-4">submit</button>
				      					</div>
			      					</div>
			      				</div>
							</form>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
<!-- partial -->
  
</body>
</html>
