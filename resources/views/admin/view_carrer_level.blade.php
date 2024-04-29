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
                    <div class="breadcrumb-title pe-3">Home</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Career Level</li>
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

                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="bs-stepper-content">


                                        <form action="#" enctype="multipart/form-data">
                                            @csrf
                                            @foreach ($get_career_levels as $key => $get_career_levels_list)
                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Career Level</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="lang" class="form-label">Languages</label>
                                                            <input type="text" class="form-control" name="lang"
                                                                id="lang"
                                                                value="{{ $get_career_levels_list->lang }}" readonly>
                                                        </div>
                                                        
                                                        <div class="col-12 col-lg-6">
                                                            <label for="job_experience" class="form-label">Job Experience</label>
                                                            <input type="text" class="form-control"
                                                                name="job_experience" id="job_experience"
                                                                value="{{ $get_career_levels_list->career_level }}"
                                                                readonly>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="is_default" class="form-label">
                                                                Is default</label>
                                                            <input type="is_default" class="form-control"
                                                                id="is_default" name="is_default"
                                                                value="{{ $get_career_levels_list->is_default === 1 ? 'default' : 'Un default' }}"
                                                                readonly>
                                                        </div>


                                                        <div class="col-12 col-lg-6">
                                                            <label for="is_default" class="form-label">
                                                                Is Active</label>
                                                            <input type="is_active" class="form-control" id="is_active"
                                                                name="is_active"
                                                                value="{{ $get_career_levels_list->is_active === 1 ? 'Active' : 'In Active' }}"
                                                                readonly>
                                                        </div>

                                                    </div><!---end row-->

                                                </div>

                                    </div>
                                </div>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end stepper two-->





            {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
            <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
            <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
            <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css" rel="stylesheet" />
            <!--app JS-->

</body>



<div>
    @include('admin.layouts.footer')
</div>
