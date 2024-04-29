@include('user/layouts.app')

@yield('content')


<!-- Header start -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-lg-2 col-md-12 col-12"> <a href="../index.html" class="logo"><img src="../public/sitesetting_images/thumb/e-udyoga-1686326468-762.png" alt="E-Udyoga" /></a>
					<div class="navbar-header navbar-light">
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i></button>
					</div>
					<div class="clearfix"></div>
				</div> -->
            <div class="col-lg-10 col-md-12 col-12">

                <!-- Nav start -->
                <!-- <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-collapse collapse" id="nav-main">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item "><a href="../index.html" class="nav-link">Home</a> </li>


                            <li class="nav-item"><a href="../jobs.html" class="nav-link">Jobs</a> </li>

                            <li class="nav-item https://eudyoga.com/cms/about-us"><a href="../companies.html"
                                    class="nav-link">Companies</a> </li>
                            <li class="nav-item active"><a href="about-us.html" class="nav-link">About Us</a> </li>
                            <li class="nav-item "><a href="Terms_And_Conditions.html" class="nav-link">Terms &amp;
                                    Conditions</a> </li>
                            <li class="nav-item "><a href="Privacy_Policy.html" class="nav-link">Privacy Policy</a>
                            </li>
                            <li class="nav-item "><a href="Refund_Policy.html" class="nav-link">Refund_Policy</a> </li>

                            <li class="nav-item "><a href="../contact-us.html" class="nav-link">Contact us</a> </li>
                            <li class="nav-item"><a href="../login.html" class="nav-link">Candiate Sign in</a> </li>
                            <li class="nav-item"><a href="../employer-login.html" class="nav-link">Employer Sign in</a>
                            </li>

                            <li class="dropdown userbtn"><a href="../index.html"><img src="../public/images/lang.png"
                                        alt="" class="userimg" /></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:;"
                                            onclick="event.preventDefault(); document.getElementById('locale-form-en').submit();"
                                            class="nav-link">English</a>
                                        <form id="locale-form-en" action="https://eudyoga.com/set-locale" method="POST"
                                            style="display: none;">
                                            <input type="hidden" name="_token"
                                                value="wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8">
                                            <input type="hidden" name="locale" value="en" />
                                            <input type="hidden" name="return_url" value="about-us.html" />
                                            <input type="hidden" name="is_rtl" value="0" />
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        // Nav collapes end

                    </div>
                    <div class="clearfix"></div>
                    <<<<<<< HEAD </nav> -->

               
                </nav>
                
                
                <!-- Nav end -->

            </div>
        </div>

        <!-- row end -->

    </div>

    <!-- Header container end -->

</div>






<!-- Header end -->
<!-- Inner Page Title start -->
<form action="{{url('about_search')}}" method="get">
    <!-- Page Title start -->
    @csrf
    <div class="container">
        <div class="pageSearch">

            <div class="row">
                <div class="col-lg-7">

                    <h3 class="mb-3">One million success job stories. <span>Start yours today.</span></h3>

                    <div class="searchform">
                        <div class="input-group">
                            <input type="text" name="search" id="jbsearch" value="" class="form-control"
                                placeholder="Enter Skills or job title" autocomplete="off" />

                            <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page Title end -->
