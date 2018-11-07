@php
    $route = Route::current();
@endphp

<div class="logo">
    <h2 class="mgbt-xs-5"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></h2>
    {{$route->getName()}}
</div>


@if ($route->getName() == 'login')
    <h4 class="text-center font-semibold vd_grey">{{__('LOGIN TO YOUR ACCOUNT') }}</h4>
@elseif ($route->getName() == 'register')
    <h4 class="text-center font-semibold vd_grey">{{__('COMPANY REGISTRATION') }}</h4>
@elseif ($route->getName() == 'verification*')
    <h4 class="text-center font-semibold vd_grey">{{ __('VERIFY YOUR EMAIL ADDRESS') }}</h4>
@elseif ($route->getName() == 'password.request')
    <h4 class="text-center font-semibold vd_grey">{{ __('EMAIL PASSWORD RESET LINK') }}</h4>
@elseif ($route->getName() == 'password.reset')
    <h4 class="text-center font-semibold vd_grey">{{ __('RESET PASSWORD') }}</h4>
@elseif ($route->getName() == 'verification.notice')
    <h4 class="text-center font-semibold vd_grey">{{ __('VERIFICATION NOTICE') }}</h4>

@elseif ($route->getName() == 'admin.login')
    <h4 class="text-center font-semibold vd_grey">{{__('LOGIN TO ADMIN ACCOUNT') }}</h4>
@elseif ($route->getName() == 'admin.password.request')
    <h4 class="text-center font-semibold vd_grey">{{ __('EMAIL ADMIN PASSWORD RESET LINK') }}</h4>
@elseif ($route->getName() == 'admin.password.reset')
    <h4 class="text-center font-semibold vd_grey">{{ __('RESET ADMIN PASSWORD') }}</h4>

@elseif ($route->getName() == 'auditor.login')
    <h4 class="text-center font-semibold vd_grey">{{__('LOGIN TO AUDITING COMPANY ACCOUNT') }}</h4>
@elseif ($route->getName() == 'auditor.register')
    <h4 class="text-center font-semibold vd_grey">{{__('AUDITING COMPANY REGISTRATION') }}</h4>
@elseif ($route->getName() == 'auditor.verification*')
    <h4 class="text-center font-semibold vd_grey">{{ __('VERIFY AUDITING COMPANY EMAIL ADDRESS') }}</h4>
@elseif ($route->getName() == 'auditor.password.request')
    <h4 class="text-center font-semibold vd_grey">{{ __('EMAIL PASSWORD RESET LINK') }}</h4>
@elseif ($route->getName() == 'auditor.password.reset')
    <h4 class="text-center font-semibold vd_grey">{{ __('RESET AUDITING COMPANY PASSWORD') }}</h4>
@endif