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
                                <li class="breadcrumb-item active" aria-current="page">Edit Jobs</li>
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
                                    <input value="{{ $employer_list }}" type="hidden" name="employer_id" id="employer_id"/>
                                    <div class="bs-stepper-content">
                                        @foreach ($edit_jobs as $key => $edit)
                                            <form class="row g-3" method="post" action="{{ url('/update_jobs') }}"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Company" class="form-label">Company</label>
                                                            <input type="text" class="form-control" name="id"
                                                                id="Company" placeholder="Company"
                                                                value="{{ $edit->id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Job title" class="form-label">Job title</label>
                                                            <input type="text" class="form-control" name="title"
                                                                id="Job title" placeholder="Job title"
                                                                value="{{ $edit->title }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="inputAddress2" class="form-label">Job
                                                                description</label>
                                                            <textarea class="form-control" name="description" id="native_place" placeholder="Job description" rows="3">{{ $edit->description }}</textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="inputAddress2"
                                                                class="form-label">Benefits</label>
                                                            <textarea class="form-control" name="benefits" id="native_place" placeholder="Job Benefits" rows="3">{{ $edit->benefits }}</textarea>
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
                                                            <label for="InputUsername" class="form-label">Job
                                                                skills</label>
                                                            <input type="text" class="form-control"
                                                                name="job_skills" id="InputUsername"
                                                                placeholder="Job skills" data-role="tagsinput"
                                                                value="{{ $edit->job_skills }}">


                                                        </div>


                                                        <div class="col-12 col-lg-6">
                                                            <label for="InputEmail2"
                                                                class="form-label">Country</label>
                                                            <input type="text" class="form-control"
                                                                name="country_id" id="InputEmail2"
                                                                placeholder="Country" value="{{ $edit->country_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="InputPassword"
                                                                class="form-label">State</label>
                                                            <input type="password" class="form-control"
                                                                name="state_id" id="InputPassword"
                                                                placeholder="State" value="{{ $edit->state_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="InputConfirmPassword"
                                                                class="form-label">City</label>
                                                            <input type="password" class="form-control"
                                                                name="city_id" id="InputConfirmPassword"
                                                                placeholder="City" value="{{ $edit->city_id }}">
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
                                                            <label for="career_level_id" class="form-label">Career
                                                                level</label>
                                                            <input type="text" class="form-control"
                                                                name="career_level_id" id="SchoolName"
                                                                placeholder="Career level"
                                                                value="{{ $edit->career_level_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_from" class="form-label">Salary
                                                                From</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_from" id="BoardName"
                                                                placeholder="Board Name"
                                                                value="{{ $edit->salary_from }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_to" class="form-label">Salary
                                                                To</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_to" id="UniversityName"
                                                                placeholder="Salary To"
                                                                value="{{ $edit->salary_to }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_currency" class="form-label">Salary
                                                                Currency</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_currency" id="UniversityName"
                                                                placeholder="Salary Currency"
                                                                value="{{ $edit->salary_currency }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_period_id" class="form-label">Salary
                                                                Period</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_period_id" id="UniversityName"
                                                                placeholder="Salary Period"
                                                                value="{{ $edit->salary_period_id }}">
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
                                                            <label for="functional_area_id"
                                                                class="form-label">Functional Area</label>
                                                            <input type="text" class="form-control"
                                                                name="functional_area_id" id="Experience1"
                                                                placeholder="Functional Area">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_type_id" class="form-label">Job
                                                                Type</label>
                                                            <input type="text" class="form-control"
                                                                name="job_type_id" id="Position1"
                                                                placeholder="Job Type"
                                                                value="{{ $edit->salary_period_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_shift_id" class="form-label">Job
                                                                Shift</label>
                                                            <input type="text" class="form-control"
                                                                name="job_shift_id" id="Experience2"
                                                                placeholder="Job Shift"
                                                                value="{{ $edit->job_shift_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="num_of_positions"
                                                                class="form-label">Position</label>
                                                            <input type="text" class="form-control"
                                                                name="num_of_positions" id="PhoneNumber"
                                                                placeholder="Position"
                                                                value="{{ $edit->num_of_positions }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="gender_id" class="form-label">Gender</label>
                                                            <input type="text" class="form-control"
                                                                name="gender_id" id="Experience3"
                                                                placeholder="Gender" value="{{ $edit->gender_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="expiry_date" class="form-label">Job expiry
                                                                date</label>
                                                            <input type="text" class="form-control"
                                                                name="expiry_date" id="PhoneNumber"
                                                                placeholder="Job expiry date"
                                                                value="{{ $edit->expiry_date }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="degree_level_id" class="form-label">Required
                                                                Degree Level</label>
                                                            <input type="text" class="form-control"
                                                                name="degree_level_id" id="PhoneNumber"
                                                                placeholder="Required Degree Level"
                                                                value="{{ $edit->degree_level_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="PhoneNumber" class="form-label">Required job
                                                                experience</label>
                                                            <input type="text" class="form-control"
                                                                name="job_experience_id" id="PhoneNumber"
                                                                placeholder="Required job experience"
                                                                value="{{ $edit->job_experience_id }}">
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
