@extends('layouts.auth')

@section('content')
<div class="vd_login-page">
    <div class="heading clearfix">
        @include('partials.auth.authHeader')
    </div>
    <div class="panel widget">
        <div class="panel-body">
            <div class="login-icon entypo-icon"> <i class="icon-key"></i> </div>
            <form class="form-horizontal" id="login-form" action="#" role="form">
                @csrf
                @include('partials.auth.alert')
                <div class="form-group mgbt-xs-20">
                    <div class="col-md-12">
                        <div class="label-wrapper sr-only">
                            <label class="control-label" for="email">Email</label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper">
                        <span class="menu-icon"> <i class="fa fa-envelope"></i></span>
                            <input type="email" placeholder="Email" id="email" name="email" class="required" required>
                        </div>
                        <div class="label-wrapper">
                            <label class="control-label sr-only" for="password">Password</label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper">
                            <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                            <input type="password" placeholder="Password" id="password" name="password" class="required" required>
                        </div>
                    </div>
                </div>
                <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i>Please fill the necessary field </div>
                <div class="form-group">
                    <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="login-submit">Login</button>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="vd_checkbox">
                                    <input type="checkbox" id="checkbox-1" value="1">
                                    <label for="checkbox-1">Remember me</label>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right">
                                <div class=""> <a href="{{ route('password.request') }}">Forget Password?</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Panel Widget -->
    <div class="register-panel text-center font-semibold"> 
        <a href="{{ route('register') }}">CREATE AN ACCOUNT<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a>
    </div>
</div>
<!-- vd_login-page -->
@endsection

@section('page_specific_scripts')
<script type="text/javascript">
    $(document).ready(function () {
        var options_submit_login = { 
        type: "post",
        url:  '{{route("login")}}',

        success: function(data) {
            if (data) {
                $('.alert-success').fadeIn(100);
                $('#sMessage').text(data.message);
                setTimeout(function () {
                    location.reload();
                }, 1000);
            }	                        
        },
            
        error: function(data) {
            $('.alert-success').fadeOut(500);
            $('.alert-danger').fadeIn(500);
            $.each(data.responseJSON.errors, function(key, value){
                $('#eMessage').append( value + '<br>' );
            });
            $('.fa-spinner').remove();            
        }
    }; 
        $(document).on('click', '#login-submit', function(e) {
            "use strict";

            var form_register_2 = $('#login-form');
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
                    password: {
                        required: true,
                        minlength: 6
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
                    $(form).find('#login-submit').prepend('<i class="fa fa-spinner fa-spin mgr-10"></i>') /*.addClass('disabled').attr('disabled')*/ ;
                    success_register_2.hide();
                    error_register_2.hide();
                    $(form).ajaxSubmit(options_submit_login);  

                }
            });
        });

    });

</script>
<!-- Specific Page Scripts END -->

@endsection