@include('employer/layouts_index.app')

@yield('content')


<div class="authpages">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                   
       <div class="useraccountwrap">

           <div class="userccount whitebg">
               
               
               
               <div class="tab-content">
                   <div id="candidate">
                       

                        <h4 class="text-center">Employer Login</h4>
                       <form class="form-horizontal" method="post" action="{{ url('/checklogin') }}">
                           @csrf
                           <input type="hidden" name="candidate_or_employer" value="candidate" />
                           <div class="formpanel">
                               <div class="formrow">
                                   <input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Email Address">
                                                                  </div>
                               <div class="formrow">
                                   <input id="password" type="password" class="form-control" name="password" value="" required placeholder="Password">
                                                                  </div>  
                               <div class="mb-3"><i class="fas fa-lock" aria-hidden="true"></i> Forgot Your Password? <a href="abc">Click here</a></div>          
                               <input type="submit" class="btn" value="Login">
                           </div>
                           <!-- login form  end--> 
                       </form>
                       <!-- sign up form -->
               <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="{{url('abc')}}">Register Here</a></div>
               
               <!-- sign up form end-->
                   </div>
                   
                   
               </div>
               <!-- login form -->

                

           </div>
       </div>
            </div>

            <div class="col-lg-7">
            <div class="loginpageimg"><img src="https://eudyoga.com/public/images/login-page-banner.png" alt=""></div>
            </div>

        </div>
        
    </div>
</div>



<!--Footer-->
<div class="largebanner shadow3">
<div class="adin">
<img src="https://eudyoga.com/public/images/banner1.jpg">.
</div>
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
                    <li><a href="https://eudyoga.com">Home</a></li>
                    <li><a href="https://eudyoga.com/contact-us">Contact Us</a></li>
                    <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
                    <li><a href="https://eudyoga.com/faq">FAQs</a></li>
                                        
                    <li class=""><a href="https://eudyoga.com/cms/about-us">About Us</a></li>
                                        
                    <li class=""><a href="https://eudyoga.com/cms/Terms_And_Conditions">Terms &amp; Conditions</a></li>
                                        
                    <li class=""><a href="https://eudyoga.com/cms/Privacy_Policy">Privacy Policy</a></li>
                                        
                    <li class=""><a href="https://eudyoga.com/cms/Refund_Policy">Refund_Policy</a></li>
                                        <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                                                            <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=65">Management Information System (MIS)</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=13">Business Development</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=137">Tele Sale Representative</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=49">Human Resources</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118">Sales</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>
                                    </ul>
            </div>
            
             <div class="col-md-3 col-sm-12">
                <h5>Jobs By Industry</h5>
                <div class="phone"> <a href="tel:+918884442935">+91 888-444-2935</a></div>
                <div class="email"> <a href="mailto:jobdesk@eudyoga.com">jobdesk@eudyoga.com</a> </div>
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
<a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a>
<a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube-square" aria-hidden="true"></i></a>
</div>
                <!-- Social Icons end --> 

            </div>
            <!--About us End--> 


        </div>
    </div>
</div>
<!--Footer end--> 
<!--Copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="bttxt">Copyright &copy; 2023 E-Udyoga. All Rights Reserved. Design by: <a href="https://eudyoga.comhttp://graphicriver.net/user/ecreativesol" target="_blank">Thousand Vision World Pvt Ltd</a></div>
            </div>
            <div class="col-md-4">
                <div class="paylogos"><img src="https://eudyoga.com/public/images/payment-icons.png" alt="" /></div>	
            </div>
        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <!-- Bootstrap's JavaScript -->

    <script src="https://eudyoga.com/public/js/jquery.min.js"></script>

    <script src="https://eudyoga.com/public/js/bootstrap.bundle.min.js"></script>

    <script src="https://eudyoga.com/public/js/popper.js"></script>

    <!-- Owl carousel -->

    <script src="https://eudyoga.com/public/js/owl.carousel.js"></script>

    <script src="https://eudyoga.com/public/admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

    <script src="https://eudyoga.com/public/admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <script src="https://eudyoga.com/public/admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

    <script src="https://eudyoga.com/public/admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>

    <!-- Revolution Slider -->

    <script type="text/javascript" src="https://eudyoga.com/public/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>

    <script type="text/javascript" src="https://eudyoga.com/public/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>


    
    <!-- Custom js -->

    <script src="https://eudyoga.com/public/js/script.js"></script>

    <script type="text/JavaScript">

        $(document).ready(function(){

            $(document).scrollTo('.has-error', 2000);

            });

            function showProcessingForm(btn_id){		

            $("#"+btn_id).val( 'Processing .....' );

            $("#"+btn_id).attr('disabled','disabled');		

            }

		

		setInterval("hide_savedAlert()",7000);

        function hide_savedAlert(){

          $(document).find('.svjobalert').hide();

        }



        $(document).ready(function(){

            $.ajax({

                type: 'get',

                url: "https://eudyoga.com/check-time",

                success: function(res) {

                        $('.notification').html(res);

                   

                }

            });

        });

		

        </script>