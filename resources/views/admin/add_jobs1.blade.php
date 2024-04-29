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
								<li class="breadcrumb-item active" aria-current="page">Add Jobs</li>
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
		  <form onSubmit="return false">
			<div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
			  <h5 class="mb-1">Enter Your Details</h5>
			  {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="Company" class="form-label">Company</label>
					  <input type="text" class="form-control" name="company_id" id="Company" placeholder="Company">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Job title" class="form-label">Job title</label>
					  <input type="text" class="form-control" name="title" id="Job title" placeholder="Job title">
				  </div>
				  <div class="col-12 col-lg-6">
					<label for="inputAddress2" class="form-label">Job description</label>
					<textarea class="form-control" name="description" id="native_place"  placeholder="Job description" rows="3" ></textarea>
				</div>
				<div class="col-12 col-lg-6">
					<label for="inputAddress2" class="form-label">Benefits</label>
					<textarea class="form-control" name="benefits" id="native_place"  placeholder="Job Benefits" rows="3" ></textarea>
				</div>
				
				  
				 
				  <div class="col-12 col-lg-6">
					  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger2">

				<h5 class="mb-1">Enter Your Details</h5>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="InputUsername" class="form-label">Job skills</label>
					  <input type="text" class="form-control" name="job_skills" id="InputUsername" placeholder="Job skills">
				  </div>
			
				  <div class="col-12 col-lg-6">
					  <label for="InputEmail2" class="form-label">Country</label>
					  <input type="text" class="form-control" id="InputEmail2" placeholder="Country">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputPassword" class="form-label">State</label>
					  <input type="password" class="form-control" id="InputPassword" placeholder="State" >
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputConfirmPassword" class="form-label">City</label>
					  <input type="password" class="form-control" id="InputConfirmPassword" placeholder="City">
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger3">
				<h5 class="mb-1">Enter Your Details</h5>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="SchoolName" class="form-label">Career level</label>
					  <input type="text" class="form-control" id="SchoolName" placeholder="Career level">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="BoardName" class="form-label">Salary From</label>
					  <input type="text" class="form-control" id="BoardName" placeholder="Board Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="UniversityName" class="form-label">Salary To</label>
					  <input type="text" class="form-control" id="UniversityName" placeholder="Salary To">
				  </div>
				  <div class="col-12 col-lg-6">
					<label for="UniversityName" class="form-label">Salary Currency</label>
					<input type="text" class="form-control" id="UniversityName" placeholder="Salary Currency">
				</div>
				<div class="col-12 col-lg-6">
					<label for="UniversityName" class="form-label">Salary Period</label>
					<input type="text" class="form-control" id="UniversityName" placeholder="Salary Period">
				</div>
				  
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger4">
				<h5 class="mb-1">Enter Your Details</h5>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="Experience1" class="form-label">Functional Area</label>
					  <input type="text" class="form-control" id="Experience1" placeholder="Functional Area">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Position1" class="form-label">Job Type</label>
					  <input type="text" class="form-control" id="Position1" placeholder="Job Type">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience2" class="form-label">Job Shift</label>
					  <input type="text" class="form-control" id="Experience2" placeholder="Job Shift">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Position</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience3" class="form-label">Gender</label>
					  <input type="text" class="form-control" id="Experience3" placeholder="Gender">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Job expiry date</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Job expiry date">
				  </div>
				  <div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Required Degree Level</label>
					<input type="text" class="form-control" id="PhoneNumber" placeholder="Required Degree Level">
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Required job experience</label>
					<input type="text" class="form-control" id="PhoneNumber" placeholder="Required job experience">
				</div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
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
</div>
  <!--end stepper two--> 





{{-- <script src="{{ URL::to('/') }}/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
<script src="{{ URL::to('/') }}/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="{{ URL::to('/') }}/assets1/plugins/bs-stepper/js/main.js"></script>
<link href="{{ URL::to('/') }}/assets1/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet" />
<!--app JS-->

</body>



<div>
  @include('admin.layouts.footer')
</div>




 
 