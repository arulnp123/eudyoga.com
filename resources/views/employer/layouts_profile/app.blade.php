
<!DOCTYPE html>

<html lang="en" class="ltr" dir="ltr">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Udyoga</title>

    <meta name="Description" content="E-Udyoga">

    <meta name="Keywords" content="E-Udyoga">

    

    <!-- Fav Icon -->

    <link rel="shortcut icon" href="{{ URL::to('/') }}/assets/favicon.ico">

    <!-- Slider -->

    <link href="{{ URL::to('/') }}/public/assets/js/revolution-slider/css/settings.css" rel="stylesheet">

    <!-- Owl carousel -->

    <link href="{{ URL::to('/') }}/public/assets/css/owl.carousel.css" rel="stylesheet">

    <!-- Bootstrap -->

    <link href="{{ URL::to('/') }}/public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="{{ URL::to('/') }}/public/assets/css/all.min.css" rel="stylesheet">

    <!-- Custom Style -->

    <link href="{{ URL::to('/') }}/public/assets/css/main.css" rel="stylesheet">

    
    <link href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

          <script src="https://eudyoga.com/js/html5shiv.min.js"></script>

          <script src="https://eudyoga.com/js/respond.min.js"></script>

        <![endif]-->

    


    

    

</head>



<body>





@include('employer/layouts_profile.header')

        @yield('content')
      






<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <!-- Bootstrap's JavaScript -->

    <script src="{{ URL::to('/') }}/public/assets/js/jquery.min.js"></script>

    <script src="{{ URL::to('/') }}/public/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ URL::to('/') }}/public/assets/js/popper.js"></script>

    <!-- Owl carousel -->

    <script src="{{ URL::to('/') }}/public/assets/js/owl.carousel.js"></script>

    <script src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

    <script src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <script src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

    <script src="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>

    <!-- Revolution Slider -->

    <script type="text/javascript" src="{{ URL::to('/') }}/public/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>

    <script type="text/javascript" src="{{ URL::to('/') }}/public/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>


    
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

    <script src="{{ URL::to('/') }}/assets/js/script.js"></script>

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
        
</body>



</html>