<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LetsQualifiedCertificates') }}</title>
        <link rel="icon" href="{!! asset('images/logo_image.jpg') !!}"/>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}" defer></script>
        <script src="{{ asset('js/MultiStepForm.js') }}" defer></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
