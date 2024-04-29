<!-- Inner Page Title start --> 

<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Dashboard</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="{{ url('/employer_dashboard') }}">Home</a> / <span>Dashboard</span></div>
            </div>
        </div>
    </div>
</div> 

<!-- Inner Page Title end -->
<div class="listpgWraper">

    <div class="container">
        <div class="row"> <div class="col-lg-3">
    <div class="usernavwrap">
    <ul class="usernavdash">
        <li class="active"><a href=""><i class="fas fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
        <li class=""><a href="{{ url('/') }}"><i class="fas fa-pencil" aria-hidden="true"></i> Edit Profile</a></li>
        <li><a href="{{ url('employer_profile') }}"><i class="fas fa-user-alt" aria-hidden="true"></i> Company Public Profile</a></li>
        <li class=""><a href="{{ url('/') }}"><i class="fas fa-desktop" aria-hidden="true"></i> Post Job</a></li>
        <li class=""><a href="{{ url('/') }}"><i class="fab fa-black-tie"></i> Company Jobs</a></li>

        <li class=""><a href="{{ url('/') }}"><i class="fas fa-search" aria-hidden="true"></i> CV Search Packages</a></li>
        
        <li class=""><a href="{{ url('/') }}"><i class="fas fa-user" aria-hidden="true"></i> Unlocked Users</a></li>

        <li class=""><a href="{{ url('/') }}"><i class="fas fa-envelope" aria-hidden="true"></i> Company Messages</a></li>
        <li class=""><a href="{{ url('/') }}"><i class="fas fa-users" aria-hidden="true"></i> Company Followers</a></li>
        <li><a href="{{ url('/employerlogout') }}"><i class="fas fa-sign-out" aria-hidden="true"></i> Logout</a>
            
        </li>
    </ul>
    </div>
    <div class="row">
        <div class="col-md-12"><img src="{{ URL::to('/') }}/assets/images/banner1.jpg">.</div>
    </div>
</div>
            <div class="col-md-9 col-sm-8"> <ul class="row profilestat">
    <li class="col-md-4 col-6">
        <div class="inbox"> <i class="fas fa-clock" aria-hidden="true"></i>
            <h6><a href="{{ url('/') }}">0</a></h6>
            <strong>Open Jobs</strong> </div>
    </li>
    <li class="col-md-4 col-6">
        <div class="inbox"> <i class="fas fa-user" aria-hidden="true"></i>
            <h6><a href="{{ url('/') }}">0</a></h6>
            <strong>Followers</strong> </div>
    </li>
     <li class="col-md-4 col-6">
        <div class="inbox"> <i class="fas fa-envelope" aria-hidden="true"></i>
            <h6><a href="{{ url('/') }}">0</a></h6>
            <strong>Messages</strong> </div>
    </li>
</ul>
        
        

        
        <div class="instoretxt">
    <div class="credit">Your Package is: <strong>Free package - INR0</strong></div>
    <div class="credit">Package Duration : <strong>14 Dec, 2023</strong> - <strong>13 Jan, 2024</strong></div>
    <div class="credit">Availed quota : <strong>0</strong> / <strong>99</strong></div>

</div>

        <div class="paypackages"> 
