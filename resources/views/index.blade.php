@include('layouts.app')

@yield('content')
<?php $page = 'home'; ?>
<div class="searchwrap">
    <div class="container">

        <div class="row">
            <div class="col-lg-7">

                <h3>One million success job stories. <span>Start yours today.</span></h3>

                <!--<div class="searchbar">-->
                <!--    <form action="#" method="get">-->

                <!--        <div class="input-group">-->
                <!--            <input type="text" name="search" id="jbsearch" value="" class="form-control"-->
                <!--                placeholder="Enter Skills or job title" autocomplete="off" />-->

                <!--            <select class="form-control" id="functional_area_id" name="functional_area">-->
                <!--                <option value="" selected>Select Functional Area</option>-->
                <!--                @foreach ($functional_area as $functional_area_list)-->
                <!--                    <option value="{{ $functional_area_list->functional_area }}">-->
                <!--                        {{ $functional_area_list->functional_area }}</option>-->
                <!--                        @endforeach-->
                <!--            </select>-->
                            
                <!--            <button type="submit" class="btn"><i class="fas fa-search"></i></button>-->
                <!--        </div>-->
                <!--    </form>-->
                <!--</div>-->
                
                <form action="{{url('index_search')}}" method="get">
    @csrf
                <div class="searchform">
                        <div class="input-group">
                            <input type="text" name="search" id="jbsearch" value="" class="form-control "
                                placeholder="Enter Skills or job title" autocomplete="off" />
                   
                                <button type="submit" class="btn"><i class="fas fa-search"></i></button></a>
                        </div>
                    </div>

</form>


                <div class="popularind">
                    <h4>Popular Industries</h4>
                    <ul class="hmindlist">
                        <li><a href="https://eudyoga.com/jobs?industry_id%5B%5D=8"
                                title="Accounting/Taxation">Accounting/Taxation</a></li>
                    </ul>
                </div>



                <div class="statsbox">
                    <div class="row">
                        <div class="col">
                            <div class="statint d-flex">
                                <div class="statico"><i class="fas fa-briefcase"></i></div>
                                <div class="statinfo">
                                    <h4>{{ $activejobs }}</h4>
                                    <p>Active Jobs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="statint d-flex">
                                <div class="statico"><i class="fas fa-building"></i></div>
                                <div class="statinfo">
                                    <h4>{{ $activecompanies }}</h4>
                                    <p>Active Companies </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="statint d-flex">
                                <div class="statico"><i class="fas fa-users"></i></div>
                                <div class="statinfo">
                                    <h4>{{ $activecandidates }}</h4>
                                    <p>Candidates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-5">
                <div class="searchtpimg"><img src="https://eudyoga.com/assets/images/recruiting.png" alt="">
                </div>
            </div>
        </div>



    </div>
</div>

<!-- Search End -->
<!-- Top Employers start -->
<div class="section">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <h3>Featured Companies</h3>
        </div>
        <!-- title end -->

        <div class="container">
            {{-- <div class="topstatinfo">
                Showing Jobs : 1 -  {{ $companies_count }}
            </div> --}}
            <ul class="row compnaieslist">

                @foreach ($featured_companies as $featured_companies_list)
                    <li class="col-lg-3 col-md-6">
                        <div class="empint">
                            <a href="{{ url('featured_companies',$featured_companies_list->id) }}" title="Galaxy Technology">
                                <div class="emptbox">
                                    <div class="comimg"><img src="assets/images/favicon.png">
                                    </div>
                                    <div class="text-info-right">
                                        <h4>{{ $featured_companies_list->c_name }}</h4>
                                      <div class="emloc"><i class="fas fa-map-marker-alt"></i>
                                            {{ $featured_companies_list->location }}</div> 
                                    </div>

                                </div>

                                 <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i>
                                 {{ $featured_companies_list->opening_jobs }} Open Jobs
                                </div>
                            </a>
                        </div>

                    </li>
                @endforeach
 



            </ul>
            {{-- <li class="pagination float-right">
                {{ $favourites_company_list->links() }}
            </li> --}}

            {{-- <div class="topstatinfo">
                Showing Jobs : 1 - {{ $favourites_company_num }}
            </div> --}}


        </div>

        {{-- <ul class="employerList owl-carousel" data-group-item="2">
            employer

         >--   @foreach ($favourites_company as $favourites_company_list)
                <li class="item-child" data-number="113">

                    <div class="empint">
                        <a href="https://eudyoga.com/company/anil-kumar-113" title="">
                            <div class="emptbox">
                                <div class="comimg"><img src="https://eudyoga.com/public/admin_assets/no-image.png"
                                        alt="ANIL KUMAR" title="ANIL KUMAR"></div>
                                <div class="text-info-right">
                                    <h4>{{ $favourites_company_list->company_slug }}</h4>
                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> Bengaluru</div>
                                </div>

                            </div>
                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 3 Open Jobs</div>
                        </a>
                    </div>
                </li>
            @endforeach -->

        </ul> --}}

        {{-- <li class="pagination float-right">
            {{ $favourites_company->links() }}
        </li> --}}

        {{-- <div class="topstatinfo">
            Showing Jobs : 1 -  {{ $companies_count }}
        </div> --}}
    </div>


    <div class="largebanner shadow3">
        <div class="adin">
            <img src="https://eudyoga.com/assets/images/banner1.jpg">.
        </div>
        <div class="clearfix"></div>
    </div>



