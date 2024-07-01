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
                                <li class="breadcrumb-item active" aria-current="page">Languages</li>
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

                                            <div class="bs-stepper-content">
                                                <form class="row g-3" action="#" enctype="multipart/form-data">
                                                    @csrf
                                                    @foreach ($view_language_level as $key => $edit)
                                                        <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                            aria-labelledby="stepper2trigger1">
                                                            <h5 class="mb-1">Enter Your Details</h5>
                                                            {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                            <div class="row g-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="language_level_id"
                                                                        class="form-label">language_level_id</label>
                                                                    <input type="text" class="form-control"
                                                                        name="language_level_id" id="language_level_id"
                                                                        placeholder="language_level_id"
                                                                        value="{{ $edit->language_level_id }}" readonly>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="language_level" class="form-label">language_level</label>
                                                                    <input type="text" class="form-control"
                                                                        name="language_level" id="language_level "
                                                                        placeholder="language_level "
                                                                        value="{{ $edit->language_level }}" readonly>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="is_default"
                                                                        class="form-label">is_default</label>
                                                                    <input type="text" class="form-control"
                                                                        name="is_default" id="is_default "
                                                                        placeholder="is_default " value="{{ $edit->is_default }}"
                                                                        readonly>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="is_active"
                                                                        class="form-label">is_active </label>
                                                                    <input type="text" class="form-control"
                                                                        name="is_active" id="is_active "
                                                                        placeholder="is_active " value="{{ $edit->is_active }}"
                                                                        readonly>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="sort_order"
                                                                        class="form-label">sort_order </label>
                                                                    <input type="text" class="form-control"
                                                                        name="sort_order" id="sort_order "
                                                                        placeholder="sort_order " value="{{ $edit->sort_order }}"
                                                                        readonly>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!---end row-->

                                            </div>
                                            </form>
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
