@include('user/layouts.app')

@yield('content')


<!-- Header end -->
<div class="authpages">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="useraccountwrap">
                    <div class="userbtns">

                    </div>
                    <div class="userccount whitebg">
                        <h4 class="text-center pb-2">Employee Register Form</h4>
                        <div class="tab-content">
                            <div id="candidate" class="formpanel mt-0 tab-pane active">
                                <form class="form-horizontal" id="company_register" action="{{ url('/addemployer') }}"
                                    method="POST">
                                    @csrf

                                    <div class="formrow">
                                        <input type="text" id="fullnameinput" name="name"
                                            class="form-control txtOnly" required="required" placeholder="HR Name"
                                            value="">
                                        <span id="name" class="help-block"> </span>
                                    </div>
                                    <div class="formrow">
                                        <input type="text" name="c_name" class="form-control txtOnly"
                                            required="required" placeholder="Company Name" value="">
                                        <span id="c_name" class="help-block"> </span>
                                    </div>
                                    <div class="formrow">
                                        <input type="number" id="phone" name="phone" class="form-control"
                                            placeholder="Whatsapp Number" value="" maxlength="10">
                                        <span id="dupmobile" class="help-block"> </span>
                                    </div>
                                    <div class="formrow">
                                        <input type="email" name="email" id="email" onkeyup="duplicateemail(0)"
                                            class="form-control" required="required" placeholder="Email" value="">
                                        <span id="dupemail" class="help-block" style="color: red"> </span>
                                    </div>
                                    <div class="formrow">
                                        <input type="password" name="password" class="form-control" required="required"
                                            placeholder="Password" value="">
                                        <span id="password" class="help-block"> </span>
                                    </div>
                                    <div class="formrow">
                                        <input type="password" name="c_password" class="form-control"
                                            required="required" placeholder="Password Confirmation" value="">
                                        <span id="password_confirmation" class="help-block"> </span>
                                    </div>






                                    <div class="formrow">
                                        <select name="state_id" id="stateid" required class="form-control">
                                            <option value="">Select State</option>
                                            @foreach ($states as $key => $statelist)
                                                <option value="{{ $statelist->id }}">{{ $statelist->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="formrow">
                                        <select name="city_id" id="cityid" required class="form-control">
                                        </select>
                                    </div>


                                    <div class="formrow">
                                        <input type="text" name="refrence" class="form-control"
                                            placeholder="Reference" value="">
                                    </div>
                                    <!--<div class="formrow">-->
                                    <!--    <input type="checkbox" value="1" name="is_subscribed"-->
                                    <!--        checked=&quot;checked&quot; />-->
                                    <!--    Subscribe to Newsletter-->
                                    <!--    <span id="is_subscribed" class="help-block"> </span>-->
                                    <!--</div>-->
                                    <div class="formrow">
                                        <input type="checkbox" value="1" name="terms_of_use" checked />
                                        <a href="cms/terms-of-use.html">I accept Terms of Use</a>
                                        <span id="terms_of_use" class="help-block"> </span>
                                    </div>
                                    <!--<div class="formrow">-->
                                    <!--    <input type="checkbox" value="1" name="wats_notify" checked />-->
                                    <!--    Whatsapp Notifications-->
                                    <!--    <span id="wats_notify" class="help-block"> </span>-->
                                    <!--</div>-->
                                    <!--<div-->
                                    <!--    class="form-group col-12 col-sm-12 col-md-10 text-center mx-auto mobile-padding-no ">-->
                                    <!--    <div data-sitekey="6Lfr3oImAAAAAAwFe5kshKBoexBOl2_ESpNjpp8P"-->
                                    <!--        class="g-recaptcha"></div>-->
                                    <!--    <span id="g-recaptcha-response" class="help-block"> </span>-->
                                    <!--</div>-->
                                    <input type="submit" class="btn" value="Register" id="save">
                                    <script>
                                        $('#stateid').on('change', function() {
                                            var state_id = this.value;
                                            $("#cityid").html('');
                                            $.ajax({
                                                url: "{{ url('/getcity') }}",
                                                type: "POST",
                                                data: {
                                                    state_id: state_id,
                                                    _token: '{{ csrf_token() }}'
                                                },
                                                dataType: 'json',
                                                success: function(result) {
                                                    $('#cityid').html('<option value="">Select City Name</option>');
                                                    $.each(result, function(key, value) {
                                                        $("#cityid").append('<option value="' + value
                                                            .id + '">' + value.city + '</option>');
                                                    });
                                                }
                                            });
                                        });
                                        $(document).ready(function() {
                                            $(".txtOnly").keypress(function(e) {
                                                var key = e.keyCode;
                                                if (key >= 48 && key <= 57) {
                                                    e.preventDefault();
                                                }
                                            });
                                        });
                                    </script>
                                </form>
                            </div>
                        </div>
                        <!-- sign up form -->
                        <div class="newuser"><i class="fas fa-user" aria-hidden="true"></i> Have Account? <a
                                href="{{ url('/employer_login') }}">Sign in</a></div>
                        <!-- sign up form end-->
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="loginpageimg"><img
                        src="./assets/images/login-page-banner.png" alt="">
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- sign up form -->
    {{-- <div class="newuser"><i class="fas fa-user" aria-hidden="true"></i> Have Account? <a href="{{url('/employer_login')}}">Sign in</a></div>
              <!-- sign up form end-->
           </div>

        </div>
    </div>
    <!-- sign up form -->
    <div class="newuser"><i class="fas fa-user" aria-hidden="true"></i> Have Account? <a
            href="{{ url('/employer_login') }}">Sign in</a></div>
    <!-- sign up form end-->
</div>

</div>
</div>
</div>
<div class="modal fade" id="staticBackdropLogin" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="submit_otp" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Email OTP</h5>(<span id="email_send"></span>)
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="wf92gEzv5MvhnWl0HXPEaDnWDxKuc9Q5hOMnPnR8">
                        <div id="modelemail" class="help-block"> </div>
                        <input type="hidden" value="arun12@gmail.com" id="email_sending" name="email" />
                        <label for="recipient-name" class="col-form-label">OTP</label>
                        <input type="number" class="form-control" name="otp" id="recipient-name">
                        <span id="modelotp" class="help-block"> </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Verify</button>
                </div>
            </div>
        </form>
    </div> --}}
</div>
@push('page_scripts')
