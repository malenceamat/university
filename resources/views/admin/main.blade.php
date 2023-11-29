<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Full Width | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href={{asset("../src/assets/img/favicon.ico")}}/>
    <link href={{asset("../layouts/vertical-dark-menu/css/light/loader.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/dark/loader.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("../layouts/vertical-dark-menu/loader.js")}}></script>

    <link href={{asset("https://fonts.googleapis.com/css?family=Nunito:400,600,700")}} rel="stylesheet">
    <link href={{asset("../src/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/light/plugins.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/dark/plugins.css")}} rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/light/elements/alert.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/dark/elements/alert.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/filepond.min.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/FilePondPluginImagePreview.min.css")}}>

    <link href={{asset("../src/assets/css/light/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../src/plugins/css/light/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css" />

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../src/plugins/css/dark/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("https://code.jquery.com/jquery-3.5.1.min.js")}}></script>
    <script src={{asset("https://code.jquery.com/jquery-3.6.0.min.js")}}></script>
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/light/editors/quill/quill.snow.css")}}>

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/dark/editors/quill/quill.snow.css")}}>


</head>
<body class="layout-boxed">




@include('admin.navbar')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    @include('admin.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container">





                <div class="row layout-top-spacing">
                    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header"></div>
                            <div class="widget-content widget-content-area">
                                <div class="profile-image">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <input type="file" name="image" placeholder="Выбрать изображение" id="image" class="form-control file-upload-input">
                                            @error('image')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <img id="preview-image-before-upload" src={{asset("images/product_image_not_found.gif")}} alt="" style="max-height: 250px;" alt="">
                                    </div>
                                        <div class="tab-content" id="animateLineContent-4">
                                            <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                                <div class="row">
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="head">Заголовок</label>
                                                                        <input type="text" class="form-control mb-3" placeholder="Заголовок" id="head">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="underhead">Подтекст заголовка</label>
                                                                        <input type="text" class="form-control mb-3" placeholder="Подтекст заголовка" id="underhead">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="text">Основной текст</label>
                                                                        <input type="text" class="form-control mb-3" placeholder="Основной текст" id="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="qualification">Текст квалификации</label>
                                                                        <input type="text" class="form-control mb-3" placeholder="Текст квалификации" id="qualification">
                                                                    </div>
                                                                </div>

                                                                <div id="basic" class="row layout-spacing layout-top-spacing">
                                                                    <div class="col-lg-12">
                                                                        <div class="statbox widget box box-shadow">
                                                                            <div class="widget-header">
                                                                                <div class="row">
                                                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                                        <h4> Текст в кнопке "Подробнее" </h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content widget-content-area">
                                                                                <div id="editor-container">
                                                                                    <label for="more"> </label>
                                                                                    <textarea type="text" class="form-control mb-3" id="more"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container">
                                            <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
                                        </div>
                                    </form>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {


        $('#image').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

</script>


<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src={{asset("../src/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("../src/plugins/src/mousetrap/mousetrap.min.js")}}></script>
<script src={{asset("../layouts/vertical-dark-menu/app.js")}}></script>



<script src={{asset("../src/assets/js/scrollspyNav.js")}}></script>
<script src={{asset("../src/plugins/src/editors/quill/quill.js")}}></script>

<script> quill = new Quill('#editor-container', {
        modules: {
            toolbar: [
                [{ header: [1, 2, false] }],
                ['bold', 'italic', 'underline']
            ]
        },
        placeholder: 'Введите текст',
        theme: 'snow'  // or 'bubble'
    });

</script>
</body>
</html>
