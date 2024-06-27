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
                                <li class="breadcrumb-item active" aria-current="page">Sliders</li>
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
                                                <form class="row g-3" action="#" enctype="multipart/form-data">
                                                    @csrf
                                                    @foreach ($view_Slider as $key => $edit)
                                                        <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                            aria-labelledby="stepper2trigger1">
                                                            <h5 class="mb-1">Enter Your Details</h5>
                                                            {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                            <div class="row g-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="lang"
                                                                        class="form-label">Language</label>
                                                                    <input type="text" class="form-control"
                                                                        name="lang" id="lang"
                                                                        placeholder="lang"
                                                                        value="{{ $edit->lang }}" readonly>
                                                                </div>
                                                                
                                                        <div class="col-12 col-lg-6">
                                                                    <label for="slider_image"
                                                                        class="form-label">slider_image</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_image" id="slider_image"
                                                                        placeholder="slider_image"
                                                                        value="{{ $edit->slider_image }}" readonly>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="slider_heading"
                                                                        class="form-label">slider_heading</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_heading" id="slider_heading"
                                                                        placeholder="slider_heading"
                                                                        value="{{ $edit->slider_heading }}" readonly>
                                                                </div>
                                                        <div class="col-12 col-lg-6">
                                                            <button class="btn btn-light px-4" type="button"
                                                                onclick="stepper2.next()">Next<i
                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                                        </div>
                                                    </div>
                                                    <!---end row-->
                                                </div>

                                                <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger2">

                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                                    <label for="slider_description"
                                                                        class="form-label">slider_description</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_description" id="slider_description"
                                                                        placeholder="slider_description"
                                                                        value="{{ $edit->slider_description }}" readonly>
                                                                </div>                                             
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="slider_link"
                                                                        class="form-label">slider_link</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_link" id="slider_link"
                                                                        placeholder="slider_link"
                                                                        value="{{ $edit->slider_link }}" readonly>
                                                                </div>           
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="slider_link_text"
                                                                        class="form-label">slider_link_text</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_link_text" id="slider_link_text"
                                                                        placeholder="slider_link_text"
                                                                        value="{{ $edit->slider_link_text }}" readonly>
                                                                </div>      
                                                        
                                                        <div class="col-12 col-lg-6">
                                                            <label for="is_default"
                                                                class="form-label">is_default</label>
                                                            <input type="is_default" class="form-control"
                                                                name="is_default" id="is_default"
                                                                placeholder="is_default" value="{{ $edit->is_default }}"
                                                                readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="is_active"
                                                                class="form-label">	is_active</label>
                                                            <input type="is_active" class="form-control"
                                                                name="is_active" id="is_active"
                                                                placeholder="is_active" value="{{ $edit->is_active }}"
                                                                readonly>
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
                                                    </div>
                                                    <!---end row-->

                                                </div>

                                                <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger3">
                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="career_level" class="form-label">Career
                                                                level</label>
                                                            <input type="text" class="form-control"
                                                                name="career_level_id" id="career_level"
                                                                placeholder="Career level"
                                                                value="{{ $edit->career_level }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_from" class="form-label">Salary
                                                                From</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_from" id="salary_from"
                                                                placeholder="Salary From"
                                                                value="{{ $edit->salary_from }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_to" class="form-label">Salary
                                                                To</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_to" id="UniversityName"
                                                                placeholder="Salary To"
                                                                value="{{ $edit->salary_to }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_currency" class="form-label">Salary
                                                                Currency</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_currency_id" id="UniversityName"
                                                                placeholder="Salary Currency"
                                                                value="{{ $edit->salary_currency }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_period" class="form-label">Salary
                                                                Period</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_period_id" id="salary_period"
                                                                placeholder="Salary Period"
                                                                value="{{ $edit->salary_period }}" readonly>
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
                                                    </div>
                                                    <!---end row-->

                                                </div>

                                                <div id="test-nl-4" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger4">
                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="functional_area"
                                                                class="form-label">Functional
                                                                Area</label>
                                                            <input type="text" class="form-control"
                                                                name="functional_area_id" id="functional_area"
                                                                placeholder="Functional Area"
                                                                value="{{ $edit->functional_area }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_type_id" class="form-label">Job
                                                                Type</label>
                                                            <input type="text" class="form-control"
                                                                name="job_type_id" id="job_type"
                                                                placeholder="Job Type"
                                                                value="{{ $edit->job_type }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_shift_id" class="form-label">Job
                                                                Shift</label>
                                                            <input type="text" class="form-control"
                                                                name="job_shift_id" id="Experience2"
                                                                placeholder="Job Shift"
                                                                value="{{ $edit->job_shift }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="num_of_positions"
                                                                class="form-label">Position</label>
                                                            <input type="text" class="form-control"
                                                                name="num_of_positions" id="role_name"
                                                                placeholder="Position"
                                                                value="{{ $edit->role_name }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="gender_id" class="form-label">Gender</label>
                                                            <input type="text" class="form-control"
                                                                name="gender_id" id="gender"
                                                                placeholder="Gender" value="{{ $edit->gender }}"
                                                                readonly>
                                                        </div>
                                                        <!-- <div class="col-12 col-lg-6">
                                                        <label for="expiry_date" class="form-label">Job expiry
                                                            date</label>
                                                        <input type="date" class="form-control" name="expiry_date"
                                                            id="PhoneNumber" placeholder="Job expiry date">
                                                    </div> -->
                                                        <div class="col-12 col-lg-6">
                                                            <label for="degree_level_id" class="form-label">Required
                                                                Degree
                                                                Level</label>
                                                            <input type="text" class="form-control"
                                                                name="degree_level_id" id="PhoneNumber"
                                                                placeholder="Required Degree Level"
                                                                value="{{ $edit->degree_level }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="PhoneNumber" class="form-label">Required job
                                                                experience</label>
                                                            <input type="text" class="form-control"
                                                                name="job_experience_id" id="PhoneNumber"
                                                                placeholder="Required job experience"
                                                                value="{{ $edit->job_experience }}" readonly>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-secondary px-4"><a
                                                                        href="{{ url('list_jobs') }}">Back to
                                                                        Jobs list</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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

                {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js">
                </script> --}}
                <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
                <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
                <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
                    rel="stylesheet" />
                <script src="{{ URL::to('/') }}/public/assets1/plugins/input-tags/js/tagsinput.js"></script>
                <!--app JS-->
            </div>

        </div>
     </div>
</body>



<div>
    @include('admin.layouts.footer')
</div>
