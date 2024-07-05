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
								<li class="breadcrumb-item active" aria-current="page">View Translated Pages</li>
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
			<div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
				<div class="step" data-target="#test-nl-1">
				  <div class="step-trigger" role="tab" id="stepper2trigger1" aria-controls="test-nl-1">
					<div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
					<div class="">
						<h5 class="mb-0 steper-title">1</h5>
						{{-- <p class="mb-0 steper-sub-title">Enter Your Details</p> --}}
					</div>
				  </div>
				</div>
				<div class="bs-stepper-line"></div>
				<div class="step" data-target="#test-nl-2">
					<div class="step-trigger" role="tab" id="stepper2trigger2" aria-controls="test-nl-2">
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
			<form class="row g-3" action="#" enctype="multipart/form-data">
				@csrf
				@foreach ($view_translated_pages as $key => $translated)
				<div id="test-nl-1" role="tabpanel" class="bs-stepper-pane"
						aria-labelledby="stepper2trigger1">
						<h5 class="mb-1">Enter Your Details</h5>

			    <div class="row g-3">
				 <div class="col-12 col-lg-6">
					<label for="page_slug" class="form-label">Page Slug</label>
					   <input type="text" class="form-control" name="page_slug"
						id="page_slug" placeholder="Page Slug"
						value="{{ $translated->page_slug }}" readonly>
					
				 </div>
				<div class="col-12 col-lg-6">
					<label for="show_in_top_menu" class="form-label">Show in Top Menu</label>
					<input type="text" class="form-control" name="show_in_top_menu"
						placeholder="show in top menu"
						value="{{ $translated->show_in_top_menu }}" readonly>
				</div>
				<div class="col-12 col-lg-6">
					<label for="show_in_footer_menu" class="form-label">Show in Footer Menu</label>
					<input type="text" class="form-control" name="show_in_footer_menu"
						 placeholder="show in footer menu"
						 value="{{ $translated->show_in_footer_menu }}" readonly>
				</div>
				<div class="col-12 col-lg-6">
					<label for="seo_title" class="form-label">Seo Title</label>
					<input type="text" class="form-control" name="seo_title"
					 placeholder="seo title" value="{{ $translated->seo_title }}" readonly>
				</div>
				
				  
				  <div class="col-12 col-lg-6">
					  <button class="btn btn-light px-4" type="button" onclick="stepper2.next()">Next
						<i class='bx bx-right-arrow-alt ms-2'></i></button>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger2">

				<h5 class="mb-1">Enter Your Details</h5>
			 

			  <div class="row g-3">
				<div class="col-12 col-lg-6">
					<label for="seo_description" class="form-label">Seo Description</label>
					<textarea class="form-control" name="seo_description" placeholder="seo description" rows="3"
                   readonly>{{ $translated->seo_description }}</textarea>
					
				</div>
				<div class="col-12 col-lg-6">
					<label for="seo_keywords" class="form-label">Seo Keyword</label>
					<input type="text" class="form-control" name="seo_keywords"
					 placeholder="seo keyword" value="{{ $translated->seo_keywords }}" readonly>
				</div>                                                                                                         
				 <div class="col-12 col-lg-6">
					 <label for="seo_other" class="form-label">Seo Other</label>
					 <textarea class="form-control" name="seo_other" placeholder="seo other" rows="3"
					 readonly>{{ $translated->seo_other }}</textarea>
				 </div>
				 <div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Created At</label>
					<input type="text" class="form-control"
						name="created_at" id="created_at"
						placeholder="created at" value="{{ $translated->created_at }}" readonly>
				</div>
				<div class="col-12 col-lg-6">
					<label for="PhoneNumber" class="form-label">Updated At</label>
					<input type="text" class="form-control"
						name="updated_at" id="updated_at"
						placeholder="updated at" value="{{ $translated->updated_at }}" readonly>
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



