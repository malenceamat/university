<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href={{asset("images/logo-novgu-blue.png")}}>
    <title>Цифровая Кафедра</title>
    <link rel="stylesheet" href={{asset("assets/css/vendor.bundle.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/style-azure.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/theme.css")}}>
    <link rel="stylesheet" media="screen" href={{asset("assets/theme.min.css")}}>

    <link rel="stylesheet" media="screen" href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}}>
</head>
<body class="nk-body body-wider mode-onepage">
<div class="nk-wrap">
    <header class="nk-header page-header is-transparent is-sticky is-shrink is-dark" id="header">
        @include('site.header')

        @include('user.banner')
    </header>
    <main class="nk-pages bg-transparent">
        @yield('content')
    </main>
    @include('site.footer')
</div>
<div class="preloader"><span class="spinner spinner-round"></span></div>
<script src={{asset("assets/js/jquery.bundle.js")}}></script>
<script src={{asset("assets/js/scripts.js")}}></script>
<script src={{asset("assets/js/charts.js")}}></script>

<script src={{asset("assets/vendor/swiper/swiper-bundle.min.js")}}></script>

</body>
</html>
