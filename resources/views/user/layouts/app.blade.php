<!DOCTYPE html>

<html lang="en" class="ltr" dir="ltr">




<!-- Mirrored from eudyoga.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Dec 2023 04:34:03 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobs In India</title>

    <meta name="Description"
        content="Find best Jobs in India, jobs listings and job opportunities on Jobs Portal. Browse more than 100K jobs in United States of America and apply for free! Jobs Portal is INDIA's leading job website where more than 52K top companies are posting jobs">

    <meta name="Keywords"
        content="Jobs in India, Jobs BANGALORE, Jobs, Careers, Recruitment, Employment, Hiring, Banking, CVs, Career, Finance, IT, Marketing, Online Jobs, Opportunity, , Resume, Work,">

    <meta name="robots" content="ALL, FOLLOW,INDEX" />
    <meta name="author" content="JobPortal.PK" />

    <!-- Fav Icon -->

    <link rel="shortcut icon" href="public/favicon.ico">

    <!-- Slider -->

    <!-- <link href="{{ URL::to('/') }}/assets/css/settings.css" rel="stylesheet"> -->

    <!-- Owl carousel -->

    <link href="{{ URL::to('/') }}/public/assets/css/owl.carousel.css" rel="stylesheet">

    <!-- Bootstrap -->

    <link href="{{ URL::to('/') }}/public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="{{ URL::to('/') }}/public/assets/css/all.min.css" rel="stylesheet">

    <!-- Custom Style -->

    <link href="{{ URL::to('/') }}/public/assets/css/main.css" rel="stylesheet">


    <link
        href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
        rel="stylesheet" type="text/css" />

    <link href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/css/select2.min.css"
        rel="stylesheet" type="text/css" />

    <link href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/css/select2-bootstrap.min.css"
        rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

          <script src="https://eudyoga.com/js/html5shiv.min.js"></script>

          <script src="https://eudyoga.com/js/respond.min.js"></script>

        <![endif]-->




    @include('user/layouts.header')

    @yield('content')











    </div>
    <script src="../cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false"
        data-turbo-eval="false"></script>
    <!-- Bootstrap's JavaScript -->

    <script src="{{ URL::to('/') }}/public/assets/js/jquery.min.js"></script>

    <script src="{{ URL::to('/') }}/public/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ URL::to('/') }}/public/assets/js/popper.js"></script>

    <!-- Owl carousel -->

    <script src="{{ URL::to('/') }}/public/assets/js/owl.carousel.js"></script>

    <script
        src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>

    <script
        src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js"
        type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <script src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/js/select2.full.min.js"
        type="text/javascript"></script>

    <script src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/jquery.scrollTo.min.js"
        type="text/javascript"></script>

    <!-- Revolution Slider -->

    <script type="text/javascript"
        src="{{ URL::to('/') }}/public/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>

    <script type="text/javascript"
        src="{{ URL::to('/') }}/public/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    

    <script src="unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>

    <script src="cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script async src="https://www.google.com/recaptcha/api.js">
        < script type = "text/javascript" >
            $(document).ready(function() {


                $(document).on('click', '#send_subscription_form', function() {
                    var postData = $('#subscribe_newsletter_form').serialize();
                    $.ajax({
                        type: 'POST',
                        url: "https://eudyoga.com/subscribe-newsletter",
                        data: postData,
                        //dataType: 'json',
                        success: function(data) {
                            response = JSON.parse(data);
                            var res = response.success;
                            if (res == 'success') {
                                var errorString = '<div role="alert" class="alert alert-success">' +
                                    response.message + '</div>';
                                $('#alert_messages').html(errorString);
                                $('#subscribe_newsletter_form').hide('slow');
                                $(document).scrollTo('.alert', 2000);
                            } else {
                                var errorString =
                                    '<div class="alert alert-danger" role="alert"><ul>';
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
    </script>

    <script>
        $(document).ready(function($) {
            $("form").submit(function() {
                $(this).find(":input").filter(function() {
                    return !this.value;
                }).attr("disabled", "disabled");
                return true;
            });
            $("form").find(":input").prop("disabled", false);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function($) {
            $('#country_id').on('change', function(e) {
                e.preventDefault();
                filterStates(0);
            });
            $(document).on('change', '#state_id', function(e) {
                e.preventDefault();
                filterCities(0);
            });
            filterStates(0);
        });

        function filterStates(state_id) {
            var country_id = $('#country_id').val();
            if (country_id != '') {
                $.post("filter-states-dropdown.html", {
                        country_id: country_id,
                        state_id: state_id,
                        _method: 'POST',
                        _token: 'wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8'
                    })
                    .done(function(response) {
                        $('#state_dd').html(response);
                        filterCities(0);
                    });
            }
        }

        function filterCities(city_id) {
            var state_id = $('#state_id').val();
            if (state_id != '') {
                $.post("filter-cities-dropdown.html", {
                        state_id: state_id,
                        city_id: city_id,
                        _method: 'POST',
                        _token: 'wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8'
                    })
                    .done(function(response) {
                        $('#city_dd').html(response);
                    });
            }
        }
    </script>
    <!-- Custom js -->

    <script src="public/js/script.js"></script>

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