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
                                 <li class="breadcrumb-item active" aria-current="page">Edit Translated Pages</li>
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


                                         {{-- @foreach ($edit_translated_pages as $key => $edit_translated_pages) --}}
                                         <form class="row g-3" method="post"
                                             action="{{ url('/update_translated_pages') }}"
                                             enctype="multipart/form-data">
                                             <input value="{{ $edit_translated_pages->id }}" type="hidden"
                                                 name="id" id="id" />
                                             @csrf
                                             <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger1">
                                                 <div class="row g-3">
                                                    <div class="col-12 col-lg-6">
                                                        <label for="page_slug" class="form-label">
                                                           Page Slug</label>
                                                        <input type="text" class="form-control" name="page_slug"
                                                          placeholder="Page Slug" value="{{ $edit_translated_pages->page_slug }}">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="show_in_top_menu" class="form-label">show_in_top_menu</label>
                                                        <input type="text" class="form-control" name="show_in_top_menu"
                                                            placeholder="show_in_top_menu" value="{{ $edit_translated_pages->show_in_top_menu }}">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="show_in_footer_menu" class="form-label">show_in_footer_menu</label>
                                                        <input type="text" class="form-control" name="show_in_footer_menu"
                                                             placeholder="show_in_footer_menu" value="{{ $edit_translated_pages->show_in_footer_menu }}">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="seo_title" class="form-label">seo title</label>
                                                        <input type="text" class="form-control" name="seo_title"
                                                         placeholder="seo_title" value="{{ $edit_translated_pages->seo_title }}">
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
                                                        <label for="seo_description" class="form-label">Seo Description</label>
                                                        <textarea class="form-control" name="seo_description" placeholder="seo description" rows="3"
                                                       readonly>{{ $edit_translated_pages->seo_description }}</textarea>
                                                        
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="seo_keywords" class="form-label">Seo Keyword</label>
                                                        <input type="text" class="form-control" name="seo_keywords"
                                                         placeholder="seo keyword" value="{{ $edit_translated_pages->seo_keywords }}" readonly>
                                                    </div>                                                                                                         
                                                     <div class="col-12 col-lg-6">
                                                         <label for="seo_other" class="form-label">Seo Other</label>
                                                         <textarea class="form-control" name="seo_other" placeholder="seo other" rows="3"
                                                         readonly>{{ $edit_translated_pages->seo_other }}</textarea>
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                        <label for="PhoneNumber" class="form-label">Created At</label>
                                                        <input type="text" class="form-control"
                                                            name="created_at" id="created_at"
                                                            placeholder="created at" value="{{ $edit_translated_pages->created_at }}" readonly>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <label for="PhoneNumber" class="form-label">Updated At</label>
                                                        <input type="text" class="form-control"
                                                            name="updated_at" id="updated_at"
                                                            placeholder="updated at" value="{{ $edit_translated_pages->updated_at }}" readonly>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <button class="btn btn-light px-4" type="button"
                                                                onclick="stepper2.previous()"><i
                                                                    class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                            <button class="btn btn-secondary px-4"><a
                                                                    href="{{ url('list_translated_pages') }}">Back to Translated Pages List</a></button>
                                                        </div>
                                                    </div>
                                                 </div><!---end row-->

                                             </div>

                                             <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger3">
                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <p class="mb-4">Inform companies about your education life</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="SchoolName" class="form-label">Google Map</label>
                                                         <input type="text" class="form-control" name="map"
                                                             id="SchoolName" placeholder="Google Map">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="BoardName" class="form-label">Number of
                                                             offices</label>
                                                         <input type="text" class="form-control"
                                                             name="no_of_offices" id="BoardName"
                                                             placeholder="Number of offices">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="UniversityName"
                                                             class="form-label">Website</label>
                                                         <input type="text" class="form-control" name="website"
                                                             id="UniversityName" placeholder="Website">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience1" class="form-label">Number of
                                                             employees</label>
                                                         <input type="text" class="form-control"
                                                             name="no_of_employees" id="Experience1"
                                                             placeholder="Number of employees">
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
                                                 </div><!---end row-->

                                             </div>

                                             <div id="test-nl-4" role="tabpanel" class="bs-stepper-pane"
                                                 aria-labelledby="stepper2trigger4">
                                                 <h5 class="mb-1">Enter Your Details</h5>
                                                 {{-- <p class="mb-4">Can you talk about your past work experience?</p> --}}

                                                 <div class="row g-3">
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Position1" class="form-label">Established
                                                             in</label>
                                                         <input type="text" class="form-control"
                                                             name="established_in" id="Position1"
                                                             placeholder="Established in">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience2" class="form-label">Fax </label>
                                                         <input type="text" class="form-control" name="fax"
                                                             id="Experience2" placeholder="Fax #">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Phone </label>
                                                         <input type="text" class="form-control" name="phone"
                                                             id="PhoneNumber" placeholder="Phone #">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="Experience3" class="form-label">Facebook
                                                             Address</label>
                                                         <input type="text" class="form-control" name="facebook"
                                                             id="Experience3" placeholder="Facebook Address">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Twitter</label>
                                                         <input type="text" class="form-control" name="twitter"
                                                             id="PhoneNumber" placeholder="Twitter">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Linkedin</label>
                                                         <input type="text" class="form-control" name="linkedin"
                                                             id="PhoneNumber" placeholder="Linkedin">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Google+</label>
                                                         <input type="text" class="form-control"
                                                             name="google_plus" id="PhoneNumber"
                                                             placeholder="Google+">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Pinterest</label>
                                                         <input type="text" class="form-control" name="pinterest"
                                                             id="PhoneNumber" placeholder="Pinterest">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Country</label>
                                                         <input type="text" class="form-control" name="country_id"
                                                             id="PhoneNumber" placeholder="Country">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">State</label>
                                                         <input type="text" class="form-control" name="state_id"
                                                             id="PhoneNumber" placeholder="Twitter">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">City</label>
                                                         <input type="text" class="form-control" name="city_id"
                                                             id="PhoneNumber" placeholder="City">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package
                                                             ID</label>
                                                         <input type="text" class="form-control" name="package_id"
                                                             id="PhoneNumber" placeholder="Package ID">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package Start
                                                             Date</label>
                                                         <input type="date" class="form-control"
                                                             name="package_start_date" id="package_start_date"
                                                             placeholder="Package Duration">
                                                     </div>
                                                     <div class="col-12 col-lg-6">
                                                         <label for="PhoneNumber" class="form-label">Package End
                                                             Date</label>
                                                         <input type="date" class="form-control"
                                                             name="package_end_date" id="PhoneNumber"
                                                             placeholder="Package Quota">
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
                                             </div>
                                         </form>
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
                     <!--app JS-->





                     <div>
                         @include('admin.layouts.footer')
                     </div>
