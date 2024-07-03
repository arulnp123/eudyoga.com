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
                    <div class="breadcrumb-title pe-3">Country Details</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Country Details</li>
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
                                        
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="bs-stepper-content">

                                        <form class="row g-3" method="post" action="{{ url('/update_country_detail') }}"
                                            enctype="multipart/form-data">

                                            @csrf
                                           
                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="country_id" class="form-label">Country Id</label>
                                                            <input type="text" class="form-control" name="country_id" id="country_id" placeholder="country_id"
                                                                value="{{ $edit_country_details->country_id }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="sort_name" class="form-label">Sort Name</label>
                                                            <input type="text" class="form-control" name="sort_name" id="sort_name" placeholder="sort_name"
                                                                value="{{ $edit_country_details->sort_name }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="phone_code" class="form-label">Phone Code</label>
                                                            <input type="phone_code" class="form-control" name="phone_code" id="phone_code" placeholder="phone_code"
                                                                value="{{ $edit_country_details->phone_code }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="currency" class="form-label">currency</label>
                                                            <input type="currency" class="form-control" name="currency" id="currency" placeholder="currency"
                                                                value="{{ $edit_country_details->currency }}">
                                                        </div>


                                                        <div class="col-12 col-lg-6">
                                                            <button class="btn btn-light px-4" type="button"
                                                                onclick="stepper2.next()">Next<i
                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                                        </div>
                                                    </div><!---end row-->

                                                </div>

                                                <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger2">

                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="code" class="form-label">code</label>
                                                            <input type="code" class="form-control" name="code" id="InputUsername" code="Industry"data-role="code"
                                                                value="{{ $edit_country_details->code }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="symbol"
                                                                class="form-label">symbol</label>
                                                                <input type="symbol" class="form-control" name="symbol" id="symbol" placeholder="symbol"
                                                                value="{{ $edit_country_details->symbol }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="thousand_separator"
                                                                class="form-label">Thousand Separator</label>
                                                            <input type="thousand_separator" class="form-control"
                                                                name="thousand_separator" id="thousand_separator"
                                                                placeholder="thousand_separator" value="{{ $edit_country_details->thousand_separator }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="decimal_separator"
                                                                class="form-label">decimal_separator</label>
                                                            <input type="decimal_separator" class="form-control"
                                                                name="decimal_separator" id="decimal_separator"
                                                                placeholder="decimal_separator" value="{{ $edit_country_details->decimal_separator }}">
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-secondary px-4"><a
                                                                        href="{{ url('list_country_details') }}">Back to Country Details list</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---end row-->

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

</body>



<div>
    @include('admin.layouts.footer')
</div>
