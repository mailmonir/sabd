@extends('layouts.auth')

@section('content')
<div class="vd_login-page">
    <div class="heading clearfix">
        @include('partials.auth.authHeader')
    </div>
    <div class="panel widget">
        <div class="panel-body">
            <div class="login-icon entypo-icon"> <i class="icon-key"></i> </div>
            <div class="alert alert-info">
                <span class="vd_alert-icon"><i class="fa fa-info-circle vd_blue"></i></span>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
    </div>
    <!-- Panel Widget -->
    <div class="register-panel text-center font-semibold"> 
        <a href="{{route('welcome')}}">GO TO HOME<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a>
    </div>
</div>
<!-- vd_login-page -->
@endsection
