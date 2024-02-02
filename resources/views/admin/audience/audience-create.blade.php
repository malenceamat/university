@extends('admin.main')


@section('audience')
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
        <form @if (isset($audience->id)) action="{{url('audience/edit')}}"
              @else action="{{url('audience/save')}}" @endif method="post"
              enctype="multipart/form-data" id="save">
            @csrf
            @if($audience->id)
                @method('post')
            @endif
            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="container">
                            <div class="form">
                                <div class="row">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="text">Основной текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Основной текст"
                                                   id="text" name="text"
                                                   value="{{$audience['text']}}">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="head">Текст кнопки</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Вспомогательный текст"
                                                   id="head" name="head"
                                                   value="{{$audience['head']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$audience['id']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(isset($audience->id))
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Редактировать</button>
                </div>
            @else
                <div class="container">
                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
                </div>
            @endif
        </form>
        @if(isset($audience->id))
            <div class="" style="float: right;height: auto">
                <form method="POST" action="/audience/{{$audience->id}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mb-2 me-4">Удалить</button>
                </form>
            </div>
        @endif
    </div>
@endsection
