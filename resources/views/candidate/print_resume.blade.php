@include('candidate/layouts_index.app')

@yield('content')
<div class="col-md-12 col-sm-12"> 
                <div class="row">
                   <div class="col-md-12">
                         <div class="col-md-12 col-sm-12" >

                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                                <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                aria-label="close">&times;</a>
                                <strong> {{ session('success') }} </strong>
                            </div>
                            @endif
                            @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
                                <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                aria-label="close">&times;</a>
                                <strong> {{ session('error') }} </strong>
                            </div>
                            @endif

                            
                            
            <div id="printableArea" >
                <div class="js-embeddable">
                    <div id="resume-cl-embed">
                     <div class="tab-content">
                      <div class="tab-pane active" id="resume-tab">
                       <div class="resume-container custom-style-container elemental html">
                        <header class="about-section photo-resume">
                         <div class="personal-details">
                          <div class="row">
                           <div class="col-md-3 col-sm-3">
                            <div class="photo">
                             <img src="{{ URL::to('/') }}/assets/assets/no-image.png"  alt="" title="{{ $printresume->email ?? ''}}">
                         </div>
                     </div>
                     <div class="col-sm-9 name">
                        <div class="name-inner">
                         <h1>
                            {{$printresume->email ?? ''}}
                       </h1>
                       <h6 class="subheader">
                        <span>Immediate Available For Work</span>

                    </h6>
                </div>
                <table class="contact">
                 <tbody>
                  <tr>
                   <td class="label-container">
                    <span class="contact-label break-word">
                        Location:
                    </span>
                </td>
                <td>
                    <strong> {{$printresume->city ?? ''}}</strong>
                </td>
            </tr>
            
        <tr>
           <td class="label-container">
            <span class="contact-label break-word">
                Phone:
            </span>
        </td>
        <td>
            <strong class="break-word">

             <a href="tel:mibota1985"> {{$printresume->phone ?? ''}}</a>

         </strong>
     </td>
     <tr>
       <td class="label-container">
        <span class="contact-label break-word">
            Email:
        </span>
    </td>
    <td>
        <strong class="break-word">

            <a href=""> {{$printresume->email ?? ''}}</a>

        </strong>
    </td>
</tr>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</header>
<section class="resume-content-section photo-resume">
 <div class="column-container">
  <div class="three-fourth">
   <div class="section objective">
       <h2 class="section-header section-header-about">
         <span>
          About me
      </span>
  </h2>
  <p style="text-align: justify;"></p>
</div>
<div class="section experiences">
    <h2 class="section-header">
     <span>
         Experience
     </span>
 </h2>
 <div class="item-outer">
    <div class="" id="experience_div"></div>
</div>
</div>
<div class="section educations">
    <h2 class="section-header">
     <span>
      Education
  </span>
</h2>
<div class="item-outer">
  <div class="" id="education_div"></div>
</div>
</div>
</div>
<div class="one-fourth">
   <div class="section honors">
    <h2 class="section-header">
     <span>
      Candidate Detail
  </span>
</h2>
<div class="item">
 <div class="row">
  <div class="description col-md-12">
   <ul class="jbdetail">
    <li class="row">
        <div class="col-md-6 col-xs-6">Is Email Verified</div>

        <div class="col-md-6 col-xs-6"><span>{{$printresume->verified ?? ''}}</span></div>
    </li>
    <li class="row">

        <div class="col-md-6 col-xs-6">Immediate Available</div>

        <div class="col-md-6 col-xs-6"><span>{{$printresume->is_immediate_available ?? ''}}</span></div>

    </li>
    <li class="row">

        <div class="col-md-6 col-xs-6">Age</div>

        <div class="col-md-6 col-xs-6"><span> {{$printresume->age ?? ''}}</span></div>

    </li>
    <li class="row">

        <div class="col-md-6 col-xs-6">Gender</div>

        <div class="col-md-6 col-xs-6"><span>{{$printresume->gender ?? ''}}</span></div>

    </li>
    <li class="row">

        <div class="col-md-6 col-xs-6">Marital Status</div>

        <div class="col-md-6 col-xs-6"><span>{{$printresume->marital_status ?? ''}}</span></div>

    </li>

    <li class="row">

        <div class="col-md-6 col-xs-6">Experience</div>

        <div class="col-md-6 col-xs-6"><span>{{$printresume->job_experience ?? ''}}</span></div>

    </li>

    <li class="row">

        <div class="col-md-6 col-xs-6">Career Level</div>

        <div class="col-md-6 col-xs-6"><span>{{$printresume->career_level ?? ''}}</span></div>

    </li>             

    <li class="row">

        <div class="col-md-6 col-xs-6">Current Salary</div>

        <div class="col-md-6 col-xs-6"><span class="">{{$printresume->current_salary ?? ''}} </span></div>

    </li>

    <li class="row">

        <div class="col-md-6 col-xs-6">Expected Salary</div>

        <div class="col-md-6 col-xs-6"><span class=""> {{$printresume->expected_salary ?? ''}}</span></div>
 
    </li>
</ul>
</div>
</div>
</div>
</div>

<div class="section skills">
    <h2 class="section-header">
     <span>
         Skills
     </span>
 </h2>
 <div class="item">
     <div class="row">
      <div class="description col-md-12">
       <div id="skill_div"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="" style="text-align: center;">           
   <input style=""type="button" onclick="printDiv('printableArea')" class="btn btn-primary" value="Print Resume" />
</div>  
</div>

</div>

</div>

<div class="modal fade" id="sendmessage" role="dialog">

    <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content">

            <form action="" id="send-form">

                <input type="hidden" name="_token" value="OESEUlxsPKkcpArhhNOHBDpnWsjm5OijRBMqhpRs">
                <input type="hidden" name="seeker_id" id="seeker_id" value="674">

                <div class="modal-header">                    

                    <h4 class="modal-title">Send Message</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body">

                    <div class="form-group">

                        <textarea class="form-control" name="message" id="message" cols="10" rows="7"></textarea>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Submit</button>

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
    <div class="adin">
        <img src="{{ URL::to('/') }}/assets/images/banner1.jpg">.
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
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/')}}">Contact Us</a></li>
                    <li class="postad"><a href="{{url('/')}}">Post a Job</a></li>
                    <li><a href="{{url('/')}}">FAQs</a></li>

                    <li class=""><a href="{{url('/')}}">About Us</a></li>

                    <li class=""><a href="{{url('/')}}">Terms &amp; Conditions</a></li>

                    <li class=""><a href="{{url('/')}}">Privacy Policy</a></li>

                    <li class=""><a href="{{url('/')}}">Refund_Policy</a></li>
                    <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>
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
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>
                    <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>
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