<!DOCTYPE html>
<html>
<title>First</title>
@extends('admin.admin_master')
@section('admin')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/util.css')}}">
<link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<!--===============================================================================================-->
</head>


<body >
<div class="t-center">
<span class="tit2 t-center">
Modify
</span>

<h3 class="tit3 t-center m-b-35 m-t-2">
Model
</h3>
</div>
<form class="wrap-form-reservation size22 m-l-r-auto" action="{{url('oldcar/update'.$newcars->id)}}" method="POST">
@csrf
<label class = "welcome"></label><br>
<div class="row">
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Manfucturer :
    </span>
    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Manfucturer" value="{{url('$oldcars -> man_name')}}">
    </div>
</div>
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Model :
    </span>
    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Model"value="{{url('$oldcars -> model')}}">
    </div>
</div>
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Year From :
    </span>
    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" min="1900" max="2099" step="1" value="{{url('$oldcars -> year')}}" name = "year_from"/>
    </div>
</div>
<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Year To :
    </span>

    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" min="1900" max="2099" step="1" value="2000" value="{{url('$oldcars -> year')}}"/>
    </div>
</div>

<div class="col-md-4">
    <!-- Time -->
    <span class="txt9">
        Car Category :
    </span>

    <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <!-- Select2 -->
        <select class="bo-rad-10 sizefull txt10 p-l-20"  name="category" value="{{url('$oldcars -> category')}}">
            <option value = "Sedan">Sedan</optioon>
                <option value = "SUV">SUV</optioon>
                <option value = "Pickup">Pickup</optioon>
                <option value = "Van">Van</optioon>
                <option value = "MiniVan">MiniVan</optioon>
                <option value = "4X4">4X4</optioon>
                <option value = "Hatchback">Hatchback</optioon>
                <option value = "Coupe">Coupe</optioon>
        </select>
    </div>
</div>

<div class="col-md-4">
    <!-- Name -->
    <span class="txt9">
        Car Model (Arabic) :
    </span>

    <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder = "Car Model (Arabic)" name = "model(A)" value="{{url('$oldcars')}}">
    </div>
</div>

<input  href="{{ url('AddOldCar/edit/'.car_info ->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" type = "submit" name = "save" value = "Save">
</div>


</form>

</body>


<!-- <script type="text/javascript" src="{{asset('backend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/animsition/js/animsition.min.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/slick-custom.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/parallax100/parallax100.js')}}"></script>
<script type="text/javascript">
$('.parallax100').parallax100();
</script>

<script type="text/javascript" src="{{asset('backend/vendor/countdowntime/countdowntime.js')}}"></script>

<script type="text/javascript" src="{{asset('backend/vendor/lightbox2/js/lightbox.min.js')}}"></script>

<script src="{{asset('backend/js/main.js')}}"></script> -->

@endsection
</html>