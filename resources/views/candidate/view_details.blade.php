@include('employer/layouts_profile.app')
@yield('content')


<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Job Details</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="{{ url('/') }}">Home</a> / <span>Job Details </span></div>
            </div>
        </div>
    </div>
</div>

<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">



        <div class="usercoverimg mb-4">

            <img src="../admin_assets/no-cover.jpg" alt="no images" title="no images">


            <div class="userMaininfo">

                <div class="userPic"><img src="/assets/no-image.jpg" alt="no images" title="no images"></div>

                <div class="title">
                    <h3>{{ $profile1->title }}</h3>
                    <div class="desi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                            <path
                                d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                            <path
                                d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                        </svg><i class="bi bi-building" aria-hidden="true"></i>{{ $profile1->c_name }}





                    </div>

                    {{-- <div class="membersinc"><i class="fa fa-history" aria-hidden="true"></i> Member Since, Dec 14, 2023</div>
						 --}}
                </div>




            </div>


        </div>

        <!-- Buttons -->
        {{-- <div class="userlinkstp">  
                          
                                                
                                 <a href="https://eudyoga.com/unlock/638" class="btn btn-default report"><i class="fa fa-lock" aria-hidden="true"></i> Profile Locked</a>
                <span>Unlock profile to view candidate CV and contact details</span>
                                

            </div> --}}



        <!-- Job Detail start -->
        <div class="row mt-5">
            <div class="col-md-5 mt-3">

                <!-- About Employee start -->
                <div class="job-header">
                    <div class="contentbox">
                        <h3>Job Description</h3>
                        <li class="row">
                            {{-- <div class="col-md-6 col-xs-6">Expected Salary</div> --}}
                            <div class="col-md-12 col-xs-6 ">
                                <p class="h-6">{{ $profile1->description }}</p>
                            </div>
                        </li>

                    </div>

                    {{-- <div class="ptsklbx">
					<h3>Skills</h3>
                    <div id="skill_div"></div>
					</div> --}}

                </div>

                <!-- Profile Video start -->

                <!-- Experience start -->
                {{-- <div class="job-header">
                    <div class="contentbox">
                        <h3>Experience</h3>
                        <div class="" id="experience_div"></div>            
                    </div>
                </div> --}}


            </div>
            <div class="col-md-5">


                <!-- Candidate Detail start -->
                <div class="job-header">
                    <div class="jobdetail">

                        <h3>Job Detail</h3>

                        <ul class="jbdetail">

                            {{-- <li class="row">
                                <div class="col-md-6 col-xs-6">Is Email Verified</div>
                                <div class="col-md-6 col-xs-6"><span>{{ $pro->email}}</span></div>
                            </li> --}}
                            <li class="row">
                                <div class="col-md-6 col-xs-6">Immediate Available</div>
                                <div class="col-md-6 col-xs-6"><span>{{ $profile1->job_experience }}</span></div>
                            </li>

                            <li class="row">
                                <div class="col-md-6 col-xs-6">Job Shift</div>
                                <div class="col-md-6 col-xs-6"><span> {{ $profile1->degree_level }}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">Job Type</div>
                                <div class="col-md-6 col-xs-6"><span>{{ $profile1->job_type }}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">Functional Area</div>
                                <div class="col-md-6 col-xs-6"><span>{{ $profile1->functional_area }}</span></div>
                            </li>
                            {{-- <li class="row">
                                <div class="col-md-6 col-xs-6">Job Skill</div>
                                <div class="col-md-6 col-xs-6"><span>{{$profile1->job_skills}}</span></div>
                            </li> --}}
                            <li class="row">
                                <div class="col-md-6 col-xs-6">Career Level</div>
                                <div class="col-md-6 col-xs-6"><span>{{ $profile1->career_level }}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">Current Salary</div>
                                <div class="col-md-6 col-xs-6"><span>{{ $profile1->salary_from }}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">Expected Salary</div>
                                <div class="col-md-6 col-xs-6"><span>{{ $profile1->salary_to }}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">Do You Want Remove</div>
                                <div class="col-md-6 col-xs-6"><form method="POST" action="{{ route('add_to_favorite') }}">
                                    @csrf
                                    <input type="hidden" name="job_id" id="job_id" value="{{ $id }}">
    
                                    <a onclick="return confirm('Do you want to Confirm delete operation?')"
                                        href="{{ url('/delete_fav_job', $profile1->id) }}"><button type="submit"
                                            class="btn btn-danger">Remove Favorite</button></a>
                                </form></div>
                            </li>
                        </ul>

                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success text-bg-success border-none">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <!-- Education start -->
                <div class="job-header">
                    <div class="contentbox">
                        <h3>Education</h3>
                        <div class="" id="education_div"></div>
                    </div>
                </div>

                <div class="job-header">
                    <div class="jobdetail">
                        <h3>Languages</h3>
                        <div id="language_div"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Portfolio start -->
        {{-- <div class="job-header">
			<div class="contentbox">
				<h3>Portfolio</h3>
				<div class="" id="projects_div"></div>            
			</div>
		</div>
		 --}}

    </div>
</div>
<div class="modal fade" id="sendmessage" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="" id="send-form">
                <input type="hidden" name="_token" value="R1qYQw2N5htyX5APvAkCtz2coVtt316fpjdugwD3"> <input
                    type="hidden" name="seeker_id" id="seeker_id" value="638">
                <div class="modal-header">
                    <h4 class="modal-title">Send Message</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" cols="10" rows="7"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
<div class="largebanner shadow3">
    <div class="adin">
        <img src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">.
    </div>
    <div class="clearfix"></div>
