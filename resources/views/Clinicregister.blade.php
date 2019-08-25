<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v4</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content" style="background-image: url('images/new.jpg')">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Sign Up To Financial</h3>
					<p>Fill all form field to go next step</p>
				</div>
		        <form class="form-register" action="#" method="post">
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
											<input type="text" class="form-control" id="first-name" name="f_name" required>
											<span class="label">First Name</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last-name" name="l_name" required>
											<span class="label">Last Name</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
			
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="phone" required>
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
											<input type="text" name="email" id="your_email_1" class="form-control" required>
											<span class="label">E-Mail</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" name="password" id="password_1" class="form-control" required>
											<span class="label">Password</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="password" name="comfirm_password" id="comfirm_password_1" class="form-control" required>
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
											<input type="text" class="form-control" id="name" name="name" value="" maxlength="50"  required>
											<span class="label">Clinic Name</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text"  class="form-control"name="cr_no" value="" required>
											<span class="label">Cr Number</span>
											<span class="border"></span>
										</label>
									</div>	
								</div>
								<!--  -->
								<div class="form-row">
									
										<div class="form-holder">
										<label class="form-row-inner">
											  <input type="text"  class="form-control" name="license_no" value="" required>
											<span class="label">License no</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											  <input type="number" class="form-control" name="postal_code" maxlength="12" value="" required>
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
											    <input type="text" class="form-control" name="address_1" value="" required>
											<span class="label">Address 1</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
										 <input type="text"  class="form-control" name="address_2" value="">
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
											<input id="clinic_logo"  name="clinic_logo"  type="file" accept="image/x-png,image/gif,image/jpeg"/>
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
    <select class="form-control" id="country_id" name="country_id" required>
                                               
                                                    <option value="" disabled selected>Select Country</option>
                                            </select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										 <select name="avg_doctors" required>
                                            <option disabled selected>Average Doctors</option>
                                        </select>
									</div>
								</div>
								<div class="form-row ">
									<div class="form-holder form-holder-2">
										<select  name="avg_prescriptions" required>
                                                <option disabled selected>Average prescriptions per day</option>
                                            </select>
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
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>