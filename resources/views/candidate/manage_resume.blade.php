@include('candidate/layouts_index.app')

@yield('content')
<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 col-sm-12">


                <div class="userccount">
                    <div class="formpanel mt0">
                        <!-- Personal Information -->
                        <form method="post" action="{{ url('/updateresume') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" value="{{ $candidateprofile->id }}"
                                name="id">

                            <h5>Account Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Email</label>
                                        <input class="form-control" id="email" placeholder="Email" name="email"
                                            type="text" value="{{ $view_puplic_profile->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Password</label>
                                        <input class="form-control" id="password" placeholder="Password"
                                            name="password" type="password" value="">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h5>Personal Information</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <label>Profile Image</label>
                                        <img src="{{ URL::to('/') }}/assets/assets/no-image.png"
                                            style="max-width=100px; max-height:100px;" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow">
                                        <div id="thumbnail"></div>
                                        <label class="btn btn-default"> Select Profile Image
                                            <input type="file" name="image" id="image" style="display: none;">
                                        </label>
                                    </div>
                                </div>


                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">First Name</label>
                                        <input class="form-control" id="first_name" placeholder="First Name"
                                            name="first_name" type="text"
                                            value="{{ $view_puplic_profile->first_name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Email ID</label>
                                        <input class="form-control" id="email" placeholder="Email" name="email"
                                            type="text" value="{{ $view_puplic_profile->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="mother_name">Mother Name</label>
                                        <input class="form-control" type="text" id="mother_name"
                                            placeholder="Mother Name" name="mother_name"
                                            value="{{ $view_puplic_profile->mother_name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Father Name</label>
                                        <input class="form-control" id="father_name" placeholder="Father Name"
                                            name="father_name" type="text"
                                            value="{{ $view_puplic_profile->father_name }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Gender</label>
                                        <select name="gender_id" id="gender_id" required
                                            class="form-control form-select" aria-label="Default select example">
                                            <option value=""selected>Gender</option>
                                            @foreach ($gender as $key => $gender_list)
                                                <option @if ($gender_list->gender_id == $candidateprofile->gender_id) selected @endif
                                                    value="{{ $gender_list->gender_id }}">
                                                    {{ $gender_list->gender }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Martial Status</label>
                                        <select name="marital_status_id" id="marital_status_id" required
                                            class="form-control form-select" aria-label="Default select example">
                                            <option value=""selected>Marital Status
                                            </option>
                                            @foreach ($marital_statuses as $key => $marital_statuses_list)
                                                <option @if ($marital_statuses_list->marital_status_id == $candidateprofile->marital_status_id) selected @endif
                                                    value="{{ $marital_statuses_list->marital_status_id }}">
                                                    {{ $marital_statuses_list->marital_status }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Country</label>
                                        <select class="form-control" name="country_id" id="countries">
                                            <option>Choose a Country</option>
                                            @foreach ($managecountries as $countries)
                                                <option {{ $countries->id == 104 ? 'selected' : '' }}
                                                    value="{{ $countries->id }}">
                                                    {{ $countries->country }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">State</label>
                                        <span id="state_dd"> <select class="form-control" name="state_id"
                                                id="state">
                                                <option>Select State Name</option>
                                            </select> </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">City</label>
                                        <span id="city_dd"> <select class="form-control" name="city_id"
                                                id="cityid">
                                                <option>Select City Name</option>
                                            </select> </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="nationality_id">Nationality</label>
                                        <select class="form-control" name="nationality_id" id="nationality_id">
                                            <option>Select Nationality</option>
                                            @foreach ($getnationality as $getnationality_list)
                                                <option
                                                    {{ $getnationality_list->nationality_id == 100 ? 'selected' : '' }}
                                                    value="{{ $getnationality_list->nationality_id }}">
                                                    {{ $getnationality_list->nationality }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">


                                    <div class="formrow ">
                                        <label for="">Date of Birth</label>
                                        <input class="form-control" id="date_of_birth" placeholder="Date of Birth"
                                            autocomplete="off" name="date_of_birth" type="date"
                                            value="{{ $view_puplic_profile->date_of_birth }}">
                                    </div>




                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Age</label>
                                        <input class="form-control" id="age" placeholder="Age" name="age"
                                            type="text" value="{{ $view_puplic_profile->age }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Mobile</label>
                                        <input class="form-control" id="phone" placeholder="Mobile"
                                            name="phone" type="text" value="{{ $view_puplic_profile->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Alternate Number</label>
                                        <input class="form-control" id="mobile_num" placeholder="Alternate Number"
                                            name="mobile_num" type="text"
                                            value="{{ $view_puplic_profile->mobile_num }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="formrow ">
                                        <label for="">Street Address</label>
                                        <textarea class="form-control" id="street_address" placeholder="Street Address" name="street_address"
                                            cols="50" rows="10">{{ $view_puplic_profile->street_address }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <hr>
                            <h5>Add Video Profile</h5>

                            <div class="row">
                                <div class="col-md-12" id="video_link_id">
                                    <div class="formrow ">
                                        <label for="">Video Link - sample:
                                            https://www.youtube.com/embed/538cRSPrwZU</label>
                                        <textarea class="form-control" id="video_link" placeholder="Video Link" name="video_link" cols="50"
                                            rows="10">{{ $view_puplic_profile->video_link }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <h5>Career Information</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="formrow ">
                                        <label for="">Job Experience</label>
                                        <select name="job_experience_id" id="job_experience_id" required
                                            class="form-control form-select" aria-label="Default select example">
                                            <option value=""selected>Job Experiences
                                            </option>
                                            @foreach ($job_experiences as $key => $job_experiences_list)
                                                <option @if ($job_experiences_list->job_experience_id == $candidateprofile->job_experience_id) selected @endif
                                                    value="{{ $job_experiences_list->job_experience_id }}">
                                                    {{ $job_experiences_list->job_experience }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 fresher_val">
                                    <div class="formrow ">
                                        <label for="">Career Level</label>
                                        <select name="career_level_id" id="career_level_id"required
                                            class="form-control form-select" aria-label="Default select example">
                                            <option value=""selected> Career Level
                                            </option>
                                            @foreach ($career_levels as $key => $career_levels_list)
                                                <option @if ($career_levels_list->career_level_id == $candidateprofile->career_level_id) selected @endif
                                                    value="{{ $career_levels_list->career_level_id }}">
                                                    {{ $career_levels_list->career_level }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 fresher_val">
                                    <div class="formrow ">
                                        <label for="">Select Industry</label>
                                        <select name="industry_id" id="industry_id"required
                                            class="form-control form-select" aria-label="Default select example">
                                            <option value=""selected> Industry </option>
                                            @foreach ($industries as $key => $industries_list)
                                                <option @if ($industries_list->industry_id == $candidateprofile->industry_id) selected @endif
                                                    value="{{ $industries_list->industry_id }}">
                                                    {{ $industries_list->industry }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 fresher_val">
                                    <div class="formrow ">
                                        <label for="">Functional Area</label>
                                        <select name="functional_area_id" id="functional_area_id"required
                                            class="form-control form-select" aria-label="Default select example">
                                            <option value=""selected> Functional Area
                                            </option>
                                            @foreach ($functional_areas as $key => $functional_areas_list)
                                                <option @if ($functional_areas_list->functional_area_id == $candidateprofile->functional_area_id) selected @endif
                                                    value="{{ $functional_areas_list->functional_area_id }}">
                                                    {{ $functional_areas_list->functional_area }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 fresher_val">
                                    <div class="formrow ">
                                        <label for="">Current Salary</label>
                                        <input class="form-control" id="current_salary" placeholder="Current Salary"
                                            name="current_salary" type="text"
                                            value="{{ $view_puplic_profile->current_salary }}">
                                    </div>
                                </div>
                                <div class="col-md-4 fresher_val">
                                    <div class="formrow ">
                                        <label for="">Expected Salary</label>
                                        <input class="form-control" id="expected_salary"
                                            placeholder="Expected Salary" name="expected_salary" type="text"
                                            value="{{ $view_puplic_profile->expected_salary }}">
                                    </div>
                                </div>
                                <div class="col-md-4 fresher_val">
                                    <div class="formrow ">
                                        <label for="">Salary Currency</label>
                                        <input class="form-control" id="salary_currency"
                                            placeholder="Salary Currency" autocomplete="off" name="salary_currency"
                                            type="text" value="INR"
                                            value="{{ $view_puplic_profile->salary_currency }}">
                                    </div>
                                </div>

                            </div>



                            <div class="row">

                                <div class="col-md-12">
                                    <div class="formrow ">
                                        <input type="checkbox" value="1" name="is_subscribed"
                                            checked=&quot;checked&quot; />
                                        Subscribe to news letter

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="formrow"><button type="submit" class="btn">Update Profile and
                                            Save <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>


                        </form>
                        <hr>

                    </div>
                </div>

                <div class="userccount">
                    <div class="formpanel mt0" <!-- Personal Information -->
                        <h5>Summary</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form" id="add_edit_profile_summary" method="POST"
                                    action="http://localhost/eudyoga.com/update-front-profile-summary/606">
                                    <input type="hidden" name="_token"
                                        value="1E6vDSsHKlvDuEHHDNE90Py9HwUfC4CxZ02fv0YK">
                                    <div class="form-body">
                                        <div id="success_msg"></div>
                                        <div class="formrow ">
                                            <textarea name="summary" class="form-control" id="summary" placeholder="Profile Summary"></textarea>
                                            <span class="help-block summary-error"></span>
                                        </div>
                                        <button type="button" class="btn btn-large btn-primary"
                                            onClick="submitProfileSummaryForm();">Update Summary <i
                                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="userccount">
                    <div class="formpanel mt0">
                        <!-- Personal Information -->
                        <h5 id="cvs" onclick="showCvs();">Curriculum vitae</h5>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="" id="cvs_div"></div>

                            </div>

                        </div>

                        {{-- <a href="javascript:;" class="prolinkadd" onclick="showProfileCvModal();"> Add CV </a> --}}
                        <h5>Add CV </h5>
                        <input type="file" class="prolinkadd">

                        <hr>

                        <div class="modal" id="add_cv_modal" tabindex="-1" aria-labelledby="addcvModalLabel"
                            aria-hidden="true"></div>
                        <h5 onclick="showProjects();">Projects</h5>


                        <div class="row" id="projects_div"></div>

                        <a href="javascript:;" class="prolinkadd" onclick="showProfileProjectModal();"
                            data-toggle="modal" data-target="#exampleModal"> Add Project
                        </a>


                        <hr>

                        <div class="modal" id="add_project_modal" role="dialog"></div>




                        <div class="row">

                            <div class="col-md-12">

                                <div class="" id="experience_div"></div>

                            </div>

                        </div>
                        <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>


                        <a class="btn btn-primary prolinkadd col-md-4" data-toggle="collapse" href="#collapseExample"
                            role="button" aria-expanded="false" aria-controls="collapseExample"> Add
                            Experience </a>

                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="col-md-12">
                                    <form action="{{ url('/candidate_project') }}" method="POST">
                                        <input type="hidden" class="form-control"
                                            value="{{ $candidateprofile->id }}" name="id">
                                        <div class="input-field d-flex ">
                                            @csrf
                                            <input type="text" class="form-control " id="project_name"
                                                name="project_name" placeholder="Project Name">
                                            <input type="text" class="form-control ml-2" id="project_client"
                                                name="project_client" placeholder="Client Name">
                                            <input type="text" class="form-control ml-2" id="project_description"
                                                name="project_description" placeholder="Project Description">
                                            <button id="rowAdder" type="button" class="btn ml-2">
                                                ADD
                                            </button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>

                        <hr>

                        <div class="modal" id="add_experience_modal" role="dialog"></div>


                        <h5 onclick="showEducation();">Education</h5>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="" id="education_div"></div>

                            </div>

                        </div>


                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#add_education_modal"
                            class="prolinkadd" onclick="showProfileEducationModal();"> Add Education </a>

                        <hr>

                        <div class="modal fade" id="add_education_modal" role="dialog"></div>


                        <h5 onclick="showSkills();">Skills</h5>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="" id="skill_div"></div>

                            </div>

                        </div>

                        <a href="javascript:;" class="prolinkadd" onclick="showProfileSkillModal();"> Add Skill </a>

                        <hr>

                        <div class="modal" id="add_skill_modal" role="dialog"></div>

                        <h5 onclick="showLanguages();">Languages</h5>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="" id="language_div"></div>

                            </div>

                        </div>

                        <a href="javascript:;" class="prolinkadd" onclick="showProfileLanguageModal();"> Add Language
                        </a>

                        <hr>

                        <div class="modal" id="add_language_modal" role="dialog"></div>

                    </div>
                </div>









            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div>








<!--Footer-->
<div class="largebanner shadow3">
    <div class="adin">
        <img src="{{ URL::to('/') }}/assets/images/banner1.jpg">.
    </div>
    <div class="clearfix"></div>
</div>






<div class="footerWrap">
    <div class="container">
        <div class="row">

            <!--Quick Links-->
            <div class="col-md-3 col-sm-6">
                <h5>Quick Links</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="index">Home</a></li>
                    <li><a href="contact_us">Contact Us</a></li>
                    <li class="postad"><a href="{{ url('/') }}">Post a Job</a></li>
                    <li><a href="{{ url('/') }}">FAQs</a></li>

                    <li class=""><a href="about_us">About Us</a></li>

                    <li class=""><a href="{{ url('/') }}">Terms &amp; Conditions</a></li>

                    <!--<li class=""><a href="{{ url('/') }}">Privacy Policy</a></li>-->

                    <!--<li class=""><a href="{{ url('/') }}">Refund_Policy</a></li>-->
                    <!--<li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
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
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>-->
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business
                            Development</a></li>

                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>-->
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>

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
                        href="https://eudyoga.comhttp://graphicriver.net/user/ecreativesol" target="_blank">Thousand
                        Vision World Pvt Ltd</a></div>
            </div>
            <div class="col-md-4">
                <div class="paylogos"><img src="{{ URL::to('/') }}/assets/images/payment-icons.png"
                        alt="" /></div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('click', '#send_applicant_message', function() {

            var postData = $('#send-applicant-message-form').serialize();

            $.ajax({

                type: 'POST',

                url: "https://eudyoga.com/contact-applicant-message-send",

                data: postData,

                //dataType: 'json',

                success: function(data)

                {

                    response = JSON.parse(data);

                    var res = response.success;

                    if (res == 'success')

                    {

                        var errorString = '<div role="alert" class="alert alert-success">' +
                            response.message + '</div>';

                        $('#alert_messages').html(errorString);

                        $('#send-applicant-message-form').hide('slow');

                        $(document).scrollTo('.alert', 2000);

                    } else

                    {

                        var errorString = '<div class="alert alert-danger" role="alert"><ul>';

                        response = JSON.parse(data);

                        $.each(response, function(index, value)

                            {

                                errorString += '<li>' + value + '</li>';

                            });

                        errorString += '</ul></div>';

                        $('#alert_messages').html(errorString);

                        $(document).scrollTo('.alert', 2000);

                    }

                },

            });

        });

        showEducation();

        showProjects();

        showExperience();

        showSkills();

        showLanguages();

    });

    function showProjects()

    {

        $.post("https://eudyoga.com/show-applicant-profile-projects/674", {
                user_id: 674,
                _method: 'POST',
                _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'
            })

            .done(function(response) {

                $('#projects_div').html(response);

            });

    }

    function showExperience()

    {

        $.post("https://eudyoga.com/show-applicant-profile-experience/674", {
                user_id: 674,
                _method: 'POST',
                _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'
            })

            .done(function(response) {

                $('#experience_div').html(response);

            });

    }


    function showEducation()

    {

        $.post("https://eudyoga.com/show-applicant-profile-education/674", {
                user_id: 674,
                _method: 'POST',
                _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'
            })

            .done(function(response) {

                $('#education_div').html(response);

            });

    }

    function showLanguages()

    {

        $.post("https://eudyoga.com/show-applicant-profile-languages/674", {
                user_id: 674,
                _method: 'POST',
                _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'
            })

            .done(function(response) {

                $('#language_div').html(response);

            });

    }

    function showSkills()

    {

        $.post("https://eudyoga.com/show-applicant-profile-skills/674", {
                user_id: 674,
                _method: 'POST',
                _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'
            })

            .done(function(response) {

                $('#skill_div').html(response);

            });

    }



    function send_message() {

        const el = document.createElement('div')

        el.innerHTML =
            "Please <a class='btn' href='https://eudyoga.com/login' onclick='set_session()'>log in</a> as a Employer and try again."


        swal({

            title: "You are not Loged in",

            content: el,

            icon: "error",

            button: "OK",

        });


    }

    if ($("#send-form").length > 0) {

        $("#send-form").validate({

            validateHiddenInputs: true,

            ignore: "",



            rules: {

                message: {

                    required: true,

                    maxlength: 5000

                },

            },

            messages: {



                message: {

                    required: "Message is required",

                }



            },

            submitHandler: function(form) {

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });


            }

        })

    }
</script>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print('');

        document.body.innerHTML = originalContents;
    }
</script>

<!-- Custom js -->

<script src="https://eudyoga.com/public/js/script.js"></script>

<script type="text/JavaScript">

    $(document).ready(function(){

        $(document).scrollTo('.has-error', 2000);

    });

    function showProcessingForm(btn_id){        

        $("#"+btn_id).val( 'Processing .....' );

        $("#"+btn_id).attr('disabled','disabled');      

    }



    setInterval("hide_savedAlert()",7000);

    function hide_savedAlert(){

      $(document).find('.svjobalert').hide();

  }



  $(document).ready(function(){

    $.ajax({

        type: 'get',

        url: "https://eudyoga.com/check-time",

        success: function(res) {

            $('.notification').html(res);



        }

    });

});



</script>
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
                    $("#state").append('<option  value="' + value
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

@push('page_scripts')
    <script>
        $("#rowAdder").click(function() {
            newRowAdd =

                '<div class="tow1">' +
                '<div class="col-md-12">' +
                '<div class="input-field">' +
                '<label for="exampleInputEmail1">Select Age Range</label>' +
                '<select required name="details[]" class="chosen-select">' +
                '<option value="" disabled selected>Select Age Details</option>' +

                '</select>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-3">' +
                '<div class="input-field">' +
                '<label for="exampleInputEmail1">Persons</label>' +
                '<input required maxlength="2" type="number" name="counts[]" class="form-control number paxcount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Persons">' +
                '</div>' +
                ' </div>' +
                '<div class="col-md-3">' +
                '<div class="input-field">' +
                ' <button class="btn btn-danger" id="DeleteRow" type="button"><i class="bi bi-trash"></i> Delete </button>' +
                '</div>' +
                '</div>' +

                '</div>';

            $('#newinput').append(newRowAdd);
        });

        $("body").on("click", "#DeleteRow", function() {
            $(this).parents(".tow1").remove();
        })

        $('.number').keypress(function(event) {
            var keycode = event.which;
            if (!(event.shiftKey == false && (keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 &&
                    keycode <= 57)))) {
                event.preventDefault();
            }
        });
    </script>
@endpush
