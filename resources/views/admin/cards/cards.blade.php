@extends('admin.main')











@section('cards')

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
    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js")}}></script>
    <link rel="stylesheet" href={{asset("croppie.css")}} />








    <div class="profile-image">
        <form @if (isset($card->id)) action="{{url('cards/edit')}}"
              @else action="{{url('cards/save')}}" @endif method="post"
              enctype="multipart/form-data" id="save">
            @csrf
            @if($card->id)
                @method('post')
            @endif
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="col-lg-5 col-sm-12 mt-3 pl-0">
                        <input id="itn-croppie-result-i" type="text" hidden value=""
                               name="image">
                        <img id="itn-croppie-result" src="{{asset('/storage/'.$card['image'])}}"
                             class="col-lg-6 col-sm-12 pl-0">
                        <input id="croppie-input" type="file" style="color: #3b3f5c"
                               class="form-control-file d-block mt-3">
                    </div>
                    <div class="col-lg-3 col-sm-12 mt-3 pl-0">
                        <div class="itn-croppie" style="display: none"></div>
                        <div class="col-12 pl-0">
                            <a id="itn-croppie-save" class="btn btn-dark" style="display: none">Обрезать</a>
                            <a id="itn-croppie-rotate" class="btn btn-dark"
                               style="display: none">Повернуть</a>
                        </div>
                    </div>
                </div>
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
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Заголовок" id="head" name="head"
                                                   value="{{$card['head']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="underhead">Подтекст заголовка</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Подтекст заголовка"
                                                   id="underhead" name="underhead"
                                                   value="{{$card['underhead']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="basic">Основной текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Основной текст" id="basic"
                                                   name="basic" value="{{$card['basic']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="qualification">Текст квалификации</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Текст квалификации"
                                                   id="qualification" name="qualification"
                                                   value="{{$card['qualification']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$card['id']}}">
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
                                                        <label for="hiddenArea"></label>
                                                        <textarea name="more" style="display:none" id="hiddenArea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <span id="result"></span>
                                        <table class="table table-bordered" id="user_table">
                                            <thead>
                                            <tr>
                                                <th>Text</th>
                                                <th><button type="button" name="add" id="add" class="btn btn-outline-secondary btn-rounded mb-2 me-4">Добавить строку</button></th>
                                            </tr>
                                            @if(isset($card->TextInCards))
                                                @foreach($card->TextInCards as $text)

                                                    <tr>
                                                        <td><input type="text" name="text[]"
                                                                   id="exampleForm"
                                                                   class="form-control"
                                                                   value="{{$text['text']}}"/>
                                                        </td>
                                                        <td>
                                                            <button type="button" name="remove"
                                                                    id=""
                                                                    class="btn btn-danger remove">
                                                                Remove
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($card->id))
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">
                        Редактировать
                    </button>
                </div>
            @else
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать
                    </button>
                </div>
            @endif
        </form>
        @if(isset($card->id))
            <div class="" style="float: right;height: auto">
            <form method="POST" action="/cards/{{$card->id}}">
                @csrf
                {{method_field('DELETE')}}
                <button class="btn btn-danger mb-2 me-4">Удалить карточку</button>
            </form>
            </div>
        @endif
    </div>








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
            theme: 'snow'
        });
        $(document).ready(function(){
            $("#save").on("submit", function () {
                let value = $('.ql-editor').html();
                $(this).append("<textarea name='more' style='display:none'>"+value+"</textarea>");
            });
        });
    </script>
    <script src={{asset("croppie.js")}}></script>

    <script>
        let uploadCrop = $('.itn-croppie').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 1280,
                height: 800,
                type: 'square'
            },
            boundary: {
                width: 428,
                height: 268
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
    <script>
        $(document).ready(function () {
            let count = {{ (request()->is('cards')) ? '1' : '0' }};
            dynamic_field(count);

            function dynamic_field(number) {
                html = '<tr>';
                html += '<td><input type="text" name="text[]" class="form-control" /></td>';
                if (number >= 1) {
                    html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td>';
                    $('thead').append(html);
                }
            }

            $(document).on('click', '#add', function () {
                count++;
                dynamic_field(count);
            });
            $(document).on('click', '.remove', function () {
                count--;
                $(this).closest("tr").remove();
            });
        });
    </script>



@endsection

