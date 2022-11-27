<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Unicop Investment Loan Brykiva Technologies" name="description" />
    <meta content="Brykiva" name="Ohwofasa Andrew" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('back/assets/images/logos/logo.png') }}">

    <!-- Bootstrap Css -->
    <link href="/back/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/back/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/back/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.css">
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            float:left;
            padding-right:var(--bs-breadcrumb-item-padding-x);
            color:var(--bs-breadcrumb-divider-color);
            content:var(--bs-breadcrumb-divider, "/");
        }
    </style>
    @livewireStyles
    @stack('styles')
</head>


<body>
