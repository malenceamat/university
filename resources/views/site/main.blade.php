<!DOCTYPE html>
<html lang="ru" class="dark-mode">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0C0F19" >
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0C0F19" >
    <meta name="msapplication-TileColor" content="#0C0F19">

    <title>Цифровая кафедра МАИ</title>
    <meta name="description" content="Цифровая кафедра МАИ – возможность получения студентами всех направлений подготовки дополнительных цифровых компетенций на бесплатной основе.">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Цифровая кафедра МАИ">
    <meta property="og:url" content="https://digital.mai.ru">
    <meta property="og:description" content="Цифровая кафедра МАИ – возможность получения студентами всех направлений подготовки дополнительных цифровых компетенций на бесплатной основе.">
    <meta property="og:image" content="https://digital.mai.ru/assets/img/og/og.jpg">
    <meta property="og:image:alt" content="Цифровая кафедра МАИ">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1080">
    <meta property="og:image:height" content="1080">
    <meta property="vk:image" content="https://digital.mai.ru/assets/img/og/vk.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Цифровая кафедра МАИ">
    <meta property="twitter:description" content="Цифровая кафедра МАИ – возможность получения студентами всех направлений подготовки дополнительных цифровых компетенций на бесплатной основе.">
    <meta property="twitter:image" content="https://digital.mai.ru/assets/img/og/twitter.jpg">
    <meta property="twitter:image:alt" content="Цифровая кафедра МАИ">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons-->
    <link rel="icon" href={{asset("favicon.ico")}}>
    <link rel="icon" href={{asset("favicons/favicon.svg")}} type="image/svg+xml">
    <link rel="apple-touch-icon" href={{asset("favicons/apple.png")}}>
    <link rel="manifest" href={{asset("manifest.webmanifest.html")}}>

    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href={{asset("https://dev.mai.ru/generic/vendor/fontawesome/fontawesome-pro-6.1.1-web/css/all.min.css")}}>
    <link rel="stylesheet" media="screen" href={{asset("assets/vendor/boxicons/css/boxicons.min.css")}}>
    <link rel="stylesheet" media="screen" href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}}>
    <link rel="stylesheet" media="screen" href={{asset("assets/vendor/lightgallery/css/lightgallery-bundle.min.css")}}>


    <link rel="stylesheet" media="screen" href={{asset("assets/css/theme.min.css")}}>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <style>

        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .dark-mode .page-loading {
            background-color: #0b0f19;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }
        .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }
        .dark-mode .page-loading-inner > span {
            color: #fff;
            opacity: .6;
        }
        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        .dark-mode .page-spinner {
            border-color: rgba(255,255,255,.4);
            border-right-color: transparent;
        }
        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        #partners img {
            filter: grayscale(100%);
            transition: all 0.2s ease;
        }

        #partners .card:hover img {
            filter: none;
        }

        #start p,
        #forwhom p {
            font-weight: 500;
        }

        #forwhom p {
            font-weight: 500;
        }

        @media (max-width: 540px) {
            .sizetext {
                font-size: 19px!important;
            }
        }
        @media (max-width: 490px) {
            .sizetext {
                font-size: 16px!important;
            }
        }

        @media (max-width: 777px) {
            .top-r {
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }

            .bottom-r {
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
            }
        }

        .separator:after {
            display: inline-block;
            content: " ";
            border-right: 1px solid #6366f1;
            height: 100%;
        }

        .separator {
            height: 10vh;
            text-align: center;
        }

        .link-collapse[aria-expanded=true] .link-collapse-default {
            display: none;
        }

        .link-collapse[aria-expanded=false] .link-collapse-default {
            display: inline-block;
        }

        .link-collapse[aria-expanded=true] .link-collapse-active {
            display: inline-block;
        }

        .link-collapse[aria-expanded=false] .link-collapse-active {
            display: none;
        }
        /* Скрываем 1/1 в попап видео */
        .lg-counter {
            display: none;
        }

        .btn-email {
            --si-btn-color: #fff;
            --si-btn-bg: #0b0f19;
            --si-btn-border-color: #0b0f19;
            --si-btn-hover-color: #fff;
            --si-btn-hover-bg: #30333c;
            --si-btn-hover-border-color: #232730;
            --si-btn-focus-shadow-rgb: 48, 51, 60;
            --si-btn-active-color: #fff;
            --si-btn-active-bg: #3c3f47;
            --si-btn-active-border-color: #232730;
            --si-btn-active-shadow: unset;
            --si-btn-disabled-color: #fff;
            --si-btn-disabled-bg: #0b0f19;
            --si-btn-disabled-border-color: #0b0f19;
        }

        @media (max-width: 600px) {
            .it-courses::after {
                display: none;
            }
        }

        .it-courses::after {
            content: "не по IT";
            font-size: 13px;
            background: #6366f1;
            padding: 3px 8px 4px 8px;
            border-radius: 15px;
            position: relative;
            top: -150px;
            right: -55px;
        }


        .new-program::after {
            content: "NEW";
            font-size: 14px;
            font-weight: 800;
            background: #6366f1;
            padding: 5px 15px 5px 15px;
            border-radius: 10px;
            position: relative;
            top: -260px;
            left: -5px
        }
    </style>
    <script>
        (function () {
            window.onload = function () {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 1000);
            };
        })();
    </script>

</head>

<body data-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="0" class="scrollspy-example">

<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Загрузка...</span>
    </div>
</div>

<main class="page-wrapper">

@include('site.header')


@yield('content')



</main>





@include('site.footer')
<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Вверх</span>
    <img src={{asset('arrow-narrow-up-svgrepo-com.svg')}}>
    <i class="btn-scroll-top-icon fa fa-chevron-up fs-5"></i>
</a>

<!-- Vendor Scripts -->
<script src={{asset("assets/vendor/jarallax/dist/jarallax.min.js")}}></script>
<script src={{asset("assets/vendor/parallax-js/dist/parallax.min.js")}}></script>
<script src={{asset("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js")}}></script>
<script src={{asset("assets/vendor/rellax/rellax.min.js")}}></script>
<script src={{asset("assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js")}}></script>
<script src={{asset("assets/vendor/swiper/swiper-bundle.min.js")}}></script>


<script src={{asset("assets/vendor/lightgallery/lightgallery.min.js")}}></script>
<script src={{asset("assets/vendor/lightgallery/plugins/video/lg-video.min.js")}}></script>
<script src={{asset("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js")}}></script>
<script src={{asset("assets/vendor/shufflejs/dist/shuffle.min.js")}}></script>




<script>
    $('.nav-link').click(function(){
        $('.btn-close').trigger('click');
    });
</script>


<!-- Main Theme Script -->
<script src={{asset("assets/js/theme.min.js")}}></script>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title">Прикладные системы инженерных расчетов</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="img-modal">

            </div>
            <div class="modal-body">


            </div>
        </div>
    </div>
</div>

<script>
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        var recipientTitle = button.getAttribute('data-bs-whatever1')
        var recipientImage = button.getAttribute('data-bs-whatever2')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBody = exampleModal.querySelector('.modal-body')
        var modalImage = exampleModal.querySelector('.img-modal')

        console.log(recipient)
        console.log(recipient)
        modalTitle.textContent = recipientTitle
        modalImage.innerHTML = recipientImage
        modalBody.innerHTML = recipient
    })

</script>
</body>

</html>
