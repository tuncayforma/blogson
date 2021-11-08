<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('back/dist')}}/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('back/dist')}}/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{asset('back/dist')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('back/dist')}}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('back/dist')}}/assets/css/app.css">
    <link rel="stylesheet" href="{{asset('back/dist')}}/assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="shortcut icon" href="{{asset('back/dist')}}/assets/images/favicon.svg" type="image/x-icon">
    @yield('css')
</head>

<body>
