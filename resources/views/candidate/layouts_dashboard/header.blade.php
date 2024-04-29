<!-- Header start --> 

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-12 col-12"> <a href="https://eudyoga.com" class="logo"><img src="{{ URL::to('/') }}/assets/sitesetting_images/thumb/e-udyoga-1686326468-762.png" alt="E-Udyoga" /></a>
                <div class="navbar-header navbar-light">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i></button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-10 col-md-12 col-12"> 

                <!-- Nav start -->
                <nav class="navbar navbar-expand-lg navbar-light">

                    <div class="navbar-collapse collapse" id="nav-main">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "><a href="{{ url('/') }}" class="nav-link">Home</a> </li>
                            
                            
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Candidate Profile</a> </li>
                            
                            <li class="nav-item "><a href="{{ url('/') }}" class="nav-link">About Us</a> </li>
                            <li class="nav-item "><a href="{{ url('/') }}" class="nav-link">Terms &amp; Conditions</a> </li>
                            <li class="nav-item "><a href="{{ url('/') }}" class="nav-link">Privacy Policy</a> </li>
                            <li class="nav-item "><a href="{{ url('/') }}" class="nav-link">Refund_Policy</a> </li>

                            <li class="nav-item "><a href="{{ url('/') }}" class="nav-link">Contact us</a> </li>
                            <li class="nav-item postjob"><a href="{{ url('/') }}"" class="nav-link register">Post a job</a> </li>
                            <li class="nav-item dropdown userbtn"><a href=""><img src="{{ URL::to('/') }}/assets/company_logos/guru-swamy-1702037951-933.jpg"  alt="MSBP  ZONE" title="MSBP  ZONE"></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
                                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Company Profile</a></li>
                                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> Post Job</a></li>
                                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-envelope-o" aria-hidden="true"></i> Company Messages</a></li>
                                    <li class="nav-item"><a href="{{ url('/candidatelogout') }}" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a> </li>
                                    
                                       
                                </ul>
                            </li>
                            <li class="dropdown userbtn"><a href="https://eudyoga.com"><img src="{{ URL::to('/') }}/assets/images/lang.png" alt="" class="userimg" /></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-en').submit();" class="nav-link">English</a>
                                        <form id="locale-form-en" action="https://eudyoga.com/set-locale" method="POST" style="display: none;">
                                            <!-- <input type="hidden" name="_token" value="5llEjXHJelpBjXJ00yM1IP4O8WrDR9LLUNSC6YOR"> -->
                                            <input type="hidden" name="locale" value="en"/>
                                            <input type="hidden" name="return_url" value="https://eudyoga.com/company-home"/>
                                            <input type="hidden" name="is_rtl" value="0"/>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Nav collapes end --> 

                    </div>
                    <div class="clearfix"></div>
                </nav>

                <!-- Nav end --> 

            </div>
        </div>

        <!-- row end --> 

    </div>

    <!-- Header container end --> 

</div>








<!-- Header end --> 