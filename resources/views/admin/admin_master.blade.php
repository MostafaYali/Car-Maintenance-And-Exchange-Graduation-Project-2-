
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('backend/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/c1.css')}}">
</head>
<body>
<header>
    <div id="wrapper">
        <div class="overlay"></div>
         
             <!-- Sidebar -->
         <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
            <div class="sidebar-header">
            <div class="sidebar-brand">
              <a href="{{route('admin.AddBrandPhoto')}}">Home</a></div></div>
            <li><a href="{{route('admin.AddBrandPhoto')}}">New brand</a></li>
            <li><a href="{{route('admin.AddNewCar')}}">Home NewCar</a></li>
            <li><a href="{{route('admin.ads')}}">Home ADS</a></li>
            <li><a href="{{route('admin.addads')}}"> Payment Ads</a></li>
            <li><a href="{{route('admin.reports')}}">Report</a></li>
           <li><a href="{{route('admin.accounts')}}">Users Accounts</a></li>
            <li class="dropdown">
            <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Properties Of Cars <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
          
          <li><a href="{{route('admin.battery')}}"> Batteries</a></li>
           <li><a href="{{route('admin.belts')}}"> belts</a></li>
           <li><a href="{{route('admin.tires')}}"> Tires</a></li>
           <li><a href="{{route('admin.oilbreak')}}">Oil break</a></li>
          <li><a href="{{route('admin.oilmotor')}}">Oil Motor </a></li>
           <li><a href="{{route('admin.oiltrans')}}">Oil Trans</a></li>
           <li><a href="{{route('admin.suggestion')}}">Home suggestions</a></li>
           </ul>
           </li>
           <li><a href="#services">Services</a></li>
           <li><a href="#contact">Contact</a></li>
           <li><a href="#followme">Follow me</a></li>
           </ul>
       </nav>
             <!-- /#sidebar-wrapper -->
     
             <!-- Page Content -->
             <div id="page-content-wrapper">
                 <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                     <span class="hamb-top"></span>
                     <span class="hamb-middle"></span>
                     <span class="hamb-bottom"></span>
                 </button>
                </header>
                 
             </div>
     
         </div>

<script type="text/javascript" src="{{asset('backend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('backend/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('backend/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('backend/vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('backend/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('backend/js/slick-custom.js')}}"></script>
     <script type="text/javascript">$(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
           isClosed = false;
      
          trigger.click(function () {
            hamburger_cross();      
          });
      
          function hamburger_cross() {
      
            if (isClosed == true) {          
              overlay.hide();
              trigger.removeClass('is-open');
              trigger.addClass('is-closed');
              isClosed = false;
            } else {   
              overlay.show();
              trigger.removeClass('is-closed');
              trigger.addClass('is-open');
              isClosed = true;
            }
        }
        
        $('[data-toggle="offcanvas"]').click(function () {
              $('#wrapper').toggleClass('toggled');
        });  
      });
      </script>
    </body>
     </html>

                 
@yield('admin')

        