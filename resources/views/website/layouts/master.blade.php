<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounting Software</title>
    <link rel="stylesheet" href="{{ asset('public/styles/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .navbar-color {
            background-color: #4834d4;

        }
        .text_color{
            color: white!important;
        }

        .image-size {
            height: 180px !important;
            width: 100% !important;
        }
        .image-size-product {
            height: 250px !important;
        }

        .carousel-item img {
            margin: auto;
        }

        .bg-footer-color {
            background-color: #4834d4 !important;
        }



        @media (max-width: 768px) {
            .image-size {
                height: 150px !important;
            }
        }
    </style>
</head>

<body>
    <!--Navbar Start-->
    @include('website.layouts.header')
    <!--Navbar End-->

    <!--Main Body-->

    @yield('content')

    <!--Main Body-->

    <!--Footer Start-->
    @include('website.layouts.footer')
    <!--Footer End-->

    <script src="{{ asset('public/assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
