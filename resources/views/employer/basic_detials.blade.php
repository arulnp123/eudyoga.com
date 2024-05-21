@include('employer/layouts_index.app')

@yield('content')
<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 col-sm-12">


                <center>
                    <h3>Basic Details</h3>
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

                                        <div class="card-header">
                                            <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between"
                                                role="tablist">
                                                <div class="step" data-target="#test-nl-1">
                                                    <div class="step-trigger" role="tab" id="stepper2trigger1"
                                                        aria-controls="test-nl-1">

                                                        @if (session()->has('error'))
                                                            <div class="alert alert-danger alert-dismissable"
                                                                style="margin: 15px;">
                                                                <a href="#" style="color:white !important"
                                                                    class="close" data-dismiss="alert"
                                                                    aria-label="close">&times;</a>
                                                                <strong> {{ session('error') }} </strong>
                                                            </div>
                                                        @endif
                                                        <div class="bs-stepper-content">
                                                            <form method="get"
                                                                action="{{ url('/basicdetialscandidate') }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" class="form-control"
                                                                    value="{{ $employerprofile->id }}" name="id">
                                                                <div id="test-nl-1" role="tabpanel"
                                                                    class="bs-stepper-pane"
                                                                    aria-labelledby="stepper2trigger1">
                                                                    <h5 class="mb-1 mb-3" style="color: black">Enter
                                                                        Your Details</h5>
                                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                                    <div class="row g-3">
                                                                        <div class="col-12 col-lg-6">
                                                                            <label for="email"
                                                                                class="form-label mb-2">Hr Name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name"
                                                                                value="{{ $employerprofile->name }}"
                                                                                id="name" placeholder="Full Name">
                                                                        </div>
                                                                        <div class="col-12 col-lg-6">
                                                                            <label for="email"
                                                                                class="form-label mb-2">Company
                                                                                Name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name"
                                                                                value="{{ $employerprofile->c_name }}"
                                                                                id="name" placeholder="Full Name">
                                                                        </div>


                                                                        <div class="col-12 col-lg-6">
                                                                            <label for="image"
                                                                                class="form-label mb-2">Whatsapp
                                                                                Number</label>
                                                                            <input class="form-control form-control-sm"
                                                                                value="{{ $employerprofile->phone }}"
                                                                                id="image" type="text">
                                                                        </div>
                                                                        <div class="col-12 col-lg-6">
                                                                            <label for="email"
                                                                                class="form-label mb-2">Email</label>
                                                                            <input type="text" class="form-control"
                                                                                name="email"
                                                                                value="{{ $employerprofile->email }}"
                                                                                id="email" placeholder="email">
                                                                        </div>
                                                                        <div class="col-12 col-lg-6">
                                                                            <label for="state"
                                                                                class="form-label mb-2">state</label>
                                                                            <input type="text" class="form-control"
                                                                                name="state"
                                                                                value="{{ $employerprofile->state }}"
                                                                                id="state" placeholder="state">
                                                                            
                                                                        </div>
                                                                        <div class="col-12 col-lg-6">
                                                                            <label for="city"
                                                                                class="form-label mb-2">City</label>
                                                                            <input type="text" class="form-control"
                                                                                name="city"
                                                                                value="{{ $employerprofile->city }}"
                                                                                id="city" placeholder="city">
                                                                        </div>

                                                                    </div><!---end row-->

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                </form>
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
</div>
</div>
<!--Footer-->
<div class="largebanner shadow3">
    <div class="adin">
        <img src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">
    </div>
    <div class="clearfix"></div>
</div>




<div class="footerWrap">
    <div class="container">
        <div class="row colmd-12">

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
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>-->
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business
                            Development</a></li>
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>-->
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a>
                    </li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a>
                    </li>
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
                <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022
                    India</div>

                <!-- Social Icons -->
                <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067"
                        target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/e_udyoga" target="_blank"><i class="fab fa-twitter-square"
                            aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/eudyoga/" target="_blank"><i class="fab fa-instagram"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a><a href="https://www.youtube.com"
                        target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
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
            <div class="col-md-12">
                <div class="bttxt">Copyright &copy; 2024 E-Udyoga. All Rights Reserved. Design by: <a
                        href="https://npgroups.com/" target="_blank">npgroups</a></div>
            </div>
            <!--<div class="col-md-4">-->
            <!--    <div class="paylogos"><img src="{{ URL::to('/') }}/assets/images/payment-icons.png" alt="" /></div>  -->
            <!--</div>-->
        </div>

    </div>
</div>