</div><!-- Top Employers ends -->
<!-- Popular Searches start -->
<div class="section greybg">
    <div class="container">
        <div class="topsearchwrap">

            <h3>Browse Jobs By Functional Area</h3>

            <div class="srchint">
                <ul class="row catelist">

                    <li class="col-md-4 col-sm-6"><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=137"
                            title="Tele Sale Representative">Tele Sale Representative <span>(3)</span></a>
                    </li>


                    <li class="col-md-4 col-sm-6"><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118"
                            title="Sales">Sales <span>(1)</span></a>
                    </li>


                    <li class="col-md-4 col-sm-6"><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2"
                            title="Accounts, Finance &amp; Financial Services">Accounts, Finance &amp; Financial
                            Services <span>(1)</span></a>
                    </li>


                    <li class="col-md-4 col-sm-6"><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=13"
                            title="Business Development">Business Development <span>(1)</span></a>
                    </li>


                    <li class="col-md-4 col-sm-6"><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23"
                            title="Creative Design">Creative Design <span>(1)</span></a>
                    </li>

                </ul>
                <!--Categories end-->
            </div>




        </div>
    </div>
</div><!-- Popular Searches ends -->
<!-- Featured Jobs start -->
<!--<div class="section">-->
<!--    <div class="container">-->
<!--         title start -->
<!--        <div class="titleTop">-->
<!--            <h3>Featured <span>Jobs</span></h3>-->
<!--        </div>-->
<!--         title end -->

<!--        Featured Job start-->
<!--        <ul class="featuredlist row">-->

<!--        </ul>-->
<!--        Featured Job end-->

<!--        button start-->
<!--        <div class="viewallbtn"><a href="{{url('featured_jobs')}}">View All Featured Jobs</a></div>-->
<!--        button end-->
<!--    </div>-->
<!--</div>Featured Jobs ends-->
<!-- Login box start -->
<div class="userloginbox">
    <div class="container">
        <div class="titleTop">
            <h3>Are You Looking For Job! </h3>
        </div>
        <p>More than a million members trust us for exclusive job listings. We take the next level for you to get the
            best opportunity and an exciting career. Sign up now and upload your details to get picked by the best
            companies. It is a one-door step away to reach your success with the best salary package.</p>

        <div class="viewallbtn"><a href="{{ url('candidate_register') }}"> Get Started Today </a></div>
    </div>
</div>
<!-- Login box ends -->
<!-- How it Works start -->
<div class="container">
    <div class="section howitwrap">

        <!-- title start -->
        <div class="titleTop">
            <h3>How It <span>Works</span></h3>
        </div>
        <!-- title end -->
        <ul class="howlist row">
            <!--step 1-->
            <li class="col-md-4 col-sm-4">
                <div class="iconcircle"><i class="fas fa-user" aria-hidden="true"></i>
                </div>
                <h4>Create An Account</h4>
                <p>A few simple steps would make wonder for you. It will take a few minutes to upload your details and
                    create your profile with us. Sign up with your email address and contact number and get notified by
                    the leading organizations. Highlight your education qualification, work experience, and the skills
                    that you got..</p>
            </li>
            <!--step 1 end-->
            <!--step 2-->
            <li class="col-md-4 col-sm-4">
                <div class="iconcircle"><i class="fab fa-black-tie" aria-hidden="true"></i>
                </div>
                <h4>Search Desired Job</h4>
                <p>Browse our portal and get your dream job with one click. More than a million employers are registered
                    with us. Candidates can search by job location, function, and experience level. Your search will
                    create the ultimate browsing for your dream job. Apply for the positions according to your skills
                    and highlight your top attributes. We got the best taxonomy to search from thousands of Job
                    postings..</p>
            </li>
            <!--step 2 end-->
            <!--step 3-->
            <li class="col-md-4 col-sm-4">
                <div class="iconcircle"><i class="fas fa-file-text" aria-hidden="true"></i>
                </div>
                <h4>Send Your Resume</h4>
                <p>Get the best match and send your resume to the top employers in one click. A few steps will make you
                    notified by the best companies. You can send your resume directly to the employers and check the
                    status of your job application..</p>
            </li>
            <!--step 3 end-->
        </ul>
    </div>
