<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v4</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/roboto-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <style >
    	.container { border:2px solid #ccc; width:300px; height: 100px; overflow-y: scroll;
    </style>
</head>
<body>
	<div id="app"></div>
	<div class="page-content" style="background-image: url('images/new.jpg')">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Sign Up To Financial</h3>
					<p>Fill all form field to go next step</p>
				</div>
				@if(count($errors)>0)
	@foreach($errors->all() as $error)
	<span>
		{{$error}}
	</span>
	@break
	@endforeach
	@endif
		        <form class="form-register" action="{{route('register-clinic')}}" method="post">
		        	@csrf
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">About</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Personal Information:</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
	<input type="text" class="form-control" id="first-name" name="f_name" value="{{old('f_name')}}" />
											<span class="label">First Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
	<input type="text" class="form-control" id="last-name" name="l_name" value=" {{old('l_name')}} " />
											<span class="label">Last Name</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
			
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="mobile" value="{{old('mobile')}}" >
											<span class="label">Phone Number</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text">Account</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Do you have an account?</h3>
								<div class="form-row">
									<!-- <div id="radio">
										<input type="radio" name="gender" value="male" checked class="radio-1"> I already have an account.
  										<input type="radio" name="gender" value="female"> I'm newbie
									</div> -->
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="email" id="your_email_1" class="form-control" value="{{old('email')}}" >
											<span class="label">E-Mail</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" name="password" id="password_1" class="form-control"   >
											<span class="label">Password</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" name="password_confirmation" id="comfirm_password_1" class="form-control">
											<span class="label">Comfirm Password</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Clinic details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>About Clinic</h3>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="name" name="name" value="" maxlength="50" value="{{old('name')}}" >
											<span class="label">Clinic Name</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
					<input type="text"  class="form-control"name="cr_no" value="{{old('cr_no')}}" >
											<span class="label">Cr Number</span>
											<span class="border"></span>
										</label>
									</div>	
								</div>
								<!--  -->
								<div class="form-row">
									
										<div class="form-holder">
										<label class="form-row-inner">
							<input type="text"  class="form-control" name="license_no" value="{{old('license_no')}}" >
											<span class="label">License no</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											  <input type="number" class="form-control" name="postal_code" maxlength="12" value="{{old('postal_code')}}" >
											<span class="label">Postal Code</span>
											<span class="border"></span>
										</label></div>
									
								</div>
								<!--  -->
								<!--  -->
																<!--  -->
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
								 <input type="text" class="form-control" name="address_1" value="{{old('address_1')}}" >
											<span class="label">Address 1</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
				 <input type="text"  class="form-control" name="address_2" value="{{old('address_2')}}">
											<span class="label">Address 2</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
								<!--  -->
								
								<div class="form-row">
									
									<div class="form-holder">
										<span>cr image</span>
										<input type="file" name="cr_image"  value="">
											<!-- <span class="label">First Name</span> -->
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<span>Logo</span>
										<label class="form-row-inner">
											<input id="clinic_logo"  name="clinic_logo"  type="file" accept="image/x-png,image/gif,image/jpeg"/ value="{{old('clinic_logo')}}">
											<span class="border"></span>
										</label>
									</div>
									
								</div>
								<!--  -->
								<div class="form-row">

									<div class="form-holder">
										<span>nhra image</span>
										<input type="file" name="nhra_image" >
											<!-- <span class="label">First Name</span> -->
											<span class="border"></span>
										</label>
									</div>
								
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
    <select class="form-control" id="country_id" name="country_id">
                                                    <option value="0"  selected>Select Country</option>
                  @php
                  $country =\App\Model\Country::all();
                  @endphp 

                  @foreach($country as $country)
                               <option value="{{$country->id}}">{{$country->name}}</option>  
                   @endforeach    
                                            </select>
									</div>
								</div>
								<div class="form-row">
									@php
									$avg=\App\Model\Average::all();
									@endphp
									<div class="form-holder form-holder-2">
										 <select name="avg_doctors" required>
                                            <option value="0" selected>Average Doctors</option>
                                            @foreach($avg as $avg)
                              				 <option value="{{$avg->id}}">{{$avg->avg}}</option>  
                   							@endforeach   
                                        </select>
									</div>
								</div>
						<div class="form-row ">
							<div class="form-holder form-holder-2">
								@php
									$avg=\App\Model\Average::all();
									@endphp
								<select  name="avg_prescriptions" required>
                                      <option value ="0" selected>Average prescriptions per day</option>
                                        @foreach($avg as $avg)
                              				 <option value="{{$avg->id}}">{{$avg->avg}}</option>  
                   						@endforeach  
                                            </select>
									</div>
								</div>
						
								<div class="form-row ">
									<span>Select Specility</span>
									<div id="checkbox">
					<div class="container">
						@php
							$specility=\App\Model\Specilities::all();
						@endphp
     @foreach($specility as $specility)
           <input type="checkbox" / name="specilities[]" value ="{{$specility->id}}">{{$specility->name}}<br />
     @endforeach  
    
</div>
</div>
								</div>
								<div class="form-row ">
									<div class="form-holder form-holder-2">
										<button type="submit" class="btn btn-danger">register</button>
									</div>
								</div>
							</div>
			            </section> 
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/jquery.steps.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>

