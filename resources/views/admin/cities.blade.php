@include('admin.layouts.app')
@section('content')
<div class="page-wrapper">
   <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         <div class="breadcrumb-title pe-3">City Details</div>
       
         <div class="ms-auto">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#cities">Add</button>
         </div>
      </div>
      <div class="card">
         <div class="card-body">
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
            <div class="table-responsive">
               <table id="example2" class="table table-bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($cities as $citylist)
                     <tr>
                         <td>{{ $citylist->id }}</td>
                         <td>{{ $citylist->city }}</td>

                         <td>
                             <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                 data-bs-target="#Editcity{{ $citylist->id }}">Edit</button>
                             <div class="modal fade" id="Editcity{{ $citylist->id }}">
                                 <div class="modal-dialog modal-md">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h4 class="modal-title">Edit City Details</h4>
                                             <button type="button" class="close" data-dismiss="modal"
                                                 aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <form action="{{ url('/updatecity') }}" method="post">
                                             {{ csrf_field() }}
                                             <div class="modal-body">
                                                 <input type="hidden" value="{{ $citylist->id }}"
                                                     name="city_id">

                                                 <div class="form-group">
                                                     <label for="city"> City Name </label>
                                                     <input type="text" value="{{ $citylist->city }}" class="form-control" name="city" placeholder="City Name">
                                                 </div>
                                                 <div class="form-group">
                                                     <label>Status</label>
                                                     <select name="status" class="form-control select2"
                                                         style="width: 100%;">
                                                         <option
                                                             @if ($citylist->city == 'Active') selected @endif
                                                             value="Active">Active</option>
                                                         <option
                                                             @if ($citylist->city == 'Inactive') selected @endif
                                                             value="Inactive">Inactive</option>
                                                     </select>
                                                 </div>
                                             </div>

                                             <div class="modal-footer justify-content-between">
                                                 <button type="button" class="btn btn-default"
                                                     data-dismiss="modal">Close</button>
                                                 <button id="save" type="submit"
                                                     class="btn btn-primary">Submit</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                             <a type="button"
                                 onclick="return confirm('Do you want to perform delete operation?')"
                                 href="{{ url('/deletecity', $citylist->id) }}" class="btn btn-info">
                                 Delete</a>
                         </td>
                     </tr>
                 @endforeach
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
                     
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="modal fade" id="cities" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Cities </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form action="{{ url('/addcity') }}" method="post">
            {{ csrf_field() }}
                      <div class="modal-body">
                          <div class="form-group">
                          <label for="city">City Name</label>
                          <input type="text" class="form-control" name="city"  placeholder="City Name">
                          </div>
                      </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
         </form>
      </div>
   </div>
</div>
