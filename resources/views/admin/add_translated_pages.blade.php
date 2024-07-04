 @include('admin.layouts.app')
 @yield('content')

 </head>
 <body class="bg-theme bg-theme2">
     <div class="wrapper">
         <div class="page-wrapper">
             <div class="page-content">
                 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                     <div class="breadcrumb-title pe-3">Forms</div>
                     <div class="ps-3">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb mb-0 p-0">
                                 <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                 </li>
                                 <li class="breadcrumb-item active" aria-current="page">Add Employer</li>
                             </ol>
                         </nav>
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
                                                 <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                                 <div class="">
                                                     <h5 class="mb-0 steper-title">1</h5>
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
                                                 </div>
                                             </div>
                                         </div>
                                         
                                         
                                        
                                        
                                     </div>
                                 </div>
                                 <div class="card-body">
                                     <div class="bs-stepper-content">
                                        <form method="post" action="{{ url('/savetranslated') }}"
                                             enctype="multipart/form-data">
                                             @csrf
                                             <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger1">
                                                 <h5 class="mb-1">Enter Your Details</h5>

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="page_slug" class="form-label">
                                                            Page Slug</label>
                                                         <input type="text" class="form-control" name="page_slug"
                                                           placeholder="Page Slug">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="show_in_top_menu" class="form-label">show_in_top_menu</label>
                                                         <input type="text" class="form-control" name="show_in_top_menu"
                                                             placeholder="show_in_top_menu">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="show_in_footer_menu" class="form-label">show_in_footer_menu</label>
                                                         <input type="text" class="form-control" name="show_in_footer_menu"
                                                              placeholder="show_in_footer_menu">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="seo_title" class="form-label">seo title</label>
                                                         <input type="text" class="form-control" name="seo_title"
                                                          placeholder="seo_title">
                                                     </div>

                                                     <div class="col-12 col-lg-6">
                                                         <button class="btn btn-light px-4" type="button"
                                                             onclick="stepper2.next()">Next<i
                                                                 class='bx bx-right-arrow-alt ms-2'></i></button>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger2">
                                                 <h5 class="mb-1">Enter Your Details</h5>

                                                 <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="seo_description" class="form-label">seo_description</label>
                                                        <textarea class="form-control" name="seo_description" placeholder="seo_description" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="seo_keywords" class="form-label">seo_keywords</label>
                                                        <input type="text" class="form-control" name="seo_keywords"
                                                         placeholder="seo_keywords">
                                                    </div>                                                                                                         
                                                     <div class="col-12 col-lg-6">
                                                         <label for="seo_other"
                                                             class="form-label">seo_other</label>
                                                         <textarea class="form-control" name="seo_other" placeholder="seo_other" rows="3"></textarea>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                        <label for="PhoneNumber" class="form-label">created_at</label>
                                                        <input type="date" class="form-control"
                                                            name="created_at" id="created_at"
                                                            placeholder="created_at">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="PhoneNumber" class="form-label">updated_at</label>
                                                        <input type="date" class="form-control"
                                                            name="updated_at" id="updated_at"
                                                            placeholder="updated_at">
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
                                             </div>
                                         </form>
                                        </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
    <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
    <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
        rel="stylesheet" />

    <div>
        @include('admin.layouts.footer')
    </div>
