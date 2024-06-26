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
                                        <form class="row g-3" method="post" action="{{ url('/addjobss') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                aria-labelledby="stepper2trigger1">
                                                <h5 class="mb-1">Enter Your Details</h5>
                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="company_id" class="form-label">Company</label>
                                                        <select name="company_id" id="company_id" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Company</option>
                                                            @foreach ($getcompanies as $key => $companieslist)
                                                                <option value="{{ $companieslist->id }}">
                                                                    {{ $companieslist->c_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                   <div class="col-12 col-lg-6">
                                                        <label for="title" class="form-label">Job title</label>
                                                        <select name="title" id="title" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Job title</option>
                                                            @foreach ($jobtitles as $key => $jobtitleslist)
                                                                <option value="{{ $jobtitleslist->id}}">
                                                                    {{ $jobtitleslist->job_title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>                                                  
                                                    <div class="col-12 col-lg-6">
                                                        <label for="inputAddress2" class="form-label">Job
                                                            description</label>
                                                        <textarea class="form-control" name="description" id="description" required
                                                        class="form-control form-select" placeholder="Job description" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="inputAddress2" class="form-label">Benefits</label>
                                                        <textarea class="form-control" name="benefits" id="native_place" required
                                                        class="form-control form-select" placeholder="Job Benefits" rows="3"></textarea>
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
                                                        <label for="job_skill" class="form-label">Job
                                                            skills</label>
                                                        <select name="job_skill_id" id="job_skill" required
                                                        class="form-control form-select" class="form-select"
                                                            aria-label="Default select example">
                                                            <option selected value=""> Job skills</option>
                                                            @foreach ($jobskills as $key => $jobskillslist)
                                                                <option value="{{ $jobskillslist->id }}">
                                                                    {{ $jobskillslist->job_skill }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>                                                    
                                                    <div class="col-12 col-lg-6">
                                                        <label for="country_id" class="form-label">Country</label>
                                                        <select name="country_id" id="country_id" required
                                                        class="form-control form-select" class="form-select"
                                                            aria-label="Default select example">
                                                            <option selected value="">Country</option>
                                                            @foreach ($getcountry as $key => $countylist)
                                                                <option value="{{ $countylist->id }}">
                                                                    {{ $countylist->country }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>                                                 
                                                    <div class="col-12 col-lg-6">
                                                        <label for="state_id" class="form-label">State</label>
                                                        <select name="state_id" id="state_id" required
                                                            class="form-control form-select">
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
                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="career_level_id" class="form-label">Career
                                                            level</label>
                                                       <select name="career_level_id" id="career_level_id" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Career Level</option>
                                                            @foreach ($careerlevels as $key => $careerlevelslist)
                                                                <option
                                                                    value="{{ $careerlevelslist->id }}">
                                                                    {{ $careerlevelslist->career_level }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="salary_from" class="form-label">Salary
                                                            From</label>
                                                        <input type="text" class="form-control number" name="salary_from"
                                                            id="salary_from" required class="form-control form-select" placeholder="Salary Form">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="salary_to" class="form-label">Salary To</label>
                                                        <input type="text" class="form-control number" name="salary_to"
                                                            id="salary_to" required
                                                            class="form-control form-select" placeholder="Salary To">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="salary_currency" class="form-label">Salary
                                                            Currency</label>
                                                        <input type="text" class="form-control number"
                                                            name="salary_currency" id="salary_currency" required
                                                            class="form-control form-select"
                                                            placeholder="Salary Currency">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="salary_period" class="form-label">Salary
                                                            Period</label>
                                                        <select name="salary_period_id" id="salary_period" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Salary Period</option>
                                                            @foreach ($salaryperiods as $key => $salaryperiodslist)
                                                                <option
                                                                    value="{{ $salaryperiodslist->id }}">
                                                                    {{ $salaryperiodslist->salary_period }}
                                                                </option>
                                                            @endforeach
                                                        </select>
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

                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="functional_area" class="form-label">Functional
                                                            Area</label>
                                                        <select name="functional_area_id" id="functional_area" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Functional Area</option>
                                                            @foreach ($functionalareas as $key => $functionalareaslist)
                                                                <option
                                                                    value="{{ $functionalareaslist->id }}">
                                                                    {{ $functionalareaslist->functional_area }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="job_type" class="form-label">Job Type</label>
                                                        <select name="job_type_id" id="job_type_id" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Job Type</option>
                                                            @foreach ($jobtypes as $key => $jobtypeslist)
                                                                <option value="{{ $jobtypeslist->id }}">
                                                                    {{ $jobtypeslist->job_type }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="job_shift" class="form-label">Job Shift</label>
                                                        <select name="job_shift_id" id="job_shift" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Job Shift</option>
                                                            @foreach ($jobshifts as $key => $jobshiftslist)
                                                                <option value="{{ $jobshiftslist->id }}">
                                                                    {{ $jobshiftslist->job_shift }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="num_of_positions"
                                                            class="form-label">Position</label>
                                                        <select name="num_of_positions" id="num_of_positions" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Position</option>
                                                            @foreach ($roles as $key => $roleslist)
                                                                <option value="{{ $roleslist->id }}">
                                                                    {{ $roleslist->role_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="gender_id" class="form-label">Gender</label>
                                                        <select name="gender_id" id="gender_id" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Gender</option>
                                                            @foreach ($genders as $key => $genderslist)
                                                                <option value="{{ $genderslist->id }}">
                                                                    {{ $genderslist->gender }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                   <div class="col-12 col-lg-6">
                                                        <label for="degree_level_id" class="form-label">Required
                                                            Degree Level</label>
                                                        <select name="degree_level_id" id="degree_level_id" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Required
                                                                Degree Level</option>
                                                            @foreach ($degreelevels as $key => $degreelevelslist)
                                                                <option
                                                                    value="{{ $degreelevelslist->id }}">
                                                                    {{ $degreelevelslist->degree_level }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="job_experience_id" class="form-label">Required job
                                                            experience</label>
                                                        <select name="job_experience_id" id="job_experience_id" required
                                                            class="form-control form-select"
                                                            aria-label="Default select example">
                                                            <option value="" selected>Required job
                                                                experience</option>
                                                            @foreach ($jobexperiences as $key => $jobexperienceslist)
                                                                <option
                                                                    value="{{ $jobexperienceslist->id }}">
                                                                    {{ $jobexperienceslist->job_experience }}</option>
                                                            @endforeach
                                                        </select>
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
                </div>
        <!--end stepper two-->

                <script>
                    $('#state_id').on('change', function() {
                        var stateid = this.value;
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
