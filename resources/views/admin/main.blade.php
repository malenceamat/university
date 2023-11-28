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
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href={{asset("https://fonts.googleapis.com/css?family=Nunito:400,600,700")}} rel="stylesheet">
    <link href={{asset("../src/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/light/plugins.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("../layouts/vertical-dark-menu/css/dark/plugins.css")}} rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/light/elements/alert.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/dark/elements/alert.css")}}>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="layout-boxed" layout="full-width">




@include('admin.navbar')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    @include('admin.sidebar')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing">

                    <div class="multiple-file-upload">
                        <input type="file"
                               class="filepond file-upload-multiple"
                               name="filepond"
                               multiple
                               data-allow-reorder="true"
                               data-max-file-size="3MB"
                               data-max-files="3">
                    </div>
<script>
    /**
     * ====================
     * Multiple File Upload
     * ====================
     */

    // We want to preview images, so we register
    // the Image Preview plugin, We also register
    // exif orientation (to correct mobile image
    // orientation) and size validation, to prevent
    // large files from being added
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
        // FilePondPluginImageEdit
    );

    // Select the file input and use
    // create() to turn it into a pond
    FilePond.create(
        document.querySelector('.file-upload-multiple')
    );
</script>
                            <div id="basic" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Input Text</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-12 ">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label for="t-text" class="visually-hidden">Text</label>
                                                        <input id="t-text" type="text" name="txt" placeholder="Some Text..." class="form-control" required>
                                                        <input type="submit" name="txt" class="mt-4 btn btn-primary">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="basic" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Input Text</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-12 ">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label for="t-text" class="visually-hidden">Text</label>
                                                        <input id="t-text" type="text" name="txt" placeholder="Some Text..." class="form-control" required>
                                                        <input type="submit" name="txt" class="mt-4 btn btn-primary">
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
        </div>


    </div>
    <!--  END CONTENT AREA  -->


<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src={{asset("../src/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("../src/plugins/src/mousetrap/mousetrap.min.js")}}></script>
<script src={{asset("../layouts/vertical-dark-menu/app.js")}}></script>


<script src={{asset("../src/assets/js/scrollspyNav.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/filepond.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/FilePondPluginImagePreview.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/FilePondPluginImageCrop.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/FilePondPluginImageResize.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/FilePondPluginImageTransform.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js")}}></script>
<script src={{asset("../src/plugins/src/filepond/custom-filepond.js")}}></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script>
    multifiles.addFiles('../src/assets/img/list-blog-style-2.jpeg');
</script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
