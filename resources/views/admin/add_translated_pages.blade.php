 @include('admin.layouts.app')
 @yield('content')




 </head>
 <body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">

		<!--start header -->

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Employer</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
			
		
<!--start stepper one--> 
			   


<div id="stepper1" class="bs-stepper">
  <div class="card">
	
	


<!--start stepper two--> 

<div id="stepper2" class="bs-stepper">
	<div class="card">
	  
		<div class="card-header">
			<div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
				<div class="step" data-target="#test-nl-1">
				  <div class="step-trigger" role="tab" id="stepper2trigger1" aria-controls="test-nl-1">
					<div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
					<div class="">
						<h5 class="mb-0 steper-title">1</h5>
						{{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
					</div>
				  </div>
				</div>
				<div class="bs-stepper-line"></div>
				<div class="step" data-target="#test-nl-2">
					<div class="step-trigger" role="tab" id="stepper2trigger2" aria-controls="test-nl-2">
					  <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
					  <div class="">
						  <h5 class="mb-0 steper-title">2</h5>
						  {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
					  </div>
					</div>
				  </div>
				<div class="bs-stepper-line"></div>
				<div class="step" data-target="#test-nl-3">
					<div class="step-trigger" role="tab" id="stepper2trigger3" aria-controls="test-nl-3">
					  <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
					  <div class="">
						  <h5 class="mb-0 steper-title">3</h5>
						  
					  </div>
					</div>
				  </div>
				  <div class="bs-stepper-line"></div>
					<div class="step" data-target="#test-nl-4">
						<div class="step-trigger" role="tab" id="stepper2trigger4" aria-controls="test-nl-4">
						<div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
						<div class="">
							<h5 class="mb-0 steper-title">4</h5>
							{{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
						</div>
						</div>
					</div>
			  </div>
		</div>
	  <div class="card-body">
	  
		<div class="bs-stepper-content">
		  <form method="post" action="{{url('/savetranslatedpages')}}" enctype="multipart/form-data">
			@csrf
			<div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
				<h5 class="mb-1">Enter Your Details</h5>
			  {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="c_name" class="form-label">
						Company Name</label>
					  <input type="text" class="form-control" name="c_name" id="FisrtName" placeholder="Company Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="LastName" class="form-label">Company Email</label>
					  <input type="text" class="form-control" name="email" id="LastName" placeholder="Company Email">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Password</label>
					  <input type="password" class="form-control" name="password" id="PhoneNumber" placeholder="Password">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputEmail" class="form-label">HR Recruiter Name</label>
					  <input type="text" class="form-control" name="c_name" id="InputEmail" placeholder="HR Recruiter Name">
				  </div>
				  
				  <div class="col-12 col-lg-6">
					  <button class="btn btn-light px-4" type="button" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger2">

				<h5 class="mb-1">Enter Your Details</h5>
			  {{-- <p class="mb-4">Enter Your Account Details.</p> --}}

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="InputUsername" class="form-label">Industry</label>
					  <input type="text" class="form-control" name="industry_id" id="InputUsername" placeholder="Industry">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputEmail2" class="form-label">Ownership Type</label>
					  <input type="text" class="form-control" name="ownership_type_id" id="InputEmail2" placeholder="Ownership Type">
				  </div>
				  <div class="col-12 col-lg-6">
					<label for="inputAddress2" class="form-label">Company details</label>
					<textarea class="form-control" name="description"   id="description"  placeholder="Company details" rows="3" ></textarea>
				</div>
				  <div class="col-12 col-lg-6">
					  <label for="InputConfirmPassword" class="form-label">Location</label>
					  <textarea class="form-control" name="location"   id="location"  placeholder="Location" rows="3" ></textarea>
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" type="button" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" type="button" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger3">
				<h5 class="mb-1">Enter Your Details</h5>
			  {{-- <p class="mb-4">Inform companies about your education life</p> --}}

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="SchoolName" class="form-label">Google Map</label>
					  <input type="text" class="form-control" name="map" id="SchoolName" placeholder="Google Map">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="BoardName" class="form-label">Number of offices</label>
					  <input type="text" class="form-control" name="no_of_offices" id="BoardName" placeholder="Number of offices">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="UniversityName" class="form-label">Website</label>
					  <input type="text" class="form-control" name="website" id="UniversityName" placeholder="Website">
				  </div>
				  <div class="col-12 col-lg-6">
					<label for="Experience1" class="form-label">Number of employees</label>
					<input type="text" class="form-control" name="no_of_employees" id="Experience1" placeholder="Number of employees">
				</div>
				  
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" type="button"  onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" type="button" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger4">
				<h5 class="mb-1">Enter Your Details</h5>
			  {{-- <p class="mb-4">Can you talk about your past work experience?</p> --}}

			  <div class="row g-3">
				
				  <div class="col-12 col-lg-6">
					  <label for="Position1" class="form-label">Established in</label>
					  <input type="text" class="form-control" name="established_in" id="Position1" placeholder="Established in">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience2" class="form-label">Fax </label>
					  <input type="text" class="form-control" name="fax" id="Experience2" placeholder="Fax #">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Phone </label>
					  <input type="text" class="form-control" name="phone" id="PhoneNumber" placeholder="Phone #">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience3" class="form-label">Facebook Address</label>
					  <input type="text" class="form-control" name="facebook" id="Experience3" placeholder="Facebook Address">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Twitter</label>
					  <input type="text" class="form-control" name="twitter" id="PhoneNumber" placeholder="Twitter">
				  </div>
				  <div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Linkedin</label>
					<input type="text" class="form-control" name="linkedin" id="PhoneNumber" placeholder="Linkedin">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Google+</label>
					<input type="text" class="form-control" name="google_plus" id="PhoneNumber" placeholder="Google+">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Pinterest</label>
					<input type="text" class="form-control" name="pinterest" id="PhoneNumber" placeholder="Pinterest">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Country</label>
					<input type="text" class="form-control" name="country_id" id="PhoneNumber" placeholder="Country">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">State</label>
					<input type="text" class="form-control" name="state_id" id="PhoneNumber" placeholder="Twitter">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">City</label>
					<input type="text" class="form-control" name="city_id" id="PhoneNumber" placeholder="City">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Package ID</label>
					<input type="text" class="form-control" name="package_id" id="PhoneNumber" placeholder="Package ID">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Package Start Date</label>
					<input type="date" class="form-control" name="package_start_date" id="package_start_date" placeholder="Package Duration">
				</div><div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Package End Date</label>
					<input type="date" class="form-control" name="package_end_date" id="PhoneNumber" placeholder="Package Quota">
				</div>

				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-light px-4" type="button" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-white px-4" onclick="stepper2.next()">Submit</button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>
		  </form>
		</div>
		 
	  </div>
	 </div>
   </div>
  </div>
  <!--end stepper two--> 





{{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
<script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
<link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet" />
<!--app JS-->





<div>
  @include('admin.layouts.footer')
</div>