</form>
<!-- Inner Page Title end -->
<div class="about-wraper">
    <div class="container">

        <div class="largebanner shadow3 mt-0">
            <div class="jobint text-center"><img src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">.</div>
            <div class="clearfix"></div>
        </div>




        <h2>About Us</h2>
        <p>
        <p>Eudyoga is the ultimate destination for your Job Search. We search for the best employers providing the best
            salary in the industry. Our database is a bucket of talents, skills, and jobs according to choice. We make
            your dreams into reality and offer what you always want. We become the challenge to the competitive world by
            bringing the best Employer and Employee at the same stage.<br /><br />ಇ-ಉದ್ಯೋಗ ನಿಮ್ಮ ಉದ್ಯೋಗ ಹುಡುಕಾಟಕ್ಕೆ
            ಅಂತಿಮ ತಾಣವಾಗಿದೆ. ಉದ್ಯಮದಲ್ಲಿ ಉತ್ತಮ ಸಂಬಳವನ್ನು ನೀಡುವ ಅತ್ಯುತ್ತಮ ಉದ್ಯೋಗದಾತರನ್ನು ನಾವು ಹುಡುಕುತ್ತೇವೆ. ನಮ್ಮ ಡೇಟಾಬೇಸ್
            ಪ್ರತಿಭೆಗಳು, ಕೌಶಲ್ಯಗಳು ಮತ್ತು ಆಯ್ಕೆಯ ಪ್ರಕಾರ ಉದ್ಯೋಗಗಳ ಬಕೆಟ್ ಆಗಿದೆ. ನಾವು ನಿಮ್ಮ ಕನಸುಗಳನ್ನು ನಿಜವಾಗಿಸುತ್ತೇವೆ ಮತ್ತು
            ನಿಮಗೆ ಯಾವಾಗಲೂ ಬೇಕಾದುದನ್ನು ನೀಡುತ್ತೇವೆ. ಅತ್ಯುತ್ತಮ ಉದ್ಯೋಗದಾತ ಮತ್ತು ಉದ್ಯೋಗಿಯನ್ನು ಒಂದೇ ಹಂತದಲ್ಲಿ ತರುವ ಮೂಲಕ ನಾವು
            ಸ್ಪರ್ಧಾತ್ಮಕ ಜಗತ್ತಿಗೆ ಸವಾಲಾಗಿದ್ದೇವೆ.<br /><br />Our candidates share the best experience with their
            employment. The companies are booming with the talents that we share with them. More than a billion
            candidates can search for their best-suited jobs from the million companies in our portal. Our experts and
            career consultants always try to groom our candidates with the best expert to advise.<br /><br />ನಮ್ಮ
            ಅಭ್ಯರ್ಥಿಗಳು ತಮ್ಮ ಉದ್ಯೋಗದೊಂದಿಗೆ ಉತ್ತಮ ಅನುಭವವನ್ನು ಹಂಚಿಕೊಳ್ಳುತ್ತಾರೆ. ನಾವು ಅವರೊಂದಿಗೆ ಹಂಚಿಕೊಳ್ಳುವ ಪ್ರತಿಭೆಗಳೊಂದಿಗೆ
            ಕಂಪನಿಗಳು ಪ್ರವರ್ಧಮಾನಕ್ಕೆ ಬರುತ್ತಿವೆ. ಒಂದು ಬಿಲಿಯನ್ಗಿಂತಲೂ ಹೆಚ್ಚು ಅಭ್ಯರ್ಥಿಗಳು ನಮ್ಮ ಪೋರ್ಟಲ್ನಲ್ಲಿರುವ ಮಿಲಿಯನ್
            ಕಂಪನಿಗಳಿಂದ ತಮಗೆ ಸೂಕ್ತವಾದ ಉದ್ಯೋಗಗಳನ್ನು ಹುಡುಕಬಹುದು. ನಮ್ಮ ತಜ್ಞರು ಮತ್ತು ವೃತ್ತಿ ಸಲಹೆಗಾರರು ಯಾವಾಗಲೂ ಸಲಹೆ ನೀಡಲು ನಮ್ಮ
            ಅಭ್ಯರ್ಥಿಗಳನ್ನು ಉತ್ತಮ ಪರಿಣಿತರೊಂದಿಗೆ ಅಲಂಕರಿಸಲು ಪ್ರಯತ್ನಿಸುತ್ತಾರೆ.<br /><br />It is the brainchild of Kavya and
            Guruswamy. They have worked together to build their vision and thoughts. Thousand Vision World Pvt Ltd made
            this company incorporated on the 22nd of March 2021 as a Private limited company in
            Bangalore.<br /><br />ಇದು ಕಾವ್ಯ ಮತ್ತು ಗುರುಸ್ವಾಮಿಯವರ ಕಲ್ಪನೆಯ ಕೂಸು. ಅವರು ತಮ್ಮ ದೃಷ್ಟಿ ಮತ್ತು ಆಲೋಚನೆಗಳನ್ನು
            ನಿರ್ಮಿಸಲು ಒಟ್ಟಾಗಿ ಕೆಲಸ ಮಾಡಿದ್ದಾರೆ. ಥೌಸಂಡ್ ವಿಷನ್ ವರ್ಲ್ಡ್ ಪ್ರೈವೇಟ್ ಲಿಮಿಟೆಡ್ ಈ ಕಂಪನಿಯನ್ನು 2022 ರ ಮಾರ್ಚ್ 21 ರಂದು
            ಬೆಂಗಳೂರಿನಲ್ಲಿ ಪ್ರೈವೇಟ್ ಲಿಮಿಟೆಡ್ ಕಂಪನಿಯಾಗಿ ಸಂಯೋಜಿಸಿದೆ.<br /><br />We are growing as a Rainbow with a variety
            of job openings for youths and professionals. We create an ultimate destinate for the Employers and
            Employees and help the country with more employment.<br /><br />ಯುವಕರು ಮತ್ತು ವೃತ್ತಿಪರರಿಗೆ ವಿವಿಧ
            ಉದ್ಯೋಗಾವಕಾಶಗಳೊಂದಿಗೆ ನಾವು ಮಳೆಬಿಲ್ಲಿನಂತೆ ಬೆಳೆಯುತ್ತಿದ್ದೇವೆ. ನಾವು ಉದ್ಯೋಗದಾತರು ಮತ್ತು ಉದ್ಯೋಗಿಗಳಿಗೆ ಅಂತಿಮ
            ಗಮ್ಯಸ್ಥಾನವನ್ನು ರಚಿಸುತ್ತೇವೆ ಮತ್ತು ಹೆಚ್ಚಿನ ಉದ್ಯೋಗದೊಂದಿಗೆ ದೇಶಕ್ಕೆ ಸಹಾಯ ಮಾಡುತ್ತೇವೆ.</p>
        </p>


    </div>
