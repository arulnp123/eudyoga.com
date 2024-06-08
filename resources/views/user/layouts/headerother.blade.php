<!-- Header start -->
<div class="header">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-2 col-md-12 col-12">
               <a href="index.html" class="logo"><img
                       src="{{ URL::to('/') }}/assets/sitesetting_images/thumb/e-udyoga-1686326468-762.png"
                       alt="E-Udyoga" /></a>
               <div class="navbar-header navbar-light">
                   <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                       data-target="#nav-main" aria-controls="nav-main" aria-expanded="false"
                       aria-label="Toggle navigation"> <i class="fas fa-bars"></i></button>
               </div>
               <div class="clearfix"></div>
           </div>
           <div class="col-lg-10 col-md-12 col-12">
               <!-- Nav start -->
               <nav class="navbar navbar-expand-lg navbar-light">
                   <div class="navbar-collapse collapse" id="nav-main">
                       <ul class="navbar-nav ml-auto">
                           <!-- Your navigation items -->
                           <!-- Home -->
                           <li class="nav-item">
                               <a id="Viewindex" href="{{ route('index') }}"
                                   class="nav-link {{ request()->is('index') ? 'active' : '' }}">
                                   <p>Home</p>
                               </a>
                           </li>
                           <!-- Jobs -->
                           <li class="nav-item">
                               <a id="Viewjobs" href="{{ route('jobs') }}"
                                   class="nav-link {{ request()->is('jobs') ? 'active' : '' }}">
                                   <p>Jobs</p>
                               </a>
                           </li>
                           <!-- Companies -->
                           <li class="nav-item">
                               <a id="Viewcompanies" href="{{ route('companies') }}"
                                   class="nav-link {{ request()->is('companies') ? 'active' : '' }}">
                                   <p>Companies</p>
                               </a>
                           </li>
                           <!-- About Us -->
                           <li class="nav-item">
                               <a id="Viewabout_us" href="{{ route('about_us') }}"
                                   class="nav-link {{ request()->is('about_us') ? 'active' : '' }}">
                                   <p>About Us</p>
                               </a>
                           </li>
                           <!-- Contact Us -->
                           <li class="nav-item">
                               <a id="Viewcontact_us" href="{{ route('contact_us') }}"
                                   class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}">
                                   <p>Contact us</p>
                               </a>
                           </li>
                           <!-- Profile and Logout Button -->
                           @if (session()->has('user_type_id'))
                               @if (session()->get('user_type_id') == 3)
                                   <li class="nav-item">
                                       <a id="Viewcandidate_login" href="{{ route('candidate_index') }}"
                                           class="nav-link {{ request()->is('candidate_login') ? 'active' : '' }}">
                                           <p>Profile</p>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ route('candidatelogout') }}"
                                           class="nav-link">
                                           <p>Logout</p>
                                       </a>
                                   </li>
                               @elseif (session()->get('user_type_id') == 2)
                                   <li class="nav-item">
                                       <a id="Viewemployer_login" href="{{ route('employer_login') }}"
                                           class="nav-link {{ request()->is('employer_login') ? 'active' : '' }}">
                                           <p>Profile</p>
                                       </a>
                                   </li>
                                   {{-- <li class="nav-item">
                                       <a href="{{ route('employerlogout') }}"
                                           class="nav-link">
                                           <p>Logout</p>
                                       </a>
                                   </li> --}}
                               @endif
                           @else
                               <!-- Sign In Links -->
                               <li class="nav-item">
                                <a href="{{ route('candidatelogout') }}"
                                    class="nav-link">
                                    <p>Logout</p>
                                </a>
                            </li>
                           @endif
                       </ul>
                       <!-- Nav collapse end -->
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
