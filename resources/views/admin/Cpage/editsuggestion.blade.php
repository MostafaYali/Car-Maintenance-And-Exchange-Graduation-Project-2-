<!DOCTYPE html>
<html>
<title>Details</title>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('backend/images/icons/favicon.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/lightbox2/css/lightbox.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css')}}">

	

</head>

@extends('admin.admin_master')
@section('admin')

<body>

	@if(session('success'))
	<div class="alert alert-success" role="alert">
  		<strong>{{session('success')}}</strong>
	</div>
		@endif



    <section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					
    <form class="wrap-form-reservation size22 m-l-r-auto"  action="{{url('suggestion/update/'.$show->id)}}"  method="POST">
        @csrf
        <label class = "welcome"></label><br>
        <div class="row">
            <div class="col-md-4">
                <!-- Name -->
                <span class="txt9" style="color: black;">
                    Brand :
                </span>
                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
				
                    <select class="bo-rad-10 sizefull txt10 p-l-20" placeholder=" Select Brand" name="brand">
                    <option >Select</option>
                    @foreach($vars as $var)
                            <option >{{$var-> man_name}}</option>
                            @endforeach
                    </select>
					@error('brand')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
            
            <div class="col-md-4">
                <!-- Name -->
                <span class="txt9" style="color: black;">
                    Model :
                </span>
                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"  name="model">
                    <option >Select</option>
					@foreach($vars as $var)
                            <option >{{$var->model}}</option>
							@endforeach 
                    </select>
                    @error('model')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
            

            <div class="col-md-4">
                <span class="txt9" style="color: black;">
                    KM From :
                </span>
                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text"  placeholder="KM from" name="km_from">
                    @error('km_from')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
            
            
            <div class="col-md-4">
                <span class="txt9" style="color: black;">
                    KM To :
                </span>
                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text"  placeholder="KM to" name="km_to">
                    @error('km_to')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>

            
            <div class="col-md-4">
                <span class="txt9" style="color: black;">
                    Option Oil : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"   name="foil">
                    <option >Select</option>
                    @foreach($oils as $oil)
                        <option >{{$oil-> brand_oil}}</option>
                        @endforeach
                    </select>
                    @error('foil')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>

            <div class="col-md-4">
            <span class="txt9" style="color: black;">
                     Oil KM : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                  
                    <select class="bo-rad-10 sizefull txt10 p-l-20"   name="oil_km">
                    <option >Select</option>
                    @foreach($oils as $oil)
                        <option >{{$oil-> brand_oil}}</option>
                        @endforeach
                    </select>
                    @error('oil_km')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
           
           

           

            <div class="col-md-4">
                <span class="txt9" style="color: black;">
                 Option Battery : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"  name="fbattrey">
                    <option >Select</option>
                    @foreach($batterys as $battery)
                    
                        <option >{{$battery-> brand_battery}}</option>
                        @endforeach
                    </select>
                    @error('fbattrey')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>


            <div class="col-md-4">
            <span class="txt9" style="color: black;">
                  Battery live : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <!-- Select2 -->
                    <select class="bo-rad-10 sizefull txt10 p-l-20"  name="battrey_live">
                    <option >Select</option>
                    @foreach($batterys as $battery)
                    
                        <option >{{$battery-> brand_battery}}</option>
                        @endforeach
                    </select>
                    @error('battrey_live')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
                



            <div class="col-md-4">  
                <span class="txt9" style="color: black;">
                 Option tire : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20" name="ftire">
                    <option >Select</option>
                    @foreach($tires as $tire)
                    
                        <option >{{$tire-> brand_tire}}</option>
                        @endforeach
                    </select>
                    @error('ftire')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>


            <div class="col-md-4">  
                <span class="txt9" style="color: black;">
                   tire model: 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"  name="tire_model">
                    <option >Select</option>
                    @foreach($tires as $tire)
                        <option >{{$tire-> brand_tire}}</option>
                        @endforeach
                    </select>
                    @error('tire_model')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
           

            

            <div class="col-md-4">
                <span class="txt9" style="color: black;">
                Optian assistant: 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"  name="fassis">
                    <option >Select</option>
                    @foreach($asisstans as $asisstan)
                        <option>{{$asisstan-> asisstan_type}}</option>
                        @endforeach
                    </select>
                    @error('fassis')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>         
           

            <div class="col-md-4">
                <span class="txt9" style="color: black;">
                Option belts : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"  name="fbelte">
                    <option >Select</option>
                    @foreach($mybelts as $mybelt)
                        <option >{{$mybelt-> belts_type}}</option>
                        @endforeach
                    </select>
                    @error('fbelte')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>


            <div class="col-md-4">
            <span class="txt9" style="color: black;">
                belts From : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"  name="belts_from">
                    <option >Select</option>
                    @foreach($mybelts as $mybelt)
                        <option >{{$mybelt-> belts_type}}</option>
                        @endforeach
                    </select>
                    @error('belts_from')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>


            <div class="col-md-4">
            <span class="txt9" style="color: black;">
               belts To : 
                </span>
                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20" name="belts_to">
                    <option >Select</option>
                    @foreach($mybelts as $mybelt)
                        <option >{{$mybelt-> belts_type}}</option>
                        @endforeach
                    </select>
                    @error('belts_to')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
            
            <div class="col-md-4">
                <span class="txt9" style="color: black;">
                    Year :
                </span>
                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                    <select class="bo-rad-10 sizefull txt10 p-l-20"   name="years">
                    <option >Select</option>
                    @foreach($vars as $var)
                        <option >{{$var-> year}}</option>
                        @endforeach
                    </select>
                    @error('years')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                </div>
            </div>
            


            <span class="txt9" style="padding-left: 135px;">
                            <button  type = "submit"  class="btn btn-primary" > Update brand</button>
                        </span>
            
        </div>
		@endsection

        </section>
    </form>
	
    
    

			




	

	

</body>
</html>





