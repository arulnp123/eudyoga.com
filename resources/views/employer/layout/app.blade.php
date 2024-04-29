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


    <link
        href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
        rel="stylesheet" type="text/css" />

    <link href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/css/select2.min.css"
        rel="stylesheet" type="text/css" />

    <link href="{{ URL::to('/') }}/public/assets/admin_assets/global/plugins/select2/css/select2-bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.bootstrap4.css" />

    <!--[if lt IE 9]>

          <script src="https://eudyoga.com/js/html5shiv.min.js"></script>

          <script src="https://eudyoga.com/js/respond.min.js"></script>

        <![endif]-->








</head>



<body>





    @include('employer/layout.header')

    @yield('content')









    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false"
        data-turbo-eval="false"></script>
    <!-- Bootstrap's JavaScript -->

    <script src="{{ URL::to('/') }}/public/assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap4.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.bootstrap4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.colVis.min.js"></script>








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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>



    <script type="text/javascript">
        function changeImmediateAvailableStatus(user_id, old_status) {
            $.post("https://eudyoga.com/update-immediate-available-status", {
                    user_id: user_id,
                    old_status: old_status,
                    _method: 'POST',
                    _token: '5llEjXHJelpBjXJ00yM1IP4O8WrDR9LLUNSC6YOR'
                })
                .done(function(response) {
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
