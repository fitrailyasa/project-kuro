<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Kuro - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
    <script src="https://kit.fontawesome.com/2a99f4df77.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @yield('style')

    <!--Favicon-->
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
        href="{{ asset('assets/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('assets/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('assets/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('assets/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="{{ asset('assets/favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('assets/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ asset('assets/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('assets/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-128.png') }}" sizes="128x128" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}" sizes="128x128" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('assets/favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('assets/favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('assets/favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('assets/favicon/mstile-310x310.png') }}" />

    <style>
        .aktif {
            margin: 3px;
            color: white;
            background-color: #0093E9;
            background-image: linear-gradient(160deg, #0074b7 0%, #80D0C7 100%);
        }

        .content {
            background-color: #FFFFFF;
            /* background-image: linear-gradient(160deg, #ffffff 0%, #80D0C7 100%); */
        }

        .kartu {
            color: white;
            background-color: rgba(189, 189, 189, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.459);
            border-radius: 15px;
            margin: 40px 10px 10px 10px;
            padding: 10px;
            width: 400px;
            backdrop-filter: blur(20px);
        }

        .header {
            color: white;
            backdrop-filter: blur(20px);
        }

        .kartu-img {
            color: white;
            border: 1px solid rgba(15, 3, 83, 0.169);
            padding: 2px;
            margin: 0px;
            backdrop-filter: blur(20px);
        }

        .footer {
            color: white;
            background-color: #0093E9;
            background-image: linear-gradient(160deg, #0093E9 0%, rgb(24, 87, 168) 100%);
        }

        .tombol {
            color: white;
            background-color: rgba(189, 189, 189, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.459);
        }

        .modal-content {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .btn-search {
            background-color: rgba(255, 255, 255, 0.5);
            border-color: transparent;
            color: #fff;
        }

        .img-gallery {
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .img-gallery:hover {
            transform: scale(1.1);
            filter: brightness(0.8);
        }

        .text-title {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Default image size for desktop */
        .img-gallery {
            border-radius: 50px;
            padding: 30px;
            width: 300px;
        }

        /* Tablet view: 768px and below */
        @media (max-width: 768px) {
            .img-gallery {
                border-radius: 30px;
                padding: 20px;
                width: 200px;
            }
        }

        /* Mobile view: 576px and below */
        @media (max-width: 576px) {
            .img-gallery {
                border-radius: 20px;
                padding: 10px;
                width: 100px;
            }
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed content">
    {{-- style="background-image: url('assets/img/pk (16).jpg'); background-size: cover;"> --}}

    @include('layouts.client.header')

    @yield('content')

    @include('layouts.client.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @yield('script')
</body>

</html>
