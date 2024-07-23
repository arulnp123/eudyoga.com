@include('employer/layout.app')
@yield('content')


<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Job Seekers</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="{{ url('candiate_profile') }}">Home</a> / <span>Job Seekers</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Title end -->

    <!-- Page Title start -->
    <div class="pageSearch">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <a href="http://localhost/eudyoga.in/post_job" class="btn"><i
                            class="fa fa-file-text"aria-hidden="true"></i>Post Job</a>

                </div>
                <div class="col-lg-10">
                    <div class="searchform">
                    <form action="" method="post" onsubmit="return load_property(event)">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" value="" class="form-control"
                                    placeholder="Enter Skills or job seeker details" />
                            </div>
                            <div class="col-md-2">
                                <select name="functional_area_id" id="functional_area_id" required class="form-control">
                                    <option value="">Select Functional Area</option>
                                    @foreach ($functional_areas as $key => $functional_areaslist)
                                        <option value="{{ $functional_areaslist->id }}">
                                            {{ $functional_areaslist->functional_area }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="formrow">
                                <select name="state_id" id="stateid" required class="form-control">
                                    <option value="">Select State</option>
                                    @foreach ($states as $key => $statelist)
                                        <option value="{{ $statelist->id }}">{{ $statelist->state_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="formrow">
                                <select name="city_id" id="cityid" required class="form-control">
                                    <option value="">select city </option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="search" class="btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="listpgWraper">
    <div class="container">

        <form action="https://eudyoga.com/job-seekers" method="get">
            <!-- Search Result and sidebar start -->
            <div class="row">
                <div class="col-md-3 col-sm-6">

                    <div class="sidebar">
                        <input type="hidden" name="search" value="" />

                        <!-- Jobs By Country -->
                        <div class="widget">
                            <h4 class="widget-title">Country</h4>
                            <ul class="optionlist view_more_ul">
                                @foreach ($countries as $key => $countrylist)
                                    <li>
                                        <input type="checkbox" name="country" id="{{ $countrylist->id }}"
                                            value="{{ $countrylist->country }}">
                                        <label for="{{ $countrylist->id }}"></label>
                                        {{ $countrylist->country }}
                                    </li>
                                @endforeach
                            </ul>
                            <span class="text text-primary view_more hide_vm" id="country"
                                onclick="country()">View More</span>

                        </div>


                        <!-- Jobs By State -->
                        <div class="widget">
                            <h4 class="widget-title">By State</h4>
                            <ul class="statelistt view_more_ul block">
                                @foreach ($states as $key => $statelist)
                                    <li>
                                        <input type="checkbox" name="state" id="{{ $statelist->id }}"
                                            value="{{ $statelist->state_name }}">
                                        <label for="{{ $statelist->id }}"></label>
                                        {{ $statelist->state_name }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="state"
                                onclick="state()">View More</span>
                        </div>



                        <!-- Jobs By State end-->


                        <!-- Jobs By City -->

                        <div class="widget">
                            <h4 class="widget-title">By City</h4>
                            <ul class="citylistt view_more_ul">
                                @foreach ($cities as $key => $citylist)
                                    <li>
                                        <input type="checkbox" name="citylist" id="{{ $citylist->id }}"
                                            value="{{ $citylist->city }}">
                                        <label for="{{ $citylist->id }}"></label>
                                        {{ $citylist->city }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="city"
                                onclick="city()">View More</span>

                        </div>


                        <!-- Jobs By City end-->

                        <!-- Jobs By Experience -->

                        <div class="widget ">
                            <h4 class="widget-title">By Experiance</h4>
                            <ul class="job_experienceslistt view_more_ul">
                                @foreach ($job_experiences as $key => $job_experienceslist)
                                    <li>
                                        <input type="checkbox" name="job_experience"
                                            id="{{ $job_experienceslist->id }}"
                                            value="{{ $job_experienceslist->job_experience }}">
                                        <label for="{{ $job_experienceslist->id }}"></label>
                                        {{ $job_experienceslist->job_experience }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="job_experience"
                                onclick="job_experience()">View More</span>

                        </div>



                        <!-- Jobs By Experience end -->


                        <!-- Jobs By Career Level -->

                        <div class="widget ">
                            <h4 class="widget-title">By Career Level</h4>
                            <ul class="careerlevell view_more_ul">
                                @foreach ($career_levels as $key => $career_levellist)
                                    <li><input type="checkbox" name="career_level" id="{{ $career_levellist->id }}"
                                            value="{{ $career_levellist->career_level }}">
                                        <label for="{{ $career_levellist->id }}"></label>
                                        {{ $career_levellist->career_level }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="career"
                                onclick="careerlevel()">View More</span>
                        </div>

                        <!-- Jobs By Gender -->
                        <div class="widget ">
                            <h4 class="widget-title"> By Gender</h4>
                            <ul class="genderlistt view_more_ul">
                                @foreach ($genders as $key => $genderlist)
                                    <li>
                                        <input type="checkbox" name="gender" id="{{ $genderlist->id }}"
                                            value="{{ $genderlist->gender }}">
                                        <label for="{{ $genderlist->id }}"></label>
                                        {{ $genderlist->gender }}

                                    </li>
                                @endforeach

                            </ul>
                            <span class="text text-primary view_more hide_vm" id="gender"
                                onclick="gender()">View More</span>
                            </div>

                        <div class="widget ">
                            <h4 class="widget-title"> By Industry</h4>
                            <ul class="industrieslistt view_more_ul">
                                @foreach ($industries as $key => $industrieslist)
                                    <li>
                                        <input type="checkbox" name="industry" id="{{ $industrieslist->id }}"
                                            value="{{ $industrieslist->industry }}">
                                        <label for="{{ $industrieslist->id }}"></label>
                                        {{ $industrieslist->industry }}

                                    </li>
                                @endforeach

                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="industry"
                                onclick="industry()">View More</span>

                        </div>

                        <div class="widget ">
                            <h4 class="widget-title">By Skill</h4>
                            <ul class="job_skillist view_more_ul">
                                @foreach ($job_skills as $key => $job_skilllist)
                                    <li>
                                        <input type="checkbox" name="job_skill" id="{{ $job_skilllist->id }}"
                                            value="{{ $job_skilllist->job_skill }}">
                                        <label for="{{ $job_skilllist->id }}"></label>
                                        {{ $job_skilllist->job_skill }}
                                    </li>
                                @endforeach
                            </ul>
                            <!-- title end -->
                            <span class="text text-primary view_more hide_vm" id="job_skill"
                                onclick="skill()">View More</span>
                        </div>

                        <div class="widget ">
                            <h4 class="widget-title">Jobs By Functional Areas</h4>
                            <ul class="functional_areaslistt view_more_ul">
                                @foreach ($functional_areas as $key => $functional_areaslist)
                                    <li>
                                        <input type="checkbox" name="functional_areas"
                                            id="{{ $functional_areaslist->id }}"
                                            value="{{ $functional_areaslist->functional_area }}">
                                        <label for="{{ $functional_areaslist->id }}"></label>
                                        {{ $functional_areaslist->functional_area }}
                                @endforeach
                            </ul>
                            <span class="text text-primary view_more hide_vm" id="functional_area"
                                onclick="functionalarea()">View More</span>
                        </div>

                        <div class="widget">
                            <h4 class="widget-title">Salary Range</h4>
                            <div class="form-group">
                                <input class="form-control" id="current_salary" placeholder="Current Salary"
                                    name="current_salary" type="number">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="expected_salary" placeholder="Expected Salary"
                                    name="expected_salary" type="number">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="salary_currency" name="salary_currency">
                                    <option value="">Select Salary Currency</option>

                                    <option value="INR" selected="selected">INR</option>
                                </select>
                            </div>
                            <div class="searchnt">
                                <button type="submit" class="btn"><i class="fa fa-search"
                                        aria-hidden="true"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    @if (count($users) > 0)
                        <ul class="searchList">
                            @foreach ($users as $user)
                                <li class="">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-8">
                                            <div class="jobimg"><img src="assets/images/favicon.png">
                                            </div>
                                            <div class="jobinfo">
                                                <h3><a href="job/Relationship%20Manager.html"
                                                        title="Relationship Manager">{{ $user->first_name }}</h3>
                                                <div class="companyName"><a href="company/srinivas-92.html"
                                                        title="Kalyani Motors">{{ $user->street_address }}</a></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-lg-2.5">
                                            <div class="listbtn"><a
                                                    href="{{ url('candiate_profile', $user->id) }}">ViewProfile</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <p>{{ $user->description }}</p> --}}
                                </li>
                            @endforeach

                        </ul>
                    @else
                        <!-- Error 404 Template 1 - Bootstrap Brain Component -->
                        <section class="d-flex justify-content-center align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                                {{-- <span class="display-1 fw-bold h1">4</span> --}}
                                                <!-- <i class="bi bi-exclamation-circle-fill text-danger display-4"></i> -->
                                                <i class="fa fa-exclamation-circle text-danger fa-2x"></i>
                                                {{-- <span class="display-1 fw-bold bsb-flip-h h1">4</span> --}}
                                            </h2>
                                            <h3 class="h2">Oops! </h3>
                                            <p class="mb-3" style="color: red">Sorry No Candidate Profile </p>
                                            <a href="{{ url('employer_index') }}">
                                                <Button class="btn btn-primary">Back</Button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    @endif
                    <li class="pagination float-right mb-5">
                        {{ $users->links() }}
                    </li>

                    {{-- <div class="topstatinfo">
                        Showing Jobs : {{ $users->currentPage() * $users->perPage() }} Total {{ $activeusers }}
                    </div> --}}


                    </li>
                    <!-- job end -->
                    </ul>


        </form>
    </div>
</div>
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
                    <li><a href="contact_us">Contact Us</a></li>
                    <li class="postad"><a href="login.html">Post a Job</a></li>
                    <li><a href="faq">FAQs</a></li>

                    <li class=""><a href="about_us">About Us</a></li>

                    <li class=""><a href="cms/Terms_And_Conditions.html">Terms &amp; Conditions</a></li>

                    <!--<li class=""><a href="cms/Privacy_Policy.html">Privacy Policy</a></li>-->

                    <!--<li class=""><a href="cms/Refund_Policy.html">Refund_Policy</a></li>-->
                    <!--<li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=49">Human Resources</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=68">Manufacturing &amp;
                            Operations</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=17">Client Services &amp; Customer
                            Support

                        </a></li>
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=53">Interior Designers &amp;-->
                    <!--        Architects</a>-->
                    <!--</li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=137">Tele Sale Representative</a>-->
                    <!--</li>-->
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=37">Field Operations</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=112">Retail</a></li>-->
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
                        href="https://eudyoga.comhttp://graphicriver.net/user/ecreativesol" target="_blank">Thousand
                        Vision World Pvt Ltd</a></div>
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
<!-- Bootstrap's JavaScript -->

<script src="https://eudyoga.com/public/js/jquery.min.js"></script>

<script src="https://eudyoga.com/public/js/bootstrap.bundle.min.js"></script>

<script src="https://eudyoga.com/public/js/popper.js"></script>

<!-- Owl carousel -->

<script src="https://eudyoga.com/public/js/owl.carousel.js"></script>

<script src="https://eudyoga.com/public/admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
    type="text/javascript"></script>

<script src="https://eudyoga.com/public/admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js"
    type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->

<script src="https://eudyoga.com/public/admin_assets/global/plugins/select2/js/select2.full.min.js"
    type="text/javascript"></script>

<script src="https://eudyoga.com/public/admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript">
</script>

<!-- Revolution Slider -->

<script type="text/javascript" src="https://eudyoga.com/public/js/revolution-slider/js/jquery.themepunch.tools.min.js">
</script>

<script type="text/javascript"
    src="https://eudyoga.com/public/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js?" async defer></script>



<script>
    $(document).ready(function($) {

        $("form").submit(function() {
            $(this).find(":input").filter(function() {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);

        $(".view_more_ul").each(function() {
            if ($(this).height() > 100) {
                $(this).addClass('hide_vm_ul');
                $(this).next().removeClass('hide_vm');
            }
        });
        $('.view_more').on('click', function(e) {
            e.preventDefault();
            $(this).prev().removeClass('hide_vm_ul');
            $(this).addClass('hide_vm');
        });

    });
</script>

<script>
    var country = [];
    var getfilters = function() {
        console.log(country);
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'candidate_profile',
            data: {
                "country": country,
                "_token": "CSRF token..."
            },
            error: function(e) {
                console.log(e.responseText);
            },
            success: function(data) {
                console.log(data);
                $('#gracebish').html(data)
            }
        });
    };

    $(document).ready(function() {
        $('input[type="checkbox"]').on('change', function(event) {
            event.preventDefault();
            $.each($("input[name='country']:checked"), function() {
                country.push($(this).val());
            });

            $('#myResponse').html();

            getfilters();
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function($) {
        $('#country_id').on('change', function(e) {
            e.preventDefault();
            filterStates(0);
        });
        $(document).on('change', '#state_id', function(e) {
            e.preventDefault();
            filterCities(0);
        });
        filterStates(0);
    });

    function filterStates(state_id) {
        var country_id = $('#country_id').val();
        if (country_id != '') {
            $.post("https://eudyoga.com/filter-states-dropdown", {
                    country_id: country_id,
                    state_id: state_id,
                    _method: 'POST',
                    _token: 'g0Zhxg4qVr2PkobU0uI1pRLp56kx4aXeYIT78Px2'
                })
                .done(function(response) {
                    $('#state_dd').html(response);
                    filterCities(0);
                });
        }
    }

    function filterCities(city_id) {
        var state_id = $('#state_id').val();
        if (state_id != '') {
            $.post("https://eudyoga.com/filter-cities-dropdown", {
                    state_id: state_id,
                    city_id: city_id,
                    _method: 'POST',
                    _token: 'g0Zhxg4qVr2PkobU0uI1pRLp56kx4aXeYIT78Px2'
                })
                .done(function(response) {
                    $('#city_dd').html(response);
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

<script>
    new DataTable('#example', {
        "bLengthChange": false
    });
</script>

<script>
    $(document).ready(function() {
        country();
        state();
        city();
        job_experience();
        careerlevel();
        gender();
        industry();
        skill();
        functionalarea();
    });

    function toggleCheckboxes() {
        var checkboxes = document.querySelectorAll('.optionlistt input[type="checkbox"]');
        var loadBtn = document.getElementById('load');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function country() {
        var checkboxes = document.querySelectorAll('.countrylistt input[type="checkbox"]');
        var loadBtn = document.getElementById('country');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function state() {
        var checkboxes = document.querySelectorAll('.statelistt input[type="checkbox"]');
        var loadBtn = document.getElementById('state');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function city() {
        var checkboxes = document.querySelectorAll('.citylistt input[type="checkbox"]');
        var loadBtn = document.getElementById('city');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function job_experience() {
        var checkboxes = document.querySelectorAll('.job_experienceslistt input[type="checkbox"]');
        var loadBtn = document.getElementById('job_experience');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function careerlevel() {
        var checkboxes = document.querySelectorAll('.careerlevell input[type="checkbox"]');
        var loadBtn = document.getElementById('career');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function gender() {
        var checkboxes = document.querySelectorAll('.genderlistt input[type="checkbox"]');
        var loadBtn = document.getElementById('gender');
        checkboxes.forEach(function(checkbox, index) {
            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function industry() {
        var checkboxes = document.querySelectorAll('.industrieslistt input[type="checkbox"]');
        var loadBtn = document.getElementById('industry');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });

        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function skill() {
        var checkboxes = document.querySelectorAll('.job_skilllistt input[type="checkbox"]');
        var loadBtn = document.getElementById('job_skill');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

    function functionalarea() {
        var checkboxes = document.querySelectorAll('.functional_areaslistt input[type="checkbox"]');
        var loadBtn = document.getElementById('functional_area');

        checkboxes.forEach(function(checkbox, index) {

            if (index >= 5) {
                checkbox.parentNode.style.display = checkbox.parentNode.style.display === 'none' ? 'block' :
                    'none';
            }
        });
        loadBtn.innerText = loadBtn.innerText === 'View More' ? 'View Less' : 'View More';
    };

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
                    $('#cityid').html('<option value="">Select City</option>');
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


        function load_property(e) {
            e.preventDefault();
            var id = 0;
            var type = 0;
            var url = "{{ url('/search') }}";
            var functional_area_id = $("#functional_area_id").val();
            var state_id = $("#state_id").val();
            var city_id = $("#city_id").val();
            url = url + "/" + functional_area_id + "/" + state_id + "/" + city_id;
            window.location.href = url
        }
</script>
</body>
</html>
