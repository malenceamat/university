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
    <link rel="stylesheet" media="screen" href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}}>

    <style>
        font-face {
            font-family: 'PT Sans', sans-serif !important;
        }
    </style>


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
<script src={{asset("assets/js/smooth-scroll.polyfills.min.js")}}></script>

<script src={{asset("assets/js/theme.min.js")}}></script>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
     role="dialog">
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
