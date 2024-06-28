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
                                <li class="breadcrumb-item active" aria-current="page">Edit Seo</li>
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
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="bs-stepper-content">
                                        {{-- @foreach ($edit_jobs_jobs as $key => $edit_jobs) --}}
                                            <form class="row g-3" method="post" action="{{ url('/update_seo') }}"
                                                enctype="multipart/form-data">
                                                <input value="{{ $edit_seo->id }}" type="hidden" name="id" id="id"/>

                                                @csrf

                                                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger1">
                                                    <h5 class="mb-1">Enter Your Details</h5>
                                                    {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                    <div class="row g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <label for="page_title" class="form-label">Page Title</label>
                                                            <input type="text" class="form-control" name="page_title"
                                                                id="page_title" placeholder="page title" value="{{ $edit_seo->page_title }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="seo_title" class="form-label">Seo Title</label>
                                                            <input type="text" class="form-control" name="seo_title"
                                                                id="seo_title" placeholder="seo title"
                                                                value="{{ $edit_seo->seo_title }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                                <label for="seo_description" class="form-label">Seo Description</label>
                                                                <textarea class="form-control" name="seo_description" id="seo_description" placeholder="seo description" rows="3">{{ $edit_seo->seo_description }}</textarea>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="seo_keywords" class="form-label">Seo Keywords</label>
                                                            <textarea class="form-control" name="seo_keywords" id="seo_keywords" placeholder="seo keywords" rows="3">{{ $edit_seo->seo_keywords }}</textarea>

                                                        </div>

                                                        <div class="col-12 col-lg-6">
                                                            <label for=" seo_other" class="form-label">Seo Other</label>
                                                            <input type="text" class="form-control" name="seo_title"
                                                                id=" seo_other" placeholder=" seo other"
                                                                value="{{ $edit_seo->seo_other }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="created_at" class="form-label">created at</label>
                                                            <input type="text" class="form-control" name="created_at"
                                                                id="created_at" placeholder="created_at"
                                                                value="{{ $edit_seo->created_at }}">
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <label for="updated_at" class="form-label">updated_at</label>
                                                            <input type="text" class="form-control" name="updated_at"
                                                                id="updated_at" placeholder="updated at"
                                                                value="{{ $edit_seo->updated_at }}">
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-white px-4"
                                                                    onclick="stepper2.next()">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div><!---end row-->

                                                </div>
    

                                            </form>
                                        {{-- @endforeach --}}
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
