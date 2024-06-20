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
                               <li class="breadcrumb-item active" aria-current="page">Candidate Form</li>
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
        

         <form  action="#" enctype="multipart/form-data">
           @csrf
           <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
               <h5 class="mb-1">Enter Your Details</h5>
             {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

             <div class="row g-3">
                 <div class="col-12 col-lg-6">
                     <label for="FisrtName" class="form-label">Name</label>
                     <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                      value="{{$view_candidate->name}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="LastName" class="form-label">Last Name</label>
                     <input type="text" class="form-control" name="last_name" id="LastName" placeholder="Last Name"
                     value="{{$view_candidate->last_name}}"readonly>
                 </div>
                
                 <div class="col-12 col-lg-6">
                   <label for="InputEmail" class="form-label">E-mail Id</label>
                   <input type="text" class="form-control" name="email" id="InputEmail" placeholder="E-mail Id"
                   value="{{$view_candidate->email}}"readonly>
               </div>
                 <div class="col-12 col-lg-6">
                     <label for="PhoneNumber" class="form-label">Phone Number</label>
                     <input type="number" class="form-control" name="mobile_num" id="mobile_num" placeholder="Phone Number"
                     value="{{$view_candidate->mobile_num}}"readonly>
                 </div> 
                 <div class="col-12 col-lg-6">
                   <label for="PhoneNumber" class="form-label">Alternate Number</label>
                   <input type="number" class="form-control" name="phone" id="phone" placeholder="Alternate Number"
                   value="{{$view_candidate->phone}}"readonly>
               </div>
               <div class="col-12 col-lg-6">
                   <label for="PhoneNumber" class="form-label">Mother Name</label>
                   <input type="text" class="form-control" name="mother_name" id="phone" placeholder="Mother Name"
                   value="{{$view_candidate->mother_name}}"readonly>
               </div>
               <div class="col-12 col-lg-6">
                   <label for="PhoneNumber" class="form-label">Father Name</label>
                   <input type="text" class="form-control" name="father_name" id="phone" placeholder="Father Name"
                    value="{{$view_candidate->father_name}}"readonly>
               </div>
               <div class="col-12 col-lg-6">
                   <label for="PhoneNumber" class="form-label">Marital Status</label>
                   <input type="text" class="form-control" name="marital_status_id" id="phone" placeholder="Marital Status" 
                   value="{{$view_candidate->marital_status_id}}"readonly>
               </div>
                 <div class="col-12 col-lg-6">
                     <button class="btn btn-light px-4" type="button" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
                 </div>
             </div><!---end row-->
             
           </div>

           <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger2">

               <h5 class="mb-1">Enter Your Details</h5>
             {{-- <h5 class="mb-1">Account Details</h5> --}}
             {{-- <p class="mb-4">Enter Your Account Details.</p> --}}

             <div class="row g-3">
                 <div class="col-12 col-lg-6">
                     <label for="InputUsername" class="form-label">Country</label>
                     <input type="text" class="form-control" name="country_id" id="InputUsername" placeholder="Country"
                      value="{{$view_candidate->country_id}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="InputEmail2" class="form-label">State</label>
                     <input type="text" class="form-control" name="state_id" id="InputEmail2" placeholder="State"
                      value="{{$view_candidate->state_id}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="InputPassword" class="form-label">City</label>
                     <input type="text" class="form-control" name="city_id" id="InputPassword" placeholder="City" 
                     value="{{$view_candidate->city_id}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="InputConfirmPassword" class="form-label">Nationality</label>
                     <input type="text" class="form-control" name="nationality_id" id="InputConfirmPassword" placeholder="Nationality" 
                     value="{{$view_candidate->nationality_id}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                   <label for="InputConfirmPassword" class="form-label">Date Of Birth</label>
                   <input type="date" class="form-control" name="date_of_birth" id="InputConfirmPassword" placeholder="Date Of Birth"
                    value="{{$view_candidate->date_of_birth}}" readonly>
               </div>
               <div class="col-12 col-lg-6">
                   <label for="InputConfirmPassword" class="form-label">Age</label>
                   <input type="number" class="form-control" name="age" id="InputConfirmPassword" placeholder="Age" 
                   value="{{$view_candidate->age}}" readonly>
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
               {{-- <h5 class="mb-1">Your Education Information</h5>
             <p class="mb-4">Inform companies about your education life</p> --}}

             <div class="row g-3">
                 <div class="col-12 col-lg-6">
                     <label for="SchoolName" class="form-label">Street Address</label>
                     <input type="text" class="form-control" name="street_address" id="street_address" placeholder="Street Address" 
                     value="{{$view_candidate->street_address}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="BoardName" class="form-label">Job Experiance</label>
                     <input type="text" class="form-control" name="job_experience_id" id="job_experience_id" placeholder="Job Experiance"
                      value="{{$view_candidate->job_experience_id}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="UniversityName" class="form-label">Industry</label>
                     <input type="text" class="form-control" name="industry_id" id="industry_id" placeholder="Industry" 
                     value="{{$view_candidate->industry_id}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                   <label for="UniversityName" class="form-label">Functional Area</label>
                   <input type="text" class="form-control" name="functional_area_id" id="functional_area_id" placeholder="Functional Area"
                    value="{{$view_candidate->functional_area_id}}" readonly>
               </div>
               <div class="col-12 col-lg-6">
                   <label for="UniversityName" class="form-label">Current Salary</label>
                   <input type="number" class="form-control" name="current_salary" id="current_salary" placeholder="Current Salary" 
                   value="{{$view_candidate->current_salary}}" readonly>
               </div>
               <div class="col-12 col-lg-6">
                   <label for="UniversityName" class="form-label">Expected Salary</label>
                   <input type="number" class="form-control" name="expected_salary" id="expected_salary" placeholder="Expected Salary"
                    value="{{$view_candidate->expected_salary}}" readonly>
               </div>
                 <div class="col-12">
                     <div class="d-flex align-items-center gap-3">
                         <button class="btn btn-outline-light px-4"  type="button" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                         <button class="btn btn-light px-4" type="button" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
                     </div>
                 </div>
             </div><!---end row-->
             
           </div>

           <div id="test-nl-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger4">
            
               <h5 class="mb-1">Enter Your Details</h5>
               {{-- <h5 class="mb-1">Work Experiences</h5>
             <p class="mb-4">Can you talk about your past work experience?</p> --}}

             <div class="row g-3">
                 <div class="col-12 col-lg-6">
                     <label for="Experience1" class="form-label">Salary Currency</label>
                     <input type="text" class="form-control" name="salary_currency" id="salary_currency" placeholder="Salary Currency"
                      value="{{$view_candidate->salary_currency}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="Position1" class="form-label">Package</label>
                     <input type="text" class="form-control" name="package_id" id="package_id" placeholder="Package"
                      value="{{$view_candidate->package_id}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="Experience2" class="form-label">Package Start Date</label>
                     <input type="text" class="form-control" name="package_start_date" id="package_start_date" placeholder="Package Start Date"
                      value="{{$view_candidate->package_start_date}}" readonly>
                 </div>
                 <div class="col-12 col-lg-6">
                     <label for="PhoneNumber" class="form-label">Package End Date</label>
                     <input type="text" class="form-control" name="package_end_date" id="package_end_date" placeholder="Package End Date"
                      value="{{$view_candidate->package_end_date}}" readonly>
                 </div>
                
                 <div class="col-12">
                     <div class="d-flex align-items-center gap-3">
                         <button class="btn btn-light px-4" type="button" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                         <button class="btn btn-secondary px-4" ><a href="{{url('candidate_list')}}">Back To Candidate Profile</a></button>
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

</body>



<div>
 @include('admin.layouts.footer')
</div>