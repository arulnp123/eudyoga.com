 @include('admin.layouts.app')
 @yield('content')  



    <div class="login-section">
      <div class="image-layer" style="background-image: url(assets/images/background/12.jpg);"></div>
      <div class="outer-box">
        <!-- Login Form -->
        <div class="login-form default-form">
          <div class="form-inner">
          <center>  <h3>Admin Login</h3></center>

            <form method="post" action="{{ url('/checkadminlogin') }}">
                @csrf
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="email" placeholder="Enter Email" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="" placeholder="Password">
              </div>

              <div class="form-group">
                <div class="field-outer">
                  <div class="input-group checkboxes square">
                    <input type="checkbox" name="remember-me" value="" id="remember">
                    <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
                  </div>
                  <a href="#" class="pwd">Forgot password?</a>
                </div>
              </div>

              <div class="form-group">
                <button class="theme-btn btn-style-one" type="submit" name="log-in">Log In</button>
              </div>
            </form>

            
              </div>
            </div>
          </div>
        </div>
        <!--End Login Form -->
      </div>
    </div>
    <!-- End Info Section -->


  </div><!-- End Page Wrapper -->
 


 
  @include('admin.layouts.footer')