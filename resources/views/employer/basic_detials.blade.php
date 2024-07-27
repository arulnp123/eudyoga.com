@include('employer/layouts_index.app')
@yield('content')
<style>
    .page-content {
        background-color: #f0f5ff;
    }

    .bs-stepper {
        background-color: #f8f8f8;
    }

    .bs-stepper .step h5 {
        color: #ffffff;
    }

    .form-control {
        background-color: #edf2ff;
    }

    .btn-light {
        background-color: #3c26e2;
        color: #ffffff;
    }

    .btn-outline-light {
        border-color: #3c26e2;
        color: #4d8cf2;
    }

    .btn-white {
        background-color: #ffffff;
        color: #4d8cf2;
    }

    .row.g-3 [class^="col-"] {
        margin-bottom: 15px;
    }
</style>
<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 col-sm-12">
                <center>
                    <h3>Basic Details</h3>
                </center>
                <div class="page-wrapper">
                    <div class="page-content">
                        <div>
                            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                            </div>
                        </div>
                        <div id="stepper1" class="bs-stepper">
                            <div class="card">
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
                                                 <form action="{{ url('/savebasic') }}" method="POST">
                                                            {{ csrf_field() }}
                                                                <input type="hidden" class="form-control"
                                                                    id="test-nl-1" role="tabpanel"
                                                                    class="bs-stepper-pane"
                                                                    aria-labelledby="stepper2trigger1">
                                                                <h5 class="mb-1 mb-3" style="color: black">Enter
                                                                    Your Details</h5>
                                                                <div class="row g-3">
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="email"
                                                                            class="form-label mb-2">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="name" id="name"
                                                                            placeholder="Full Name">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="image"
                                                                            class="form-label mb-2">Whatsapp
                                                                            Number</label>
                                                                        <input class="form-control form-control-sm"
                                                                            name="phone" id="phone"
                                                                            type="text">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="email"
                                                                            class="form-label mb-2">Email</label>
                                                                        <input type="text" class="form-control"
                                                                            name="email" id="email"
                                                                            placeholder="email">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="state"
                                                                            class="form-label mb-2">State</label>
                                                                        <input type="text" class="form-control"
                                                                            name="state_id"
                                                                            placeholder="state">
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label for="city"
                                                                            class="form-label mb-2">City</label>
                                                                        <input type="text" class="form-control"
                                                                            name="city_id"
                                                                            placeholder="city">
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="d-flex align-items-center gap-3">
                                                                            <button class="btn btn-light px-4"
                                                                                type="Submit" name="submit"
                                                                                value="submit">Submit</button>
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
                                </div>
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

    <div class="largebanner shadow3">
        <div class="adin">
            <img src="{{ URL::to('/') }}/assets/images/banner1.jpg">
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="footerWrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h5>Quick Links</h5>
                    <ul class="quicklinks">
                        <li><a href="index">Home</a></li>
                        <li><a href="contact_us">Contact Us</a></li>
                        <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
                        <li><a href="https://eudyoga.com/faq">FAQs</a></li>

                        <li class=""><a href="about_us">About Us</a></li>

                        <li class=""><a href="https://eudyoga.com/cms/Terms_And_Conditions">Terms &amp;
                                Conditions</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h5>Jobs By Functional Area</h5>
                    <ul class="quicklinks">
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118">Sales</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=68">Manufacturing &amp;
                                Operations</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=53">Interior Designers &amp;
                                Architects</a></li>
                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business
                                Development</a></li>
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
                </div>

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
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="bttxt">Copyright &copy; 2024 E-Udyoga. All Rights Reserved. Design by: <a
                            href="https://npgroups.com/" target="_blank">npgroups</a></div>
                </div>
                <!--<div class="col-md-4">-->
                <!--    <div class="paylogos"><img src="{{ URL::to('/') }}/assets/images/payment-icons.png" alt="" /></div>  -->
                <!--</div>-->
            </div>
        </div>
    </div>

    <script>

        <link href="{{ URL::to('/') }}/public/assets1/plugins/input-tags/css/tagsinput.css"
            rel="stylesheet" />
        <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
        <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
        <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
            rel="stylesheet" />
        <script src="{{ URL::to('/') }}/public/assets1/plugins/input-tags/js/tagsinput.js"></script>

        $('#countries').on('change', function() {
            var state_id = this.value;
            // alert (countryid);
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
