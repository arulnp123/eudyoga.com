 @include('admin.layouts.app')
 @yield('content')

<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Tables</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="fa-solid fa-user-tie"></i></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Job Shift</li>
              </ol>
            </nav>
          </div>
        </div>
        @if (session()->has('success'))
					<div class="alert alert-success alert-dismissable" style="margin: 15px;">
						<a href="#" style="color:white !important" class="close" data-dismiss="alert"
							aria-label="close">&times;</a>
						<strong> {{ session('success') }} </strong>
					</div>
				@endif
				@if (session()->has('error'))
					<div class="alert alert-danger alert-dismissable" style="margin: 15px;">
						<a href="#" style="color:white !important" class="close" data-dismiss="alert"
							aria-label="close">&times;</a>
						<strong> {{ session('error') }} </strong>
					</div>
		   @endif
       <div class="row">
        <div class=" col-md-12">
            <!-- Begin: life time stats -->
            <div class="portlet light portlet-fit portlet-datatable bordered">
                <div class="portlet-title d-flex justify-content-between">
                    <div class=" caption"> <i class="icon-settings font-dark"></i> <span
                            class="caption-subject font-dark sbold uppercase"> Job Shift</span> </div>
                    <div class="actions"> <a href="{{ url('add_jobshifts') }}" class="btn btn-xs btn-success"><i
                                class="glyphicon glyphicon-plus"></i> Add New
                                Job Shift</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <!--end breadcrumb-->
        
        <h6 class="mb-0 text-uppercase">Job Shift</h6>
        <hr/>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                   
                    <th>Job Shift</th>
                    <th>Languages</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($job_shifts as $key => $memb)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    
                    <td>{{ $memb->job_shift }}</td>
                    <td>{{ $memb->lang }}</td>
                    <td>
                      <div class="col">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-light"><a href="{{ url('view_jobsshifts', $memb->id) }}"><i class="lni lni-eye"></i>
                          </button>
                          <button type="button" class="btn btn-light"><a href="{{ url('edit_jobsshifts', $memb->id) }}"><i class='bx bx-edit me-0'></i>
                          </button>
                          <button type="button"  class="btn btn-light"> <a onclick="return confirm('Do you want to Confirm delete operation?')"
                            href="{{ url('delete_jobsshifts', $memb->id) }}"><i class="lni lni-trash"></i></a></button>
                         
                        
                        </div>
                      </div>
                      
                      
                    </td>
                  
                  </tr>
                 
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>






 @include('admin.layouts.footer')

 
  <script>
    
    $(document).ready(function() {
    $('#example').DataTable()
  });
    
  </script>
  
  
  <script>
    $(document).ready(function() {
      var table = $('#example2').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
      } );
     
      table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
  </script>
  <!--app JS-->
  <script src="{{ URL::to('/') }}/assets1/js/app.js"></script>
</body>