@include('employer/layout.app')

@yield('content')
{{-- <div class="col-md-12 col-sm-12"> 
                <div class="row">
                    <div class="col-md-12"> --}}
                        <div class="pageTitle">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h1 class="page-heading">Company Detail </h1>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="breadCrumb"><a href="http://localhost/eudyoga.in/index">Home</a> / <span>Company Detail </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  
<div class="container">
    <div class="job-header">
 
             <div class="jobinfo">
 
                 <div class="row">
 
                     <div class="col-md-8 col-sm-8">
 
                         <!-- Candidate Info -->
 
                         <div class="candidateinfo">
 
                             <div class="userPic"><a href="http://localhost/eudyoga.com/company/bcs-54"><img
                                        src="https://eudyoga.com/public/admin_assets/no-image.png"></a>
 
                             </div>
 
                             <div class="title">{{ $companies_list->c_name }}</div>
 
                             <div class="desi"></div>
 
                             <div class="loctext"><i class="fa fa-history" aria-hidden="true"></i>
 
                                 Member Since, Jun 10, 2023</div>
 
                             <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i>
 
                                 {{ $companies_list->location }}</div>
 
                             <div class="clearfix"></div>
 
                         </div>
 
                     </div>
 
                     <div class="col-md-4 col-sm-4">
 
                         <!-- Candidate Contact -->
 
                         
                             <h5>Login to View contact details</h5>
 
                             <a href="http://localhost/eudyoga.in/candidate_login" class="btn btn-primary">Login</a>
 
                         
                         
 
                     </div>
 
                 </div>
 
             </div>
 
 
 
             <!-- Buttons -->
 
             <div class="jobButtons">  <a
 
                     href="http://localhost/eudyoga.com/add-to-favourite-company/bcs-54" class="btn"><i class="fa fa-floppy-o"
 
                         aria-hidden="true"></i> Add to Favourite</a>  <a
 
                     href="http://localhost/eudyoga.com/report-abuse-company/bcs-54" class="btn report"><i
 
                         class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report Abuse</a> <a
 
                     href="javascript:;" onclick="send_message()" class="btn"><i class="fa fa-envelope"
 
                         aria-hidden="true"></i> Send Message</a> </div>
 
         </div>
 
 
 
         <!-- Job Detail start -->
 
         <div class="row">
 
             <div class="col-md-7">
 
                 <!-- About Employee start -->
 
                 <div class="job-header">
 
                     <div class="contentbox">
 
                         <h3>About Company</h3>
 
                         <p></p>
 
                     </div>
 
                 </div>
 
 
 
                 <!-- Opening Jobs start -->
 
                 <div class="relatedJobs">
 
                     <h3>Job Openings</h3>
 
                     <ul class="searchList">
 
                         
 
 
                         <!-- Job end -->
 
                     </ul>
 
                 </div>
 
             </div>
 
             <div class="col-md-5">
 
                 <!-- Company Detail start -->
 
                 <div class="job-header">
 
                     <div class="jobdetail">
 
                         <h3>Company Detail</h3>
 
                         <ul class="jbdetail">
                         {{-- @foreach($companies_list as $pro) --}}
 
                             <li class="row">
 
                                 <div class="col-md-6 col-xs-6">Is Email Verified</div>
 
                                 <div class="col-md-7 col-xs-6"><span>{{ $companies_list->email}}</span></div>
 
                                 
 
                             </li>
 
                             <li class="row">
 
                                 <div class="col-md-6 col-xs-6">Total Employees</div>
 
                                 <div class="col-md-6 col-xs-6"><span>{{ $companies_list->no_of_employees}}</span></div>
                             </li>
 
                             <li class="row">
 
                                 <div class="col-md-6 col-xs-6">Established In</div>
 
                                 <div class="col-md-6 col-xs-6"><span>{{ $companies_list->established_in}}</span></div>
                             </li>
 
                             <li class="row">
 
                                 <div class="col-md-6 col-xs-6">Current jobs</div>
 
                                 <div class="col-md-6 col-xs-6"><span>{{ $companies_list->availed_jobs_quota}}</span></div>
 
                                     
                             </li>
 
                         </ul>
                         {{-- @endforeach --}}
                     </div>
                     
                 </div>
 
                 </div>
 
 
 
                 <!-- Google Map start -->
 
                 <!--<div class="job-header col-12 ">-->
 
                 <!--    <div class="jobdetail float-right">-->
                 <!--        <iframe src="https://maps.google.it/maps?q=&output=embed" allowfullscreen></iframe>-->
                 <!--    </div>-->
 
                 <!--</div>-->
 
             </div>
 
         </div>
 
     </div>
 
 </div>
 
 <!-- Modal -->
 
 <div class="modal fade" id="sendmessage" role="dialog">
 
     <div class="modal-dialog">
 
 
 
         <!-- Modal content-->
 
         <div class="modal-content">
 
             <form action="" id="send-form">
 
                 <input type="hidden" name="_token" value="7lsV4iFmcB763M9yV2KTD4FajqZeqbu8vcU8djrm">
                 <input type="hidden" name="company_id" id="company_id" value="54">
 
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
 
 
 
 
 
 
 
 
 
 <div class="col-md-12 col-sm-12"> 
 <div class="row">
                     <div class="col-md-12">
 
 
 
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
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/') }}">Contact Us</a></li>
                                <li class="postad"><a href="{{ url('/') }}">Post a Job</a></li>
                                <li><a href="{{ url('/') }}">FAQs</a></li>

                                <li class=""><a href="{{ url('/') }}">About Us</a></li>

                                <li class=""><a href="{{ url('/') }}">Terms &amp; Conditions</a></li>

                                {{-- <li class=""><a href="{{url('/')}}">Privacy Policy</a></li>
                                         
                     <li class=""><a href="{{url('/')}}">Refund_Policy</a></li>
                                         <li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li> --}}
                            </ul>
                        </div>
                        <!--Quick Links menu end-->

                        <div class="col-md-3 col-sm-6">
                            <h5>Jobs By Functional Area</h5>
                            <!--Quick Links menu Start-->
                            <ul class="quicklinks">
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118">Sales</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=68">Manufacturing &amp;
                                        Operations</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=53">Interior Designers
                                        &amp; Architects</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a>
                                </li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp;
                                        Business Development</a></li>
                                <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>
                                {{-- <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>
                                         <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>
                                         <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
                                         <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li> --}}
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
                            {{-- <div class="phone"> <a href="tel:+918884442935">+91 888-444-2935</a></div>
                            <div class="email"> <a href="mailto:jobdesk@eudyoga.com">jobdesk@eudyoga.com</a> </div> --}}
                        </div>


                        <!--About Us-->
                        <div class="col-md-3 col-sm-12">
                            <h5>Contact Us</h5>
                            <div class="phone"> <a href="tel:+91 888-444-2936">+91 888-444-2936</a></div>
                            <div class="email"> <a href="mailto:hrdesk@eudyoga.com">hrdesk@eudyoga.com</a> </div>
                            <div class="address">No 1088/1 K N Ext, Yeshwanthpur Bangalore Bangalore Karnataka – 560022
                                India</div>

                            <!-- Social Icons -->
                            <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067"
                                    target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/e_udyoga" target="_blank"><i
                                        class="fab fa-twitter-square" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/eudyoga/" target="_blank"><i
                                        class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube-square"
                                        aria-hidden="true"></i></a>
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
    <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bttxt">Copyright &copy; 2024 E-Udyoga. All Rights Reserved. Design by: <a
                                href="https://npgroups.com/" target="_blank">npgroups</a></div>
                    </div>

                </div>

            </div>
        </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">

