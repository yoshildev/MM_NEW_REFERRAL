<!doctype html>
<html lang="en">

<head>
    <title>Wedding Matrimony</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#f6af04">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <!--== FAV ICON(BROWSER TAB ICON) ==-->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!--== CSS FILES ==-->
    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
</head>

<body>

        @include('front.components.header')
        @yield('content')
        @include('front.components.footer')
        @include('front.components.messages');


