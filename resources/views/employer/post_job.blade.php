@include('employer/layouts_index.app')

@yield('content')

  
   <div class="col-md-12 col-sm-12"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="userccount">
                            <div class="formpanel mt-0">  
                                <!-- Personal Information -->
                                <h5>Job Details</h5>
<form action="https://eudyoga.com/addpost_job" method="post">
    <input type="hidden" name="_token" value="a3vVACbYUiwh6ZEBHNrb5Yrn96IdzzT6rzFZi6q5">
 
    <div class="row">  
        <div class="col-md-12">
            <div class="formrow "> <input class="form-control" id="title" placeholder="Job title" name="title" type="text">
                 </div>
        </div>
        <div class="col-md-12">
            <div class="formrow ">
               <label for="">Description</label>
            <textarea class="form-control" id="description" placeholder="Job description" name="description" cols="50" rows="10"></textarea>
                 </div>
        </div>
        
         <div class="col-md-12">
            <div class="formrow ">
            <label for="">Benefits</label>    
            <textarea class="form-control" id="benefits" placeholder="Job Benefits" name="benefits" cols="50" rows="10"></textarea>
                 </div>
        </div>
        
        
        <div class="col-md-12">
            <div class="formrow ">
            <label for="">Skills</label>    
                                <select class="form-control select2-multiple" id="skills" multiple="multiple" name="skills[]"><option value="1">Adobe Illustrator</option><option value="2">Adobe Photoshop</option><option value="3">Cold Calling</option><option value="4">COMMUNICATION</option><option value="5">Communication Skills</option><option value="6">CSS</option><option value="7">English Fluency</option><option value="8">HTML</option><option value="9">Java</option><option value="10">JavaScript</option><option value="11">Jquery</option><option value="12">Marketing</option><option value="13">MS Excel</option><option value="14">MS Office</option><option value="15">MySQL</option><option value="16">PHP</option><option value="17">Sales</option><option value="18">Strong Communication skills</option><option value="19">WordPress</option><option value="77">Access Contro System</option><option value="78">CCTV Fire alam</option></select>
                 </div>
        </div>
        <div class="col-md-4">
            <div class="formrow " id="country_id_div"> <select class="form-control" id="country_id" name="country_id"><option value="">Select Country</option><option value="101" selected="selected">India</option></select>
                 </div>
        </div>
        <div class="col-md-4">
            <div class="formrow " id="state_id_div"> <span id="default_state_dd"> <select class="form-control" id="state_id" name="state_id"><option value="" selected="selected">Select State</option>
          
            
            </select> </span>  </div>
        </div>
        <div class="col-md-4">
            <div class="formrow " id="city_id_div"> <span id="default_city_dd"> <select class="form-control" id="city_id" name="city_id"><option value="" selected="selected">Select City</option></select> </span>  </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="salary_from_div"> <input class="form-control" id="salary_from" placeholder="Salary from" name="salary_from" type="number">
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="salary_to_div">
                <input class="form-control" id="salary_to" placeholder="Salary to" name="salary_to" type="number">
                 </div>
        </div>
        
        <div class="col-md-6">
            <div class="formrow " id="salary_period_id_div"> <select class="form-control" id="salary_period_id" name="salary_period_id"><option value="" selected="selected">Select Salary Period</option><option value="3">Weekly</option><option value="1">Monthly</option><option value="2">Yearly</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow "> <label for="hide_salary" class="bold">Hide Salary?</label>
                <div class="radio-list">
                                        <label class="radio-inline">
                        <input id="hide_salary_yes" name="hide_salary" type="radio" value="1" >
                        Yes </label>
                    <label class="radio-inline">
                        <input id="hide_salary_no" name="hide_salary" type="radio" value="0" checked=&quot;checked&quot;>
                        No </label>
                </div>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="career_level_id_div"> <select class="form-control" id="career_level_id" name="career_level_id"><option value="" selected="selected">Select Career level</option><option value="1">Department Head</option><option value="2">Entry Level</option><option value="3">Experienced Professional</option><option value="4">GM / CEO / Country Head / President</option><option value="5">Intern/Student</option></select>
                 </div>
        </div>
    
        <div class="col-md-6">
            <div class="formrow " id="functional_area_id_div"> <select class="form-control" id="functional_area_id" name="functional_area_id"><option value="" selected="selected">Select Functional Area</option><option value="1">Accountant</option><option value="2">Accounts, Finance &amp; Financial Services</option><option value="3">Admin</option><option value="4">Admin Operation</option><option value="5">Administration</option><option value="6">Administration Clerical</option><option value="7">Advertising</option><option value="8">Advertising</option><option value="9">Advertisment</option><option value="10">Architects &amp; Construction</option><option value="11">Architecture</option><option value="12">Bank Operation</option><option value="13">Business Development</option><option value="14">Business Management</option><option value="15">Business Systems Analyst</option><option value="16">Clerical</option><option value="17">Client Services &amp; Customer Support</option><option value="18">Computer Hardware</option><option value="19">Computer Networking</option><option value="20">Consultant</option><option value="21">Content Writer</option><option value="22">Corporate Affairs</option><option value="23">Creative Design</option><option value="24">Creative Writer</option><option value="25">Customer Support</option><option value="26">Data Entry</option><option value="27">Data Entry Operator</option><option value="28">Database Administration (DBA)</option><option value="29">Development</option><option value="30">Distribution &amp; Logistics</option><option value="31">Education &amp; Training</option><option value="32">Electronics Technician</option><option value="33">Engineering</option><option value="34">Engineering Construction</option><option value="35">Executive Management</option><option value="36">Executive Secretary</option><option value="37">Field Operations</option><option value="38">Front Desk Clerk</option><option value="39">Front Desk Officer</option><option value="40">Graphic Design</option><option value="41">Hardware</option><option value="42">Health &amp; Medicine</option><option value="43">Health &amp; Safety</option><option value="44">Health Care</option><option value="45">Health Related</option><option value="46">Hotel Management</option><option value="47">Hotel/Restaurant Management</option><option value="48">HR</option><option value="49">Human Resources</option><option value="50">Import &amp; Export</option><option value="51">Industrial Production</option><option value="52">Installation &amp; Repair</option><option value="53">Interior Designers &amp; Architects</option><option value="54">Intern</option><option value="55">Internship</option><option value="56">Investment Operations</option><option value="57">IT Security</option><option value="58">IT Systems Analyst</option><option value="59">Legal &amp; Corporate Affairs</option><option value="60">Legal Affairs</option><option value="61">Legal Research</option><option value="62">Logistics &amp; Warehousing</option><option value="63">Maintenance/Repair</option><option value="64">Management Consulting</option><option value="65">Management Information System (MIS)</option><option value="66">Managerial</option><option value="67">Manufacturing</option><option value="68">Manufacturing &amp; Operations</option><option value="69">Marketing</option><option value="70">Marketing</option><option value="71">Media - Print &amp; Electronic</option><option value="72">Media &amp; Advertising</option><option value="73">Medical</option><option value="74">Medicine</option><option value="75">Merchandising</option><option value="76">Merchandising &amp; Product Management</option><option value="77">Monitoring &amp; Evaluation (M&amp;E)</option><option value="78">Network Administration</option><option value="79">Network Operation</option><option value="80">Online Advertising</option><option value="81">Online Marketing</option><option value="82">Operations</option><option value="83">Planning</option><option value="84">Planning &amp; Development</option><option value="85">PR</option><option value="86">Print Media</option><option value="87">Printing</option><option value="88">Procurement</option><option value="89">Product Developer</option><option value="90">Product Development</option><option value="91">Product Development</option><option value="92">Product Management</option><option value="93">Production</option><option value="94">Production &amp; Quality Control</option><option value="95">Project Management</option><option value="96">Project Management Consultant</option><option value="97">Public Relations</option><option value="98">QA</option><option value="99">QC</option><option value="100">Qualitative Research</option><option value="101">Quality Assurance (QA)</option><option value="102">Quality Control</option><option value="103">Quality Inspection</option><option value="104">Recruiting</option><option value="105">Recruitment</option><option value="106">Repair &amp; Overhaul</option><option value="107">Research &amp; Development (R&amp;D)</option><option value="108">Research &amp; Evaluation</option><option value="109">Research &amp; Fellowships</option><option value="110">Researcher</option><option value="111">Restaurant Management</option><option value="112">Retail</option><option value="113">Retail &amp; Wholesale</option><option value="114">Retail Buyer</option><option value="115">Retail Buying</option><option value="116">Retail Merchandising</option><option value="117">Safety &amp; Environment</option><option value="118">Sales</option><option value="119">Sales &amp; Business Development</option><option value="120">Sales Support</option><option value="121">Search Engine Optimization (SEO)</option><option value="122">Secretarial, Clerical &amp; Front Office</option><option value="123">Security</option><option value="124">Security &amp; Environment</option><option value="125">Security Guard</option><option value="126">SEM</option><option value="127">SMO</option><option value="128">Software &amp; Web Development</option><option value="129">Software Engineer</option><option value="130">Software Testing</option><option value="131">Stores &amp; Warehousing</option><option value="132">Supply Chain</option><option value="133">Supply Chain Management</option><option value="134">Systems Analyst</option><option value="135">Teachers/Education, Training &amp; Development</option><option value="136">Technical Writer</option><option value="137">Tele Sale Representative</option><option value="138">Telemarketing</option><option value="139">Training &amp; Development</option><option value="140">Transportation &amp; Warehousing</option><option value="141">TSR</option><option value="142">Typing</option><option value="143">Warehousing</option><option value="144">Web Developer</option><option value="145">Web Marketing</option><option value="146">Writer</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="job_type_id_div"> <select class="form-control" id="job_type_id" name="job_type_id"><option value="" selected="selected">Select Job Type</option><option value="1">Contract</option><option value="2">Freelance</option><option value="3">Full Time/Permanent</option><option value="4">Internship</option><option value="5">Part Time</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="job_shift_id_div"> <select class="form-control" id="job_shift_id" name="job_shift_id"><option value="" selected="selected">Select Job Shift</option><option value="1">First Shift (Day)</option><option value="2">Second Shift (Afternoon)</option><option value="3">Third Shift (Night)</option><option value="4">Rotating</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="num_of_positions_div"> <select class="form-control" id="num_of_positions" name="num_of_positions"><option value="" selected="selected">Select number of Positions</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="gender_id_div"> <select class="form-control" id="gender_id" name="gender_id"><option value="" selected="selected">No preference</option><option value="1">Female</option><option value="2">Male</option><option value="15">Both Genders Allowed</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow "> <input class="form-control datepicker" id="expiry_date" placeholder="Job expiry date" autocomplete="off" name="expiry_date" type="text">
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="degree_level_id_div"> <select class="form-control" id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Required Degree Level</option><option value="1">Non-Matriculation</option><option value="2">Matriculation/O-Level</option><option value="3">Intermediate/A-Level</option><option value="4">Bachelors</option><option value="5">Masters</option><option value="6">MPhil/MS</option><option value="7">PHD/Doctorate</option><option value="8">Certification</option><option value="9">Diploma</option><option value="10">PUC /12th</option><option value="41">SSLC/10th</option><option value="42">Below 10 Th</option><option value="43">ITI</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow " id="job_experience_id_div"> <select class="form-control" id="job_experience_id" name="job_experience_id"><option value="" selected="selected">Select Required job experience</option><option value="11">Fresher</option><option value="12">Less Than 1 Year</option><option value="1">1 Year</option><option value="3">2 Year</option><option value="4">3 Year</option><option value="5">4 Year</option><option value="6">5 Year</option><option value="7">6 Year</option><option value="8">7 Year</option><option value="9">8 Year</option><option value="10">9 Year</option><option value="2">10 Year</option></select>
                 </div>
        </div>
        <div class="col-md-6">
            <div class="formrow "> <label for="is_freelance" class="bold">Is Freelance?</label>
                <div class="radio-list">
                                        <label class="radio-inline">
                        <input id="is_freelance_yes" name="is_freelance" type="radio" value="1" >
                        Yes </label>
                    <label class="radio-inline">
                        <input id="is_freelance_no" name="is_freelance" type="radio" value="0" checked=&quot;checked&quot;>
                        No </label>
                </div>
                 </div>
                 <hr />
                 </div>
                 <div class="row" style="margin-left:3px; margin-right:3px">
        <div class="col-md-12 mb-3">
            <input type="checkbox" class="check_hr_details" name="hr_details" value="1" />
            <span style="font-size:15px; " class="mb-2"><b>HR Details</b></span>
        </div>
        <div class="row d-none" id="hr_details" style="padding-left:15px;padding-right:15px">
            <div class="col-md-6">
                
                <div class="formrow "> <input class="form-control" id="company_name" disabled placeholder="Compnay Name" name="name" type="text">
                     </div>
            </div>
            <div class="col-md-6">
                <div class="formrow "> <input class="form-control" id="hr_recruiter_name" disabled placeholder="HR Recruiter Name" name="ceo" type="text">
                     </div>
            </div>
            <div class="col-md-6">
                <div class="formrow "> <input class="form-control" id="mobile" disabled placeholder="Mobile Number" name="phone" type="text">
                     </div>
            </div>
            <div class="col-md-6">
                <div class="formrow "> <input class="form-control" disabled id="alt_number" placeholder="Alternate Number" name="alternate_phone" type="text">
                     </div>
            </div>
            <div class="col-md-6">
                <div class="formrow "> <input class="form-control" id="email" disabled placeholder="Email" name="email" type="text">
                     </div>
            </div>
            <div class="col-md-6">
                <div class="formrow "> <input class="form-control" id="alt_email" disabled placeholder="Alternate Email" name="alt_email" type="text">
                     </div>
            </div>
            <div class="col-md-12">
                <div class="formrow ">
                    <label for="">Address</label>
                    <textarea class="form-control" disabled id="address" placeholder="Address" name="location" cols="50" rows="10"></textarea>
                    
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="formrow">
                <button type="submit" class="btn">Update Job <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
    <input type="file" name="image" id="image" style="display:none;" accept="image/*"/>