$(document).ready(function() {

    $(document).on('click', '#send_company_message', function() {

        var postData = $('#send-company-message-form').serialize();

        $.ajax({

            type: 'POST',

            url: "http://localhost/eudyoga.com/contact-company-message-send",

            data: postData,

            //dataType: 'json',

            success: function(data) {

                response = JSON.parse(data);

                var res = response.success;

                if (res == 'success') {

                    var errorString = '<div role="alert" class="alert alert-success">' +

                        response.message + '</div>';

                    $('#alert_messages').html(errorString);

                    $('#send-company-message-form').hide('slow');

                    $(document).scrollTo('.alert', 2000);

                } else {

                    var errorString = '<div class="alert alert-danger" role="alert"><ul>';

                    response = JSON.parse(data);

                    $.each(response, function(index, value) {

                        errorString += '<li>' + value + '</li>';

                    });

                    errorString += '</ul></div>';

                    $('#alert_messages').html(errorString);

                    $(document).scrollTo('.alert', 2000);

                }

            },

        });

    });

});



function send_message() {

    const el = document.createElement('div')

    el.innerHTML =

        "Please <a class='btn' href='http://localhost/eudyoga.com/login' onclick='set_session()'>log in</a> as a Canidate and try again."

    
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


    <!-- Custom js -->

    <script src="http://localhost/eudyoga.com/public/js/script.js"></script>

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

                url: "http://localhost/eudyoga.com/check-time",

                success: function(res) {

                        $('.notification').html(res);

                   

                }

            });

        });

        

        </script>