</div><!-- How it Works Ends -->
<!-- Latest Jobs start -->
<!-- Latest Jobs ends -->
<!-- Testimonials start -->
<div class="section testimonialwrap">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <div class="subtitle">Testimonials</div>
            <h3>Success <span>Stories</span></h3>
        </div>
        <!-- title end -->

        <ul class="testimonialsList owl-carousel">
        </ul>
    </div>
</div><!-- Testimonials End -->
<!-- Top Cities start -->
<div class="section citieswrap">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <h3>Jobs by Cities</h3>
        </div>
        <!-- title end -->
        <div class="srchint">
            <ul class="row citiessrchlist">
            </ul>
            <!--Cities end-->
        </div>
    </div>
</div><!-- Top Cities End -->
<!-- Video start -->
<!-- Video end -->
<!-- Login box start -->
<div class="emploginbox">
    <div class="container">
        <div class="titleTop">
            <div class="subtitle">Are You Looking For Candidates!</div>
            <h3>Post a Job Today </h3>
            <h4>and hire the right Candidates</h4>
        </div>
        <p>We got the best professionals as they choose Eudyoga for the next step in their careers. The comprehensive
            job application service and highlights of the candidate's requirements would help the employers to find the
            right choice. We provide in-depth knowledge about our candidates that make the Employers easy to find their
            candidates. A few clicks would help you to browse more than a million profiles and be a one-stop solution
            for your placement cell. Browse the right candidate according to the skill that you are looking for. We got
            more than a million profiles in our database that will help your organization to find the right choice.</p>
        <div class="viewallbtn"><a href="{{ url('candidate_register') }}">Post a Job</a></div>
    </div>
</div>
<!-- Login box ends -->
<!-- Testimonials start -->
<!-- Testimonials End -->
<!-- Subscribe start -->
<div class="container">
    <div class="subscribe">

        <h6>Newsletter</h6>
        <p>Subscribe to our newsletter and stay updated.</p>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div id="alert_messages"></div>
                <form method="post" action="https://eudyoga.com/subscribe-newsletter"
                    name="subscribe_newsletter_form" id="subscribe_newsletter_form">
                    <input type="hidden" name="_token" value="Yc3cFKsRoWzZ7gOmEA5NXwE1opUQmqHthuZSlZsT">



                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                            required="required">
                        <input type="text" class="form-control" placeholder="Email" name="email"
                            id="email" required="required">
                        <div class="input-group-append">
                            <button class="btn btn-default" type="button"
                                id="send_subscription_form">Subscribe</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

<!--<div class="section greybg">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 align-center"></div>
    <div class="col-md-1"></div>
  </div>
</div>-->
<!--Footer-->
<div class="largebanner shadow3">
    <div class="adin">
        <img src="https://eudyoga.com/assets/images/banner1.jpg">.
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
                    <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
                    <li><a href="https://eudyoga.com/faq">FAQs</a></li>

                    <li class=""><a href="about_us">About Us</a></li>

                    <li class=""><a href="https://eudyoga.com/cms/Terms_And_Conditions">Terms &amp;
                            Conditions</a></li>

                    <!--<li class=""><a href="https://eudyoga.com/cms/Privacy_Policy">Privacy Policy</a></li>-->

                    <!--<li class=""><a href="https://eudyoga.com/cms/Refund_Policy">Refund_Policy</a></li>-->
                    <!--<li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial
                            Services</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118">Sales</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=13">Business Development</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=68">Manufacturing &amp;
                            Operations</a></li>
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=53">Interior Designers &amp;-->
                    <!--        Architects</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=37">Field Operations</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
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
                    <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
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
            $.post("https://eudyoga.com/filter-states-dropdown", {
                    country_id: country_id,
                    state_id: state_id,
                    _method: 'POST',
                    _token: 'Yc3cFKsRoWzZ7gOmEA5NXwE1opUQmqHthuZSlZsT'
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
                    _token: 'Yc3cFKsRoWzZ7gOmEA5NXwE1opUQmqHthuZSlZsT'
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
        
        
        <script type="text/javascript">
$('#jbsearch').on('keyup',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('searchindex')}}',
data:{'search':$value},
success:function(data){
    console.log(data);
$('.searchList').html(data);
}
});
})
</script>


<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>