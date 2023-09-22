
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
</style>
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
          <div class="table-responsive"  style="overflow: auto;">
              <table id="tableData" class="table center-aligned-table" >
                <thead>
                  <tr class="text-primary">
                  <th scope="col">SL</th>
              <th scope="col" style="text-align: center;">id</th>
              <th scope="col" style="text-align: center;">UserEmail</th>
              <th scope="col" style="text-align: center;">picture</th>
              <th scope="col" style="text-align: center;">ads type</th>
              <th scope="col" style="text-align: center;">ads details</th>
              <th scope="col" style="text-align: center;"> create_at </th>
              <th scope="col" style="text-align: center;"> action </th>
              </tr>
            </thead>
            <tbody>
            @php($i=1)
              @foreach($sellcarAds as $sellcarAd)
              <tr>
              <th scope="row">{{$i++}}</th>
              <td style="text-align: center;">{{$sellcarAd -> id}}</td>
              <td style="text-align: center;">{{$sellcarAd -> user_name}}</td>
              <td style="text-align: center;" style=" height:100px;   width:200px;">{{$sellcarAd -> images}}</td>
              <td style="text-align: center;">{{$sellcarAd -> ad_type}}</td>
              <td style="text-align: center;">{{$sellcarAd -> description}}</td>
              
              <td style="text-align: center;">
              @if($sellcarAd ->created_at==NULL)
              <span class="text-dengar"> No date set</span>
              @else
              {{ Carbon\Carbon::parse($sellcarAd->created_at) ->diffForHumans()}}
              @endif
              </td>
              
              <td style="text-align: center;">
                <a href="{{ url('sellcarads/delete/'.$sellcarAd->id)}}" class="btn btn-danger">Delete</a>
            </td>
              </tr>
              @endforeach


              @php($i=1)
              @foreach($tboaAds as $tboaAd)
              <tr>
              <th scope="row">{{$i++}}</th>
              <td style="text-align: center;">{{$tboaAd -> id}}</td>
              <td style="text-align: center;">{{$tboaAd -> user_name}}</td>
              <td style="text-align: center;" style=" height:100px;   width:200px;">{{$tboaAd -> images}}</td>
              <td style="text-align: center;">tboaAds</td>
              <td style="text-align: center;">{{$tboaAd -> description}}</td>
              <td style="text-align: center;">
              @if($tboaAd ->created_at==NULL)
              <span class="text-dengar"> No date set</span>
              @else
              {{ Carbon\Carbon::parse($tboaAd->created_at) ->diffForHumans()}}
              @endif
              </td>
              
              <td style="text-align: center;">
              
                <a href="{{ url('tboaads/delete/'.$tboaAd->id)}}" class="btn btn-danger">Delete</a>
            </td>
              </tr>
              @endforeach

              @php($i=1)
              @foreach($rentAds as $rentAd)
              <tr>
              <th scope="row">{{$i++}}</th>
              <td style="text-align: center;">{{$rentAd -> id}}</td>
              <td style="text-align: center;">{{$rentAd -> user_name}}</td>
              <td style="text-align: center;" style=" height:100px;   width:200px;">{{$rentAd -> images}}</td>
              <td style="text-align: center;">rentAds</td>
              <td style="text-align: center;">{{$sellcarAd -> description}}</td>
              <td style="text-align: center;">
              @if($rentAd ->created_at==NULL)
              <span class="text-dengar"> No date set</span>
              @else
              {{ Carbon\Carbon::parse($rentAd->created_at) ->diffForHumans()}}
              @endif
              </td>
              
              <td style="text-align: center;">
                <a href="{{ url('rentads/delete/'.$rentAd->id)}}" class="btn btn-danger">Delete</a>
            </td>
              </tr>
              @endforeach

              @php($i=1)
              @foreach($sparepartsAds as $sparepartsAd)
              <tr>
              <th scope="row">{{$i++}}</th>
              <td style="text-align: center;">{{$sparepartsAd -> id}}</td>
              <td style="text-align: center;">{{$sparepartsAd -> user_name}}</td>
              <td style="text-align: center;">{{$sparepartsAd -> images}}</td>
              <td style="text-align: center;">SparepartsAds</td>
              <td style="text-align: center;">{{$sparepartsAd -> description}}</td>
              <td style="text-align: center;">  @if($sparepartsAd ->created_at==NULL)
              <span style="color:red;"> No date set</span>
              @else
              {{ Carbon\Carbon::parse($sparepartsAd->created_at) ->diffForHumans()}}
              @endif
              </td>
              <td style="text-align: center;">
                <a href="{{ url('sparepartsads/delete/'.$sparepartsAd->id)}}" class="btn btn-danger">Delete</a>
            </td>
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

