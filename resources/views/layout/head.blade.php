<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        <header class="header-fixed">
            <div class="header-fixed__active">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <svg width="48" height="30" viewBox="0 0 48 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M23.9507 0H29.9258V6.0199H48.0005V24.1294H42.0254V30H29.9258H23.9507V23.9801H17.9258V18.01H23.9507V0Z"
                    fill="white" />
                <path d="M5.97511 6.02002H0V11.9902H5.97511V6.02002Z" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5.9248 0H11.9995V6.0199H18.0244V12.0896H11.9995V17.9602H5.9248V0Z" fill="#E6E6E6" />
            </svg>
        </header>

        <div class="header-margin"></div>
