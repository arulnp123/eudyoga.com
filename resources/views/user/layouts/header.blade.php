<!-- Header start -->
<div class="header">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-2 col-md-12 col-12">
             <a href="index.html" class="logo"><img src="{{ URL::to('/') }}/assets/sitesetting_images/thumb/e-udyoga-1686326468-762.png" alt="E-Udyoga" /></a>
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
                      {{-- <li class="nav-item active"><a href="{{ url('index') }}" class="nav-link">Home</a> </li> --}}
                      <li class="nav-item">
                         <a id="Viewindex" href="{{ route('index') }}"
                             class="nav-link {{ request()->is('index') ? 'active' : '' }}">
                             {{-- <i class="far fa-circle nav-icon"></i> --}}
                             <p>Home</p>
                         </a>
                     </li>
                      {{-- <li class="nav-item"><a href="{{ url('jobs') }}" class="nav-link">Jobs</a> </li> --}}
                      <li class="nav-item">
                         <a id="Viewjobs" href="{{ route('jobs') }}"
                             class="nav-link {{ request()->is('jobs') ? 'active' : '' }}">
                             {{-- <i class="far fa-circle nav-icon"></i> --}}
                             <p>Jobs</p>
                         </a>
                     </li>
                      {{-- <li class="nav-item https://eudyoga.com"><a href="{{ url('companies') }}" class="nav-link">Companies</a> </li> --}}
                      <li class="nav-item">
                         <a id="Viewcompanies" href="{{ route('companies') }}"
                             class="nav-link {{ request()->is('companies') ? 'active' : '' }}">
                             {{-- <i class="far fa-circle nav-icon"></i> --}}
                             <p>Companies</p>
                         </a>
                     </li>
                      {{-- <li class="nav-item "><a href="{{ url('about_us') }}" class="nav-link">About Us</a> </li> --}}
                      <li class="nav-item">
                         <a id="Viewabout_us" href="{{ route('about_us') }}"
                             class="nav-link {{ request()->is('about_us') ? 'active' : '' }}">
                             {{-- <i class="far fa-circle nav-icon"></i> --}}
                             <p>About Us</p>
                         </a>
                     </li>
                      {{-- <li class="nav-item "><a href="{{ url('Terms_And_Conditions') }}" class="nav-link">Terms &amp; Conditions</a> </li>
                      <li class="nav-item "><a href="{{ url('Privacy_Policy') }}" class="nav-link">Privacy Policy</a> </li>
                      <li class="nav-item "><a href="{{ url('Refund_Policy') }}" class="nav-link">Refund_Policy</a> </li> --}}
                      {{-- <li class="nav-item "><a href="{{ url('contact_us') }}" class="nav-link">Contact us</a> </li> --}}
                      <li class="nav-item">
                         <a id="Viewcontact_us" href="{{ route('contact_us') }}"
                             class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}">
                             {{-- <i class="far fa-circle nav-icon"></i> --}}
                             <p>Contact us</p>
                         </a>
                     </li>
                      {{-- <li class="nav-item"><a href="{{ url('candidate_login') }}" class="nav-link">Candiate Sign in</a> </li> --}}
                      <li class="nav-item">
                         <a id="Viewcandidate_login" href="{{ route('candidate_login') }}"
                             class="nav-link {{ request()->is('candidate_login') ? 'active' : '' }}">
                             {{-- <i class="far fa-circle nav-icon"></i> --}}
                             <p>Candiate Sign in</p>
                         </a>
                     </li>
                      {{-- <li class="nav-item"><a href="{{ url('employer_login') }}" class="nav-link">Employer Sign in</a> </li> --}}
                      <li class="nav-item">
                         <a id="Viewemployer_login" href="{{ route('employer_login') }}"
                             class="nav-link {{ request()->is('employer_login') ? 'active' : '' }}">
                             {{-- <i class="far fa-circle nav-icon"></i> --}}
                             <p>Employer Sign in</p>
                         </a>
                     </li>
                      <li class="dropdown userbtn">
                         {{-- <a href="index"><img src="{{ URL::to('/') }}/assets/images/lang.png" alt="" class="userimg" /></a> --}}
                         {{-- <ul class="dropdown-menu">
                            <li>
                             @foreach($managelanguages as $key=>$managelanguageslist)
                                 <a href="javascript:;" class="nav-link">{{ $managelanguageslist->lang }}</a>
                             @endforeach
                              
                               
                               <form id="locale-form-en" action="https://eudyoga.com/set-locale" method="POST" style="display: none;">
                                  <input type="hidden" name="_token" value="wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8">
                                  <input type="hidden" name="locale" value="en"/>
                                  <input type="hidden" name="return_url" value="index.html"/>
                                  <input type="hidden" name="is_rtl" value="0"/>
                               </form>
                            </li>
                         </ul> --}}
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