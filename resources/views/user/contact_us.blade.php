@include('user/layouts.app')

@yield('content')



<!-- Header end --> 
<!-- Inner Page Title start -->
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Contact Us</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="index.html">Home</a> / <span>Contact Us</span></div>
            </div>
        </div>
    </div>
</div><!-- Inner Page Title end -->
<div class="inner-page"> 
    <!-- About -->
    <div class="container">
        <div class="contact-wrap">
            <div class="title"> <span>We Are Here For Your Help</span>
                <h2>GET IN TOUCH FAST</h2>
                
            </div>            
                <!-- Contact Info -->
                <div class="contact-now">
				<div class="row"> 
                    <div class="col-lg-4 column">
                        <div class="contact"> <span><i class="fa fa-home"></i></span>
                            <div class="information"> <strong>Address:</strong>
                                <p>No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022 India</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-lg-4 column">
                        <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                            <div class="information"> <strong>Email Address:</strong>
                                <p><a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-lg-4 column">
                        <div class="contact"> <span><i class="fa fa-phone"></i></span>
                            <div class="information"> <strong>Phone:</strong>
                                <p><a href="tel:+91 888-444-2936">+91 888-444-2936</a></p>
                                <p><a href="tel:+91 888-444-2935">+91 888-444-2935</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info --> 
                </div>
					<div class="row"> 
                <div class="col-lg-4 column"> 
                    <!-- Google Map -->
                    <div class="googlemap">
                         <iframe src="https://maps.google.it/maps?q=&amp;output=embed" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Contact form -->
                <div class="col-lg-8 column">
                    <div class="contact-form">
                        <div id="message"></div>
                        <form method="post" action="#" name="contactform" id="contactform">
                            <input type="hidden" name="_token" value="wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8">
                            <div class="row">
                                <div class="col-md-6">                  
                                    <input id="full_name" placeholder="Full Name" required="required" autofocus="autofocus" name="full_name" type="text">                
                                                                    </div>
                                <div class="col-md-6">                  
                                    <input id="email" placeholder="Email" required="required" name="email" type="text">                
                                                                    </div>
                                <div class="col-md-6">                  
                                    <input id="phone" placeholder="Phone" name="phone" type="text">                
                                                                    </div>
                                <div class="col-md-6">                  
                                    <input id="subject" placeholder="Subject" required="required" name="subject" type="text">                
                                                                    </div>
                                <div class="col-md-12">                  
                                    <textarea id="message_txt" placeholder="Message" required="required" name="message_txt" cols="50" rows="10"></textarea>                
                                                                    </div>
                                <!--<div class="col-md-12">-->
                                <!--    <div data-sitekey="6Lfr3oImAAAAAAwFe5kshKBoexBOl2_ESpNjpp8P" class="g-recaptcha"></div>-->
                                <!--                                    </div>-->
                                <div class="col-md-12">
                                    <button title="" class="button" type="submit" id="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
					 </div>
        </div>
    </div>
</div>
<!--Footer-->
<div class="largebanner shadow3">
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li class="postad"><a href="login.html">Post a Job</a></li>
                    <li><a href="faq">FAQs</a></li>
                                        
                    <li class=""><a href="cms/about-us.html">About Us</a></li>
                                        
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
                                        <!--<li><a href="jobs073c.html?functional_area_id%5B%5D=53">Interior Designers &amp; Architects</a></li>-->
                                        <!--<li><a href="jobs3de1.html?functional_area_id%5B%5D=17">Client Services &amp; Customer Support</a></li>-->
                                        <!--<li><a href="jobsa6eb.html?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>-->
                                        <li><a href="jobs222d.html?functional_area_id%5B%5D=1">Accountant</a></li>
                                        <!--<li><a href="jobsa0ca.html?functional_area_id%5B%5D=127">SMO</a></li>-->
                                        <li><a href="jobs14fd.html?functional_area_id%5B%5D=68">Manufacturing &amp; Operations</a></li>
                                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
                                        <li><a href="jobsc39a.html?functional_area_id%5B%5D=118">Sales</a></li>
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
            

            <!--About Us-->
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
            <!--About us End--> 


        </div>
    </div>
</div>