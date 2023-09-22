
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin ads</title>
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
              <img src="images/icons/1.png" alt="">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.AddBrandPhoto')}}">
              <img src="images/icons/2.png" alt="">
              <span class="menu-title">Brands</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.AddNewCar')}}">
              <img src="images/icons/005-forms.png" alt="">
              <span class="menu-title">New Car</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.ads')}}">
              <img src="images/icons/4.png" alt="">
              <span class="menu-title">ADS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.addads')}}">
              <img src="images/icons/5.png" alt="">
              <span class="menu-title">Payment Ads</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.reports')}}">
              <img src="images/icons/6.png" alt="">
              <span class="menu-title">Reports</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.accounts')}}">
              <img src="images/icons/7.png" alt="">
              <span class="menu-title">Users Account</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.adminaccounts')}}">
              <img src="images/icons/7.png" alt="">
              <span class="menu-title">Admins Account</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.battery')}}">
              <img src="images/icons/8.png" alt="">
              <span class="menu-title">Battery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.belts')}}">
              <img src="images/icons/8.png" alt="">
              <span class="menu-title">Belts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.tires')}}">
              <img src="images/icons/8.png" alt="">
              <span class="menu-title">Tires</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.oilbreak')}}">
              <img src="images/icons/8.png" alt="">
              <span class="menu-title">Oil Break</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.oilmotor')}}">
              <img src="images/icons/8.png" alt="">
              <span class="menu-title">Oil Motor</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.oiltrans')}}">
              <img src="images/icons/8.png" alt="">
              <span class="menu-title">Oil Trans</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.suggestion')}}">
              <img src="images/icons/8.png" alt="">
              <span class="menu-title">Suggestion</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('admin.auctionapproval')}}">
                <img src="images/icons/8.png" alt="">
                <span class="menu-title">auctionapproval</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="images/icons/9.png" alt="">
                <span class="menu-title">Sample Pages<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank_page.html">
                      Blank Page
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html">
                      Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html">
                      Register
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/404.html">
                      404
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/500.html">
                      500
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="images/icons/10.png" alt="">
                <span class="menu-title">Settings</span>
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
                    <th>sl</th>
                    <th>brand</th>
                            <th>model</th>
                            <th>km_from</th>
                            <th>km_to</th>
                            <th>oil</th>
                            <th>oil_km</th>
                            <th>battery</th>
                            <th>battery_live</th>
                            <th>asisstan</th>
                            <th>belts</th>
                            <th>belts_km_from</th>
                            <th>belts KM To</th>
                            <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <td>034</td>
                    <td>Designs</td>
                    <td>Client</td>
                    <td>53275531</td>
                    <td>12 May 2017</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                  </tr>
                  <tr class="">
                  @php($i =1)
                        @foreach($shows as $show)
                          <tr>
                            <th>{{$i++}}</th>
                            <td>{{$show->brand}}</td>
                            <td>{{$show->model}}</td>
                            <td>{{$show->km_from}}</td>
                            <td>{{$show->km_to}}</td>
                            <td>{{$show->oil}}</td>
                            <td>{{$show->oil_km}}</td>
                            <td>{{$show->battery}}</td>
                            <td>{{$show->battery_live}}</td>
                            <td>{{$show->asisstan}}</td>
                            <td>{{$show->belts}}</td>
                            <td>{{$show->belts_km_from}}</td>
                            <td>{{$show->belts_km_to}}</td>
                            <td>
              @if($show ->created_at==NULL)
              <span class="text-dengar"> No date set</span>
              @else
              {{ Carbon\Carbon::parse($show->created_at) ->diffForHumans()}}
              @endif
                    <td><a href="{{url('suggestion/edit/'.$show->id)}}" class="btn btn-danger btn-sm">Remove</a></td>
                  </tr>
                  @endforeach
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