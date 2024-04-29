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
                <li class="breadcrumb-item active" aria-current="page">PAYMENT HISTORY</li>
              </ol>
            </nav>
          </div>
          
        </div>
        <!--end breadcrumb-->
        
        
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Package Title</th>
                    <th>Payment Method</th>
                    <th>Package Start Date</th>
                    <th>Package End Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                  </tr>
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
  <script src="{{ URL::to('/') }}/assets1/assets/js/app.js"></script>
</body>