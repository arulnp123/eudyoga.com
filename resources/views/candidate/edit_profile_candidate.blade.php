@include('candidate/layouts_index.app')

@yield('content')
<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 col-sm-12">

                <br>
                <br>
                <br>
                <br>

                <center>
                    <h3>Edit Profile</h3>
                </center>
                <div class="page-wrapper">
                    <div class="page-content">
                        <!--breadcrumb-->
                        <div>

                            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

                            </div>
                        </div>
                        <!--end breadcrumb-->

                        <!--start stepper one-->



                        <div id="stepper1" class="bs-stepper">
                            <div class="card">




                                <!--start stepper two-->

                                <div id="stepper2" class="bs-stepper">
                                    <div class="card">

                                        <div class="card-header ">
                                            <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between "
                                                role="tablist">
                                                <div class="step" data-target="#test-nl-1">
                                                    <div class="step-trigger" role="tab" id="stepper2trigger1"
                                                        aria-controls="test-nl-1">
                                                        <div class="bs-stepper-circle"><i class='bx bx-user fs-4'>1</i>
                                                        </div>
                                                        {{-- <div class=""> --}}
                                                        {{-- <h5 class="mb-0 steper-title">Next</h5> --}}
                                                        {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                        {{-- </div>  --}}
                                                    </div>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-nl-2">
                                                    <div class="step-trigger" role="tab" id="stepper2trigger2"
                                                        aria-controls="test-nl-2">
                                                        <div class="bs-stepper-circle"><i class='bx bx-user fs-4'>2</i>
                                                        </div>
                                                        {{-- <div class=""> --}}
                                                        {{-- <h5 class="mb-0 steper-title">Next</h5> --}}
                                                        {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                        {{-- </div> --}}
                                                    </div>
                                                </div>
                                                <div class="bs-stepper-line" data-target="#test-nl-3"></div>
                                                <div class="step" data-target="#test-nl-3">
                                                    <div class="step-trigger" role="tab" id="stepper2trigger3"
                                                        aria-controls="test-nl-3">
                                                        <div class="bs-stepper-circle"><i class='bx bx-user fs-4'>3</i>
                                                        </div>
                                                        {{-- <div class=""> --}}
                                                        {{-- <h5 class="mb-0 steper-title">Next</h5> --}}

                                                        {{-- </div> --}}
                                                    </div>
                                                </div>
                                                <div class="bs-stepper-line"></div>
                                                <div class="step" data-target="#test-nl-4">
                                                    <div class="step-trigger" role="tab" id="stepper2trigger4"
                                                        aria-controls="test-nl-4">
                                                        <div class="bs-stepper-circle"><i class='bx bx-user fs-4'>4</i>
                                                        </div>
                                                        {{-- <div class=""> --}}
                                                        {{-- <h5 class="mb-0 steper-title">Finish</h5> --}}
                                                        {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                        {{-- </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @if (session()->has('success'))
                                                <div class="alert alert-success alert-dismissable"
                                                    style="margin: 15px;">
                                                    <a href="#" style="color:white !important" class="close"
                                                        data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong> {{ session('success') }} </strong>
                                                </div>
                                            @endif
                                            @if (session()->has('error'))
                                                <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
                                                    <a href="#" style="color:white !important" class="close"
                                                        data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong> {{ session('error') }} </strong>
                                                </div>
                                            @endif
                                            <div class="bs-stepper-content">
                                                <form method="post" action="{{ url('/editprofilecandidate') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" class="form-control"
                                                        value="{{ $candidateprofile->id }}" name="id">
                                                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                        aria-labelledby="stepper2trigger1">
                                                        <h5 class="mb-1">Enter Your Details</h5>
                                                        {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}
                                                        <br>
                                                        <div class="row g-3">
                                                            <div class="col-12 col-lg-6">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $candidateprofile->email }}"
                                                                    name="email" id="email" placeholder="Email">
                                                            </div>


                                                            <div class="col-12 col-lg-6">
                                                                <label for="image" class="form-label">User
                                                                    Images</label>
                                                                <input class="form-control form-control-sm"
                                                                    value="{{ $candidateprofile->image }}" value
                                                                    id="image" type="file">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="first_name" class="form-label">First
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="first_name"
                                                                    value="{{ $candidateprofile->first_name }}"
                                                                    id="first_name" placeholder="First Name">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="name" class="form-label">Full
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="name"
                                                                    value="{{ $candidateprofile->name }}"
                                                                    id="name" placeholder="Full Name">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="father_name" class="form-label">Father
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="father_name"
                                                                    value="{{ $candidateprofile->father_name }}"
                                                                    id="father_name" placeholder="Father Name">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="mother_name" class="form-label">Mother
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="mother_name"
                                                                    value="{{ $candidateprofile->mother_name }}"
                                                                    id="mother_name" placeholder="Mother Name">
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
                                                        <br>
                                                        <div class="row g-3">
                                                            <div class="col-12 col-lg-6">
                                                                <label for="gender_id"
                                                                    class="form-label">Gender</label>
                                                                <select name="gender_id" id="gender_id" required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value=""selected>Gender</option>
                                                                    @foreach ($gender as $key => $gender_list)
                                                                        <option
                                                                            @if ($gender_list->id == $candidateprofile->id) selected @endif
                                                                            value="{{ $gender_list->id }}">
                                                                            {{ $gender_list->gender }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="marital_status_id"
                                                                    class="form-label">Marital Status</label>
                                                                <select name="marital_status_id"
                                                                    id="marital_status_id" required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value=""selected>Marital Status
                                                                    </option>
                                                                    @foreach ($marital_statuses as $key => $marital_statuses_list)
                                                                        <option
                                                                            @if ($marital_statuses_list->marital_status_id == $candidateprofile->marital_status_id) selected @endif
                                                                            value="{{ $marital_statuses_list->marital_status_id }}">
                                                                            {{ $marital_statuses_list->marital_status }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="state"
                                                                    class="form-label">Country</label>
                                                                <select class="form-control" name="country_id"
                                                                    id="countries">
                                                                    <option>Choose a Country</option>
                                                                    @foreach ($managecountries as $countries)
                                                                        <option
                                                                            {{ $countries->id == 104 ? 'selected' : '' }}
                                                                            value="{{ $countries->id }}">
                                                                            {{ $countries->country }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="state_id" class="form-label">State</label>
                                                                <select class="form-control" name="state_id"
                                                                    id="state">
                                                                    <option>Select State Name</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="city_id" class="form-label">City</label>
                                                                <select class="form-control" name="city_id"
                                                                    id="cityid">
                                                                    <option>Select City Name</option>
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="col-12 col-lg-6">
                                                                <label for="nationality_id" class="form-label">Nationality</label>
                                                                <select class="form-control" name="nationality_id" id="nationality_id">
                                                                    <option>Select Nationality</option>
                                                                    @foreach ($getnationality as $getnationality_list)
                                                                        <option {{ $getnationality_list->nationality_id == 100 ? 'selected' : '' }}
                                                                            value="{{ $getnationality_list->nationality_id }}">
                                                                            {{ $getnationality_list->nationality }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <button class="btn btn-outline-light px-4"
                                                                        type="button"
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
                                                        <br>
                                                        <div class="row g-3">
                                                            <div class="col-12 col-lg-4">
                                                                <label for="date_of_birth" class="form-label">Date Of
                                                                    Birth</label>
                                                                <input type="date" class="form-control"
                                                                    name="date_of_birth"
                                                                    value="{{ $candidateprofile->date_of_birth }}"
                                                                    id="date_of_birth" placeholder="Date Of Birth">
                                                            </div>
                                                            <div class="col-12 col-lg-2">
                                                                <label for="age" class="form-label">Age</label>
                                                                <input type="number" class="form-control"
                                                                    name="age"
                                                                    value="{{ $candidateprofile->age }}"
                                                                    id="age" placeholder="Age">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="phone" class="form-label">Mobile
                                                                    Number</label>
                                                                <input type="number" class="form-control"
                                                                    name="phone"
                                                                    value="{{ $candidateprofile->phone }}"
                                                                    id="phone" placeholder="Mobile Number">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="mobile_num" class="form-label">Alternative
                                                                    Mobile Number</label>
                                                                <input type="number" class="form-control"
                                                                    name="mobile_num"
                                                                    value="{{ $candidateprofile->mobile_num }}"
                                                                    id="mobile_num"
                                                                    placeholder="Alternative Mobile Number">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="job_experience_id" class="form-label">Job
                                                                    Experiences</label>
                                                                <select name="job_experience_id"
                                                                    id="job_experience_id" required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value=""selected>Job Experiences
                                                                    </option>
                                                                    @foreach ($job_experiences as $key => $job_experiences_list)
                                                                        <option
                                                                            @if ($job_experiences_list->job_experience_id == $candidateprofile->job_experience_id) selected @endif
                                                                            value="{{ $job_experiences_list->job_experience_id }}">
                                                                            {{ $job_experiences_list->job_experience }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-12 col-lg-6">
                                                                <label for="inputAddress2" class="form-label">Street
                                                                    Address</label>
                                                                <textarea class="form-control" name="street_address" value="{{ $candidateprofile->street_address }}"
                                                                    id="street_address" placeholder="Street Address" rows="3"></textarea>
                                                            </div>


                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <button class="btn btn-outline-light px-4"
                                                                        type="button"
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
                                                        <br>
                                                        <div class="row g-3">
                                                            <div class="col-12 col-lg-6">
                                                                <label for="career_level_id" class="form-label">Career
                                                                    Level</label>
                                                                <select name="career_level_id"
                                                                    id="career_level_id"required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value=""selected> Career Level
                                                                    </option>
                                                                    @foreach ($career_levels as $key => $career_levels_list)
                                                                        <option
                                                                            @if ($career_levels_list->id == $candidateprofile->id) selected @endif
                                                                            value="{{ $career_levels_list->id }}">
                                                                            {{ $career_levels_list->career_level }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="industry_id" class="form-label">Industry
                                                                </label>
                                                                <select name="industry_id" id="industry_id"required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value=""selected> Industry </option>
                                                                    @foreach ($industries as $key => $industries_list)
                                                                        <option
                                                                            @if ($industries_list->industry_id == $candidateprofile->industry_id) selected @endif
                                                                            value="{{ $industries_list->industry_id }}">
                                                                            {{ $industries_list->industry }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="functional_area_id" class="form-label">
                                                                    Functional Area </label>
                                                                <select name="functional_area_id"
                                                                    id="functional_area_id"required
                                                                    class="form-control form-select"
                                                                    aria-label="Default select example">
                                                                    <option value=""selected> Functional Area
                                                                    </option>
                                                                    @foreach ($functional_areas as $key => $functional_areas_list)
                                                                        <option
                                                                            @if ($functional_areas_list->id == $candidateprofile->id) selected @endif
                                                                            value="{{ $functional_areas_list->id }}">
                                                                            {{ $functional_areas_list->functional_area }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-12 col-lg-6">
                                                                <label for="current_salary" class="form-label">Current
                                                                    Salary</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $candidateprofile->current_salary }}"
                                                                    name="current_salary" id="current_salary"
                                                                    placeholder="Current Salary">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="expected_salary"
                                                                    class="form-label">Expected Salary</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $candidateprofile->expected_salary }}"
                                                                    name="expected_salary" id="expected_salary"
                                                                    placeholder="Expected Salary">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label for="salary_currency" class="form-label">Salary
                                                                    Currency</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $candidateprofile->salary_currency }}"
                                                                    name="salary_currency" id="salary_currency"
                                                                    placeholder="Salary Currency">
                                                            </div>


                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <button class="btn btn-light px-4" type="button"
                                                                        onclick="stepper2.previous()"><i
                                                                            class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                    <button class="btn btn-white px-4" type="submit"
                                                                        >Submit</button>
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
                            $('#countries').on('change', function() {
                                var state_id = this.value;
                                // alert (state_id);
                                $("#state").html('');
                                $.ajax({
                                    url: "{{ url('/getstate') }}",
                                    type: "POST",
                                    data: {
                                        country_id: state_id,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    dataType: 'json',
                                    success: function(result) {
                                        $('#state').html('<option value="">-- Select State Name --</option>');
                                        $.each(result, function(key, value) {
                                            $("#state").append('<option value="' + value
                                                .id + '">' + value.state + '</option>');
                                        });
                                        $('#cities').html('<option value="">-- Select City Name --</option>');
                                    }
                                });
                            });
                            // city		
                            $('#state').on('change', function() {
                                var city_id = this.value;
                                // alert(city_id)
                                $("#cityid").html('');
                                $.ajax({
                                    url: "{{ url('/getcity') }}",
                                    type: "POST",
                                    data: {
                                        state_id: city_id,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    dataType: 'json',
                                    success: function(result) {
                                        $('#cityid').html('<option value="">-- Select City Name --</option>');
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

                        <style>
                            /* Customize the background color of the form */
                            .page-content {
                                background-color: #f0f5ff;
                                /* Light blue shade */
                            }

                            /* Customize the background color of the card */


                            /* Customize the background color of the stepper */
                            .bs-stepper {
                                background-color: #f8f8f8;
                                /* Lighter blue shade */
                            }

                            /* Customize the background color of the stepper steps */

                            /* Customize the text color of the stepper steps */
                            .bs-stepper .step h5 {
                                color: #ffffff;
                                /* White */
                            }

                            /* Customize the background color of the form fields */
                            .form-control {
                                background-color: #edf2ff;
                                /* Lighter blue shade */
                            }

                            /* Customize the button colors */
                            .btn-light {
                                background-color: #3c26e2;
                                /* Dark blue */
                                color: #ffffff;
                                /* White */
                            }

                            .btn-outline-light {
                                border-color: #3c26e2;
                                /* Dark blue */
                                color: #4d8cf2;
                                /* Dark blue */
                            }

                            .btn-white {
                                background-color: #ffffff;
                                /* White */
                                color: #4d8cf2;
                                /* Dark blue */
                            }

                            .row.g-3 [class^="col-"] {
                                margin-bottom: 15px;
                                /* Adjust the value to set the desired spacing */
                            }
                        </style>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!--Footer-->
    <div class="largebanner shadow3">
        <div class="adin">
            <img src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">.
        </div>
        <div class="clearfix"></div>
    </div>

</div>
</div>


<div class="col col-md-12">

    <div class="footerWrap">
        <div class="container">
            <div class="row">

                <!--Quick Links-->
                <div class="col-md-3 col-sm-6">
                    <h5>Quick Links</h5>
                    <!--Quick Links menu Start-->
                    <ul class="quicklinks">
                        <li><a href="index">Home</a></li>
                        <li><a href="{contact_us}">Contact Us</a></li>
                        <li class="postad"><a href="{{ url('/') }}">Post a Job</a></li>
                        <li><a href="{{ url('/') }}">FAQs</a></li>

                        <li class=""><a href="about_us">About Us</a></li>

                        <li class=""><a href="{{ url('/') }}">Terms &amp; Conditions</a></li>

                        <!--<li class=""><a href="{{ url('/') }}">Privacy Policy</a></li>-->

                        <!--<li class=""><a href="{{ url('/') }}">Refund_Policy</a></li>-->
                        <!--                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                    </ul>
                </div>
                <!--Quick Links menu end-->

                <div class="col-md-3 col-sm-6">
                    <h5>Jobs By Functional Area</h5>
                    <!--Quick Links menu Start-->
                    <ul class="quicklinks">
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118">Sales</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=68">Manufacturing &amp;
                                Operations</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=53">Interior Designers &amp;
                                Architects</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business
                                Development</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>
                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>-->
                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>-->
                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>-->
                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>-->
                    </ul>
                </div>

                <div class="col-md-3 col-sm-12">
                    <h5>Jobs By Industry</h5>
                    <!--<div class="phone"> <a href="tel:+918884442935">+91 888-444-2935</a></div>-->
                    <!--<div class="email"> <a href="mailto:jobdesk@eudyoga.com">jobdesk@eudyoga.com</a> </div>-->
                </div>


                <!--About Us-->
                <div class="col-md-3 col-sm-12">
                    <h5>Contact Us</h5>
                    <div class="phone"> <a href="tel:+91 888-444-2936">+91 888-444-2936</a></div>
                    <div class="email"> <a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a> </div>
                    <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022 India
                    </div>

                    <!-- Social Icons -->
                    <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067"
                            target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/e_udyoga" target="_blank"><i class="fab fa-twitter-square"
                                aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/eudyoga/" target="_blank"><i class="fab fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube-square"
                                aria-hidden="true"></i></a>
                    </div>
                    <!-- Social Icons end -->

                </div>
                <!--About us End-->


            </div>
        </div>
    </div>
    <!--Footer end-->
    <!--Copyright-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="bttxt">Copyright &copy; 2024 E-Udyoga. All Rights Reserved. Design by: <a
                            href="https://npgroups.com/" target="_blank">npgroups.com</a></div>
                </div>

            </div>
        </div>

    </div>
</div>
