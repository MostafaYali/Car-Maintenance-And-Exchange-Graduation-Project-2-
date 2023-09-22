
<!DOCTYPE html>
        <html>
            <title>EDIT New Car Model</title>
@extends('admin.admin_master')
@section('admin')
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            
        <body >
            <!-- <div class="t-center">
                <span class="tit2 t-center">
                    New Car
                </span>

                <h3 class="tit3 t-center m-b-35 m-t-2">
                    Model
                </h3>
            </div> -->
            <form class="wrap-form-reservation size22 m-l-r-auto" action="{{url('newcar/update/'.$newcars->id)}}"  method="POST" >
                @csrf
                <label class = "welcome"></label><br>
                @if(session('success'))
                {{session('success')}}
                @endif
                
                    <div class="col-md-8">
                        <!-- Name -->
                        <span class="txt9">
                            Enter :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input  type = "text" name="n_c_man"  class="bo-rad-10 sizefull txt10 p-l-20" value="{{ $newcars->car_man }}">

                            @error('n_c_man')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                    <span class="txt9">
                            Enter :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input  type = "text" name="n_c_model"  class="bo-rad-10 sizefull txt10 p-l-20" value="{{ $newcars->car_model }}">

                            @error('n_c_model')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <span class="txt9">
                            Enter :
                        </span>

                        <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                            <input  type = "text" name="category"  class="bo-rad-10 sizefull txt10 p-l-20" value="{{ $newcars->car_cat }}">

                            @error('category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                       
                    </div>

                    <div class="col-md-4">
                        

                       
                    </div>


                    
                        <!-- Name -->
                        <span class="txt9" style="padding-left: 135px;">
                            <button  type = "submit"  class="btn btn-primary" > Update brand</button>
                        </span>

             
            </form>
            @endsection
        </body>

        <!--===============================================================================================-->
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
        </html>