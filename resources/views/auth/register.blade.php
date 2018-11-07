@extends('layouts.auth') 

@section('content')

<div class="vd_register-page">
    <div class="heading clearfix">
        @include('partials.auth.authHeader')
    </div>
    <div class="panel widget">
        <div class="panel-body">
            <form class="form-horizontal" action="" role="form" id="register-form">
            @csrf
            @include('partials.auth.alert')
                
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Company') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="">
                            <span class="menu-icon">
                                <i class="fa fa-institution"></i>
                            </span>
                            <input type="text" placeholder="Company" class="required" required name="company" id="company" value="{{ old('company') }}">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Address') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="address-input-wrapper">
                            <span class="menu-icon">
                                <i class="fa fa-location-arrow"></i>
                            </span>
                            <input type="text" placeholder="Your address" class="required" name="address" id="address" value="{{ old('address') }}">
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Email') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="">
                            <span class="menu-icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" placeholder="Email" class="required" required name="email" id="email" value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
            
                <div class="form-group ">
                    <div class="col-md-12">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Phone') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="phone-input-wrapper">
                        <span class="menu-icon">
                            <i class="fa fa-phone"></i>
                        </span>
                            <input type="number" placeholder="Phone number" class="required" required name="phone" id="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Location') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="">
                            <span class="menu-icon">
                                <i class="icon-location"></i>
                            </span>
                            <select style="border:none; background:none; padding-left:38px; padding-bottom:7px; padding-top:6px; padding-right:6px;" required name="location">
                                <option disabled selected value="">Select company location</option>
                                @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->location_name}}</option>
                                @endforeach
                          </select>
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Workers') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="">
                            <span class="menu-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <input type="text" placeholder="Workers" class="required" required name="workers" id="workers" value="{{ old('workers') }}">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Contact Person First Name') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="first-name-input-wrapper">
                            <span class="menu-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" placeholder="John" class="required" required name="firstname" id="firstname" value="{{ old('firstname') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Contact Person Last Name') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="last-name-input-wrapper">
                            <span class="menu-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" placeholder="Doe" class="required" required name="lastname" id="lastname" value="{{ old('lastname') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label">{{ __('Gender') }}
                            <span class="vd_red">*</span>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <div id="gender-input-wrapper" class="">
                            <div class="vd_radio radio-success">
                                <input type="radio" checked="" value="1" id="optionsRadios3" name="gender">
                                <label for="optionsRadios3">{{ __('Male') }}</label>
                                <input type="radio" value="0" id="optionsRadios4" name="gender">
                                <label for="optionsRadios4">{{ __('Female') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Designation') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="">
                            <span class="menu-icon">
                                <i class="fa fa-user-md"></i>
                            </span>
                            <input type="text" placeholder="Designation" class="required" required name="designation" id="designation" value="{{ old('designation') }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Password') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper">
                            <span class="menu-icon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input type="password" placeholder="Password" class="required" required name="password" id="password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label-wrapper">
                            <label class="control-label">{{ __('Confirm Password') }}
                                <span class="vd_red">*</span>
                            </label>
                        </div>
                        <div class="vd_input-wrapper" id="confirm-password-input-wrapper">
                            <span class="menu-icon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input type="password" placeholder="Password" class="required" required name="password_confirmation" id="password_confirmation">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 mgbt-xs-10 mgtp-20">
                        <div class="vd_checkbox">
                            <input type="checkbox" id="checkbox-2" name="agree" required value="1">
                            <label for="checkbox-2">{{ __('I agree with') }}
                                <a href="#">{{ __('terms of service') }}</a>
                            </label>
                        </div>
                    </div>
                    {{--
                    <div class="col-md-12 mgbt-xs-10 mgtp-20">
                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                        <input type="hidden" class="hiddenRecaptcha required" required name="hiddenRecaptcha" id="hiddenRecaptcha">
                    </div>
                    --}}
                </div>

                <div class="form-group">
                    <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-register" name="submit-register">{{ __('Register') }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- Panel Widget -->
    <div class="register-panel text-center font-semibold">{{ __('Already Have an Account?') }}
        <br/>
        <a href="{{route('login')}}">{{ __('SIGN IN') }}
            <span class="menu-icon">
                <i class="fa fa-angle-double-right fa-fw"></i>
            </span>
        </a>
    </div>
</div>
<!-- vd_login-page -->
@endsection

@section('page_specific_scripts')
<script type="text/javascript">
    $(document).ready(function () {
        
        var formData = $( "form" ).serialize();

        var options_submit_register = { 
            type: "post",
            url:  "{{ route('register') }}",
            data: formData,

            success: function(data) {
                if (data.response == 'success') {
                    $('.alert-success').fadeIn(100);
                    $('#sMessage').text(data.message);
                    $('.fa-spinner').remove();
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
        $(document).on('click', '#submit-register', function(e) {

            "use strict";

            // console.log(formData);

            var form_register_2 = $('#register-form');
            var error_register_2 = $('.alert-danger', form_register_2);
            var success_register_2 = $('.alert-success', form_register_2);

                form_register_2.validate({
                    errorElement: 'div', //default input error message container
                    errorClass: 'vd_red', // default input error message class
                    focusInvalid: false, // do not focus the last invalid input
                    ignore: "",
                    rules: {
                    firstname: {
                        minlength: 3,
                        required: true
                    },
                    lastname: {
                        minlength: 3,
                        required: true
                    },				
                    email: {
                        required: true,
                        email: true
                    },
                    address: {
                        required: true,
                    },	
                    company: {					
                        required: true
                    },	
                    location: {
                        required: true
                    },
                    workers: {
                        required: true,
                        digits: true,
                    },
                    designation: {
                        required: true
                    },
                    phone: {					
                        required: true
                    },	
                    gender: {					
                        required: true
                    },					
                    password: {
                        required: true,
                        minlength: 6,
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password",
                    },
                    // hiddenRecaptcha: {
                    //     required: function () {
                    //         if (grecaptcha.getResponse() == '') {
                    //             return true;
                    //         } else {
                    //             return false;
                    //         }
                    //     }
                    // },
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
                    $(form).find('#submit-register').prepend('<i class="fa fa-spinner fa-spin mgr-10"></i>') /*.addClass('disabled').attr('disabled')*/ ;
                    success_register_2.hide();
                    error_register_2.hide();
                    $(form).ajaxSubmit(options_submit_register);  
                }
            });
        });
    });

</script>
<!-- Specific Page Scripts END -->

@endsection
