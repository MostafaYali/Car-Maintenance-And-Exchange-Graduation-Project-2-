<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>modify</title>
  <link rel="stylesheet" href="{{asset('backend/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
</head>
<style>
  .btn1 {

background-color:black;
color: white;
 margin-left:95%; 
 border-radius: 30px;
}
.btn1:hover{
  background-color: gray;
  color: white;
}
    .input{
    border-radius: 10px;

  }
  
.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}
  /* .i{
    color: white;
    background-color: chartreuse;

  }
  .label{
    color: white;
    background-color: chartreuse;
  } */
</style>

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
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
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

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Forms</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="{{route('store.brand')}}"  method = "POST" class="wrap-form-reservation size22 m-l-r-auto"  enctype="multipart/form-data">
                   
                  
                        @csrf
                        <label class = "welcome"></label><br>
                        @if(session('success'))
                {{session('success')}}
                @endif


                   


                    <div class="form-group">
                      <label for="exampleInputPassword1">Brand</label>
                      <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter" name="brand_name">
                      @error('brand_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Select A Photo</label>
                        <input style="display: none;" id="file" class="form-control p-input"  type = "file" name = "m_c_image" style="color: white;">
                            <label style="color: black;
                            text-align: center;
                            background-color: white;
                            top: 0;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            border-radius: 10px;
                            background-color: lightblue;
                            height: 40px;
                            border-color: red;
                            padding-left: 20px;
                            margin: auto;
                            font-size: 20px;
                            display: flex;
                            justify-content: center;
                            align-items: center; " for="file">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
                                Select A Photo
                            </label>
                     
                       
                    </div>


                    
                    
                   
                  



                    
                        <div class="form-group">
                      <input   name = "logout" value = "Save" type="submit" class="btn1">
                    </div>


                  
                  </form>
                </div>
              </div>
            </div>
            <div class="content-wrapper">
    
              <div class="row mb-2">
                <div class="col-lg-11">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">ads offers</h5>
                      <div class="table-responsive">
                        <table id="tableData" class="table table-bordered table-striped">
                          <thead>
                            <tr class="text-primary">
                              
                              <th>sl</th>
                              <th>id</th>
                              <th>name</th>
                              <th>photo</th>
                              <th>action</th>
                         
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          @php($i =1)
              @foreach($brands as $brand)
                            <tr class="">
                              <td>{{$i++}}</td>
                              <td>{{$brand->id }}</td>
                              <td>C{{$brand->brand }}</td>
                              <td><img src="{{asset($brand->image)}}" width="200px"</td>
                              @if($brand ->created_at==NULL)
              <span class="text-dengar"> No date set</span>
              @else
              {{ Carbon\Carbon::parse($brand->created_at) ->diffForHumans()}}
              @endif
                              <td></td>
                              <td></td>
                              <td style="text-align: center;"><a href="{{ url('brand/edit/'.$brand->id)}}" class="btn btn-danger btn-sm">edit</td>
                              <td ><a href="{{ url('brand/delete/'.$brand->id)}}" class="btn btn-danger btn-sm">delete</td>
                            </tr>
                            @endforeach
                           
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>

  </div>
</form>

  <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/misc.js')}}"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('backend/js/paging.js')}}"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
            });
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>

</html>
