<!-- Inner Page Title start --> 
<!-- Header end --> 
<!-- Inner Page Title start --> 
<div class="pageTitle">
    <div class="container">
        <div class="row">
        
            <div class="col-md-5 col-sm-6">
                <h1 class="page-heading"> @if ($userFirstName)
                    <p>Welcome, {{ $userFirstName }}</p>
                @else
                    <p>Welcome, Guest</p>
                @endif</h1>
            </div>
            <div class="col-md-7 col-sm-6">
              
                <div class="breadCrumb"><a href="{{url('/')}}">Home</a> / <span>My Profile</span></div>
            </div>
        </div>
    </div>
</div> 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
    <div class="usernavwrap">
    <div class="switchbox">
        <div class="txtlbl">Immediate Available <i class="fas fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Are you immediate available?" data-original-title="Are you immediate available?" title="Are you immediate available?"></i>
        </div>
        <div class="">
            <label class="switch switch-green">                 <input type="checkbox" name="is_immediate_available" id="is_immediate_available" class="switch-input" checked=&quot;checked&quot; onchange="changeImmediateAvailableStatus(674, 1);">
                <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span> </label>
        </div>
        <div class="clearfix"></div>
    </div>
    <ul class="usernavdash">
        <li class="active"><a href="{{url('/')}}"><i class="fas fa-tachometer" aria-hidden="true"></i> Dashboard</a>
        </li>
        <li class=""><a href="{{ url('/basicdetialscandidate') }}"><i class="fa-solid fa-info" aria-hidden="true"></i> Basic Details</a></li>
        <li class=""><a href="{{url('/edit_profile_candidate')}}"><i class="fas fa-pencil" aria-hidden="true"></i> Edit Profile</a>
        </li>
        <li><a href="{{url('/print_resume')}}"><i class="fa fa-print" aria-hidden="true"></i> Print Resume</a></li>
        <li><a href="{{url('/view_public_profile')}}"><i class="fas fa-eye" aria-hidden="true"></i> View Public Profile</a>
        </li>
       
        
        <li class="nav-item"><a href="{{ url('/jobs') }}" class="nav-link"><i class="fa-solid fa-briefcase"></i>Jobs</a></li>
                            
        <li class="nav-item "><a href="{{ url('/companies') }}" class="nav-link"><i class="fa fa-building"></i>Companies</a> </li>

        {{-- <li class=""><a href="{{url('/my_job_application')}}"><i class="fas fa-desktop" aria-hidden="true"></i> My Job Applications</a> --}}
        </li>
        <li class=""><a href="{{url('/my_favourite_jobs')}}"><i class="fas fa-heart" aria-hidden="true"></i> My Favourite Jobs</a>
        </li>
        {{-- <li class=""><a href="{{url('/my_job_alerts')}}"><i class="fas fa-bullhorn" aria-hidden="true"></i> My Job Alerts</a> --}}
        </li>
        <li><a href="{{url('/manage_resume')}}"><i class="fas fa-file" aria-hidden="true"></i> Manage Resume</a>
        </li>
        <!--<li class=""><a href="{{url('/my_mesages')}}"><i class="fas fa-envelope" aria-hidden="true"></i> My Messages</a>-->
        <!--</li>-->
        <!--<li class=""><a href="{{url('/my_followings')}}"><i class="fas fa-user" aria-hidden="true"></i> My Followings</a>-->
        <!--</li>-->
       <li><a href="{{url('/')}}"><i class="fas fa-sign-out" aria-hidden="true"></i> Logout</a>
          
        </li>
    </ul>
        </div>
    <div class="row">
        <div class="col-md-12"><img src="{{ URL::to('/') }}/assets/images/banner1.jpg"></div>
    </div>
        
</div>
  <div class="col-md-9 col-sm-8"> 
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>