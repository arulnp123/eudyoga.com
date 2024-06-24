 @include('admin.layouts.app')
 @yield('content')

 </head>
 <body class="bg-theme bg-theme2">
     <div class="wrapper">
         <div class="page-wrapper">
             <div class="page-content">
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

                 <div id="stepper1" class="bs-stepper">
                     <div class="card">
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
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card-body">
                                     <div class="bs-stepper-content">
                                        <form method="post" action="{{ url('/savetranslated') }}"
                                             enctype="multipart/form-data">
                                             @csrf
                                             <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger1">
                                                 <h5 class="mb-1">Enter Your Details</h5>

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="c_name" class="form-label">
                                                             Company Name</label>
                                                         <input type="text" class="form-control" name="c_name"
                                                             id="FisrtName" placeholder="Company Name">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="LastName" class="form-label">Company Email</label>
                                                         <input type="text" class="form-control" name="email"
                                                             id="LastName" placeholder="Company Email">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Password</label>
                                                         <input type="password" class="form-control" name="password"
                                                             id="PhoneNumber" placeholder="Password">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputEmail" class="form-label">HR Recruiter
                                                             Name</label>
                                                         <input type="text" class="form-control" name="name"
                                                          placeholder="HR Recruiter Name">
                                                     </div>

                                                     <div class="col-12 col-lg-6">
                                                         <button class="btn btn-light px-4" type="button"
                                                             onclick="stepper2.next()">Next<i
                                                                 class='bx bx-right-arrow-alt ms-2'></i></button>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger2">
                                                 <h5 class="mb-1">Enter Your Details</h5>

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputUsername"
                                                             class="form-label">Industry</label>
                                                         <select type="text" class="form-control"
                                                             name="industry_id" id="InputUsername"
                                                             placeholder="Industry">
                                                             <option>Select</option>
                                                             @foreach ($industry as $ind)
                                                                 <option value="{{ $ind->id }}">
                                                                     {{ $ind->industry }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputEmail2" class="form-label">Ownership
                                                             Type</label>
                                                         <select type="text" class="form-control"
                                                             name="ownership_type_id" id="InputEmail2"
                                                             placeholder="Ownership Type">
                                                             <option>Select</option>
                                                             @foreach ($ownership as $owner)
                                                                 <option value="{{ $owner->id }}">
                                                                     {{ $owner->ownership_type }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="inputAddress2" class="form-label">Company
                                                             details</label>
                                                         <textarea class="form-control" name="description" placeholder="Company details" rows="3"></textarea>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="InputConfirmPassword"
                                                             class="form-label">Location</label>
                                                         <textarea class="form-control" name="location" placeholder="Location" rows="3"></textarea>
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
                                                 </div>
                                             </div>

                                             <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger3">
                                                 <h5 class="mb-1">Enter Your Details</h5>

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="SchoolName" class="form-label">Google Map</label>
                                                         <input type="text" class="form-control" name="map"
                                                             id="SchoolName" placeholder="Google Map">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="no_of_offices" class="form-label">Number of
                                                             Offices</label>
                                                         <input type="text" class="form-control number"
                                                             maxlength="2" name="no_of_offices"
                                                             placeholder="Number of Offices">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="UniversityName"
                                                             class="form-label">Website</label>
                                                         <input type="text" class="form-control" name="website"
                                                             placeholder="Website">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience1" class="form-label">Number of
                                                             Employes</label>
                                                         <input type="text" class="form-control number"
                                                             maxlength="2" name="no_of_employees"
                                                             placeholder="Number of Employes">
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
                                                 </div>
                                             </div>

                                             <div id="test-nl-4" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger4">
                                                 <h5 class="mb-1">Enter Your Details</h5>

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="established_in" class="form-label">Established
                                                             in</label>
                                                         <input type="text" class="form-control"
                                                             name="established_in" placeholder="Established in">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience2" class="form-label">Fax </label>
                                                         <input type="text" class="form-control" name="fax"
                                                             id="Experience2" placeholder="Fax #">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="phone" class="form-label">Phone </label>
                                                         <input type="text" class="form-control" name="phone"
                                                             placeholder="Phone #">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="facebook" class="form-label">Facebook
                                                             Address</label>
                                                         <input type="text" class="form-control" name="facebook"
                                                             placeholder="Facebook Address">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="twitter" class="form-label">Twitter</label>
                                                         <input type="text" class="form-control" name="twitter"
                                                             placeholder="Twitter">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="linkedin" class="form-label">Linkedin</label>
                                                         <input type="text" class="form-control" name="linkedin"
                                                             placeholder="Linkedin">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="google_plus" class="form-label">Google+</label>
                                                         <input type="text" class="form-control"
                                                             name="google_plus" placeholder="Google+">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="pinterest" class="form-label">Pinterest</label>
                                                         <input type="text" class="form-control" name="pinterest"
                                                             placeholder="Pinterest">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Country</label>
                                                         <select type="text" class="form-control"
                                                             name="country_id">
                                                             <option>Select</option>
                                                             @foreach ($country as $count)
                                                                 <option value="{{ $count->id }}">
                                                                     {{ $count->nationality }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="state_id" class="form-label">State</label>
                                                         <select type="text" class="form-control" name="state_id">
                                                             <option>Select</option>
                                                             @foreach ($state as $sta)
                                                                 <option value="{{ $sta->id }}">
                                                                     {{ $sta->state_name }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="city_id" class="form-label">City</label>
                                                         <select type="text" class="form-control" name="city_id">
                                                             <option>Select</option>
                                                             @foreach ($citys as $cit)
                                                                 <option value="{{ $cit->id }}">
                                                                     {{ $cit->city }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="package_id" class="form-label">Package ID</label>
                                                         <select type="text" class="form-control"
                                                             name="package_id">
                                                             <option>Select</option>
                                                             @foreach ($package as $packa)
                                                                 <option value="{{ $packa->id }}">
                                                                     {{ $packa->package_title }}</option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package Start
                                                             Date</label>
                                                         <input type="date" class="form-control"
                                                             name="package_start_date" id="package_start_date"
                                                             placeholder="Package Duration">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package End
                                                             Date</label>
                                                         <input type="date" class="form-control"
                                                             name="package_end_date" id="PhoneNumber"
                                                             placeholder="Package Quota">
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
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
    <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
    <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
        rel="stylesheet" />

    <div>
        @include('admin.layouts.footer')
    </div>