</form>
<hr>
                            </div>
                        </div>
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
                    <li><a href="index">Home</a></li>
                    <li><a href="contact_s">Contact Us</a></li>
                    <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
                    <li><a href="https://eudyoga.com/faq">FAQs</a></li>
                                        
                    <li class=""><a href="https://eudyoga.com/cms/about-us">About Us</a></li>
                                        
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
                                                            <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=119">Sales &amp; Business Development</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=137">Tele Sale Representative</a></li>
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=23">Creative Design</a></li>
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=49">Human Resources</a></li>-->
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=112">Retail</a></li>-->
                                        <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=37">Field Operations</a></li>-->
                                        <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
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
<!--Footer end--> 
<!--Copyright-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="bttxt">Copyright &copy; 2024 E-Udyoga. All Rights Reserved. Design by: <a href="https://eudyoga.comhttp://graphicriver.net/user/ecreativesol" target="_blank">Thousand Vision World Pvt Ltd</a></div>
            </div>
            <div class="col-md-4">
                <div class="paylogos"><img src="https://eudyoga.com/public/images/payment-icons.png" alt="" /></div>    
            </div>
        </div>

    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
 <script type="text/javascript">
    function deleteJob(id) {
    var msg = 'Are you sure?';
    if (confirm(msg)) {
    $.post("https://eudyoga.com/delete-front-job", {id: id, _method: 'DELETE', _token: 'GUz5XVNZtKktXlFw5QeDuFkeYNz73WoQVzb8ABCj'})
            .done(function (response) {
            if (response == 'ok')
            {
            $('#job_li_' + id).remove();
            } else
            {
            alert('Request Failed!');
            }
            });
    }
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