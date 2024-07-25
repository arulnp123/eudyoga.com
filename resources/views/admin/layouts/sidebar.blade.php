 <!--sidebar wrapper -->
 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ URL::to('/') }}/assets1/images/fav_icon.png" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text">Eudyoga.com</h4>
         </div>
         <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">

         <li>
             <a href="{{ url('dashboard_admin') }}">
                 <div class="parent-icon"><i class='bx bx-home-alt'></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>
         </li>
         <li>
             <a href="{{ url('advertisement') }}">
                 <div class="parent-icon"><i class='bx bx-home-alt'></i>
                 </div>
                 <div class="menu-title">Advertisement</div>
             </a>
         </li>
         <li class="parent-icon">ADMIN USERS</li>
         <li>
             <a href="javascript:;" class="has-arrow" onclick="toggleDropdown('adminUsersDropdown')">
                 <div class="parent-icon"><i class="bi bi-person"></i>
                 </div>

                 <div class="menu-title">Admin Users</div>
             </a>
             <ul>

                 <li> <a href="{{ url('list_admin_users') }}"><i class='bx bx-radio-circle'></i>List Admin</a>
                 </li>
                 <!--<li> <a href="{{ url('add_admin_users') }}"><i class='bx bx-radio-circle'></i>Add Admin</a>
                 </li>-->

             </ul>
         </li>
         <li class="parent-icon">MODULES</li>
         <li>
             <a href="javascript:;" class="has-arrow" onclick="toggleDropdown('adminUsersDropdown')">
                 <div class="parent-icon"><i class="bi bi-briefcase"></i>
                 </div>
                 <div class="menu-title">Jobs</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_jobs') }}"><i class='bx bx-radio-circle'></i>List Jobs</a>
                 </li>
                 <li> <a href="{{ url('add_jobs') }}"><i class='bx bx-radio-circle'></i>Add Jobs</a>
                 </li>


             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-person-check-fill"></i>
                 </div>
                 <div class="menu-title">Employer</div>
             </a>
             <ul>
                 <li> <a href="{{ url('employer_list') }}"><i class='bx bx-radio-circle'></i>List Employer</a>
                 </li>
                 <li> <a href="{{ url('employer_add') }}"><i class='bx bx-radio-circle'></i>Add Employer</a>
                 </li>
                 <li> <a href="{{ url('employer_payment_history') }}"><i class='bx bx-radio-circle'></i>Employer Payment
                         History</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-person-circle"></i>
                 </div>
                 <div class="menu-title">Candidate Profile</div>
             </a>
             <ul>
                 <li> <a href="{{ url('candidate_list') }}"><i class='bx bx-radio-circle'></i>List Candidate
                         Profile</a>
                 </li>
                 <li> <a href="{{ url('candidate_add') }}"><i class='bx bx-radio-circle'></i>Add Candidate Profile</a>
                 </li>

             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-file-text"></i>
                 </div>
                 <div class="menu-title">C.M.S</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_cms') }}"><i class='bx bx-radio-circle'></i>List C.M.S Pages</a>
                 </li>
                 <li> <a href="{{ url('add_cms') }}"><i class='bx bx-radio-circle'></i>Add new C.M.S Page</a>
                 </li>
                 <li> <a href="{{ url('list_translated_pages') }}"><i class='bx bx-radio-circle'></i>List Translated
                         Page</a>
                 </li>
                 <li> <a href="{{ url('add_translated_pages') }}"><i class='bx bx-radio-circle'></i>Add new Translated
                         Pages</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-sort-up"></i>
                 </div>
                 <div class="menu-title">Manage Blogs</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_blogs') }}"><i class='bx bx-radio-circle'></i>List Blogs</a>
                 </li>
                 <li> <a href="{{ url('add_blogs') }}"><i class='bx bx-radio-circle'></i>Add Blogs</a>
                 </li>
                 <li> <a href="{{ url('categories') }}"><i class='bx bx-radio-circle'></i>Categories</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-graph-up"></i>
                 </div>
                 <div class="menu-title">S.E.O</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_seo') }}"><i class='bx bx-radio-circle'></i>List S.E.O pages</a>
                 </li>

             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-question-circle"></i>
                 </div>
                 <div class="menu-title">FAQs</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_faqs') }}"><i class='bx bx-radio-circle'></i>List FAQs</a>
                 </li>
                 <li> <a href="{{ url('add_faqs') }}"><i class='bx bx-radio-circle'></i>Add new FAQs</a>
                 </li>
                 <li> <a href="{{ url('sort_faqs') }}"><i class='bx bx-radio-circle'></i>Sort FAQs</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-camera"></i>
                 </div>
                 <div class="menu-title">Home Page Video</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_video_language') }}"><i class='bx bx-radio-circle'></i>List video
                         language</a>
                 </li>
                 <li> <a href="{{ url('add_video_language') }}"><i class='bx bx-radio-circle'></i>Add new Video
                         language</a>
                 </li>

             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-file-text"></i>
                 </div>
                 <div class="menu-title">Testimonial</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_testimonial') }}"><i class='bx bx-radio-circle'></i>list Testimonial</a>
                 </li>
                 <li> <a href="{{ url('add_testimonial') }}"><i class='bx bx-radio-circle'></i>Add new
                         Testimonial</a>
                 </li>
                 <li> <a href="{{ url('sort_testimonial') }}"><i class='bx bx-radio-circle'></i>Sort Testimonial</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-sliders"></i>
                 </div>
                 <div class="menu-title">Slider</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_slider') }}"><i class='bx bx-radio-circle'></i>list Slider</a>
                 </li>
                 <li> <a href="{{ url('add_slider') }}"><i class='bx bx-radio-circle'></i>Add new Slider</a>
                 </li>
                 <li> <a href="{{ url('sort_slider') }}"><i class='bx bx-radio-circle'></i>Sort Slider</a>
                 </li>
             </ul>
         </li>
         <li class="parent-icon">TRANSLATION</li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                         <path
                             d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z" />
                         <path
                             d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31" />
                     </svg>
                 </div>
                 <div class="menu-title">Languages</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_language') }}"><i class='bx bx-radio-circle'></i>List Languages</a>
                 </li>
                 <li> <a href="{{ url('add_language') }}"><i class='bx bx-radio-circle'></i>Add new Language</a>
                 </li>
             </ul>
         </li>
         <li class="parent-icon">MANAGE LOCATION</li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                  </svg></i>
                 </div>
                 <div class="menu-title">Countries</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_countries') }}"><i class='bx bx-radio-circle'></i>List Countries</a>
                 </li>
                 <li> <a href="{{ url('add_country') }}"><i class='bx bx-radio-circle'></i>Add new Country</a>
                 </li>

             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                  </svg></i>
                 </div>
                 <div class="menu-title">Country Details</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_country_details') }}"><i class='bx bx-radio-circle'></i>List Country
                         Details</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="{{ url('states') }}">
                 <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                  </svg></i>
                 </div>
                 <div class="menu-title">States</div>
             </a>
         </li>
         <li>
             <a href="{{ url('cities') }}">
                 <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                  </svg></i>
                 </div>
                 <div class="menu-title">cities</div>
             </a>
         </li>
         <li>
             <!-- <a href="javascript:;" class="has-arrow"> -->
             <!-- <div class="parent-icon"><i class='bx bx-home-alt'></i> -->
             <!-- </div> -->
             <!-- <a href="{{ url('add_country') }}"><i class='bx bx-radio-circle'></i>States</a> -->
             <!-- </a> -->
             <!-- <ul>
            <li> <a href="{{ url('list_cities') }}"><i class='bx bx-radio-circle'></i>List Cities</a>
            </li>
            <li> <a href="{{ url('add_city') }}"><i class='bx bx-radio-circle'></i>Add new City</a>
            </li>
          </ul> -->
         </li>
         <li class="parent-icon">USER PACKAGES</li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-cash"></i>
                 </div>
                 <div class="menu-title">Packages</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_packages') }}"><i class='bx bx-radio-circle'></i>List Packages</a>
                 </li>
                 <li> <a href="{{ url('add_packages') }}"><i class='bx bx-radio-circle'></i>Add new Packages</a>
                 </li>
             </ul>
         </li>
         <li class="parent-icon">JOB ATTRIBUTES</li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>
                 </div>
                 <div class="menu-title">Language Levels</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_language_level') }}"><i class='bx bx-radio-circle'></i>List Language
                         Levels</a>
                 </li>
                 <li> <a href="{{ url('add_language_level') }}"><i class='bx bx-radio-circle'></i>Add new Language
                         Level</a>
                 </li>
                 <li> <a href="{{ url('sort_language_level') }}"><i class='bx bx-radio-circle'></i>sort language
                         Levels</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>
                 </div>
                 <div class="menu-title">Career Levels</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_carrer_level') }}"><i class='bx bx-radio-circle'></i>List Carrer
                         Levels</a>
                 </li>
                 <li> <a href="{{ url('add_carrer_level') }}"><i class='bx bx-radio-circle'></i>Add new Carrer
                         Level</a>
                 </li>
                 <li> <a href="{{ url('sort_carrer_level') }}"><i class='bx bx-radio-circle'></i>sort Carrer
                         Levels</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                         <path
                             d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
                     </svg>
                 </div>
                 <div class="menu-title">Functional Areas</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_functional_areas') }}"><i class='bx bx-radio-circle'></i>List Functional
                         Areas</a>
                 </li>
                 <li> <a href="{{ url('add_functional_area') }}"><i class='bx bx-radio-circle'></i>Add new Functional
                         Area</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                         <path fill-rule="evenodd"
                             d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5" />
                     </svg>
                 </div>
                 <div class="menu-title">Gender</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_genders') }}"><i class='bx bx-radio-circle'></i>List Genders</a>
                 </li>
                 <li> <a href="{{ url('add_genders') }}"><i class='bx bx-radio-circle'></i>Add new Gender</a>
                 </li>
                 <li> <a href="{{ url('sort_genders') }}"><i class='bx bx-radio-circle'></i>Sort Gender</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-building"></i>
                 </div>
                 <div class="menu-title">Industries</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_industries') }}"><i class='bx bx-radio-circle'></i>List Industries</a>
                 </li>
                 <li> <a href="{{ url('add_industries') }}"><i class='bx bx-radio-circle'></i>Add new Industries</a>
                 </li>
                 <li> <a href="{{ url('sort_industries') }}"><i class='bx bx-radio-circle'></i>Sort Industries</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-pie-chart-fill"></i>
                 </div>
                 <div class="menu-title">Job Experience</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_job_experiance') }}"><i class='bx bx-radio-circle'></i>List Job
                         Experience</a>
                 </li>
                 <li> <a href="{{ url('add_job_experiance') }}"><i class='bx bx-radio-circle'></i>Add new Job
                         Experience</a>
                 </li>
                 <li> <a href="{{ url('sort_job_experiance') }}"><i class='bx bx-radio-circle'></i>Sort Job
                         Experience</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-bar-chart-line"></i>
                 </div>
                 <div class="menu-title">Job Skills</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_job_skills') }}"><i class='bx bx-radio-circle'></i>List Job Skills</a>
                 </li>
                 <li> <a href="{{ url('add_job_skills') }}"><i class='bx bx-radio-circle'></i>Add new Job Skills</a>
                 </li>
                 <li> <a href="{{ url('sort_job_skills') }}"><i class='bx bx-radio-circle'></i>Sort Job Skills</a>
                 </li>
             </ul>
         </li>


         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-briefcase-fill"></i>
                 </div>
                 <div class="menu-title">Job Types</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_job_types') }}"><i class='bx bx-radio-circle'></i>List Job Types</a>
                 </li>
                 <li> <a href="{{ url('add_jobtypes') }}"><i class='bx bx-radio-circle'></i>Add new Job Types</a>
                 </li>
                 <li> <a href="{{ url('sort_jobtypes') }}"><i class='bx bx-radio-circle'></i>Sort Job Types</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">


                 <div class="parent-icon">
                     <i class="bi bi-journal-code"></i></div>
                 {{-- <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video3" viewBox="0 0 16 16">
                    <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2"/>
                    <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783Q16 12.312 16 12V4a2 2 0 0 0-2-2z"/>
                  </svg>
                 </div> --}}
                 <div class="menu-title">Job Shifts</div>
                 
             </a>
             <ul>
                 <li> <a href="{{ url('list_jobshifts') }}"><i class='bx bx-radio-circle'></i>List Job Shifts</a>
                 </li>
                 <li> <a href="{{ url('add_jobshifts') }}"><i class='bx bx-radio-circle'></i>Add new Job Shifts</a>
                 </li>
                 <li> <a href="{{ url('sort_jobshifts') }}"><i class='bx bx-radio-circle'></i>Sort Job Shifts</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-graph-up"></i>
                 </div>
                 <div class="menu-title">Degree Levels</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_degree_levels') }}"><i class='bx bx-radio-circle'></i>List Degree
                         Levels</a>
                 </li>
                 <li> <a href="{{ url('add_degree_levels') }}"><i class='bx bx-radio-circle'></i>Add New Degree
                         Level</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-file-earmark"></i>
                 </div>
                 <div class="menu-title">Degree Types</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_degree_types') }}"><i class='bx bx-radio-circle'></i>List Degree
                         Types</a>
                 </li>
                 <li> <a href="{{ url('add_degree_types') }}"><i class='bx bx-radio-circle'></i>Add New Degree
                         Types</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-book"></i>
                 </div>
                 <div class="menu-title">Major Subjects</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_major_subjects') }}"><i class='bx bx-radio-circle'></i>List Major
                         Subjects</a>
                 </li>
                 <li> <a href="{{ url('add_major_subject') }}"><i class='bx bx-radio-circle'></i>Add New Major
                         Subject</a>
                 </li>
                 <li> <a href="{{ url('sort_major_subject') }}"><i class='bx bx-radio-circle'></i>Sort Major
                         Subject</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-bootstrap-reboot"></i>
                 </div>
                 <div class="menu-title">Result Types</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_result_types') }}"><i class='bx bx-radio-circle'></i>List Result
                         Types</a>
                 </li>
                 <li> <a href="{{ url('add_new_type') }}"><i class='bx bx-radio-circle'></i>Add New Result Type</a>
                 </li>
                 <li> <a href="{{ url('sort_result_types') }}"><i class='bx bx-radio-circle'></i>Sort Result
                         Types</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-check2-all"></i>
                 </div>
                 <div class="menu-title">Marital Statuses</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_marital_status') }}"><i class='bx bx-radio-circle'></i>List Marital
                         Status</a>
                 </li>
                 <li> <a href="{{ url('add_marital_status') }}"><i class='bx bx-radio-circle'></i>Add New Marital
                         status</a>
                 </li>
                 <li> <a href="{{ url('sort_marital_status') }}"><i class='bx bx-radio-circle'></i>Sort Marital
                         Statuses</a>
                 </li>
             </ul>
         </li>


         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-person-fill"></i>
                 </div>
                 <div class="menu-title">Ownership Types</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_ownership_types') }}"><i class='bx bx-radio-circle'></i>List Ownership
                         Types</a>
                 </li>
                 <li> <a href="{{ url('add_ownership_types') }}"><i class='bx bx-radio-circle'></i>Add New Ownership
                         type</a>
                 </li>
                 <li> <a href="{{ url('sort_ownership_types') }}"><i class='bx bx-radio-circle'></i>Sort Ownership
                         Types</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="bi bi-cash"></i>
                 </div>
                 <div class="menu-title">Salary Periods</div>
             </a>
             <ul>
                 <li> <a href="{{ url('list_salary_periods') }}"><i class='bx bx-radio-circle'></i>List Salary
                         Periods</a>
                 </li>
                 <li> <a href="{{ url('add_salary_periods') }}"><i class='bx bx-radio-circle'></i>Add New Salary
                         Period</a>
                 </li>
                 <li> <a href="{{ url('sort_salary_periods') }}"><i class='bx bx-radio-circle'></i>Sort Salary
                         Periods</a>
                 </li>
             </ul>
         </li>
         <li class="parent-icon">MANAGE</li>
         <li>
             <a href="{{ url('site_settings') }}">
                 <div class="parent-icon"><i class="bi bi-wrench"></i>
                 </div>
                 <div class="menu-title">Site Settings</div>
             </a>
         </li>

     </ul>
 </div>

 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>


 <script>
     document.addEventListener("DOMContentLoaded", function() {
         let activeDropdown = localStorage.getItem("activeDropdown");
         if (activeDropdown) {
             document.getElementById(activeDropdown).classList.add("show");
         }
     });

     function toggleDropdown(dropdownId) {
         const dropdown = document.getElementById(dropdownId);
         const dropdownContent = dropdown.querySelector('.dropdown-content');

         // Toggle the 'show' class on the dropdown content
         dropdownContent.classList.toggle('show');

         // Save the active dropdown in localStorage
         localStorage.setItem("activeDropdown", dropdownId);
     }
 </script>
