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
                                <li class="breadcrumb-item active" aria-current="page">Edit Employer</li>
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
                                        @foreach ($view_employer as $key => $edit)
                                        <form class="row g-3" method="post" action="{{ url('/update_employer') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            
                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Company" class="form-label">Company Name</label>
                                                            <input type="text" class="form-control" name="c_name" id="FisrtName" placeholder="Company Name"
                                                                value="{{ $edit->c_name }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="email" class="form-label">Company Email</label>
                                                            <input type="text" class="form-control" name="email" id="LastName" placeholder="Company Email"
                                                                value="{{ $edit->email }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control" name="password" id="PhoneNumber" placeholder="Password"
                                                                value="{{ $edit->password }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="name" class="form-label">HR Recruiter Name</label>
                                                            <input type="text" class="form-control" name="name" id="InputEmail" placeholder="HR Recruiter Name"
                                                                value="{{ $edit->name }}"readonly>
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

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="industry_id" class="form-label">Industry</label>
                                                            <input type="text" class="form-control" name="industry_id" id="InputUsername" maxlength="100" placeholder="Industry"data-role="tagsinput"
                                                                value="{{ $edit->industry_id }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="ownership_type_id"
                                                                class="form-label">Ownership Type</label>
                                                                <input type="text" class="form-control" name="ownership_type_id" id="InputEmail2" maxlength="100" placeholder="Ownership Type"
                                                                value="{{ $edit->ownership_type_id }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="description"
                                                                class="form-label">Company details</label>
                                                            <input type="description" class="form-control"
                                                                name="description" id="description"
                                                                placeholder="Company details" value="{{ $edit->description }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="location"
                                                                class="form-label">Location</label>
                                                            <input type="location" class="form-control"
                                                                name="location" id="location"
                                                                placeholder="location" value="{{ $edit->location }}"readonly>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-outline-light px-4"
                                                                    type="button" onclick="stepper2.previous()"><i
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

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="map" class="form-label">Google Map</label>
                                                            <input type="text" class="form-control" name="map" id="SchoolName" placeholder="Google Map"
                                                                value="{{ $edit->map }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="no_of_offices" class="form-label">Number of offices</label>
                                                            <input type="text" class="form-control" name="no_of_offices" id="BoardName" placeholder="Number of offices"
                                                                value="{{ $edit->no_of_offices}}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="website" class="form-label">Website</label>
                                                            <input type="text" class="form-control" name="website" id="UniversityName" placeholder="Website"
                                                                value="{{ $edit->website }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="no_of_employees" class="form-label">Number of employees</label>
                                                            <input type="text" class="form-control number" name="no_of_employees" id="Experience1" placeholder="Number of employees"
                                                                value="{{ $edit->no_of_employees }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="established_in" class="form-label">Established in</label>
                                                            <input type="text" class="form-control number" name="established_in" id="Position1" placeholder="Established in"
                                                                value="{{ $edit->established_in }}"readonly>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-outline-light px-4"
                                                                    type="button" onclick="stepper2.previous()"><i
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

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="fax"class="form-label">Fax </label>
                                                                <input type="text" class="form-control" name="fax" id="Experience2" placeholder="Fax"
                                                                value="{{ $edit->fax }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="phone" class="form-label">Phone</label>
                                                            <input type="text" class="form-control number" name="phone" id="PhoneNumber" placeholder="Phone"
                                                                value="{{ $edit->phone }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="facebook" class="form-label">Facebook Address</label>
                                                            <input type="text" class="form-control" name="facebook" id="Experience3" placeholder="Facebook Address"
                                                                value="{{ $edit->facebook }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="twitter"
                                                                class="form-label">Twitter</label>
                                                                <input type="text" class="form-control" name="twitter" id="PhoneNumber" placeholder="Twitter"
                                                                value="{{ $edit->twitter }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="linkedin" class="form-label">Linkedin</label>
                                                            <input type="text" class="form-control" name="linkedin" id="PhoneNumber" placeholder="Linkedin"
                                                             value="{{ $edit->linkedin }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="google_plus" class="form-label">Google</label>
                                                            <input type="text" class="form-control" name="google_plus" id="PhoneNumber" placeholder="Google"
                                                                value="{{ $edit->google_plus }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="pinterest" class="form-label">Pinterest</label>
                                                            <input type="text" class="form-control" name="pinterest" id="PhoneNumber" placeholder="Pinterest"
                                                                value="{{ $edit->pinterest }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="country_id" class="form-label">Country</label>
                                                            <input type="text" class="form-control" name="country_id" id="PhoneNumber" maxlength="100" placeholder="Country"
                                                                value="{{ $edit->country_id }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="state_id" class="form-label">State</label>
                                                            <input type="text" class="form-control" name="state_id" id="PhoneNumber" maxlength="100" placeholder="State"
                                                                value="{{ $edit->state_id }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="city_id" class="form-label">City</label>
                                                            <input type="text" class="form-control" name="city_id" id="PhoneNumber" maxlength="100" placeholder="City"
                                                                value="{{ $edit->city_id }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="package_id" class="form-label">Package ID</label>
                                                            <input type="text" class="form-control number" name="package_id" id="PhoneNumber" placeholder="Package ID"
                                                                value="{{ $edit->package_id }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="package_start_date" class="form-label">Package Start Date</label>
                                                            <input type="text" class="form-control" name="package_start_date" id="package_start_date" placeholder="Package Duration"
                                                                value="{{ $edit->package_start_date }}"readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="package_end_date" class="form-label">Package End Date</label>
                                                            <input type="text" class="form-control" name="package_end_date" id="PhoneNumber" placeholder="Package Quota"
                                                                value="{{ $edit->package_end_date }}"readonly>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.previous()"><i
                                                                    class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                            <button class="btn btn-secondary px-4"><a
                                                                    href="{{ url('employer_list') }}">Back to
                                                                    employer list</a></button>
                                                            </div>
                                                        </div>
                                                    </div><!---end row-->

                                                </div>

                                        </form>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end stepper two-->



                <link href="{{ URL::to('/') }}/public/assets1/plugins/input-tags/css/tagsinput.css"
                    rel="stylesheet" />

                {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
                <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
                <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
                <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
                    rel="stylesheet" />
                <script src="{{ URL::to('/') }}/public/assets1/plugins/input-tags/js/tagsinput.js"></script>
                <!--app JS-->

</body>



<div>
    @include('admin.layouts.footer')
</div>
