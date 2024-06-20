@include('user/layouts.app')
@yield('content')

<div class="container">
    <div class="pageSearch">
       <div class="row">
            <div class="col-lg-7">
                <h3 class="mb-1">Browse Companies.</h3>
                <h5 class="mb-3">Get hired in most high rated companies.</h5>

                <section id="joblisting-header" role="search" class="searchform">

                    <form id="top-search" method="get" action="{{ url('/company_search') }}">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="search" id="search"  value="" class="form-control"
                                placeholder="keywords e.g. &quot;eudyoga&quot;" />
                            <button type="submit" id="submit-form-top" class="btn"><i class="fa fa-search"
                                    aria-hidden="true"></i> Search Company</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="listpgWraper">
    <div class="container">
        <div class="topstatinfo">
            Showing Jobs : 1 -  {{ $companies_count }}
        </div>
        <ul class="row compnaieslist">
            @foreach ($companies as $companies_list)
                 <li class="col-lg-3 col-md-6">
                    <div class="empint">
                        <a href="{{ url('company_public_profile', $companies_list->id) }}" title="Galaxy Technology">
                            <div class="emptbox">
                                <div class="comimg"><img
                                        src="assets/no-image.jpg">
                                </div>
                                <div class="text-info-right">
                                    <h4>{{ $companies_list->c_name }}</h4>
                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i>
                                        {{ $companies_list->location }}</div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <div class="btn"><a
                                        href="{{ url('company_public_profile', $companies_list->id) }}"><i
                                            class="fas fa-briefcase"></i> 	{{$companies_list->availed_jobs_quota}} Open Jobs</a>
                                </div>
                            </div>
                            {{-- <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 0 Open Jobs</div> --}}
                        </a>
                    </div>

                </li>
            @endforeach

        </ul>
        <li class="pagination float-right">
            {{ $companies->links() }}
        </li>

        <div class="topstatinfo">
            Showing Jobs : 1 -  {{ $companies_count }}
        </div>
    </div>
</div>

<!--Footer-->
<div class="largebanner shadow3">
    <div class="jobint text-center"><img src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">.</div>
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
                    <!--                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                                                            <li><a href="jobs6e73.html?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>
                                        <li><a href="jobs073c.html?functional_area_id%5B%5D=53">Interior Designers &amp; Architects</a></li>
                                        <li><a href="jobs3de1.html?functional_area_id%5B%5D=17">Client Services &amp; Customer Support</a></li>
                                        <!--<li><a href="jobsa6eb.html?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>-->
                                        <li><a href="jobs222d.html?functional_area_id%5B%5D=1">Accountant</a></li>
                                        <!--<li><a href="jobsa0ca.html?functional_area_id%5B%5D=127">SMO</a></li>-->
                                        <li><a href="jobs14fd.html?functional_area_id%5B%5D=68">Manufacturing &amp; Operations</a></li>
                                        <!--<li><a href="jobsd4f3.html?functional_area_id%5B%5D=112">Retail</a></li>-->
                                        <!--<li><a href="jobsc39a.html?functional_area_id%5B%5D=118">Sales</a></li>-->
                                        <li><a href="jobs099f.html?functional_area_id%5B%5D=13">Business Development</a></li>
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



            <div class="col-md-3 col-sm-12">
                <h5>Contact Us</h5>
                <div class="phone"> <a href="tel:+91 888-444-2936">+91 888-444-2936</a></div>
                <div class="email"> <a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a> </div>
                <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022 India</div>

                <!-- Social Icons -->
                <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
<a href="https://twitter.com/e_udyoga" target="_blank"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
<a href="https://www.instagram.com/eudyoga/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
 <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
</div>
                <!-- Social Icons end -->

            </div>


        </div>
    </div>
</div>






<script type="text/javascript">
$('#search').on('keyup',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('searchcompany')}}',
data:{'search':$value},
success:function(data){
    console.log(data);
$('.compnaieslist').html(data);
}
});
})
</script>


<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
