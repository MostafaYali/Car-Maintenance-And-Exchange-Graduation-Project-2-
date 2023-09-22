<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> details</title>
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
      <div class="row row-offcanvas row-offcanvas-right" >
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
          <h3 class="page-heading mb-4">Forms</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                @if(session('success'))
	<div class="alert alert-success" role="alert">
  		<strong>{{session('success')}}</strong>
	</div>
		@endif

                  <form class="forms-sample"action="{{route('store.sugg')}}"  method="POST">
        @csrf


                  
                    <div class="form-group">
                      <label for="exampleInputtext1">Brands</label>
                      <select style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Select" name="brand">
                      <option>Select</option>
                      @foreach($vars as $var)
                            <option >{{$var-> man_name}}</option>
                            @endforeach
                      </select>
                      @error('brand')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Models</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($vars as $var)
                            <option >{{$var->model}}</option>
							@endforeach 
                        </select>
                        @error('model')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Option Oil</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($oils as $oil)
                        <option >{{$oil-> brand_oil}}</option>
                        @endforeach
                        </select>
                        @error('foil')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Oil Km</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @error('oil_km')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </select>
                        @error('oil_km')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Option Battery</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($batterys as $battery)
                    
                    <option >{{$battery-> brand_battery}}</option>
                    @endforeach
                        </select>
                        @error('fbattrey')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Battery Live</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($batterys as $battery)
                    
                        <option >{{$battery-> brand_battery}}</option>
                        @endforeach
                        </select>
                        @error('battrey_live')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Option Tire</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($tires as $tire)
                    
                        <option >{{$tire-> brand_tire}}</option>
                        @endforeach
                        </select>
                        @error('ftire')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Tire Model</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($tires as $tire)
                        <option >{{$tire-> brand_tire}}</option>
                        @endforeach
                        </select>
                        @error('tire_model')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Option Assistant</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($asisstans as $asisstan)
                        <option>{{$asisstan-> asisstan_type}}</option>
                        @endforeach
                        </select>
                        @error('fassis')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>



                    <div class="form-group">
                      <label for="exampleInputPassword1">Option Belts</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($mybelts as $mybelt)
                        <option >{{$mybelt-> belts_type}}</option>
                        @endforeach
                        </select>
                        @error('fbelte')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>



                    <div class="form-group">
                      <label for="exampleInputPassword1">Belts From</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($mybelts as $mybelt)
                        <option >{{$mybelt-> belts_type}}</option>
                        @endforeach
                        </select>
                        @error('belts_from')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>



                    <div class="form-group">
                      <label for="exampleInputPassword1">Belts To</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($mybelts as $mybelt)
                        <option >{{$mybelt-> belts_type}}</option>
                        @endforeach
                        </select>
                        @error('belts_to')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>



                    <div class="form-group">
                      <label for="exampleInputPassword1">Year</label>
                      <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text">
                        <option>Select</option>
                        @foreach($vars as $var)
                        <option >{{$var-> year}}</option>
                        @endforeach
                        </select>
                        @error('years')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Km From</label>
                      <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Km From" name="km_from">
                      @error('km_from')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Km To</label>
                      <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Km to" name="km_to">
                      @error('km_to')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    
                    
                   
                    <div class="form-group">
                     
                    </div>



                    <div class="form-group">
                      <input style="background-color: rgb(82, 82, 244);margin-left: 50%;"  type="submit" class="btn" value="save">
                                           

                    </div>


                    <div class="form-group">
                      <button style="background-color: rgb(247, 108, 108); margin-left:50%"  type="submit" class="btn" >Show Table</button>
                    </div>
                  </form>
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
