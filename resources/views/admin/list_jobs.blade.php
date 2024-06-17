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
                         <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                         </li>
                         <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                     </ol>
                 </nav>
             </div>
         </div>

         @if(session()->has('message'))
         <div class="alert alert-success text-bg-success border-none">
             {{ session()->get('message')}}
         </div>
         @endif

         <!--end breadcrumb-->
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


         <h6 class="mb-0 text-uppercase">DataTable Import</h6>
         <hr />
         <div class="card">
             <div class="card-body">
                 <div class="table-responsive">
                     <table id="example2" class="table table-striped table-bordered">
                         <thead>
                             <tr>
                                 <th>S.No</th>
                                 <th>Company</th>
                                 <th>Job Title</th>
                                 <th>Job Description</th>
                                 <th>City</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($jobs as $key => $memb)
                             <tr>
                                 <td>{{ $key + 1 }}</td>
                                 <td>{{ $memb->c_name }}</td>
                                 <td>{{ $memb->job_title }}</td>
                                 <td>{{ $memb->description }}</td>
                                 <td>{{ $memb->city }}</td>
                                 <td>
                                     <div class="col">
                                         <div class="btn-group" role="group" aria-label="Basic example">
                                             <button type="button" class="btn btn-light"><a
                                                     href="{{ url('view_jobs', $memb->id) }}"><i
                                                         class="lni lni-eye"></i>
                                             </button>
                                             <button type="button" class="btn btn-light"><a
                                                     href="{{ url('edit_jobs' ,$memb->id) }}"><i
                                                         class='bx bx-edit me-0'></i>
                                             </button>
                                             <button type="button" class="btn btn-light"> <a
                                                     onclick="return confirm('Do you want to Confirm delete operation?')"
                                                     href="{{ url('/delete_jobs' , $memb->id) }}"><i
                                                         class="lni lni-trash"></i></a></button>

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
    var table = $('#example2').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print']
    });

    table.buttons().container()
        .appendTo('#example2_wrapper .col-md-6:eq(0)');
});
 </script>

 <script src="{{ URL::to('/') }}/assets1/assets/js/app.js"></script>
 </body>