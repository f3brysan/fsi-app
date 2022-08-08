<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon2.ico">

    @include('layouts.css')

    @stack('css-custom')


</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    @include('layouts.header')

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.sidebar')

        @yield('container')

        @include('layouts.footer')

        @include('layouts.js')

        @stack('js-custom')
        
