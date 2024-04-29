 @include('admin.layouts.app')
 @yield('content')

 <!-- Dashboard -->
 <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Admin List</h3>
          
        </div>


                  
                <style>


#addCategoryButton , #adminButton {
  background-color: royalblue;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
</style>

                          
    <!-- Dashboard -->
    <section class="user-dashboard">
  <div class="dashboard-outer">
    <div class="upper-title-box">
      <div class="button-left">
        <button id="addCategoryButton">
          <a href="{{ url('add_admin_button') }}" style="color: white; text-decoration: none;">
            Add Admin
          </a>
        </button>
      </div>
    </div>
  </div>
</section>
<div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            
                </div>

                <div class="widget-content">
                  <div class="table-outer">
                    <table class="default-table manage-job-table">
                      <thead>
                        <tr>
                         
<div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Admin Listings</h4>

                  <div class="chosen-outer">
                    <!--Tabs Box-->
</div>
                <div class="widget-content">
                  <div class="table-outer">
                    <table class="default-table manage-job-table">
                      <thead>
                        <tr>
                        <th>Id</th>
                          <th>Name</th>
                          <th>last_name</th>
                          <th>email</th>
                          <th>whatsapp_number</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->whatsapp_number }}</td>
                                <td>
                            <div class="option-box">
                              <ul class="option-list">
                           
                                <li><button data-text="View Admin"><span class="la la-eye"></span></a></button></li>
                                <li><button data-text="Edit Admin"><a href="{{ url('/edit_admin',$user->id) }}"><span class="la la-pencil"></span></button></li>
                                <li><button data-text="Delete Admin"><span class="la la-trash"></span></button></li>
                              </ul>
                            </div>
                          </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dashboard -->



 
  @include('admin.layouts.footer')