</div>
{{-- //footer start --}}
<div class="footerWrap">
    <div class="container">
        <div class="row">

            <!--Quick Links-->
            <div class="col-md-3 col-sm-6">
                <h5>Quick Links</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li class="postad"><a href="login.html">Post a Job</a></li>
                    <li><a href="faq">FAQs</a></li>

                    <li class=""><a href="cms/about-us.html">About Us</a></li>

                    <li class=""><a href="cms/Terms_And_Conditions.html">Terms &amp; Conditions</a></li>

                    <!--<li class=""><a href="cms/Privacy_Policy.html">Privacy Policy</a></li>-->

                    <!--<li class=""><a href="cms/Refund_Policy.html">Refund_Policy</a></li>-->
                    <!--                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="jobsc39a.html?functional_area_id%5B%5D=118">Sales</a></li>
                    <li><a href="jobsa6eb.html?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>
                    <li><a href="jobs6e73.html?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial
                            Services</a></li>
                    <li><a href="jobsd4f3.html?functional_area_id%5B%5D=112">Retail</a></li>
                    <li><a href="jobs8a2b.html?functional_area_id%5B%5D=137">Tele Sale Representative</a></li>
                    <li><a href="jobs5354.html?functional_area_id%5B%5D=37">Field Operations</a></li>
                    <!--<li><a href="jobsa0ca.html?functional_area_id%5B%5D=127">SMO</a></li>-->
                    <!--<li><a href="jobs875a.html?functional_area_id%5B%5D=23">Creative Design</a></li>-->
                    <!--<li><a href="jobs222d.html?functional_area_id%5B%5D=1">Accountant</a></li>-->
                    <!--<li><a href="jobs073c.html?functional_area_id%5B%5D=53">Interior Designers &amp; Architects</a></li>-->
                </ul>
            </div>

            <div class="col-md-3 col-sm-12">
                <h5>Jobs By Industry</h5>
                <ul class="quicklinks">
                    <li><a href="#">BCS</a></li>
                    <li><a href="#">Siddhran
                        </a></li>
                    <li><a href="#">Recrument </a></li>
                    <li><a href="#">Pragna solution</a>
                    </li>
                    <li><a href="#">Arul Rubbers pvt ltd</a></li>
                    <li><a href="#">Kalyani Moters</a></li>

                </ul>
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
                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube-square"
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
                <div class="bttxt">Copyright &copy; 2023 E-Udyoga. All Rights Reserved. Design by: <a
                        href="https://npgroups.com/" target="_blank">npgroups</a></div>
            </div>
            <!--<div class="col-md-4">-->
            <!--    <div class="paylogos"><img src="{{ URL::to('/') }}/assets/images/payment-icons.png" alt="" /></div>	-->
            <!--</div>-->
        </div>

    </div>
</div>
<script src="../cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false"
    data-turbo-eval="false"></script>
<!-- Bootstrap's JavaScript -->

<script src="{{ URL::to('/') }}/assets/js/jquery.min.js"></script>

<script src="{{ URL::to('/') }}/assets/js/bootstrap.bundle.min.js"></script>

<script src="{{ URL::to('/') }}/assets/js/popper.js"></script>

<!-- Owl carousel -->

<script src="{{ URL::to('/') }}/assets/js/owl.carousel.js"></script>

<script
    src="{{ URL::to('/') }}/assets/admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
    type="text/javascript"></script>

<script src="{{ URL::to('/') }}/assets/admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js"
    type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->

<script src="{{ URL::to('/') }}/assets/admin_assets/global/plugins/select2/js/select2.full.min.js"
    type="text/javascript"></script>

<script src="{{ URL::to('/') }}/assets/admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript">
</script>

<!-- Revolution Slider -->

<script type="text/javascript" src="{{ URL::to('/') }}/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js">
</script>

<script type="text/javascript"
    src="{{ URL::to('/') }}/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<script src="../unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>

<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<script src="../www.google.com/recaptcha/apid41d.js?" async defer></script>



<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', '#send_subscription_form', function() {
            var postData = $('#subscribe_newsletter_form').serialize();
            $.ajax({
                type: 'POST',
                url: "https://eudyoga.com/subscribe-newsletter",
                data: postData,
                //dataType: 'json',
                success: function(data) {
                    response = JSON.parse(data);
                    var res = response.success;
                    if (res == 'success') {
                        var errorString = '<div role="alert" class="alert alert-success">' +
                            response.message + '</div>';
                        $('#alert_messages').html(errorString);
                        $('#subscribe_newsletter_form').hide('slow');
                        $(document).scrollTo('.alert', 2000);
                    } else {
                        var errorString =
                            '<div class="alert alert-danger" role="alert"><ul>';
                        response = JSON.parse(data);
                        $.each(response, function(index, value) {
                            errorString += '<li>' + value + '</li>';
                        });
                        errorString += '</ul></div>';
                        $('#alert_messages').html(errorString);
                        $(document).scrollTo('.alert', 2000);
                    }
                },
            });
        });
    });
</script>

<script>
    $(document).ready(function($) {
        $("form").submit(function() {
            $(this).find(":input").filter(function() {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);
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
            $.post("filter-states-dropdown.html", {
                    country_id: country_id,
                    state_id: state_id,
                    _method: 'POST',
                    _token: 'wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8'
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
            $.post("filter-cities-dropdown.html", {
                    state_id: state_id,
                    city_id: city_id,
                    _method: 'POST',
                    _token: 'wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8'
                })
                .done(function(response) {
                    $('#city_dd').html(response);
                });
        }
    }
</script>
<!-- Custom js -->

<script src="public/js/script.js"></script>

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

</body>




<!-- Mirrored from eudyoga.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Dec 2023 04:35:00 GMT -->

</html>
