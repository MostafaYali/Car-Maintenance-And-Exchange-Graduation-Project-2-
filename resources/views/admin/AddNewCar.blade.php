<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>new car model</title>
  <link rel="stylesheet" href="{{asset('backend/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.png')}}" />
</head>
<style>
.btn1 {

background-color:black;
color: white;
 margin-left:98%; 
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
</style>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
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
                  <form class="forms-sample">
                    




                    <div class="form-group"action="{{route('store.new')}}" method="POST"  enctype="multipart/form-data">
                 @csrf
                <label class = "welcome"></label><br>
                @if(session('success'))
                {{session('success')}}
                @endif
                        <label for="exampleInputPassword1">Car Photos</label>
                        <input style="display: none;" id="file" class="form-control p-input"  type = "file" name = "car_image" style="color: white;">
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
                            </label>
                            @error('car_image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                     
                       
                    </div>



                    <div class="form-group">
                      <label for="exampleInputPassword1">Car Manifacture</label>
                      <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Manifacture" name = "n_c_man">
                      @error('n_c_man')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Car Model</label>
                      <input style="border-radius: 10px;" type="tect" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Model" name = "n_c_model" >
                      @error('n_c_model')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Car Class</label>
                        <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Class" name = "n_c_class" >
                        @error('n_c_class')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>


                      <div class="form-group">
                        <label for="exampleInputPassword1">Car CC</label>
                        <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car CC" name = "n_c_cc">
                         @error('n_c_cc')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>

                    <div class="form-group">
                        <label for="exampleInputtext1">Car Transmission</label>
                        <select style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Select" name = "n_c_transmission_type">
                        <option value = "automatic">Auto</optioon>
                                    <option value = "manual">Manual</optioon>
                        </select>
                        @error('n_c_transmission_type')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>
  
  
  
  
                      <div class="form-group">
                        <label for="exampleInputPassword1">Car Category</label>
                        <select style="border-radius: 10px;"  type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter text "  name="category" >
                        <option value = "Sedan">Sedan</optioon>
                                    <option value = "SUV">SUV</optioon>
                                    <option value = "Pickup">Pickup</optioon>
                                    <option value = "Van">Van</optioon>
                                    <option value = "MiniVan">MiniVan</optioon>
                                    <option value = "4X4">4X4</optioon>
                                    <option value = "Hatchback">Hatchback</optioon>
                                    <option value = "Coupe">Coupe</optioon>
                          </select>
                          @error('category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>


                      <div class="form-group">
                        <label for="exampleInputPassword1">Car Warranty (Y)</label>
                        <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Warranty(Y)"name = "n_c_w_y">
                        @error('n_c_w_y')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>



                      <div class="form-group">
                        <label for="exampleInputPassword1">Car Warranty (Km)</label>
                        <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Warranty(Km)" name = "n_c_w_km">
                        @error('n_c_w_km')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>



                      <div class="form-group">
                        <label for="exampleInputPassword1">Car Hp</label>
                        <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Hp" name= "n_c_hp">
                        @error('n_c_hp')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>


                      <div class="form-group">
                        <label for="exampleInputPassword1">Car Year</label>
                        <input style="border-radius: 10px;" type="number" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Year" name = "n_c_year">
                        @error('n_c_year')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>


                      <div class="form-group">
                        <label for="exampleInputPassword1">Car Model (Arabic)</label>
                        <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Model (Arabic)"name = "modelA">
                        @error('modelA')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>


                      <div class="form-group">
                        <label for="exampleInputPassword1">Car Price</label>
                        <input style="border-radius: 10px;" type="text" class="form-control p-input" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Car Price" name = "price">
                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>


                    
                      <div class="form-group">
                      </div>
               



                    


                    <div class="form-group">
                      <input   type="submit" class="btn1"  value = "save">
                    </div>

                    <br>



                    <div class="table-responsive" style="margin-top: 10%;">
                        <table  id="tableData" class="table table-bordered table-striped">
                          <thead>
                            <tr class="text-primary">
                              <th>id</th>
                              
                              <th>photo</th>
                              <th>brand</th>
                              <th>model</th>
                              <th>year</th>
                              <th>catgory</th>
                              <th>model arabic</th>
                              <th>class</th>
                              <th>warranty </th>
                              <th>warranty km</th>
                              <th>cc</th>
                              <th>hp</th>
                              <th>trans</th>
                              <th>price</th>
                              <th>create at </th>
                              <th>action</th>
                              
                             
                            </tr>
                          </thead>
                          <tbody>
                          @php($i =1)
              @foreach($newcars as $newcar)
                            <tr class="">
                              <td>{{$newcar-> id}}</td>
                              <td>{{$newcar -> car_image}}</td>
                              <td>{{$newcar -> car_man}}</td>
                              <td>{{$newcar -> car_model}}</td>
                              <td>{{$newcar -> car_year}}</td>
                    
                              <td>{{$newcar -> car_cat}}</td>
                              <td>{{$newcar -> car_model_arabic}}</td>
                              <td>{{$newcar -> car_class}}</td>
                              <td>{{$newcar -> warranty}}</td>
                              <td>{{$newcar-> warrantykm}}</td>
                              <td>{{$newcar -> cc}}</td>
                              <th>{{$newcar -> hp}}</th>
                              <th>{{$newcar -> transmissiontype}}</th>
                              <th>{{$newcar -> price}}</th>
                              <th>
                              @if($newcar ->created_at==NULL)
              <span class="text-dengar"> No date set</span>
              @else
              {{ Carbon\Carbon::parse($newcar->created_at) ->diffForHumans()}}
              @endif
              </th>
              <td style="text-align: center;"><a href="{{ url('newcar/edit/'.$newcar->id)}}" class="btn btn-danger btn-sm">edit</td>
                              <td ><a href="{{ url('newcar/delete/'.$newcar->id)}}" class="btn btn-danger btn-sm">delete</td>
                            </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
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
