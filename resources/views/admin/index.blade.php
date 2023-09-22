<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> admin home</title>
  <link rel="stylesheet" href="{{asset('backend/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/flag-icon-css/css/flag-icon.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
  
</head>

<body>
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
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
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
        <nav class=" sidebar sidebar-offcanvas" id="sidebar" style="overflow: auto;height:50%;position:fixed;background-color :#ffffffbc;">
        
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
              <a class="nav-link" href="{{route('admin.AddOldCar')}}">
              <i class="fa fa-car highlight-icon" aria-hidden="true"></i>
                <span class="menu-title">Old Car</span>
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

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Dashboard</h3>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-danger">
                        <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      @foreach($numberofviews as $nviews)
                      <p class="card-text text-dark">Total Number Of Views From => 26/4/2023</p>
                      <p class="card-text text-dark">Last View Was From ( {{ Carbon\Carbon::parse($nviews->updated_at)->diffForHumans() }} )</p>
                      <h6 class="bold-text">{{ $nviews->NumberOfViews }}</h6>
                      @endforeach
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 65% lower growth
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-warning">
                        <i class="fa fa-gavel highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Active Auctions</p>
                      <h4 class="bold-text">{{ $N_active_auction }}</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                  <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-success">
                        <i class="fa fa-car highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">New Car Ads Now</p>
                      <h4 class="bold-text">{{ $N_active_newads }}</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                  <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-primary">
                        <i class="fa fa-car highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Used Car Ads Now</p>
                      <h4 class="bold-text">{{ $N_active_usedads }}</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-danger">
                          <i class="fa fa-car highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-dark">Cars For Rent</p>
                        <h4 class="bold-text">{{ $N_active_rentads }}</h4>
                      </div>
                    </div>
                    <p class="text-muted">
                    <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-warning">
                          <i class="fa fa-users highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-dark">Number Of Active Users</p>
                        <h4 class="bold-text">{{ $N_active_alluser }}</h4>
                      </div>
                    </div>
                    <p class="text-muted">
                    <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-success">
                          <i class="fa fa-user highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-dark">User Account</p>
                        <h4 class="bold-text">{{ $N_active_user }}</h4>
                      </div>
                    </div>
                    <p class="text-muted">
                    <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <h4 class="text-primary">
                          <i class="fa fa-cogs highlight-icon" aria-hidden="true"></i>
                        </h4>
                      </div>
                      <div class="float-right">
                        <p class="card-text text-dark">Workshop Account</p>
                        <h4 class="bold-text">{{ $N_active_allworkshop }}</h4>
                      </div>
                    </div>
                    <p class="text-muted">
                      <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                    </p>
                  </div>
                </div>
              </div>
              
              
              

          </div>
          

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/misc.js')}}"></script>
  <script src="{{asset('backend/js/chart.js')}}"></script>
  <script src="{{asset('backend/js/maps.js')}}"></script>
</body>

</html>