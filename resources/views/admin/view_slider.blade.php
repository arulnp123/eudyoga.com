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
                                <li class="breadcrumb-item active" aria-current="page">Sliders</li>
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
                                                
                                                    @foreach ($view_Slider as $key => $edit)
                                                        <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                            aria-labelledby="stepper2trigger1">
                                                            <h5 class="mb-1">Enter Your Details</h5>
                                                            {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                            <div class="row g-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="lang"
                                                                        class="form-label">Language</label>
                                                                    <input type="text" class="form-control"
                                                                        name="lang" id="lang"
                                                                        placeholder="lang"
                                                                        value="{{ $edit->lang }}" readonly>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="slider_heading	"
                                                                        class="form-label">slider_heading	</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_heading	" id="slider_heading	"
                                                                        placeholder="slider_heading	"
                                                                        value="{{ $edit->slider_heading }}" readonly>
                                                                </div> 
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="slider_description	"
                                                                        class="form-label">slider_description</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_description	" id="slider_description	"
                                                                        placeholder="slider_description	"
                                                                        value="{{ $edit->slider_description }}" readonly>
                                                                </div>   
                                                                <div class="col-12 col-lg-6">
                                                            <label for="slider_link"
                                                                class="form-label">slider_link</label>
                                                            <input type="text" class="form-control"
                                                                name="slider_link" id="slider_link"
                                                                placeholder="slider_link" value="{{ $edit->slider_link }}"
                                                                readonly>
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
                                                                    <label for="slider_link_text	"
                                                                        class="form-label">slider_link_text</label>
                                                                    <input type="text" class="form-control"
                                                                        name="slider_link_text	" id="slider_link_text	"
                                                                        placeholder="slider_link_text	"
                                                                        value="{{ $edit->slider_link_text }}" readonly>
                                                                </div>      
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="is_default	"
                                                                        class="form-label">is_default</label>
                                                                    <input type="text" class="form-control"
                                                                        name="is_default	" id="is_default	"
                                                                        placeholder="is_default	"
                                                                        value="{{ $edit->is_default }}" readonly>
                                                                </div>    
                                                                <div class="col-12 col-lg-6">
                                                                    <label for="active	"
                                                                        class="form-label">active</label>
                                                                    <input type="text" class="form-control"
                                                                        name="active	" id="active	"
                                                                        placeholder="active	"
                                                                        value="{{ $edit->is_active }}" readonly>
                                                                </div>    
                                                                <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-secondary px-4"><a
                                                                        href="{{ url('list_slider') }}">Back to Sliderlist</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---end row-->

                                                </div>

                                                <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane"
                                                    aria-labelledby="stepper2trigger3">
                                                    <h5 class="mb-1">Enter Your Details</h5>

                                                    
                                                       
                                                        
                                                       

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

                                                    <
                                                      
                                                        <!-- <div class="col-12 col-lg-6">
                                                        <label for="expiry_date" class="form-label">Job expiry
                                                            date</label>
                                                        <input type="date" class="form-control" name="expiry_date"
                                                            id="PhoneNumber" placeholder="Job expiry date">
                                                    </div> -->
                                                       
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <button class="btn btn-light px-4" type="button"
                                                                    onclick="stepper2.previous()"><i
                                                                        class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                                <button class="btn btn-secondary px-4"><a
                                                                        href="{{ url('list_jobs') }}">Back to
                                                                        Jobs list</a></button>
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