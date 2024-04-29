  @extends('Admin/layouts.app')
  @section('content')
  <!-- Dashboard -->
  
  <!-- Dashboard -->
  <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          {{-- <h3>Post a New Job!</h3>
          <div class="text">Ready to jump back in?</div> --}}
          
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Post Job</h4>

                  
                </div>

                <div class="widget-content">

                

                  <div class="post-job-steps">
                    <div class="step">
                      <span class="icon flaticon-briefcase"></span>
                      <h5>Job Detail</h5>
                    </div>

                    <div class="step">
                      <span class="icon flaticon-money"></span>
                      <h5>Package & Payments</h5>
                    </div>

                    <div class="step">
                      <span class="icon flaticon-checked"></span>
                      <h5>Confirmation</h5>
                    </div>
                  </div>
                  <form class="default-form"action="{{ url('/admin_post_jobs') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Company  Name</label>
                        <input type="text" name="cname" @required(true)  placeholder="company name" >
                      </div>

                      <!-- About Company -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Tittle</label>
                        <input type="text" name="jtittle" @required(true)  placeholder="Job tittle">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Company Location</label>
                        <input type="text" name="clocat" @required(true)  placeholder="company location">
                      </div>

                      <!-- About Company -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Location</label>
                        <input type="text" name="jlocat" @required(true)  placeholder="Job location">
                      </div>


                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Phone</label>
                        <input type="text" name="phone" @required(true)  placeholder="phone number">
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Email</label>
                        <input type="text" name="email" @required(true)  placeholder="email">
                      </div>

                       <!-- About Company -->
                       <div class="form-group col-lg-12 col-md-12">
                        <label>Job Description</label>
                        <textarea type="text" name="jobdesc" @required(true)  placeholder="job description"></textarea>
                      </div>

                        <!-- About Company -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Key Responsibilities</label>
                        <textarea type="text" name="keyres" @required(true)  placeholder="Key Responsibilities"></textarea>
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Skill & Experience</label>
                        <textarea type="text" name="skillres" @required(true)  placeholder="Skill & Experience"></textarea>
                      </div>
                    
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Type</label>
                        <select class="chosen-select"name="jtype" type="text"  @required(true)  placeholder="job type">
                          <option value="Full Time">Full Time</option>
                          <option value="Part Time">Part Time</option>
                          <option value="Temporary">Temporary</option>
                        </select>
                      </div>

                      <!-- Search Select -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Category </label>
                        <select class="chosen-select"name="jcateg" type="text"  @required(true)  placeholder="job category">
                          <option value="" disabled selected>Select Job Category</option>
                          @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                        </select>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Skills Needed</label>
                        <input type="text" name="skillneed" @required(true)  placeholder="php,java,html,.................">
                      </div>

                        <!-- About Company -->
                        <div class="form-group col-lg-6 col-md-12">
                        <label>Experience</label>
                        <input type="text" name="expere" @required(true)  placeholder="0-0">
                      </div>
                      <div class="form-group col-lg-4 col-md-12">
                        <label>Gender</label>
                        <select class="chosen-select"name="gend" type="text"  @required(true)  placeholder="gender">
                          <option value="No preference">No preference</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>

                      <!-- About Company -->
                      <div class="form-group col-lg-4 col-md-12">
                        <label>Posistion Available</label>
                        <input type="text" name="posavail" @required(true)  placeholder="number of candidates needed ">
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-4 col-md-12">
                        <label>Application Deadline Date</label>
                        <input type="text" name="deadline" @required(true)  placeholder="DD.MM.YYYY">

                        <input type="hidden" name="status"   value="Active">

                      </div>

                     

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Salary</label>
                        <input type="text" name="salary" @required(true)  placeholder="1k-2k">
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Company Websites (optional)</label>
                        <input type="text" name="webs"   placeholder="Websites name">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Sector</label>
                        <select class="chosen-select"name="jobsec" type="text"  @required(true)  placeholder="job category">
                          <option value="Private">Private</option>
                          <option value="Government">Government</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Industry</label>
                        <select class="chosen-select"name="induistr" type="text"  @required(true)  placeholder="job category">
                          <option value="" disabled selected>Select Industry</option>
                          @foreach($industries as $indus)
                          <option value="Banking">{{ $indus->industries_name }}</option>
                         @endforeach
                        </select>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Qualification</label>
                        <select class="chosen-select"name="qualif" type="text"  @required(true)  placeholder="Qualification">
                          <option value="" disabled selected>Select Qualification</option>
                          @foreach ($education as $educate)
                              <option value="{{ $educate->name }}">{{ $educate->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Country</label>
                        <select class="chosen-select"name="count" type="text"  @required(true)  placeholder="Country">
                          <option value="India">India</option>
                          <option value="Australia">Australia</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Chaina">Chaina</option>
                          <option value="Japan">Japan</option>
                        </select>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12">
                        <label>Complete Address</label>
                        <input type="text" name="caddres" @required(true)  placeholder="Address">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12 text-right">
                        <button class="theme-btn btn-style-one">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- End Dashboard -->

    <!-- End Dashboard -->
    @endsection