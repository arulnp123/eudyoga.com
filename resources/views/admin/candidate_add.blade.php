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
                                     <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between"
                                         role="tablist">
                                         <div class="step" data-target="#test-nl-1">
                                             <div class="step-trigger" role="tab" id="stepper2trigger1"
                                                 aria-controls="test-nl-1">
                                                 <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                 <div class="">
                                                     <h5 class="mb-0 steper-title">1</h5>
                                                     {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="bs-stepper-line"></div>
                                         <div class="step" data-target="#test-nl-2">
                                             <div class="step-trigger" role="tab" id="stepper2trigger2"
                                                 aria-controls="test-nl-2">
                                                 <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                 <div class="">
                                                     <h5 class="mb-0 steper-title">2</h5>
                                                     {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="bs-stepper-line"></div>
                                         <div class="step" data-target="#test-nl-3">
                                             <div class="step-trigger" role="tab" id="stepper2trigger3"
                                                 aria-controls="test-nl-3">
                                                 <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                 <div class="">
                                                     <h5 class="mb-0 steper-title">3</h5>

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="bs-stepper-line"></div>
                                         <div class="step" data-target="#test-nl-4">
                                             <div class="step-trigger" role="tab" id="stepper2trigger4"
                                                 aria-controls="test-nl-4">
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
                                         <form method="post" action="{{ url('/savecandidate') }}"
                                             enctype="multipart/form-data">
                                             @csrf
                                             <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger1">
                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="FisrtName" class="form-label">Name</label>
                                                         <input type="text" class="form-control" name="name"
                                                             id="name" placeholder="Name">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="LastName" class="form-label">Last Name</label>
                                                         <input type="text" class="form-control" name="last_name"
                                                             id="LastName" placeholder="Last Name">
                                                     </div>

                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputEmail" class="form-label">E-mail Id</label>
                                                         <input type="text" class="form-control" name="email"
                                                             id="InputEmail" placeholder="E-mail Id">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Phone
                                                             Number</label>
                                                         <input type="number" class="form-control" name="mobile_num" id="mobile_num"
                                                             placeholder="Phone Number">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Alternate
                                                             Number</label>
                                                         <input type="number" class="form-control" name="phone" id="phone"
                                                             placeholder="Alternate Number">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Mother
                                                             Name</label>
                                                         <input type="text" class="form-control"
                                                             name="mother_name" id="phone"
                                                             placeholder="Mother Name">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Father
                                                             Name</label>
                                                         <input type="text" class="form-control"
                                                             name="father_name" id="phone"
                                                             placeholder="Father Name">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Marital
                                                             Status</label>
                                                         <select name="marital_status_id" id="marital_status" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Marital Status</option>
                                                             @foreach ($get_marital_statuses as $key => $get_marital_statuses_list)
                                                                 <option
                                                                     value="{{ $get_marital_statuses_list->marital_status_id }}">
                                                                     {{ $get_marital_statuses_list->marital_status }}
                                                                 </option>
                                                             @endforeach

                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <button class="btn btn-light px-4" type="button"
                                                             onclick="stepper2.next()">Next<i
                                                                 class='bx bx-right-arrow-alt ms-2'></i></button>
                                                     </div>
                                                 </div><!---end row-->

                                             </div>

                                             <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger2">

                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <h5 class="mb-1">Account Details</h5> --}}
                                                 {{-- <p class="mb-4">Enter Your Account Details.</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputUsername" class="form-label">Country</label>
                                                         <select name="country_id" id="country" class="form-select"
                                                             aria-label="Default select example">
                                                             <option selected value="">Country</option>
                                                             @foreach ($getcountry as $key => $countylist)
                                                                 <option value="{{ $countylist->id }}">
                                                                     {{ $countylist->country }}</option>
                                                             @endforeach

                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputEmail2" class="form-label">State</label>

                                                         <select name="state_id" id="state_id" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="">Select State</option>

                                                             @foreach ($getstate as $key => $statelist)
                                                                 <option value="{{ $statelist->id }}">
                                                                     {{ $statelist->state_name }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                        <label for="city_id"
                                                            class="form-label">Select City</label>
                                                        <select name="city_id" id="city_id" required
                                                        class="form-control form-select" class="form-control
                                                           form-select">
                                                            <option selected value="">City</option>
                                                            @foreach ($getcity as $key => $citylist)
                                                                <option value="{{ $citylist->id }}">
                                                                    {{ $citylist->city }}</option>
                                                            @endforeach
                                                        </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputConfirmPassword"
                                                             class="form-label">Nationality</label>
                                                         <select name="nationality_id" id="nationality_id" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="">Nationality</option>

                                                             @foreach ($get_users as $key => $get_users_list)
                                                                 <option value="{{ $get_users_list->id }}">
                                                                     {{ $get_users_list->nationality_id }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputConfirmPassword" class="form-label">Date Of
                                                             Birth</label>
                                                         <input type="date" class="form-control"
                                                             name="date_of_birth" id="InputConfirmPassword"
                                                             placeholder="Date Of Birth">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputConfirmPassword"
                                                             class="form-label">Age</label>
                                                         <input type="number" class="form-control" name="age"
                                                             id="InputConfirmPassword" placeholder="Age">
                                                     </div>
                                                     <div class="col-12">
                                                         <div class="d-flex align-items-center gap-3">
                                                             <button class="btn btn-outline-light px-4" type="button"
                                                                 onclick="stepper2.previous()"><i
                                                                     class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                             <button class="btn btn-light px-4" type="button"
                                                                 onclick="stepper2.next()">Next<i
                                                                     class='bx bx-right-arrow-alt ms-2'></i></button>
                                                         </div>
                                                     </div>
                                                 </div><!---end row-->

                                             </div>

                                             <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger3">
                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <h5 class="mb-1">Your Education Information</h5>
			  <p class="mb-4">Inform companies about your education life</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="SchoolName" class="form-label">Street
                                                             Address</label>
                                                         <input type="text" class="form-control"
                                                             name="street_address" id="street_address"
                                                             placeholder="Street Address">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="BoardName" class="form-label">Job
                                                             Experiance</label>
                                                         <select name="job_experience " id="job_experience " required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Job Experiance</option>
                                                             @foreach ($getjob_experiences as $key => $job_experiences_list)
                                                                 <option
                                                                     value="{{ $job_experiences_list->job_experience_id }}">
                                                                     {{ $job_experiences_list->job_experience }}
                                                                 </option>
                                                             @endforeach

                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="UniversityName"
                                                             class="form-label">Industry</label>
                                                         <select name="industry_id" id="industry" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Industry</option>
                                                             @foreach ($getindustries as $key => $get_Industry_list)
                                                                 <option
                                                                     value="{{ $get_Industry_list->industry_id }}">
                                                                     {{ $get_Industry_list->industry }}
                                                                 </option>
                                                             @endforeach

                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="UniversityName" class="form-label">Functional
                                                             Area</label>
                                                         <select name="functional_area_id" id="functional_alarea"
                                                             required class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Functional Area</option>
                                                             @foreach ($getfunctionalareas as $key => $function_areas_list)
                                                                 <option
                                                                     value="{{ $function_areas_list->id }}">
                                                                     {{ $function_areas_list->functional_area }}
                                                                 </option>
                                                             @endforeach

                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="UniversityName" class="form-label">Current
                                                             Salary</label>
                                                         <input type="number" class="form-control"
                                                             name="current_salary" id="current_salary"
                                                             placeholder="Current Salary">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="UniversityName" class="form-label">Expected
                                                             Salary</label>
                                                         <input type="number" class="form-control"
                                                             name="expected_salary" id="expected_salary"
                                                             placeholder="Expected Salary">
                                                     </div>
                                                     <div class="col-12">
                                                         <div class="d-flex align-items-center gap-3">
                                                             <button class="btn btn-outline-light px-4" type="button"
                                                                 onclick="stepper2.previous()"><i
                                                                     class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                             <button class="btn btn-light px-4" type="button"
                                                                 onclick="stepper2.next()">Next<i
                                                                     class='bx bx-right-arrow-alt ms-2'></i></button>
                                                         </div>
                                                     </div>
                                                 </div><!---end row-->

                                             </div>

                                             <div id="test-nl-4" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger4">

                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <h5 class="mb-1">Work Experiences</h5>
			  <p class="mb-4">Can you talk about your past work experience?</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience1" class="form-label">Salary
                                                             Currency</label>
                                                         <input type="text" class="form-control"
                                                             name="salary_currency" id="salary_currency"
                                                             placeholder="Salary Currency">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Position1" class="form-label">Package</label>
                                                         <select name="package_id " id="package_title " required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Package</option>
                                                             @foreach ($getpackages as $key => $get_packages_list)
                                                                 <option value="{{ $get_packages_list->id }}">
                                                                     {{ $get_packages_list->package_title }}
                                                                 </option>
                                                             @endforeach

                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience2" class="form-label">Package Start
                                                             Date</label>
                                                         <input type="date" class="form-control"
                                                             name="package_start_date" id="package_start_date"
                                                             placeholder="Package Start Date">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package End
                                                             Date</label>
                                                         <input type="date" class="form-control"
                                                             name="package_end_date" id="package_end_date"
                                                             placeholder="Package End Date">
                                                     </div>

                                                     <div class="col-12">
                                                         <div class="d-flex align-items-center gap-3">
                                                             <button class="btn btn-light px-4" type="button"
                                                                 onclick="stepper2.previous()"><i
                                                                     class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                             <button class="btn btn-white px-4"
                                                                 onclick="stepper2.next()">Submit</button>
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
                     <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
                         rel="stylesheet" />
                     <!--app JS-->

 </body>



 <div>
     @include('admin.layouts.footer')
 </div>
 
 <script>
    $('#state_id').on('change', function() {
       
        var stateid = this.value;
        alert(stateid);
        $("#cityid").html('');
        $.ajax({
            url: "{{ url('/getcity') }}",
            type: "POST",
            data: {
                stateid: stateid,
                _token: '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(result) {
                $('#cityid').html('<option value="">Select City Name</option>');
                $.each(result, function(key, value) {
                    $("#cityid").append('<option value="' + value
                        .id + '">' + value.city + '</option>');
                });
            }
        });
    });
</script>