</div>
 <div class="largebanner shadow3 mt-0">
            <div class="jobint text-center"><img src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">.</div>
            <div class="clearfix"></div>
        </div>
        <div class="footerWrap"> 
    <div class="container">
        <div class="row"> 

            <!--Quick Links-->
            <div class="col-md-3 col-sm-6">
                <h5>Quick Links</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="index">Home</a></li>
                    <li><a href="contact_us">Contact Us</a></li>
                    <li class="postad"><a href="login.html">Post a Job</a></li>
                    <li><a href="faq">FAQs</a></li>
                                        
                    <li class=""><a href="about_us">About Us</a></li>
                                        
                    <li class=""><a href="cms/Terms_And_Conditions.html">Terms &amp; Conditions</a></li>
                                        
                    <!--<li class=""><a href="cms/Privacy_Policy.html">Privacy Policy</a></li>-->
                                        
                    <!--<li class=""><a href="cms/Refund_Policy.html">Refund_Policy</a></li>-->
                    <!--                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                                                            <li><a href="jobs6e73.html?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>
                                        <li><a href="jobs073c.html?functional_area_id%5B%5D=53">Interior Designers &amp; Architects</a></li>
                                        <li><a href="jobs3de1.html?functional_area_id%5B%5D=17">Client Services &amp; Customer Support</a></li>
                                        <!--<li><a href="jobsa6eb.html?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>-->
                                        <li><a href="jobs222d.html?functional_area_id%5B%5D=1">Accountant</a></li>
                                        <!--<li><a href="jobsa0ca.html?functional_area_id%5B%5D=127">SMO</a></li>-->
                                        <li><a href="jobs14fd.html?functional_area_id%5B%5D=68">Manufacturing &amp; Operations</a></li>
                                        <!--<li><a href="jobsd4f3.html?functional_area_id%5B%5D=112">Retail</a></li>-->
                                        <!--<li><a href="jobsc39a.html?functional_area_id%5B%5D=118">Sales</a></li>-->
                                        <li><a href="jobs099f.html?functional_area_id%5B%5D=13">Business Development</a></li>
                                    </ul>
            </div>
            
             <div class="col-md-3 col-sm-12">
                <h5>Jobs By Industry</h5>
                <ul class="quicklinks">
                                <li><a href="#">BCS</a></li>
                                <li><a href="#">Siddhran
                                        </a></li>
                                <li><a href="#">Recrument </a></li>
                                <li><a href="#">Pragna solution</a>
                                </li>
                                <li><a href="#">Arul Rubbers pvt ltd</a></li>
                                <li><a href="#">Kalyani Moters</a></li>
                                
                            </ul>
                <!--<div class="phone"> <a href="tel:+918884442935">+91 888-444-2935</a></div>-->
                <!--<div class="email"> <a href="mailto:jobdesk@eudyoga.com">jobdesk@eudyoga.com</a> </div>-->
            </div>
            

           
            <div class="col-md-3 col-sm-12">
                <h5>Contact Us</h5>
                <div class="phone"> <a href="tel:+91 888-444-2936">+91 888-444-2936</a></div>
                <div class="email"> <a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a> </div>
                <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022 India</div>
                
                <!-- Social Icons -->
                <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
<a href="https://twitter.com/e_udyoga" target="_blank"><i class="fab fa-twitter-square" aria-hidden="true"></i></a>
<a href="https://www.instagram.com/eudyoga/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
 <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
</div>
                <!-- Social Icons end --> 

            </div>
            

        </div>
    </div>
</div>