@include('candidate/layouts_index.app')

@yield('content')
<div class="col-md-12 col-sm-12"> 
                <div class="row">
                   <div class="col-md-12">
                         <div class="col-md-12 col-sm-12" >


                            
 <div class="myads">
                    <h3>Applied Jobs</h3>
                    <ul class="searchList">
                        <!-- job start --> 
                                            </ul>
                </div>

            

</div>
</div>
</div>
</div>
</div>








<!--Footer-->
<div class="largebanner shadow3">
    <div class="adin">
        <img src="{{ URL::to('/') }}/assets/images/banner1.jpg">.
    </div>
    <div class="clearfix"></div>
</div>





<div class="container">
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
                    <li class="postad"><a href="{{url('/')}}">Post a Job</a></li>
                    <li><a href="{{url('/')}}">FAQs</a></li>

                    <li class=""><a href="about_us">About Us</a></li>

                    <li class=""><a href="{{url('/')}}">Terms &amp; Conditions</a></li>

                    <!--<li class=""><a href="{{url('/')}}">Privacy Policy</a></li>-->

                    <!--<li class=""><a href="{{url('/')}}">Refund_Policy</a></li>-->
                    <!--<li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
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
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>-->
                    <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>-->
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>
                </ul>
            </div>
            
            <div class="col-md-3 col-sm-12">
                <h5>Jobs By Industry</h5>
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
</div>
<!--Footer end--> 
<!--Copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="bttxt">Copyright &copy; 2024 E-Udyoga. All Rights Reserved. Design by: <a href="https://eudyoga.comhttp://graphicriver.net/user/ecreativesol" target="_blank">Thousand Vision World Pvt Ltd</a></div>
            </div>
            <div class="col-md-4">
                <div class="paylogos"><img src="{{ URL::to('/') }}/assets/images/payment-icons.png" alt="" /></div>  
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {

        $(document).on('click', '#send_applicant_message', function () {

            var postData = $('#send-applicant-message-form').serialize();

            $.ajax({

                type: 'POST',

                url: "https://eudyoga.com/contact-applicant-message-send",

                data: postData,

            //dataType: 'json',

                success: function (data)

                {

                    response = JSON.parse(data);

                    var res = response.success;

                    if (res == 'success')

                    {

                        var errorString = '<div role="alert" class="alert alert-success">' + response.message + '</div>';

                        $('#alert_messages').html(errorString);

                        $('#send-applicant-message-form').hide('slow');

                        $(document).scrollTo('.alert', 2000);

                    } else

                    {

                        var errorString = '<div class="alert alert-danger" role="alert"><ul>';

                        response = JSON.parse(data);

                        $.each(response, function (index, value)

                        {

                            errorString += '<li>' + value + '</li>';

                        });

                        errorString += '</ul></div>';

                        $('#alert_messages').html(errorString);

                        $(document).scrollTo('.alert', 2000);

                    }

                },

            });

        });

        showEducation();

        showProjects();

        showExperience();

        showSkills();

        showLanguages();

    });

    function showProjects()

    {

        $.post("https://eudyoga.com/show-applicant-profile-projects/674", {user_id: 674, _method: 'POST', _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'})

        .done(function (response) {

            $('#projects_div').html(response);

        });

    }

    function showExperience()

    {

        $.post("https://eudyoga.com/show-applicant-profile-experience/674", {user_id: 674, _method: 'POST', _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'})

        .done(function (response) {

            $('#experience_div').html(response);

        });

    }


    function showEducation()

    {

        $.post("https://eudyoga.com/show-applicant-profile-education/674", {user_id: 674, _method: 'POST', _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'})

        .done(function (response) {

            $('#education_div').html(response);

        });

    }

    function showLanguages()

    {

        $.post("https://eudyoga.com/show-applicant-profile-languages/674", {user_id: 674, _method: 'POST', _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'})

        .done(function (response) {

            $('#language_div').html(response);

        });

    }

    function showSkills()

    {

        $.post("https://eudyoga.com/show-applicant-profile-skills/674", {user_id: 674, _method: 'POST', _token: 'OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs'})

        .done(function (response) {

            $('#skill_div').html(response);

        });

    }



    function send_message() {

        const el = document.createElement('div')

        el.innerHTML = "Please <a class='btn' href='https://eudyoga.com/login' onclick='set_session()'>log in</a> as a Employer and try again."

        
        swal({

            title: "You are not Loged in",

            content: el,

            icon: "error",

            button: "OK",

        });

        
    }

    if ($("#send-form").length > 0) {

        $("#send-form").validate({

            validateHiddenInputs: true,

            ignore: "",



            rules: {

                message: {

                    required: true,

                    maxlength: 5000

                },

            },

            messages: {



                message: {

                    required: "Message is required",

                }



            },

            submitHandler: function(form) {

                $.ajaxSetup({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

                });

                
            }

        })

    }

</script> 
<script type="text/javascript">
    function printDiv(divName) {
       var printContents = document.getElementById(divName).innerHTML;
       var originalContents = document.body.innerHTML;

       document.body.innerHTML = printContents;

       window.print('');

       document.body.innerHTML = originalContents;
   }
</script>

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