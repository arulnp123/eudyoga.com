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
                                <li class="breadcrumb-item active" aria-current="page">edit_jobs Jobs</li>
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
                                        {{-- @foreach ($edit_jobs_jobs as $key => $edit_jobs) --}}
                                            <form class="row g-3" method="post" action="{{ url('/update_jobs') }}"
                                                enctype="multipart/form-data">
                                                <input value="{{ $edit_jobs->id }}" type="hidden" name="employer_id" id="employer_id"/>

                                                @csrf

                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="company_id" class="form-label">Company</label>
                                                            <select name="company_id" id="company_id" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Company</option>
                                                                @foreach ($getcompanies as $companieslist)
                                                                <option @if ($edit_jobs->company_id == $companieslist->id) selected @endif
                                                                    value="{{ $companieslist->id }}">
                                                                    {{ $companieslist->c_name }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                                <label for="title" class="form-label">Job title</label>
                                                                <select name="job_title" id="job_title" required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="" selected>Job title</option>
                                                                    @foreach ($jobtitles as $jobtitleslist)
                                                                    <option @if ($edit_jobs->title == $jobtitleslist->id) selected @endif
                                                                        value="{{ $jobtitleslist->id }}">
                                                                        {{ $jobtitleslist->job_title }}
                                                                    </option>
                                                                @endforeach
                                                                </select>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="inputAddress2" class="form-label">Job
                                                                description</label>
                                                            <textarea class="form-control" name="description" id="native_place" placeholder="Job description" rows="3">{{ $edit_jobs->description }}</textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="inputAddress2"
                                                                class="form-label">Benefits</label>
                                                            <textarea class="form-control" name="benefits" id="native_place" placeholder="Job Benefits" rows="3">{{ $edit_jobs->benefits }}</textarea>
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
                                                                <select name="job_skills" id="job_skill" required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="" selected>Job Skill</option>
                                                                    @foreach ($jobskills as $jobskillslist)
                                                                    <option @if ($edit_jobs->job_skill_id == $jobskillslist->id) selected @endif
                                                                        value="{{ $jobskillslist->id }}">
                                                                        {{ $jobskillslist->job_skill }}
                                                                    </option>
                                                                @endforeach
                                                                </select>
                                                            
                                                        </div>

                                                       <div class="col-12 col-lg-6">
                                                        <label for="country" class="form-label">Country</label>
                                                            <select name="country_id" id="country" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Country</option>
                                                                @foreach ($getcountry as $countrylist)
                                                                <option @if ($edit_jobs->country_id == $countrylist->id) selected @endif
                                                                    value="{{ $countrylist->id }}">
                                                                    {{ $countrylist->country }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="state" class="form-label">State</label>
                                                            <select name="state_id" id="state_name" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>State</option>
                                                                @foreach ($getstate as $statelist)
                                                                <option @if ($edit_jobs->state_id == $statelist->id) selected @endif
                                                                    value="{{ $statelist->id }}">
                                                                    {{ $statelist->state_name }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="city" class="form-label">City</label>
                                                            <select name="city_id" id="city" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>City</option>
                                                                @foreach ($getcity as $citylist)
                                                                <option @if ($edit_jobs->city_id == $citylist->id) selected @endif
                                                                    value="{{ $citylist->id }}">
                                                                    {{ $citylist->city }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
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
                                                            <label for="career_level" class="form-label">Career Level</label>
                                                            <select name="career_level_id" id="career_level" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Career Level</option>
                                                                @foreach ($careerlevels as $careerlevelslist)
                                                                <option @if ($edit_jobs->career_level_id == $careerlevelslist->id) selected @endif
                                                                    value="{{ $careerlevelslist->id }}">
                                                                    {{ $careerlevelslist->career_level }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_from" class="form-label">Salary
                                                                From</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_from" id="salary_from"
                                                                placeholder="salary from"
                                                                value="{{ $edit_jobs->salary_from }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_to" class="form-label">Salary
                                                                To</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_to" id="UniversityName"
                                                                placeholder="Salary To"
                                                                value="{{ $edit_jobs->salary_to }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_currency" class="form-label">Salary
                                                                Currency</label>
                                                            <input type="text" class="form-control"
                                                                name="salary_currency" id="UniversityName"
                                                                placeholder="Salary Currency"
                                                                value="{{ $edit_jobs->salary_currency }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="salary_period" class="form-label">Salary Period</label>
                                                            <select name="salary_period_id" id="salary_period" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Salary Period</option>
                                                                @foreach ($salaryperiods as $salaryperiodslist)
                                                                <option @if ($edit_jobs->salary_period_id == $salaryperiodslist->id) selected @endif
                                                                    value="{{ $salaryperiodslist->id }}">
                                                                    {{ $salaryperiodslist->salary_period }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
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
                                                            <label for="functional_area" class="form-label">Functional Area</label>
                                                            <select name="functional_area_id" id="functional_area" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Functional Area</option>
                                                                @foreach ($functionalareas as $functionalareaslist)
                                                                <option @if ($edit_jobs->functional_area_id == $functionalareaslist->id) selected @endif
                                                                    value="{{ $functionalareaslist->id }}">
                                                                    {{ $functionalareaslist->functional_area }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_type" class="form-label">Job
                                                                Type</label>
                                                            <select name="job_type_id" id="job_type" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Job
                                                                    Type</option>
                                                                @foreach ($jobtypes as $jobtypeslist)
                                                                <option @if ($edit_jobs->job_type_id == $jobtypeslist->id) selected @endif
                                                                    value="{{ $jobtypeslist->id }}">
                                                                    {{ $jobtypeslist->job_type }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_shift" class="form-label">Job
                                                                Shift</label>
                                                            <select name="job_shift_id" id="job_shift" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Job
                                                                    Shift</option>
                                                                @foreach ($jobshifts as $jobshiftslist)
                                                                <option @if ($edit_jobs->job_shift_id == $jobshiftslist->id) selected @endif
                                                                    value="{{ $jobshiftslist->id }}">
                                                                    {{ $jobshiftslist->job_shift }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="num_of_positions" class="form-label">Position</label>
                                                            <select name="num_of_positions" id="num_of_positions" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Position</option>
                                                                @foreach ($roles as $roleslist)
                                                                <option @if ($edit_jobs->num_of_positions == $roleslist->id) selected @endif
                                                                    value="{{ $roleslist->id }}">
                                                                    {{ $roleslist->role_name }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="gender" class="form-label">Gender</label>
                                                            <select name="gender_id" id="gender" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Gender</option>
                                                                @foreach ($genders as $genderslist)
                                                                <option @if ($edit_jobs->gender_id == $genderslist->id) selected @endif
                                                                    value="{{ $genderslist->id }}">
                                                                    {{ $genderslist->gender }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="expiry_date" class="form-label">Job expiry
                                                                date</label>
                                                            <input type="text" class="form-control"
                                                                name="expiry_date" id="PhoneNumber"
                                                                placeholder="Job expiry date"
                                                                value="{{ $edit_jobs->expiry_date }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="degree_level" class="form-label">Required Degree Level</label>
                                                            <select name="degree_level_id" id="degree_level" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Required Degree Level</option>
                                                                @foreach ($degreelevels as $degreelevelslist)
                                                                <option @if ($edit_jobs->degree_level_id == $degreelevelslist->id) selected @endif
                                                                    value="{{ $degreelevelslist->id }}">
                                                                    {{ $degreelevelslist->degree_level }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_experience" class="form-label">Required job
                                                                experience</label>
                                                            <select name="job_experience_id" id="job_experience" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Functional Area</option>
                                                                @foreach ($jobexperiences as $jobexperienceslist)
                                                                <option @if ($edit_jobs->job_experience_id == $jobexperienceslist->id) selected @endif
                                                                    value="{{ $jobexperienceslist->id }}">
                                                                    {{ $jobexperienceslist->job_experience }}
                                                                </option>
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
                                        {{-- @endforeach --}}
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
