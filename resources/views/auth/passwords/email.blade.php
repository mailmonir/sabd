@extends('layouts.auth')

@section('content')
<div class="vd_login-page">
    <div class="heading clearfix">
        @include('partials.auth.authHeader')
    </div>

    <div class="panel widget">
        <div class="panel-body">
            <div class="login-icon">
                <i class="fa fa-lock"></i>
            </div>
            <form class="form-horizontal" role="form" id="forget-password-form" action="">
                @csrf
                @include('partials.auth.alert')
                <div class="form-group mgbt-xs-20">
                    <div class="col-md-12">
                        <p class="text-center"><strong>To reset your password, enter the email address you use to sign in to Social Audit BD.</strong> </p>
                        <div class="vd_input-wrapper" id="email-input-wrapper">
                            <span class="menu-icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" placeholder="Email" id="email" name="email" class="required">
                        </div>

                    </div>
                </div>


                <div class="form-group" id="submit-password-wrapper">
                    <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-password" name="submit-password">Send me my password</button>
                    </div>

                </div>
            </form>


        </div>
    </div> <!-- Panel Widget -->
    <div class="register-panel text-center font-semibold">
        <a href="{{ route('login') }}">LOGIN</a> <span class="mgr-10 mgl-10">|</span>
        <a href="{{ route('register') }}">CREATE AN ACCOUNT</a>
    </div>
</div> <!-- vd_login-page -->

@endsection
@section('page_specific_scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var options_submit_forgot_password_email = { 
        type: "post",
        url:  '{{route("password.email")}}',

        success: function(data) {
            if (data.response == 'success') {
                $('.alert-success').fadeIn(100);
                $('#sMessage').text(data.message);
                $('.fa-spinner').remove();  
            }
            else if (data.response == 'error')
            {
                $('.alert-danger').fadeIn(100);
                $('.alert-success').fadeOut(100);
                $('#eMessage').text(data.message);
                $('.fa-spinner').remove();
            }          
        },
            
        error: function(data) {
            // console.log(data)
            $('.alert-success').fadeOut(500);
            $('.alert-danger').fadeIn(500);
            $.each(data.responseJSON.errors, function(key, value){
                $('#eMessage').append( value + '<br>' );
            });
            $('.fa-spinner').remove();            
        }
    }; 
        $(document).on('click', '#submit-password', function(e) {
            "use strict";

            var form_register_2 = $('#forget-password-form');
            var error_register_2 = $('.alert-danger', form_register_2);
            var success_register_2 = $('.alert-success', form_register_2);

            form_register_2.validate({
                errorElement: 'div', //default input error message container
                errorClass: 'vd_red', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",
                rules: {

                    email: {
                        required: true,
                        email: true
                    },
                },

                errorPlacement: function (error, element) {
                    if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")) {
                        element.parent().append(error);
                    } else if (element.parent().hasClass("vd_input-wrapper")) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success_register_2.hide();
                    error_register_2.show();
                },

                highlight: function (element) { // hightlight error inputs

                    $(element).addClass('vd_bd-red');
                    $(element).parent().siblings('.help-inline').removeClass('help-inline hidden');
                    if ($(element).parent().hasClass("vd_checkbox") || $(element).parent().hasClass("vd_radio")) {
                        $(element).siblings('.help-inline').removeClass('help-inline hidden');
                    }

                },

                unhighlight: function (element) { // revert the change dony by hightlight
                    $(element)
                        .closest('.control-group').removeClass('error'); // set error class to the control group
                },

                success: function (label, element) {
                    label
                        .addClass('valid').addClass('help-inline hidden') // mark the current input as valid and display OK icon
                        .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                    $(element).removeClass('vd_bd-red');
                },

                submitHandler: function (form) {
                    $(form).find('#submit-password').prepend('<i class="fa fa-spinner fa-spin mgr-10"></i>') /*.addClass('disabled').attr('disabled')*/ ;
                    success_register_2.hide();
                    error_register_2.hide();
                    $(form).ajaxSubmit(options_submit_forgot_password_email);  

                }
            });
        });

    });

</script>
<!-- Specific Page Scripts END -->

@endsection
