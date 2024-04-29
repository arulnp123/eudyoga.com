@include('employer/layouts_index.app')

@yield('content')

     <div class="col-md-9 col-sm-8"> <ul class="row profilestat">
    <li class="col-md-4 col-6">
        <div class="inbox"> <i class="fas fa-clock" aria-hidden="true"></i>
            <h6><a href="{{ url('') }}">0</a></h6>
            <strong>Open Jobs</strong> </div>
    </li>
    <li class="col-md-4 col-6">
        <div class="inbox"> <i class="fas fa-user" aria-hidden="true"></i>
            <h6><a href="{{ url('') }}">0</a></h6>
            <strong>Followers</strong> </div>
    </li>
     <li class="col-md-4 col-6">
        <div class="inbox"> <i class="fas fa-envelope" aria-hidden="true"></i>
            <h6><a href="{{ url('') }}">0</a></h6>
            <strong>Messages</strong> </div>
    </li>
</ul>
        
        

        
        <div class="instoretxt">
    <div class="credit">Your Package is: <strong>Free package - INR0</strong></div>
    <div class="credit">Package Duration : <strong>14 Dec, 2023</strong> - <strong>13 Jan, 2024</strong></div>
    <div class="credit">Availed quota : <strong>0</strong> / <strong>99</strong></div>

</div>

        <div class="paypackages"> 

    <!---four-paln-->

    <div class="four-plan">

        <h3>Upgrade Package</h3>

        <div class="row"> 
            <div class="col-md-4 col-sm-6 col-xs-12">

                <ul class="boxes">

                    <li class="plan-name">Free package</li>

                    <li>

                        <div class="main-plan">
                            <div class="plan-price1-1">INR</div>
                            
                            

                            <div class="plan-price1-2">0</div>

                            <div class="clearfix"></div>

                        </div>

                    </li>

                    <li class="plan-pages">Can post jobs : 99</li>

                    <li class="plan-pages">Package Duration : 30 Days</li>

                    <li class="order paypal"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#buypack7" class="reqbtn">Buy Now</a></li>

                </ul>
                
                
                <div class="modal fade" id="buypack7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="fas fa-times"></i>
        </button>
        <div class="invitereval">
        <h3>Please Choose Your Payment Method to Pay</h3>   
            
        <div class="totalpay">Total Amount to pay: <strong>0</strong></div>
            
        <ul class="btn2s">
                                   <li class="order payu"><a href="https://eudyoga.com/payu-order-package?package_id=7&amp;type=upgrade">PayU</a></li>
                </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
                

            </div>

             </div>

    </div>

    <!---end four-paln--> 

</div>


        
        </div>

        </div>

    </div>

</div>


    
<script type="text/javascript">
    function changeImmediateAvailableStatus(user_id, old_status) {
        $.post("https://eudyoga.com/update-immediate-available-status", {user_id: user_id, old_status: old_status, _method: 'POST', _token: '5llEjXHJelpBjXJ00yM1IP4O8WrDR9LLUNSC6YOR'})
                .done(function (response) {
                    if (responce == 'ok') {
                        if (old_status == 0)
                            $('#is_immediate_available').attr('checked', 'checked');
                        else
                            $('#is_immediate_available').removeAttr('checked');
                    }
                });

    }
</script>

    <!-- Custom js -->

    <script src="{{ URL::to('/') }}/public/assets/js/script.js"></script>

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

<!--Footer-->
<div class="largebanner shadow3">
<div class="adin">
<img src="{{ URL::to('/') }}/public/assets/images/banner1.jpg">.
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
                    <li><a href="index">Home</a></li>
                    <li><a href="contact_us">Contact Us</a></li>
                    <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
                    <li><a href="https://eudyoga.com/faq">FAQs</a></li>
                                        
                    <li class=""><a href="about_us">About Us</a></li>
                                        
                    <li class=""><a href="https://eudyoga.com/cms/Terms_And_Conditions">Terms &amp; Conditions</a></li>
                                        
                    <!--<li class=""><a href="https://eudyoga.com/cms/Privacy_Policy">Privacy Policy</a></li>-->
                                        
                    <!--<li class=""><a href="https://eudyoga.com/cms/Refund_Policy">Refund_Policy</a></li>-->
                    <!--                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
                </ul>
            </div>
            <!--Quick Links menu end-->

            <div class="col-md-3 col-sm-6">
                <h5>Jobs By Functional Area</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                                                            <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118">Sales</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=68">Manufacturing &amp; Operations</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=53">Interior Designers &amp; Architects</a></li>
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>-->
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>-->
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>-->
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>
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
                <div class="bttxt">Copyright &copy; 2024 E-Udyoga. All Rights Reserved. Design by: <a href="www.npgroups.com" target="_blank">npgroups</a></div>
            </div>
            <!--<div class="col-md-4">-->
            <!--    <div class="paylogos"><img src="{{ URL::to('/') }}/assets/images/payment-icons.png" alt="" /></div>  -->
            <!--</div>-->
        </div>

    </div>
</div>