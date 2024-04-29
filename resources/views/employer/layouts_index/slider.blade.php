<!-- Inner Page Title start --> 
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Company Profile</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="{{url('index')}}">Home</a> / <span>Company Profile</span></div>
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
    <ul class="usernavdash">
        <li class="active"><a href=""><i class="fas fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
        <li class=""><a href="{{ url('/basic_detials') }}"><i class="fa-solid fa-info" aria-hidden="true"></i> Basic Details</a></li>
        <li class=""><a href="{{ url('/edit_profile') }}"><i class="fas fa-pencil" aria-hidden="true"></i> Edit Profile</a></li>
       
        {{-- <li><a href="{{ url('company_public_profile') }}"><i class="fas fa-user-alt" aria-hidden="true"></i> Company Public Profile</a></li> --}}
        <li class="nav-item"><a href="{{ url('/candiate_profile') }}"><i class="fas fa-user-alt" aria-hidden="true"></i>Candidate Profile</a> </li>

        <li class=""><a href="{{ url('/post_job') }}"><i class="fas fa-desktop" aria-hidden="true"></i> Post Job</a></li>
        <li class=""><a href="{{ url('/company_jobs') }}"><i class="fab fa-black-tie"></i> Company Jobs</a></li>

        <li class=""><a href="{{ url('/cv_search_packages') }}"><i class="fas fa-search" aria-hidden="true"></i> CV Search Packages</a></li>
        
        <li class=""><a href="{{ url('/unlocked_users') }}"><i class="fas fa-user" aria-hidden="true"></i> Unlocked Users</a></li>

        <li class=""><a href="{{ url('/company_messages') }}"><i class="fas fa-envelope" aria-hidden="true"></i> Company Messages</a></li>
        <li class=""><a href="{{ url('/company_followers') }}"><i class="fas fa-users" aria-hidden="true"></i> Company Followers</a></li>
        <li><a href="{{url('/')}}"><i class="fas fa-sign-out" aria-hidden="true"></i> Logout</a>
          
        </li>
    </ul>
    </div>
     <div class="row">
        <div class="col-md-12"><img src="{{ URL::to('/') }}/assets/images/banner1.jpg">.</div>
    </div>
</div>
  <div class="col-md-9 col-sm-8"> 
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>