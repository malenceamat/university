@extends('admin.main')


@section('selection')
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
        <form action="{{Route ('selection')}}" method="POST" enctype="multipart/form-data" id="save">
            @csrf
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="col-lg-10 col-sm-12 mt-3 pl-0">
                        <input id="itn-croppie-result-i" type="text" hidden value=""
                               name="image">
                        <img id="itn-croppie-result" src="{{asset('/storage/'.$select['image'])}}"
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
                                                   value="{{$select['head']}}">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div id="basic" class="row layout-spacing layout-top-spacing">
                                            <div class="col-lg-12">
                                                <div class="statbox widget box box-shadow">
                                                    <div class="widget-header">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Вспомогательный текст</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content widget-content-area">

                                                        <div id="editor-container">
                                                            <label for="hiddenArea">{!! $select['text'] !!}</label>
                                                            <textarea name="text" style="display:none"
                                                                      id="hiddenArea"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="button">Текст кнопки</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Текст кнопки"
                                                   id="button" name="button"
                                                   value="{{$select['button']}}">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="text">Ссылка в кнопке</label>
                                            <input id="url-text" type="url" name="url" placeholder="https://www.google.ru/" value="{{$select['url']}}" class="form-control">


                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$select['id']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить</button>

                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="hideblock" @if ($select['hideblock'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображение блока
                    </label>
                </div>
            </div>
        </form>
    </div>

    <script src={{asset("croppie.js")}}></script>
    <script>
        let uploadCrop = $('.itn-croppie').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 646,
                height: 650,
                type: 'square'
            },
            boundary: {
                width: 750,
                height: 750
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
    <script src={{asset("../src/plugins/src/editors/quill/quill.js")}}></script>
    <script> quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                    [{header: [1, 2, false]}],
                    ['bold', 'italic', 'underline']
                ]
            },
            placeholder: 'Введите текст',
            theme: 'snow'
        });
        $(document).ready(function () {
            $("#save").on("submit", function () {
                let value = $('.ql-editor').html();
                $(this).append("<textarea name='text' style='display:none'>" + value + "</textarea>");
            });
        });
    </script>

@endsection
