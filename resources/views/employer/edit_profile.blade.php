@include('employer/layouts_index.app')

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
                                                <form method="post" action="{{ url('/editprofile') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" class="form-control"
                                                        value="{{ $employerprofile->id }} " name="id">

                                                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                                aria-labelledby="stepper2trigger1">
                                                                <h5 class="mb-1">Enter Your Details</h5>
                                                                {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}
                                                                <br>

                                                                <div class="row g-3">
                                                                    
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="logo" class="form-label">Company Logo</label>
                                                                        <input type="file" class="form-control"
                                                                            value="{{$employerprofile->logo}}" name="logo" id="logo"
                                                                            placeholder="Company Logo">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="hr_name" class="form-label">HR Recruiter Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->name }}"
                                                                            name="name" id="name" placeholder="HR Recruiter Name">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="c_name" class="form-label">Company Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->c_name }}"
                                                                            name="c_name" id="c_name" placeholder="Company Name">
                                                                        
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="industry_id"
                                                                            class="form-label">Industry</label>
                                                                            <select name="industry_id" id="industry_id"
                                                                            required class="form-control form-select"
                                                                            aria-label="Default select example">
                                                                            <option value=""selected>Industry</option>
                                                                            @foreach ($getindustries as $key => $getindustries_list)
                                                                                <option
                                                                                    @if ($employerprofile == $getindustries_list->industry) selected @endif
                                                                                    value="{{ $getindustries_list->industry }}">
                                                                                    {{ $getindustries_list->industry }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>

                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="phone"
                                                                            class="form-label">Mobile Number</label>
                                                                        <input type="number" class="form-control"
                                                                            name="phone" value="{{ $employerprofile->phone }}"
                                                                            id="phone" placeholder="Mobile Number">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="alternate_phone"
                                                                            class="form-label">Alternate Contact
                                                                            Number</label>
                                                                        <input type="number" class="form-control"
                                                                            value="{{ $employerprofile->alternate_phone ?? '' }}"
                                                                            name="alternate_phone"
                                                                            id="alternate_phone"
                                                                            placeholder="Alternate Contact Number">
                                                                    </div>

                                                                    <div class="col-12 col-lg-6">
                                                                        <button class="btn btn-light px-4"
                                                                            type="button"
                                                                            onclick="stepper2.next()">Next<i
                                                                                class='bx bx-right-arrow-alt ms-2'></i></button>
                                                                    </div>
                                                                </div><!---end row-->

                                                            </div>

                                                            <div id="test-nl-2" role="tabpanel"
                                                                class="bs-stepper-pane"
                                                                aria-labelledby="stepper2trigger2">

                                                                <h5 class="mb-1">Enter Your Details</h5>
                                                                <br>
                                                                <div class="row g-3">

                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="email"
                                                                            class="form-label">Email-Id</label>
                                                                        <input type="email" class="form-control"
                                                                            value="{{ $employerprofile->email ?? '' }}"
                                                                            name="email" id="email" placeholder="Email-Id">
                                                                    </div>

                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="alternate_email"
                                                                            class="form-label">Alternative Email Id</label>
                                                                        <input type="email" class="form-control"
                                                                            value="{{ $employerprofile->alternate_email ?? '' }}"
                                                                            name="alternate_email" id="alternate_email" placeholder="Alternative Email Id">
                                                                    </div>

                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="established_in"
                                                                            class="form-label">Established In</label>
                                                                        <input type="date" class="form-control"
                                                                            value="{{ $employerprofile->established_in ?? '' }}"v
                                                                            name="established_in" id="established_in" placeholder="Established In">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="website"
                                                                            class="form-label">Website URL</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->websit ?? '' }}"
                                                                            name="website" id="website" placeholder="Website URL">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="gst" class="form-label">GST Number</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->gst ?? '' }}"
                                                                            name="gst" id="gst" placeholder="GST Number">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="branch	"
                                                                            class="form-label">Branch</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->branch ?? '' }}"
                                                                            name="branch" id="branch" placeholder="Branch">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="d-flex align-items-center gap-3">
                                                                            <button class="btn btn-outline-light px-4"
                                                                                type="button"
                                                                                onclick="stepper2.previous()"><i
                                                                                    class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                            <button class="btn btn-light px-4"
                                                                                type="button"
                                                                                onclick="stepper2.next()">Next<i
                                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div><!---end row-->

                                                            </div>

                                                            <div id="test-nl-3" role="tabpanel"
                                                                class="bs-stepper-pane"
                                                                aria-labelledby="stepper2trigger3">
                                                                <h5 class="mb-1">Enter Your Details</h5>
                                                                <br>
                                                                <div class="row g-3">
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="no_of_offices"
                                                                            class="form-label">No of Office</label>
                                                                        <input type="number" class="form-control"
                                                                            value="{{ $employerprofile->no_of_offices ?? '' }}"
                                                                            name="no_of_offices" id="no_of_offices" placeholder="No of Office">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="no_of_employees"
                                                                            class="form-label">No of Employees</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->no_of_employees ?? '' }}"
                                                                            name="no_of_employees" id="no_of_employees" placeholder="No of Employees">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="description	"
                                                                            class="form-label">Description(Company Profile)</label>
                                                                        <textarea class="form-control"  name="description"
                                                                            id="description" placeholder="Description" rows="3">{{ $employerprofile->description ?? '' }}</textarea>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="location"
                                                                            class="form-label">Address</label>
                                                                        <textarea class="form-control"  name="location" id="location"
                                                                            placeholder="Address" rows="3">{{ $employerprofile->location ?? '' }}</textarea>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="country_id"
                                                                            class="form-label">Country</label>
                                                                            <select name="country_id" id="country_id"
                                                                            required class="form-control form-select"
                                                                            aria-label="Default select example">
                                                                            <option value=""selected> Country</option>
                                                                            @foreach ($getcountry as $key => $getcountry_list)
                                                                                <option
                                                                                    @if ($employerprofile == $getcountry_list->country) selected @endif
                                                                                    value="{{ $getcountry_list->country }}">
                                                                                    {{ $getcountry_list->country }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="state_id"
                                                                            class="form-label">State</label>
                                                                        <select name="state_id" id="state_id"
                                                                            required class="form-control form-select"
                                                                            aria-label="Default select example">
                                                                            <option value=""selected> State</option>
                                                                            @foreach ($getstate as $key => $getstate_list)
                                                                                <option
                                                                                    @if ($employerprofile == $getstate_list) selected @endif
                                                                                    value="{{ $getstate }}">
                                                                                    {{ $getstate_list->state_name }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="city_id"
                                                                            class="form-label">City</label>
                                                                            <select name="city_id" id="city_id"
                                                                            required class="form-control form-select"
                                                                            aria-label="Default select example">
                                                                            <option value=""selected> City </option>
                                                                            @foreach ($getcity as $key => $getcity_list)
                                                                                <option
                                                                                    @if ($employerprofile == $getcity_list) selected @endif
                                                                                    value="{{ $getcity }}">
                                                                                    {{ $getcity_list->city }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="ownership_type_id"
                                                                            class="form-label">Ownership Type</label>
                                                                            <select name="ownership_type_id" id="ownership_type_id"
                                                                            required class="form-control form-select"
                                                                            aria-label="Default select example">
                                                                            <option value=""selected>Ownership</option>
                                                                            @foreach ($getownership_types as $key => $getownership_types)
                                                                                <option
                                                                                    @if ($employerprofile->ownership_type_id == $getownership_types->ownership_type_id) selected @endif
                                                                                    value="{{ $getownership_types->ownership_type_id }}">
                                                                                    {{ $getownership_types->ownership_type }}
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
                                                                            <button class="btn btn-light px-4"
                                                                                type="button"
                                                                                onclick="stepper2.next()">Next<i
                                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div><!---end row-->

                                                            </div>

                                                            <div id="test-nl-4" role="tabpanel"
                                                                class="bs-stepper-pane"
                                                                aria-labelledby="stepper2trigger4">
                                                                <h5 class="mb-1">Enter Your Details</h5>
                                                                <br>
                                                                <div class="row g-3">
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="facebook"
                                                                            class="form-label">Facebook</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->facebook ?? '' }}"
                                                                            name="facebook" id="facebook" placeholder="Facebook">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="twitter"
                                                                            class="form-label">Twitter</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->twitter ?? '' }}"
                                                                            name="twitter" id="twitter" placeholder="Twitter">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="linkedin"
                                                                            class="form-label">LinkedIn</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->linkedin ?? '' }}"
                                                                            name="linkedin" id="linkedin" placeholder="LinkedIn">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="google_plus"
                                                                            class="form-label">Google Plus</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->google_plus ?? '' }}"
                                                                            name="google_plus" id="google_plus" placeholder="Google Plus">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="pinterest"
                                                                            class="form-label">Pinterest</label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->pinterest ?? '' }}"
                                                                            name="pinterest" id="pinterest" placeholder="Pinterest">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="map"
                                                                            class="form-label">Google Map </label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $employerprofile->map ?? '' }}"
                                                                            name="map" id="map" placeholder="Google Map">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="degree_level"
                                                                            class="form-label">Required Degree Level</label>
                                                                            <select name="degree_level_id" id="degree_level_id"
                                                                            required class="form-control form-select"
                                                                            aria-label="Default select example">
                                                                            <option value=""selected> Required Degree Level </option>
                                                                            @foreach ($getdegree_level as $key => $getdegree_level_list)
                                                                                <option
                                                                                    @if ($employerprofile == $getdegree_level_list) selected @endif
                                                                                    value="{{ $getdegree_level }}">
                                                                                    {{ $getdegree_level_list->degree_level }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                            
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="job_experience"
                                                                            class="form-label">Required Job Experience</label>
                                                                            <select name="job_experience_id" id="job_experience_id"
                                                                            required class="form-control form-select"
                                                                            aria-label="Default select example">
                                                                            <option value=""selected> Required Job Experience </option>
                                                                            @foreach ($getjob_experience as $key => $getjob_experience_list)
                                                                                <option
                                                                                    @if ($employerprofile == $getjob_experience_list->job_experience) selected @endif
                                                                                    value="{{ $getjob_experience }}">
                                                                                    {{ $getjob_experience_list->job_experience }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                        
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="d-flex align-items-center gap-3">
                                                                            <button class="btn btn-light px-4" type="button" onclick="stepper2.previous()">
                                                                                <i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                                <input class="btn btn-white px-4" type="submit"></input>
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
                        <link href="{{ URL::to('/') }}/assets1/plugins/input-tags/css/tagsinput.css"
                                    rel="stylesheet" />

                                {{-- <script src="{{ URL::to('/') }}/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
                                <script src="{{ URL::to('/') }}/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
                                <script src="{{ URL::to('/') }}/assets1/plugins/bs-stepper/js/main.js"></script>
                                <link href="{{ URL::to('/') }}/assets1/plugins/bs-stepper/css/bs-stepper.css"
                                    rel="stylesheet" />
                                <script src="{{ URL::to('/') }}/assets1/plugins/input-tags/js/tagsinput.js"></script>
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
                    <img src="{{ URL::to('/') }}/assets/images/banner1.jpg">.
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>





<div class="footerWrap">
    <div class="container">
        <div class="row">

            <!--Quick Links-->
            <div class="col-md-3 col-sm-6">
                <h5>Quick Links</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">Contact Us</a></li>
                    <li class="postad"><a href="{{ url('/') }}">Post a Job</a></li>
                    <li><a href="{{ url('/') }}">FAQs</a></li>

                    <li class=""><a href="{{ url('/') }}">About Us</a></li>

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
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>-->
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-12">
                <h5>Jobs By Industry</h5>
                <div class="phone"> <a href="tel:+918884442935">+91 888-444-2935</a></div>
                <div class="email"> <a href="mailto:jobdesk@eudyoga.com">jobdesk@eudyoga.com</a> </div>
            </div>


            <!--About Us-->
            <div class="col-md-3 col-sm-12">
                <h5>Contact Us</h5>
                <div class="phone"> <a href="tel:+91 888-444-2936">+91 888-444-2936</a></div>
                <div class="email"> <a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a> </div>
                <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022 India</div>

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



                        