<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>UserProfile</title>
  

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/util.css')}}">
<link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />


  <link rel="stylesheet" href="{{asset('backend/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/flag-icon-css/css/flag-icon.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
 

</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><h2 style="color: red;">admin</h2></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="{{asset('backend/')}}images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar" style="overflow: auto;height:50%;position:fixed;">
        
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.index')}}">
              <i class="fa fa-slack highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.AddBrandPhoto')}}">
              <i class="fa fa-car highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">Brands</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.AddNewCar')}}">
              <i class="fa fa-car highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">New Car</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.ads')}}">
              <i class="fa fa-car highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">ADS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.addads')}}">
              <i class="fa fa-credit-card-altfa fa-credit-card-alt highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">Payment Ads</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.reports')}}">
              <i class="fa fa-paper-plane-o highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">Reports</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.accounts')}}">
              <i class="fa fa-users highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">Users Account</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin.adminaccounts')}}">
            <i class="fa fa-users highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Admins Account</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
              <i class="fa fa-cogs highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">Maintanance<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item">
            <a class="nav-link" href="{{route('admin.battery')}}">
            <i class="fa fa-calendar-o highlight-icon " aria-hidden="true"></i>
              <span class="menu-title">Battery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.belts')}}">
            <i class="fa fa-wrench highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Belts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.tires')}}">
            <i class="fa fa-wrench highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Tires</span>
            </a>
          </li>

                <li class="nav-item">
            <a class="nav-link" href="{{route('admin.oilbreak')}}">
            <i class="fa fa-wrench highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Oil Break</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.oilmotor')}}">
            <i class="fa fa-wrench highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Oil Motor</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.oiltrans')}}">
            <i class="fa fa-wrench highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Oil Trans</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.suggestion')}}">
            <i class="fa fa-wrench highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Suggestion</span>
            </a>
          </li>
                </ul>
              </div>
         
          
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.auctionapproval')}}">
              <i class="fa fa-gavel highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">auctionapproval</span>
              </a>
            </li>
            
                
              
          
            <li class="nav-item">
            <a class="nav-link" href="{{route('user.logout')}}">
            <i class="fa fa-sign-out highlight-icon" aria-hidden="true"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
          </ul>
        </nav>
  
         
         


        <div class="content-wrapper">
          <div class="content">							<div class="bg-white border rounded">
								<div class="row no-gutters">
									<div class="col-lg-4 col-xl-10">
										<div class="profile-content-left pt-5 pb-3 px-3 px-xl-10">
											<div class="card text-center widget-profile px-0 border-0">
												<h3 class="col-lg-4 col-xl-12" style="font-family: 'Times New Roman', Times, serif;font-style:italic;color:blueviolet" > profile</h3>
												<br><br>
												<div class="card-img mx-auto rounded-circle">
													<img src="{{asset($users->image)}}" alt="user image">
												</div>
												<div class="card-body">
													<h4 class="py-2 text-dark">{{$users->logusername}}</h4>
													<p>{{$users->name}}</p>
												
												</div>
											</div>
										
											<hr class="w-100">
											<div class="contact-info pt-4" style="text-align: center;">
												<h5 class="text-dark mb-1">Contact Information</h5>
												<p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
												<p>{{$users->logemail}}</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
												<p>{{$users->logemail}}1</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
												<p>{{$users->logemail}}</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
												<p class="pb-3 social-button">
													<a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
														<i class="mdi mdi-twitter"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
														<i class="mdi mdi-linkedin"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
														<i class="mdi mdi-facebook"></i>
													</a>
													<a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
														<i class="mdi mdi-skype"></i>
													</a>
												</p>
											</div>
										</div>
									</div>
								
 

      
    

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/misc.js')}}"></script>



  </body>
</html>
