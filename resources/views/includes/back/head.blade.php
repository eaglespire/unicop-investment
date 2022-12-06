<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ Helper::buildPageTitle() }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Unicop Investment Loan Brykiva Technologies" name="description" />
    <meta content="Brykiva" name="Ohwofasa Andrew" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('back/assets/images/logos/logo.png') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('back/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('back/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.css">
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
            float:left;
            padding-right:var(--bs-breadcrumb-item-padding-x);
            color:var(--bs-breadcrumb-divider-color);
            content:var(--bs-breadcrumb-divider, "/");
        }
        .btn.btn-primary{
            background: #EF7722 !important;
            border: #EF7722 !important;
        }
        .btn.btn-danger{
            background: #2F8AA2 !important;
            border: #2F8AA2 !important;
        }
        #sidebar-menu ul li a:hover {
            color: var(--bs-sidebar-menu-item-hover-color);
        }
    </style>
    @livewireStyles
    @stack('styles')
</head>

