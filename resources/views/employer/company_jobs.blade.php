@include('employer/layouts_index.app')
@yield('content')

<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="col-lg-9">
                <div class="myads">
                    <h3>Company Posted Jobs</h3>
                    @if (session()->has('success'))
                        <div class="alert alert-success text-bg-success border-none">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (count($jobDetail) > 0)

                        <ul class="searchList ">
                            @foreach ($jobDetail as $jobDetail_list)
                                <li>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="jobimg"><img src="assets/no-image.jpg" alt="MSBP  ZONE"
                                                    title="MSBP  ZONE"></div>
                                            <div class="jobinfo">
                                                <h3><a href="https://eudyoga.com/job/Urgent%20Requirement%20%20Account%20Executive"
                                                        title="Urgent Requirement  Account Executive">{{ $jobDetail_list->title }}</a>
                                                </h3>
                                                <div class="content">
                                                    <p class="more">{{ $jobDetail_list->description }}</p>
                                                </div>
                                                <div class="location">
                                                    <label class="fulltime"
                                                        title="First Shift (Day)">{{ $jobDetail_list->job_shift }}</label>
                                                    - <span>{{ $jobDetail_list->city }}</span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn-primary me-2"
                                                    href="{{ url('candiate_profile') }}">List
                                                    Candidates</a>
                                                <div class="btn-group dropdown">

                                                    <button class="btn btn-bars dropdown-toggle ml-2" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item"
                                                                href="{{ url('edit_post_job', $jobDetail_list->id) }}">Edit</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="{{ url('/delete_post_job', $jobDetail_list->id) }}">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <section class="d-flex justify-content-center align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                                <i class="fa fa-exclamation-circle text-danger fa-2x"></i>
                                            </h2>
                                            <h3 class="h2">Oops! </h3>
                                            <p class="mb-3" style="color: red">Sorry No Jobs Found </p>
                                            <a href="{{ url('post_job') }}">
                                                <h4>Click to Add Jobs</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif

                    <div class="pagiWrap">
                        <div class="row">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-7 text-right">
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


<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="largebanner shadow3">
                <div class="adin">
                    <img src="https://eudyoga.com/assets/images/banner1.jpg">.
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="footerWrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h5>Quick Links</h5>
                            <ul class="quicklinks">
                                <li><a href="https://eudyoga.com">Home</a></li>
                                <li><a href="https://eudyoga.com/contact-us">Contact Us</a></li>
                                <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
                                <li><a href="https://eudyoga.com/faq">FAQs</a></li>

                                <li class=""><a href="https://eudyoga.com/cms/about-us">About Us</a></li>

                                <li class=""><a href="https://eudyoga.com/cms/Terms_And_Conditions">Terms &amp;
                                        Conditions</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <h5>Jobs By Functional Area</h5>
                            <ul class="quicklinks">
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance
                                        &amp; Financial Services</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp;
                                        Business Development</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=137">Tele Sale
                                        Representative</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a>
                                </li>
                                <li><a
                                        href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a>
                                </li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems
                                        Analyst</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <h5>Jobs By Industry</h5>
                        </div>

                        <div class="col-md-3 col-sm-12">
                            <h5>Contact Us</h5>
                            <div class="phone"> <a href="tel:+91 888-444-2936">+91 888-444-2936</a></div>
                            <div class="email"> <a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a> </div>
                            <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022
                                India</div>
                            <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067"
                                    target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/e_udyoga" target="_blank"><i class="fab fa-twitter-square"
                                        aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/eudyoga/" target="_blank"><i
                                        class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube-square"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                $(document).ready(function() {
                    var showChar = 50; // Set the number of characters to show initially
                    var ellipsestext = "...";
                    var moretext = "Read more";
                    var lesstext = "Read less";


                    $('.more').each(function() {
                        var content = $(this).html();

                        if (content.length > showChar) {
                            var c = content.substr(0, showChar);
                            var h = content.substr(showChar, content.length - showChar);

                            var html = c + '<span class="moreellipses">' + ellipsestext +
                                '&nbsp;</span><span class="morecontent"><span>' + h +
                                '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                            $(this).html(html);
                        }
                    });

                    $(".morelink").click(function() {
                        if ($(this).hasClass("less")) {
                            $(this).removeClass("less");
                            $(this).html(moretext);
                        } else {
                            $(this).addClass("less");
                            $(this).html(lesstext);
                        }
                        $(this).parent().prev().toggle();
                        $(this).prev().toggle();
                        return false;
                    });
                });
            </script>

            <style>
                .morecontent span {
                    display: none;
                }

                .morelink {
                    display: block;
                }
            </style>
