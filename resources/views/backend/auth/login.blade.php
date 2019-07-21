<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @endlangrtl

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Ashikul Alam Chowdhury')">
        <meta name="author" content="@yield('meta_author', 'Ashikul Alam Chowdhury')">
        @yield('meta')

        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/backend.css')) }}

        @stack('after-styles')

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>

<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content" style="padding-top: 50px">
            <div class="login-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <img class="align-content" src="{{ asset('img/backend/logo.png') }}" alt="">
                </a>
            </div>
            <div class="login-form">
                {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                    <div class="form-group">
                        <label>Email address</label>
                        {{ html()->email('email')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.email'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        {{ html()->password('password')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.password'))
                                ->required() }}
                    </div>
                    <div class="checkbox">
                        <label>
                            {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                        </label>
                        <label class="pull-right">
                            <a href="{{ route('frontend.auth.password.reset') }}">Forgotten Password?</a>
                        </label>

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>

                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="{{route('frontend.auth.register')}}"> Sign Up Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@stack('before-scripts')
{!! script(mix('js/manifest.js')) !!}
{!! script(mix('js/vendor.js')) !!}
{!! script(mix('js/backend.js')) !!}
@stack('after-scripts')

</body>

</html>
