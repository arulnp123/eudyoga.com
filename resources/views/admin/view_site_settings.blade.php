@include('admin.layouts.app')
@yield('content')




</head>

<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">

        <!--start header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Forms</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">View Site Settings</li>
                            </ol>
                        </nav>
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
                                                <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                <div class="">
                                                    <h5 class="mb-0 steper-title">1</h5>
                                                    {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-line"></div>
                                        <div class="step" data-target="#test-nl-2">
                                            <div class="step-trigger" role="tab" id="stepper2trigger2"
                                                aria-controls="test-nl-2">
                                                <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                <div class="">
                                                    <h5 class="mb-0 steper-title">2</h5>
                                                    {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-line"></div>
                                        <div class="step" data-target="#test-nl-3">
                                            <div class="step-trigger" role="tab" id="stepper2trigger3"
                                                aria-controls="test-nl-3">
                                                <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                <div class="">
                                                    <h5 class="mb-0 steper-title">3</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-line"></div>
                                        <div class="step" data-target="#test-nl-4">
                                            <div class="step-trigger" role="tab" id="stepper2trigger4"
                                                aria-controls="test-nl-4">
                                                <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                <div class="">
                                                    <h5 class="mb-0 steper-title">4</h5>
                                                    {{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="bs-stepper-content">
                                            @foreach ($view_site_settings as $key => $edit)
                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="site_name" class="form-label">Site Name</label>
                                                            <input type="text" class="form-control" name="site_name"
                                                                id="site_name" placeholder="Company"
                                                                value="{{ $edit->site_name }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="site_slogan" class="form-label">Site Slogan</label>
                                                            <input type="text" class="form-control" name="site_slogan"
                                                                id="site_slogan5" placeholder="site_slogan"
                                                                value="{{ $edit->site_slogan}}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="site_phone_primary" class="form-label">Site Phone Primary</label>
                                                            
                                                            <textarea class="form-control" name="site_phone_primary" id="site_phone_primary" placeholder="site_phone_primary" rows="3"
                                                                readonly>{{ $edit->site_phone_primary }}</textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="site_phone_secondary" class="form-label">Site Phone Secondary</label>
                                                            <textarea class="form-control" name="site_phone_secondary" id="site_phone_secondary" placeholder="site_phone_secondary" rows="3" readonly>{{ $edit->site_phone_secondary }}</textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <button class="btn btn-light px-4" type="button"
                                                                onclick="stepper2.next()">Next<i
                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                                        </div>
                                                    </div>
                                                    <!---end row-->
                                                </div>

                                                <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger2">

                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            
                                                            <label for="default_country_id" class="form-label">Default Country Id
                                                               </label>
                                                            <input type="text" class="form-control"
                                                                name="default_country_id" id="default_country_id"
                                                                placeholder="default_country_id" data-role="tagsinput"
                                                                value="{{ $edit->default_country_id }}" readonly>
                                                        </div>                                                       
                                                        <div class="col-12 col-lg-6">
                                                            <label for="InputPassword"
                                                                class="form-label">Default Currency Code</label>
                                                            <input type="default_currency_code" class="form-control"
                                                                name="default_currency_code" id="default_currency_code"
                                                                placeholder="default_currency_code" value="{{ $edit->default_currency_code }}"
                                                                readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="InputPassword"
                                                                class="form-label">Site Street Address</label>
                                                            <input type="site_street_address" class="form-control"
                                                                name="site_street_address" id="site_street_address"
                                                                placeholder="site_street_address" value="{{ $edit->site_street_address }}"
                                                                readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="site_google_map"
                                                                class="form-label">Site Google Map</label>
                                                            <input type="site_google_map" class="form-control"
                                                                name="site_google_map" id="site_google_map"
                                                                placeholder="site_google_map" value="{{ $edit->site_google_map }}"
                                                                readonly>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-outline-light px-4"
                                                                    type="button" onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.next()">Next<i
                                                                        class='bx bx-right-arrow-alt ms-2'></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---end row-->

                                                </div>

                                                <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger3">
                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_driver" class="form-label">Mail Driver
                                                                </label>
                                                            <input type="text" class="form-control"
                                                                name="mail_driver" id="mail_driver"
                                                                placeholder="mail_driver"
                                                                value="{{ $edit->mail_driver }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_host" class="form-label">Mail Host
                                                               </label>
                                                            <input type="text" class="form-control"
                                                                name="mail_host" id="mail_host"
                                                                placeholder="mail_host"
                                                                value="{{ $edit->mail_host }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_port" class="form-label">Mail Port
                                                                To</label>
                                                            <input type="text" class="form-control"
                                                                name="mail_port" id="mail_port"
                                                                placeholder="mail_port"
                                                                value="{{ $edit->mail_port }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_from_address" class="form-label">Mail From Address
                                                               </label>
                                                            <input type="text" class="form-control"
                                                                name="mail_from_address" id="mail_from_address"
                                                                placeholder="mail_from_address"
                                                                value="{{ $edit->mail_from_address }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_from_name" class="form-label">Mail From Name
                                                                Period</label>
                                                            <input type="text" class="form-control"
                                                                name="mail_from_name" id="mail_from_name"
                                                                placeholder="mail_from_name"
                                                                value="{{ $edit->mail_from_name }}" readonly>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-outline-light px-4"
                                                                    type="button" onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.next()">Next<i
                                                                        class='bx bx-right-arrow-alt ms-2'></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---end row-->

                                                </div>

                                                <div id="test-nl-4" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger4">
                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_to_address"
                                                                class="form-label">Mail To Addrerss
                                                                </label>
                                                            <input type="text" class="form-control"
                                                                name="mail_to_address" id="mail_to_address"
                                                                placeholder="mail_to_address"
                                                                value="{{ $edit->mail_to_address }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">Mail To Name
                                                               </label>
                                                            <input type="text" class="form-control"
                                                                name="mail_to_name" id="mail_to_name"
                                                                placeholder="mail_to_name"
                                                                value="{{ $edit->mail_to_name }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_encryption" class="form-label">Mail Encryption
                                                                Shift</label>
                                                            <input type="text" class="form-control"
                                                                name="mail_encryption" id="mail_encryption"
                                                                placeholder="mail_encryption"
                                                                value="{{ $edit->mail_encryption }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_username"
                                                                class="form-label">Mail Username</label>
                                                            <input type="text" class="form-control"
                                                                name="mail_username" id="mail_username"
                                                                placeholder="mail_username"
                                                                value="{{ $edit->mail_username }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_password" class="form-label">Mail Password</label>
                                                            <input type="text" class="form-control"
                                                                name="mail_password" id="mail_password"
                                                                placeholder="mail_password" value="{{ $edit->mail_password }}"
                                                                readonly>
                                                        </div>
                                                        <!-- <div class="col-12 col-lg-6">
                                                        <label for="expiry_date" class="form-label">Job expiry
                                                            date</label>
                                                        <input type="date" class="form-control" name="expiry_date"
                                                            id="PhoneNumber" placeholder="Job expiry date">
                                                    </div> -->
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_sendmail" class="form-label">Mail Sendmail
                                                               
                                                               </label>
                                                            <input type="text" class="form-control"
                                                                name="mail_sendmail" id="mail_sendmail"
                                                                placeholder="mail_sendmail"
                                                                value="{{ $edit->mail_sendmail }}" readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="mail_pretend" class="form-label">Mail Pretend
                                                                </label>
                                                            <input type="text" class="form-control"
                                                                name="mail_pretend" id="mail_pretend"
                                                                placeholder="mail_pretend"
                                                                value="{{ $edit->mail_pretend }}" readonly>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-secondary px-4"><a
                                                                        href="{{ url('site_settings') }}">Back to
                                                                        Site Settings list</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end stepper two-->



                <link href="{{ URL::to('/') }}/public/assets1/plugins/input-tags/css/tagsinput.css"
                    rel="stylesheet" />

                {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js">
                </script> --}}
                <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
                <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
                <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
                    rel="stylesheet" />
                <script src="{{ URL::to('/') }}/public/assets1/plugins/input-tags/js/tagsinput.js"></script>
                <!--app JS-->
            </div>

        </div>
     </div>
</body>



<div>
    @include('admin.layouts.footer')
</div>
