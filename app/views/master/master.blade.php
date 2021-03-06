<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>@yield('title', 'Title')</title>
    @yield('meta','')

    <link rel="stylesheet" href="css/montserrat.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cockadoodlestyle.css">
    <link rel="stylesheet" href="css/jquery.nouislider.css">

    <style>
        @yield('styles')
    </style>

    @include('partials/apple-icons')
</head>
<body>

@yield('content')

@yield('scripts','')

@include('partials/footer')