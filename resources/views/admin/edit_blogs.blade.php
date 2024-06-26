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
                                 <li class="breadcrumb-item active" aria-current="page">Edit Blogs</li>
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
                                            <form class="row g-3" method="post" action="{{ url('/update_blogs') }}"
                                                enctype="multipart/form-data">
                                                <input value="{{ $edit_blogs->id }}" type="hidden" name="id" id="id"/>

                                                @csrf
                                             <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger1">
                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <p class="mb-4">Enter your personal information to get closer to copanies</p> --}}

                                                 <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="heading" class="form-label">
                                                           Heading</label>
                                                        <input type="text" class="form-control" name="heading"
                                                            id="heading" required class="form-control form-select" placeholder="Heading">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="Slug" class="form-label">Slug</label>
                                                        <input type="text" class="form-control" name="slug"
                                                            id="slug" required class="form-control form-select" placeholder="Slug">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="cate_id" class="form-label">Cate Id</label>
                                                        <input type="text" class="form-control" name="cate_id"
                                                            id="cate_id" required class="form-control form-select" placeholder="Cate Id">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="InputEmail" class="form-label">Content</label>
                                                        <input type="text" class="form-control" name="content"
                                                            id="InputEmail" required class="form-control form-select" placeholder="Content">
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
                                                {{-- <p class="mb-4">Enter Your Account Details.</p> --}}

                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="InputUsername" class="form-label">Image</label>
                                                        <input type="text" class="form-control" name="image"
                                                            id="InputUsername" required class="form-control form-select" placeholder="image">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="featured" class="form-label">Featured</label>
                                                        <input type="text" class="form-control"
                                                            name="featured" id="InputEmail2" required class="form-control form-select"
                                                            placeholder="Featured">
                                                    </div>
                                                    
                                                    <div class="col-12 col-lg-6">
                                                        <label for="meta_title" class="form-label">Meta Title</label>
                                                        <textarea class="form-control" name="meta_title" id="meta_title" required class="form-control form-select"
                                                            placeholder="meta_title" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <button class="btn btn-outline-light px-4" type="button"
                                                                onclick="stepper2.previous()"><i
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
                                                {{-- <p class="mb-4">Inform companies about your education life</p> --}}

                                                <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="lang" class="form-label">Lang</label>
                                                        <input type="text" class="form-control" name="lang"
                                                            id="lang" required class="form-control form-select" placeholder="Lang">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                                        <input type="text" class="form-control number" name="meta_keywords"
                                                            id="meta_keywords" required class="form-control form-select" placeholder="Meta Keywords">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="meta_descriptions" class="form-label">Meta Descriptions</label>
                                                        <input type="text" class="form-control" name="meta_descriptions"
                                                            id="meta_descriptions" required class="form-control form-select" placeholder="Meta Descriptions">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="remember_token" class="form-label">Remember Token</label>
                                                        <input type="text" class="form-control number" name="remember_token"
                                                            id="remember_token" required class="form-control form-select" placeholder="Remember Token">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                       <label for="created_at" class="form-label">Created At</label>
                                                       <input type="date" class="form-control"
                                                           name="created_at" id="created_at" required class="form-control form-select"
                                                           placeholder="Created At">
                                                   </div>
                                                   <div class="col-12 col-lg-6">
                                                       <label for="updated_at" class="form-label">Updated At</label>
                                                       <input type="date" class="form-control" name="updated_at"
                                                           id="updated_at" required class="form-control form-select" placeholder="Updated At">
                                                   </div>

                                                    <div class="col-12">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <button class="btn btn-outline-light px-4" type="button"
                                                                onclick="stepper2.previous()"><i
                                                                    class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                            <button class="btn btn-light px-4" type="button"
                                                                onclick="stepper2.next()">Next<i
                                                                    class='bx bx-right-arrow-alt ms-2'></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---end row-->


                                             </div>
                                         </form>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--end stepper two-->





                     {{-- <script src="{{ URL::to('/') }}/public/assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js">
                     </script> --}}
                     <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/bs-stepper.min.js"></script>
                     <script src="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/js/main.js"></script>
                     <link href="{{ URL::to('/') }}/public/assets1/plugins/bs-stepper/css/bs-stepper.css"
                         rel="stylesheet" />
                     <!--app JS-->





                     <div>
                         @include('admin.layouts.footer')
                     </div>