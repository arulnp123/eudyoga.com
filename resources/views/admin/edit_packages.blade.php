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
                                <li class="breadcrumb-item active" aria-current="page">Packages</li>
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

                                        <div class="card-body">
                                            {{-- <input value="{{ $employer_list }}" type="hidden" name="employer_id" id="employer_id"/> --}}
                                            <div class="bs-stepper-content">
                                                @foreach ($edit_packages as $key => $edit)
                                                    <form class="row g-3" method="post"
                                                        action="{{ url('/update_packages') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        {{-- <input type="hidden" id="id"
                                                            name="id"value="{{ $edit->id }}"> --}}
                                                        <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                            aria-labelledby="stepper2trigger1">
                                                            <h5 class="mb-1">Enter Your Details</h5>
                                                            {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                            <div class="row g-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="id" class="form-label">Title</label>
                                                                    <input type="text" class="form-control"
                                                                        name="package_title" id="package_title"
                                                                        placeholder="package_title"
                                                                        value="{{ $edit->package_title }}">
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="package_price" class="form-label">Price
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        name="package_price" id="package_price"
                                                                        placeholder=" package_price"
                                                                        value="{{ $edit->package_price }}">
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="package_num_days" class="form-label">Num Days
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        name="package_num_days" id="package_num_days"
                                                                        placeholder=" package_num_days"
                                                                        value="{{ $edit->package_num_days }}">
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="package_num_listings" class="form-label">Num Listening
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        name="package_num_listings" id="package_num_listings"
                                                                        placeholder=" package_num_listings"
                                                                        value="{{ $edit->package_num_listings }}">
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="package_for" class="form-label">Packages For
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        name="package_for" id="package_for"
                                                                        placeholder=" package_for"
                                                                        value="{{ $edit->package_for }}">
                                                                </div>


                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <button class="btn btn-white px-4"
                                                                        onclick="stepper2.next()">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div><!---end row-->

                                            </div>

                                            </form>
                                            @endforeach
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
    <!--end stepper two-->



    <link href="{{ URL::to('/') }}/public/assets1/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />

    {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
    <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
    <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet" />
    <script src="{{ URL::to('/') }}/public/assets1/plugins/input-tags/js/tagsinput.js"></script>
    <!--app JS-->

</body>



<div>
    @include('admin.layouts.footer')
</div>
