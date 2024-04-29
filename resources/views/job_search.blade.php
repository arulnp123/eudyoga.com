@include('layouts.app')

@yield('content')



<div class="container">
<div class="listpgWraper">
    
                <div class="col-lg-9">

                    <!-- Search List -->

                    <div class="topstatinfo">
                        Showing Jobs : 1 - 
                    </div>

                    <ul class="searchList">


                        @foreach ($job_search as $jobs2)
                            <li class="">

                                <div class="row">


                                    <div class="col-lg-10 col-md-8">
                                        <div class="jobimg"><img
                                                src="https://eudyoga.com/public/admin_assets/no-image.png">
                                        </div>
                                        <div class="jobinfo">
                                            <h3><a href="job/Relationship%20Manager.html"
                                                    title="Relationship Manager">{{ $jobs2->title }}</h3>
                                            <div class="companyName"><a href="company/srinivas-92.html"
                                                    title="Kalyani Motors">{{ $jobs2->title }}</a></div>
                                            <div class="location">
                                                <label class="fulltime" title="Full Time/Permanent">Full
                                                    Time/Permanent</label>
                                                - <span>Hyderabad</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                        <div class="col-lg-2 col-md-4">
                                            <div class="listbtn"><a
                                                      href="{{ url('view_detail', $jobs2->id) }}">ViewDetials</a>
                                            </div>
                                        </div>
                                   
                                </div>
                                <div class="content">
                                    <p class="more">{{ $jobs2->description }}</p>
                                    
                                </div>

                            </li>
                        @endforeach


 


                    </ul>


                    <li class="pagination float-right mb-5">
                        {{ $job_search->links() }}
                    </li>

                    <div class="topstatinfo">
                        Showing Jobs : 1 - 
                    </div> 


                    





                    <!-- Pagination Start -->

                    <div class="pagiWrap">

                        <div class="row">

                            <div class="col-lg-5">

                                {{-- <div class="showreslt">

                                    Showing Jobs : 1 - 8 Total 8

                                </div> --}}

                            </div>

                            <div class="col-lg-7 text-right">





                            </div>

                        </div>

                    </div>

                    <!-- Pagination end -->

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
              <li><a href="index">Home</a></li>
              <li><a href="contact_us">Contact Us</a></li>
              <li class="postad"><a href="https://eudyoga.com/post-job">Post a Job</a></li>
              <li><a href="https://eudyoga.com/faq">FAQs</a></li>

              <li class=""><a href="about_us">About Us</a></li>

              <li class=""><a href="https://eudyoga.com/cms/Terms_And_Conditions">Terms &amp;
                      Conditions</a></li>

              <!--<li class=""><a href="https://eudyoga.com/cms/Privacy_Policy">Privacy Policy</a></li>-->

              <!--<li class=""><a href="https://eudyoga.com/cms/Refund_Policy">Refund_Policy</a></li>-->
              <!--<li><a href="https://103.154.233.105:2003/mail/" target="_blank">EMAIL ID LOGIN</a></li>-->
          </ul>
      </div>
      <!--Quick Links menu end-->

      <div class="col-md-3 col-sm-6">
          <h5>Jobs By Functional Area</h5>
          <!--Quick Links menu Start-->
          <ul class="quicklinks">
              <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial
                      Services</a></li>
              <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=118">Sales</a></li>
              <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=58">IT Systems Analyst</a></li>
              <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=63">Maintenance/Repair</a></li>
              <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=13">Business Development</a></li>
              <li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=68">Manufacturing &amp;
                      Operations</a></li>
              <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=1">Accountant</a></li>-->
              <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=53">Interior Designers &amp;-->
              <!--        Architects</a></li>-->
              <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=37">Field Operations</a></li>-->
              <!--<li><a href="https://eudyoga.com/jobs?functional_area_id%5B%5D=127">SMO</a></li>-->
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
          <div class="social"><a href="https://www.facebook.com/profile.php?id=100067114542067"
                  target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
              <a href="https://twitter.com/e_udyoga" target="_blank"><i class="fab fa-twitter-square"
                      aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/eudyoga/" target="_blank"><i class="fab fa-instagram"
                      aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/in/e-udyoga-25a2371b5/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube-square"
                      aria-hidden="true"></i></a>
          </div>
          <!-- Social Icons end -->

      </div>
      <!--About us End-->


  </div>
</div>
</div>
<!--Footer end-->





                <script>
$(document).ready(function(){
    var showChar = 150;  // Set the number of characters to show initially
    var ellipsestext = "...";
    var moretext = "Read more";
    var lesstext = "Read less";
    
    
    $('.more').each(function() {
        var content = $(this).html();
        
        if(content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
            
            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
            
            $(this).html(html);
        }
    });
    
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>
<style>
.morecontent span {
    display: none;
}
.morelink {
    display: block;
}
</style>