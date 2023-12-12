@extends('admin.main')


@section('result')
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/light/elements/alert.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("../src/assets/css/dark/elements/alert.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/filepond.min.css")}}>
    <link rel="stylesheet" href={{asset("../src/plugins/src/filepond/FilePondPluginImagePreview.min.css")}}>

    <link href={{asset("../src/assets/css/light/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("../src/plugins/css/light/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css"/>

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("../src/plugins/css/dark/filepond/custom-filepond.css")}} rel="stylesheet" type="text/css"/>
    <script src={{asset("https://code.jquery.com/jquery-3.5.1.min.js")}}></script>
    <script src={{asset("https://code.jquery.com/jquery-3.6.0.min.js")}}></script>
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/light/editors/quill/quill.snow.css")}}>

    <link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href={{asset("../src/plugins/css/dark/editors/quill/quill.snow.css")}}>
    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js")}}></script>
    <link rel="stylesheet" href={{asset("croppie.css")}} />



    <div class="profile-image">
        <form action="{{Route ('results')}}" method="POST" enctype="multipart/form-data" id="save">
            @csrf
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="col-lg-10 col-sm-12 mt-3 pl-0">
                        <input id="itn-croppie-result-i" type="text" hidden value=""
                               name="image">
                        <img id="itn-croppie-result" src="{{asset('/storage/'.$result['image'])}}"
                             class="col-lg-6 col-sm-12 pl-0">
                        <input id="croppie-input" type="file" style="color: #3b3f5c"
                               class="form-control-file d-block mt-3">
                    </div>
                    <div class="col-lg-3 col-sm-12 mt-3 pl-0">
                        <div class="itn-croppie" style="display: none"></div>
                        <div class="col-12 pl-0">
                            <a id="itn-croppie-save" class="btn btn-dark" style="display: none">Обрезать</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="container">
                            <div class="form">
                                <div class="row">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="head">Основной текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Основной текст" id="head" name="head"
                                                   value="{{$result['head']}}">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="subtext">Цветной текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Цветной текст" id="subtext" name="subtext"
                                                   value="{{$result['subtext']}}">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="text">Вспомогательный текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Вспомогательный текст"
                                                   id="text" name="text"
                                                   value="{{$result['text']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$result['id']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить</button>
            </div>
        </form>
    </div>

    <script src={{asset("croppie.js")}}></script>
    <script>
        let uploadCrop = $('.itn-croppie').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 140,
                height: 72,
                type: 'square'
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        let res

        $('#croppie-input').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                res = e.target.result
                uploadCrop.croppie('bind', {
                    url: res
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('.itn-croppie').slideDown();
            $('#itn-croppie-save').show();
            $('#itn-croppie-rotate').show();
        });

        $('#itn-croppie-save').on('click', function () {
            $('#itn-croppie-save').hide();
            $('#itn-croppie-rotate').hide();
            $('.itn-croppie').slideUp();
            uploadCrop.croppie('result', {
                type: 'base64',
                size: 'original'
            }).then(function (result) {
                $('#itn-croppie-result').attr('src', result)
                $('#itn-croppie-result-i').attr('value', result)
                $('#croppie-input').val('')
            });
        });

        let i = 1;

        $('#itn-croppie-rotate').on('click', function () {
            i = i + 1
            if (i === 9) {
                i = 1
            }
            uploadCrop.croppie('bind', {
                url: res,
                orientation: i,
            });
        });
    </script>

@endsection
