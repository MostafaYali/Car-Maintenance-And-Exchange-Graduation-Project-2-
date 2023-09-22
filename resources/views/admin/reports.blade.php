<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin reports</title>
  <link rel="stylesheet" href="{{asset('backend/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html" style="background-color: white;"><h2 style="color: red;">admin</h2></a>
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
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
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
    
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">ads offers</h5>
            <div class="table-responsive">
              <table class="table center-aligned-table">
                <thead>
                  <tr class="text-primary">
                    <th>#</th>
                    <th>report</th>
                    <th>details</th>
                    <th>email</th>
                    <th>date</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                  </tr>
                </thead>
                <tbody>
                @php($i =1)
              @foreach($users as $user)
                  <tr class="">
                    <td>{{$i++}}</td>
                    <td>{{$user -> id}}</td>
                    <td>{{$user -> name}}</td>
                    <td>{{$user -> logemail}}</td>
                    <td> {{$user -> created_at}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="btn btn-primary btn-sm">accept</a></td>
                    <td><a href="#" class="btn btn-danger btn-sm">reject</a></td>
                    @endforeach
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('backend/js/off-canvas.js')}}"></script>
<script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('backend/js/misc.js')}}"></script>
</body>

</html>