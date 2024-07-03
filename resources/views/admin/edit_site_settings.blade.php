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
                                <li class="breadcrumb-item active" aria-current="page">edit_Site settings</li>
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
                                                <input value="{{ $edit_jobs->id }}" type="hidden" name="id" id="id"/>

                                                @csrf

                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Site Name" class="form-label">Site Name</label>
                                                            <select name="Site Name" id="Site Name" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Site Name</option>
                                                                @foreach ($getcompanies as $companieslist)
                                                                <option @if ($edit_jobs->company_id == $companieslist->id) selected @endif
                                                                    value="{{ $companieslist->id }}">
                                                                    {{ $companieslist->c_name }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                                <label for="title" class="form-label">Site Slogan</label>
                                                                <select name="Site Slogan" id="job_title" required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="" selected>Site Slogan</option>
                                                                    @foreach ($jobtitles as $jobtitleslist)
                                                                    <option @if ($edit_jobs->title == $jobtitleslist->id) selected @endif
                                                                        value="{{ $jobtitleslist->id }}">
                                                                        {{ $jobtitleslist->job_title }}
                                                                    </option>
                                                                @endforeach
                                                                </select>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="inputAddress2" class="form-label">Site Phone Primary
                                                               </label>
                                                            <textarea class="form-control" name="Site Phone Primary" id="native_place" placeholder="Site Phone Primary" rows="3">{{ $edit_jobs->description }}</textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="inputAddress2"
                                                                class="form-label">ite Phone Secondary</label>
                                                            <textarea class="form-control" name="ite Phone Secondary" id="native_place" placeholder="ite Phone Secondary" rows="3">{{ $edit_jobs->benefits }}</textarea>
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
                                                            <label for="Default Country Id" class="form-label">Default Country Id
                                                              </label>
                                                                <select name="job_skills" id="job_skill" required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="" selected>Default Country Id</option>
                                                                    @foreach ($jobskills as $jobskillslist)
                                                                    <option @if ($edit_jobs->job_skill_id == $jobskillslist->id) selected @endif
                                                                        value="{{ $jobskillslist->id }}">
                                                                        {{ $jobskillslist->job_skill }}
                                                                    </option>
                                                                @endforeach
                                                                </select>
                                                            
                                                        </div>

                                                       <div class="col-12 col-lg-6">
                                                        <label for="couDefault Currency Codentry" class="form-label">Default Currency Code</label>
                                                            <select name="Default Currency Code" id="Default Currency Code" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Default Currency Code</option>
                                                                @foreach ($getcountry as $countrylist)
                                                                <option @if ($edit_jobs->country_id == $countrylist->id) selected @endif
                                                                    value="{{ $countrylist->id }}">
                                                                    {{ $countrylist->country }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Site Street Address" class="form-label">Site Street Address</label>
                                                            <select name="Site Street Address" id="Site Street Address" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Site Street Address</option>
                                                                @foreach ($getstate as $statelist)
                                                                <option @if ($edit_jobs->state_id == $statelist->id) selected @endif
                                                                    value="{{ $statelist->id }}">
                                                                    {{ $statelist->state_name }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Site Google Map" class="form-label">Site Google Map</label>
                                                            <select name="city_id" id="city" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>CitySite Google Map</option>
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
                                                            <label for="Mail Driver" class="form-label">Mail Driver</label>
                                                            <select name="Mail Driver" id="Mail Driver" required
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
                                                            <label for="Mail Host" class="form-label">Mail Host
                                                              </label>
                                                            <input type="text" class="form-control"
                                                                name="Mail Host" id="Mail Host"
                                                                placeholder="Mail Host"
                                                                value="{{ $edit_jobs->salary_from }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Mail Port" class="form-label">Mail Port
                                                                </label>
                                                            <input type="text" class="form-control"
                                                                name="Mail Port" id="UniversityName"
                                                                placeholder=" Mail Port"
                                                                value="{{ $edit_jobs->salary_to }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Mail From Address" class="form-label">Mail From Address
                                                                </label>
                                                            <input type="text" class="form-control"
                                                                name="Mail From Address" id="Mail From Address"
                                                                placeholder="Mail From Address"
                                                                value="{{ $edit_jobs->salary_currency }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Mail From Name" class="form-label">Mail From Name</label>
                                                            <select name="Mail From Name" id="Mail From Name" required
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
                                                            <label for="Mail To Addrerss" class="form-label">Mail To Addrerss</label>
                                                            <select name="Mail To Addrerss" id="Mail To Addrerss" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Mail To Addrerss</option>
                                                                @foreach ($functionalareas as $functionalareaslist)
                                                                <option @if ($edit_jobs->functional_area_id == $functionalareaslist->id) selected @endif
                                                                    value="{{ $functionalareaslist->id }}">
                                                                    {{ $functionalareaslist->functional_area }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_type" class="form-label">Mail To Name
                                                               </label>
                                                            <select name="Mail To Name" id="Mail To Name" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Mail To Name
                                                                    </option>
                                                                @foreach ($jobtypes as $jobtypeslist)
                                                                <option @if ($edit_jobs->job_type_id == $jobtypeslist->id) selected @endif
                                                                    value="{{ $jobtypeslist->id }}">
                                                                    {{ $jobtypeslist->job_type }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_shift" class="form-label">Mail Encryption
                                                                </label>
                                                            <select name="jMail Encryption" id="Mail Encryption" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Mail Encryption
                                                                    </option>
                                                                @foreach ($jobshifts as $jobshiftslist)
                                                                <option @if ($edit_jobs->job_shift_id == $jobshiftslist->id) selected @endif
                                                                    value="{{ $jobshiftslist->id }}">
                                                                    {{ $jobshiftslist->job_shift }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Mail Username" class="form-label">Mail Username</label>
                                                            <select name="Mail Username" id="Mail Username" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Mail Username</option>
                                                                @foreach ($roles as $roleslist)
                                                                <option @if ($edit_jobs->num_of_positions == $roleslist->id) selected @endif
                                                                    value="{{ $roleslist->id }}">
                                                                    {{ $roleslist->role_name }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Mail Password" class="form-label">Mail Password</label>
                                                            <select name="Mail Password" id="Mail Password" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Mail Password</option>
                                                                @foreach ($genders as $genderslist)
                                                                <option @if ($edit_jobs->gender_id == $genderslist->id) selected @endif
                                                                    value="{{ $genderslist->id }}">
                                                                    {{ $genderslist->gender }}
                                                                </option>
                                                            @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Mail Sendmail" class="form-label">Mail Sendmail
                                                                date</label>
                                                            <input type="text" class="form-control"
                                                                name="Mail Sendmail" id="PhoneMail SendmailNumber"
                                                                placeholder="Mail Sendmail"
                                                                value="{{ $edit_jobs->expiry_date }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="Mail Pretend" class="form-label">Mail Pretend</label>
                                                            <select name="Mail Pretend" id="degree_Mail Pretendlevel" required
                                                                class="form-control form-select"
                                                                aria-label="Default select example">
                                                                <option value="" selected>Mail Pretend</option>
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
