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

        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/backend.css')) }}

        @stack('after-styles')

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>

    <body>


    <!-- Left Panel -->

    @include('backend.includes.aside')

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    @include('backend.includes.header')
    <!-- Header-->
        <div class="content mt-3">
            @include('includes.partials.messages')
            @yield('content')
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    @stack('before-scripts')
    {!! script(mix('js/manifest.js')) !!}
    {!! script(mix('js/vendor.js')) !!}
    {!! script(mix('js/backend.js')) !!}
    @stack('after-scripts')


    </body>

    </html>

