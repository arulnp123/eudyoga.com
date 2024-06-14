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
                                         <form method="post" action="{{ url('/saveemployer') }}"
                                             enctype="multipart/form-data">
                                             @csrf
                                             <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger1">
                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="name" class="form-label">Company Name</label>
                                                         <input type="text" class="form-control" name="name"
                                                            id="name" placeholder="Name">
                                                          <!--<select name="name" id="name" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                            <option value="" selected>Company Name</option>
                                                             @foreach ($companies as $key => $companieslist)
                                                                 <option value="{{ $companieslist->id }}">
                                                                     {{ $companieslist->name }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="LastName" class="form-label">Company Email</label>
                                                         <input type="text" class="form-control" name="name"
                                                            id="name" placeholder="Name">
                                                         <!--<select name="email" id="LastName" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Company Email</option>
                                                             @foreach ($email as $key => $emaillist)
                                                                 <option value="{{ $emaillist->id }}">
                                                                     {{ $emaillist->email }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="password" class="form-label">Password</label>
                                                         <input type="password" class="form-control" name="password" placeholder="Password">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputEmail" class="form-label">HR Recruiter
                                                             Name</label>
                                                             <input type="text" class="form-control" name="name"
                                                            id="name" placeholder="Name">
                                                         <!--<select name="c_name" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>HR Recruiter Name
                                                             </option>
                                                             @foreach ($c_name as $key => $c_namelist)
                                                                 <option value="{{ $c_namelist->id }}">
                                                                     {{ $c_namelist->c_name }}</option>
                                                             @endforeach

                                                         </select>-->
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
                                                 {{-- <p class="mb-4">Enter Your Account Details.</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputUsername"
                                                             class="form-label">Industry</label>
                                                             <input type="text" class="form-control" name="industry_id"
                                                            id="industry_id" placeholder="Industry">
                                                         <!--<select name="industry_id" id="InputUsername" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Industry </option>
                                                             @foreach ($industry_id as $key => $industry_idlist)
                                                                 <option value="{{ $industry_idlist->id }}">
                                                                     {{ $industry_idlist->industry_id }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputEmail2" class="form-label">Ownership
                                                             Type</label>
                                                             <input type="text" class="form-control" name="ownership_type_id"
                                                            id="ownership_type_id" placeholder="Ownership Type">
                                                         <!--<select name="ownership_type_id" id="InputEmail2" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Ownership Type</option>
                                                             @foreach ($ownership_type_id as $key => $ownership_type_idlist)
                                                                 <option value="{{ $companieslist->id }}">
                                                                     {{ $ownership_type_idlist->ownership_type_id }}
                                                                 </option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="inputAddress2" class="form-label">Company
                                                             details</label>
                                                             <input type="text" class="form-control" name="name"
                                                            id="name" placeholder="Company Details">
                                                        <!--<select name="description" id="description" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Company details</option>
                                                             @foreach ($description as $key => $descriptionlist)
                                                                 <option value="{{ $descriptionlist->id }}">
                                                                     {{ $descriptionlist->description }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputConfirmPassword"
                                                             class="form-label">Location</label>
                                                             <input type="text" class="form-control" name="location"
                                                            id="location" placeholder="Location">
                                                         <!--<select name="location" id="location" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Location </option>
                                                             @foreach ($location as $key => $locationlist)
                                                                 <option value="{{ $locationlist->id }}">
                                                                     {{ $locationlist->location }}</option>
                                                             @endforeach

                                                         </select>-->
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
                                                 {{-- <p class="mb-4">Inform companies about your education life</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="SchoolName" class="form-label">Google Map</label>
                                                          <input type="text" class="form-control" name="map" id="SchoolName" placeholder="Google Map">
                                                        
                                                         <!--<select name="map" id="SchoolName" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Google Map </option>
                                                             @foreach ($map as $key => $maplist)
                                                                 <option value="{{ $maplist->id }}">
                                                                     {{ $maplist->map }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="BoardName" class="form-label">Number of
                                                             offices</label>
                                                          <input type="text" class="form-control" name="no_of_offices" id="BoardName" placeholder="Number of offices"> 
                                                         
                                                         <!--<select name="no_of_offices" id="BoardName" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Number of offices
                                                             </option>
                                                             @foreach ($no_of_offices as $key => $no_of_officeslist)
                                                                 <option value="{{ $no_of_officeslist->id }}">
                                                                     {{ $no_of_officeslist->no_of_offices }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="UniversityName"
                                                             class="form-label">Website</label>
                                                          <input type="text" class="form-control" name="website" id="UniversityName" placeholder="Website"> 
                                                        
                                                         <!--<select name="website" id="UniversityName" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Website </option>
                                                             @foreach ($website as $key => $websitelist)
                                                                 <option value="{{ $websitelist->id }}">
                                                                     {{ $websitelist->website }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience1" class="form-label">Number of
                                                             employees</label>
                                                         <input type="text" class="form-control" name="no_of_employees" id="Experience1" placeholder="Number of employees">
                                                        
                                                         <!--<select name="name" id="name" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Number of employees
                                                             </option>
                                                             @foreach ($no_of_employees as $key => $no_of_employeeslist)
                                                                 <option value="{{ $no_of_employeeslist->id }}">
                                                                     {{ $no_of_employeeslist->no_of_employees }}
                                                                 </option>
                                                             @endforeach

                                                         </select>-->
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
                                                 {{-- <p class="mb-4">Can you talk about your past work experience?</p> --}}

                                                 <div class="row g-3">

                                                     <div class="col-12 col-lg-6">
                                                         <label for="Position1" class="form-label">Established
                                                             in</label>
                                                          <input type="text" class="form-control" name="established_in" id="Position1" placeholder="Established in">
                                                         
                                                         <!--<select name="established_in" id="Position1" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Established in</option>
                                                             @foreach ($established_in as $key => $established_inlist)
                                                                 <option value="{{ $established_inlist->id }}">
                                                                     {{ $established_inlist->established_in }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience2" class="form-label">Fax </label>
                                                         <input type="text" class="form-control" name="fax" id="Experience2" placeholder="Fax"> 
                                                         
                                                         <!--<select name="fax" id="Experience2" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Fax </option>
                                                             @foreach ($fax as $key => $faxlist)
                                                                 <option value="{{ $faxlist->id }}">
                                                                     {{ $faxlist->fax }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Phone </label>
                                                         <input type="text" class="form-control" name="phone" id="PhoneNumber" placeholder="Phone "> 
                                                         <!--<select name="phone" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Phone </option>
                                                             @foreach ($phone as $key => $phonelist)
                                                                 <option value="{{ $phonelist->id }}">
                                                                     {{ $phonelist->phone }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience3" class="form-label">Facebook
                                                             Address</label>
                                                         <input type="text" class="form-control" name="facebook" id="Experience3" placeholder="Facebook Address">
                                                         <!--<select name="facebook" id="Experience3" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Facebook Address</option>
                                                             @foreach ($facebook as $key => $facebooklist)
                                                                 <option value="{{ $facebooklist->id }}">
                                                                     {{ $facebooklist->facebook }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Twitter</label>
                                                          <input type="text" class="form-control" name="twitter" id="PhoneNumber" placeholder="Twitter"> 
                                                         <!--<select name="twitter" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Twitter </option>
                                                             @foreach ($twitter as $key => $twitterlist)
                                                                 <option value="{{ $twitterlist->id }}">
                                                                     {{ $twitterlist->twitter }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Linkedin</label>
                                                         <input type="text" class="form-control" name="linkedin" id="PhoneNumber" placeholder="Linkedin">
                                                         <!--<select name="linkedin" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Linkedin </option>
                                                             @foreach ($linkedin as $key => $linkedinlist)
                                                                 <option value="{{ $linkedinlist->id }}">
                                                                     {{ $linkedinlist->linkedin }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Google+</label>
                                                          <input type="text" class="form-control" name="google_plus" id="PhoneNumber" placeholder="Google+"> 
                                                         <!--<select name="google_plus" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Google+</option>
                                                             @foreach ($google_plus as $key => $google_pluslist)
                                                                 <option value="{{ $google_pluslist->id }}">
                                                                     {{ $google_pluslist->google_plus }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Pinterest</label>
                                                          <input type="text" class="form-control" name="pinterest" id="PhoneNumber" placeholder="Pinterest"> 
                                                         <!--<select name="pinterest" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected> Pinterest</option>
                                                             @foreach ($pinterest as $key => $pinterestlist)
                                                                 <option value="{{ $pinterestlist->id }}">
                                                                     {{ $pinterestlist->pinterest }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Country</label>
                                                         <input type="text" class="form-control" name="country_id" id="PhoneNumber" placeholder="Country">
                                                         <!--<select name="country_id" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected> Country</option>
                                                             @foreach ($country_id as $key => $country_idlist)
                                                                 <option value="{{ $country_idlist->id }}">
                                                                     {{ $country_idlist->country_id }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">State</label>
                                                        <input type="text" class="form-control" name="state_id" id="PhoneNumber" placeholder="State"> 
                                                         <!--<select name="state_id" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected> State</option>
                                                             @foreach ($state_id as $key => $state_idlist)
                                                                 <option value="{{ $state_idlist->id }}">
                                                                     {{ $state_idlist->state_id }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">City</label>
                                                         <input type="text" class="form-control" name="city_id" id="PhoneNumber" placeholder="City">
                                                         <!--<select name="city_id" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected> City</option>
                                                             @foreach ($city_id as $key => $city_idlist)
                                                                 <option value="{{ $city_idlist->id }}">
                                                                     {{ $city_idlist->city_id }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package
                                                             ID</label>
                                                         <input type="text" class="form-control" name="package_id" id="PhoneNumber" placeholder="Package ID">
                                                         <!--<select name="package_id" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Package ID</option>
                                                             @foreach ($package_id as $key => $package_idlist)
                                                                 <option value="{{ $package_idlist->id }}">
                                                                     {{ $package_idlist->package_id }}</option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package Start
                                                             Date</label>
                                                         <input type="text" class="form-control" name="package_start_date" id="package_start_date" placeholder="Package Duration"> 
                                                         <!--<select name="package_start_date" id="package_start_date"
                                                             required class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Package Start Date
                                                             </option>
                                                             @foreach ($package_start_date as $key => $package_start_datelist)
                                                                 <option value="{{ $package_start_datelist->id }}">
                                                                     {{ $package_start_datelist->package_start_date }}
                                                                 </option>
                                                             @endforeach

                                                         </select>-->
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package End
                                                             Date</label>
                                                        <input type="text" class="form-control" name="package_end_date" id="PhoneNumber" placeholder="Package Quota"> 
                                                         <!--<select name="package_end_date" id="PhoneNumber" required
                                                             class="form-control form-select"
                                                             aria-label="Default select example">
                                                             <option value="" selected>Package End Date</option>
                                                             @foreach ($package_end_date as $key => $package_end_datelist)
                                                                 <option value="{{ $package_end_datelist->id }}">
                                                                     {{ $package_end_datelist->package_end_date }}
                                                                 </option>
                                                             @endforeach

                                                         </select>-->
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





                     <div>
                         @include('admin.layouts.footer')
                     </div>
