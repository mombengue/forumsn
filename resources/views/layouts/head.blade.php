<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome-font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    </head>