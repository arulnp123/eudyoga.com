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
                                <li class="breadcrumb-item active" aria-current="page">Edit Seo</li>
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
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="bs-stepper-content">
                                        {{-- @foreach ($edit_jobs_jobs as $key => $edit_jobs) --}}
                                            <form class="row g-3" method="post" action="{{ url('/update_seo') }}"
                                                enctype="multipart/form-data">
                                                <input value="{{ $edit_seo->id }}" type="hidden" name="id" id="id"/>

                                                @csrf

                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="page_title" class="form-label">Page Title</label>
                                                            <input type="text" class="form-control" name="page_title"
                                                                id="page_title" placeholder="page title"
                                                                value="{{ $seo->page_title }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="seo_title" class="form-label">Seo Title</label>
                                                            <input type="text" class="form-control" name="seo_title"
                                                                id="seo_title" placeholder="seo title"
                                                                value="{{ $seo->seo_title }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="col-12 col-lg-6">
                                                                <label for="seo_description" class="form-label">Seo Description</label>
                                                                <textarea class="form-control" name="seo_description" id="seo_description" placeholder="seo description" rows="3"
                                                                    readonly>{{ $seo->seo_description }}</textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="seo_keywords" class="form-label">Seo Keywords</label>
                                                            <input type="text" class="form-control" name="seo_title"
                                                                id="seo_keywords" placeholder="seo keywords"
                                                                value="{{ $seo->seo_keywords }}" readonly>
                                                        </div>

                                                        <div class="col-12 col-lg-6">
                                                            <label for=" seo_other" class="form-label">Seo Other</label>
                                                            <input type="text" class="form-control" name="seo_title"
                                                                id=" seo_other" placeholder=" seo other"
                                                                value="{{ $seo-> seo_other }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="created_at" class="form-label">created at</label>
                                                            <input type="text" class="form-control" name="created_at"
                                                                id="created_at" placeholder="created_at"
                                                                value="{{ $seo->created_at }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="updated_at" class="form-label">updated_at</label>
                                                            <input type="text" class="form-control" name="updated_at"
                                                                id="updated_at" placeholder="updated at"
                                                                value="{{ $seo->updated_at }}" readonly>
                                                        </div>

                                                        <div class="col-12 col-lg-6">
                                                            <button class="btn btn-light px-4" type="button"
                                                                onclick="stepper2.next()">Next<i
                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
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
