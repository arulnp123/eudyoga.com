@include('employer/layouts_index.app')

@yield('content')

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissable" style="margin: 15px;">
        <a href="#" style="color:white !important" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong> {{ session('success') }} </strong>
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
        <a href="#" style="color:white !important" class="close" data-dismiss="alert"
            aria-label="close">&times;</a>
        <strong> {{ session('error') }} </strong>
    </div>
@endif

<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="userccount">
                <div class="formpanel mt-0">
                    <!-- Personal Information -->
                    <h5>Job Details</h5>
                    <form action="{{ url('/upload_post_job') }}" method="post">
                        @csrf
                        <input type="hidden" class="form-control" value="" id="id" name="id">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="formrow "> <input class="form-control" id="title"
                                        placeholder="Job title" name="title" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="formrow ">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="description" placeholder="Job description" name="description" cols="50"
                                        rows="10" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="formrow ">
                                    <label for="">Benefits</label>
                                    <textarea class="form-control" id="benefits" placeholder="Job Benefits" name="benefits" cols="50" rows="10"
                                        required></textarea>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="formrow ">
                                    <label for="">Skills</label>
                                    <select class="form-control select2-multiple" id="skills" name="job_skill_id"
                                        required>
                                        <option value="1">Select Skills</option>
                                        @foreach ($get_job_skills as $job_skills_list)
                                            <option value="{{ $job_skills_list->job_skill_id }}">
                                                {{ $job_skills_list->job_skill }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow " id="country_id_div"> <select class="form-control" id="country_id"
                                        name="country_id" required>
                                        <option value="">Select Country</option>
                                        @foreach ($country as $country_list)
                                            <option selected="selected" value="{{ $country_list->id }}">
                                                {{ $country_list->country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow " id="state_id_div"> <span id="default_state_dd"> <select
                                            name="state_id" id="stateid" required class="form-control" required>
                                            <option value="">Select State</option>
                                            @foreach ($states as $key => $statelist)
                                                <option value="{{ $statelist->id }}">{{ $statelist->state_name }}</option>
                                            @endforeach
                                        </select> </span> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="formrow " id="city_id_div"> <span id="default_city_dd"> <select
                                            name="city_id" id="cityid" required class="form-control" required>
                                        </select> </span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="salary_from_div"> <input class="form-control" id="salary_from"
                                        placeholder="Salary from" name="salary_from" type="number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="salary_to_div">
                                    <input class="form-control" id="salary_to" placeholder="Salary to" name="salary_to"
                                        type="number" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="formrow " id="salary_period_id_div"> <select class="form-control"
                                        id="salary_period_id" name="salary_period_id" required>
                                        <option value="" selected="selected">Select Salary Period</option>
                                        @foreach ($get_salary_periods as $salary_periods_list)
                                            <option value="{{ $salary_periods_list->salary_period_id }}">
                                                {{ $salary_periods_list->salary_period }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow "> <label for="hide_salary" class="bold">Hide Salary?</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input id="hide_salary_yes" name="hide_salary" type="radio"
                                                value="1" required>
                                            Yes </label>
                                        <label class="radio-inline">
                                            <input id="hide_salary_no" name="hide_salary" type="radio"
                                                value="0" checked=&quot;checked&quot; required>
                                            No </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="career_level_id_div"> <select class="form-control"
                                        id="career_level_id" name="career_level_id" required>
                                        <option value="" selected="selected">Select Career level</option>
                                        @foreach ($get_career_levels as $get_career_levels_list)
                                            <option value="{{ $get_career_levels_list->career_level_id }}">
                                                {{ $get_career_levels_list->career_level }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="formrow " id="functional_area_id_div"> <select class="form-control"
                                        id="functional_area_id" name="functional_area_id" required>
                                        <option value="" selected="selected">Select Functional Area</option>
                                        @foreach ($get_functional_areas as $functional_areas_list)
                                            <option value="{{ $functional_areas_list->functional_area_id }}">
                                                {{ $functional_areas_list->functional_area }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="job_type_id_div"> <select class="form-control"
                                        id="job_type_id" name="job_type_id" required>
                                        <option value="" selected="selected">Select Job Type</option>
                                        @foreach ($get_job_types as $job_types_list)
                                            <option value="{{ $job_types_list->job_type_id }}">
                                                {{ $job_types_list->job_type }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="job_shift_id_div"> <select class="form-control"
                                        id="job_shift_id" name="job_shift_id" required>
                                        <option value="" selected="selected">Select Job Shift</option>
                                        @foreach ($get_job_shifts as $job_shifts_list)
                                            <option value="{{ $job_shifts_list->job_shift_id }}">
                                                {{ $job_shifts_list->job_shift }}</option>
                                        @endforeach

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="num_of_positions_div"> <select class="form-control"
                                        id="num_of_positions" name="num_of_positions" required>
                                        {{-- <option value="" selected="selected">Select number of Positions</option>
                                        <option value="1">1</option> --}}

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="gender_id_div"> <select class="form-control"
                                        id="gender_id" name="gender_id" required>
                                        <option value="" selected="selected">No preference</option>
                                        @foreach ($get_genders as $get_genders_list)
                                            <option value="{{ $get_genders_list->gender_id }}">
                                                {{ $get_genders_list->gender }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow "> <input class="form-control datepicker" id="expiry_date"
                                        placeholder="Job expiry date" autocomplete="off" name="expiry_date"
                                        type="date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="degree_level_id_div"> <select class="form-control"
                                        id="degree_level_id" name="degree_level_id" required>
                                        <option value="" selected="selected">Select Required Degree Level
                                        </option>
                                        @foreach ($get_degree_levels as $degree_levels_list)
                                            <option value="{{ $degree_levels_list->degree_level_id }}">
                                                {{ $degree_levels_list->degree_level }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow " id="job_experience_id_div"> <select class="form-control"
                                        id="job_experience_id" name="job_experience_id" required>
                                        <option value="" selected="selected">Select Required job experience
                                        </option>
                                        @foreach ($get_job_experiences as $job_experiences_list)
                                            <option value="{{ $job_experiences_list->job_experience_id }}">
                                                {{ $job_experiences_list->job_experience }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formrow "> <label for="is_freelance" class="bold">Is Freelance?</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input id="is_freelance_yes" name="is_freelance" type="radio"
                                                value="1" required>
                                            Yes </label>
                                        <label class="radio-inline">
                                            <input id="is_freelance_no" name="is_freelance" type="radio"
                                                value="0" checked=&quot;checked&quot; required>
                                            No </label>
                                    </div>
                                </div>
                                <hr />
                            </div>
                            <div class="row" style="margin-left:3px; margin-right:3px">
                                <div class="col-md-12 mb-3">
                                    <input type="checkbox" class="check_hr_details" name="hr_details" value="1"
                                        required />
                                    <span style="font-size:15px; " class="mb-2"><b>HR Details</b></span>
                                </div>
                                <div class="row d-none" id="hr_details" style="padding-left:15px;padding-right:15px">
                                    <div class="col-md-6">

                                        <div class="formrow "> <input class="form-control" id="company_name" disabled
                                                placeholder="Compnay Name" name="name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow "> <input class="form-control" id="hr_recruiter_name"
                                                disabled placeholder="HR Recruiter Name" name="ceo"
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow "> <input class="form-control" id="mobile" disabled
                                                placeholder="Mobile Number" name="phone" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow "> <input class="form-control" disabled id="alt_number"
                                                placeholder="Alternate Number" name="alternate_phone" type="text"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow "> <input class="form-control" id="email" disabled
                                                placeholder="Email" name="email" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="formrow "> <input class="form-control" id="alt_email" disabled
                                                placeholder="Alternate Email" name="alt_email" type="text"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="formrow ">
                                            <label for="">Address</label>
                                            <textarea class="form-control" disabled id="address" placeholder="Address" name="location" cols="50"
                                                rows="10" required></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="formrow">
                                    <input type="submit" class="btn"></input>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="image" id="image" style="display:none;"
                            accept="image/*" />


                        <script>
                            $('#stateid').on('change', function() {
                                var state_id = this.value;
                                $("#cityid").html('');
                                $.ajax({
                                    url: "{{ url('/getcity') }}",
                                    type: "POST",
                                    data: {
                                        state_id: state_id,
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
                            $(document).ready(function() {
                                $(".txtOnly").keypress(function(e) {
                                    var key = e.keyCode;
                                    if (key >= 48 && key <= 57) {
                                        e.preventDefault();
                                    }
                                });
                            });
                        </script>

                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>



<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">




            <!--Footer-->
            <div class="largebanner shadow3">
                <div class="adin">
                    <img src="https://eudyoga.com/public/assets/images/banner1.jpg">.
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
                                <li><a href="contact_s">Contact Us</a></li>
                                <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
                                <li><a href="https://eudyoga.com/faq">FAQs</a></li>

                                <li class=""><a href="https://eudyoga.com/cms/about-us">About Us</a></li>

                                <li class=""><a href="https://eudyoga.com/cms/Terms_And_Conditions">Terms &amp;
                                        Conditions</a></li>

                                <!--<li class=""><a href="https://eudyoga.com/cms/Privacy_Policy">Privacy Policy</a></li>-->

                                <!--<li class=""><a href="https://eudyoga.com/cms/Refund_Policy">Refund_Policy</a></li>-->
                                <!--                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                            </ul>
                        </div>
                        <!--Quick Links menu end-->

                        <div class="col-md-3 col-sm-6">
                            <h5>Jobs By Functional Area</h5>
                            <!--Quick Links menu Start-->
                            <ul class="quicklinks">
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance
                                        &amp; Financial Services</a></li>
                                <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp;
                                        Business Development</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=137">Tele Sale
                                        Representative</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a>
                                </li>
                                <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=49">Human Resources</a></li>-->
                                <li><a
                                        href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a>
                                </li>
                                <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=112">Retail</a></li>-->
                                <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=37">Field Operations</a></li>-->
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems
                                        Analyst</a></li>
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
                            <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022
                                India</div>

                            <!-- Social Icons -->
                            <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067"
                                    target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/e_udyoga" target="_blank"><i
                                        class="fab fa-twitter-square" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/eudyoga/" target="_blank"><i
                                        class="fab fa-instagram" aria-hidden="true"></i></a>
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
                                    href="https://eudyoga.comhttp://graphicriver.net/user/ecreativesol"
                                    target="_blank">Thousand Vision World Pvt Ltd</a></div>
                        </div>
                        <div class="col-md-4">
                            <div class="paylogos"><img src="https://eudyoga.com/public/images/payment-icons.png"
                                    alt="" /></div>
                        </div>
                    </div>

                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false"
                data-turbo-eval="false"></script>
            <script type="text/javascript">
                function deleteJob(id) {
                    var msg = 'Are you sure?';
                    if (confirm(msg)) {
                        $.post("https://eudyoga.com/delete-front-job", {
                                id: id,
                                _method: 'DELETE',
                                _token: 'GUz5XVNZtKktXlFw5QeDuFkeYNz73WoQVzb8ABCj'
                            })
                            .done(function(response) {
                                if (response == 'ok') {
                                    $('#job_li_' + id).remove();
                                } else {
                                    alert('Request Failed!');
                                }
                            });
                    }
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
