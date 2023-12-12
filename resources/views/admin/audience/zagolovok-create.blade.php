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




        <form action="{{Route ('zagolovok')}}" method="POST" enctype="multipart/form-data" id="save">
            @csrf
            <div class="col-xxl-12">
                                <div class="row">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="head">Основной текст</label>
                                            <input type="text" class="form-control mb-5"
                                                   placeholder="Основной текст" id="head" name="head"
                                                   style="width: 50em"
                                                   value="{{$zagolovok['head']}}">
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="text">Вспомогательный текст</label>
                                            <input type="text" class="form-control mb-5"
                                                   placeholder="Вспомогательный текст"
                                                   id="text" name="text"
                                                   value="{{$zagolovok['text']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$zagolovok['id']}}">
                                </div>
            <div class="container">
                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить</button>
            </div>
            </div>
        </form>


    <div class="col-xxl-12">
        <div class="row">
            @foreach($audience as $data)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <img src="{{asset('/storage/'. $data['image'])}}"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$data->head}}</h5>
                        </div>
                        <div>
                            <form method="get" action="/audience/{{$data->id}}">
                                @csrf
                                <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




        <form action="/audience">
            <div style="float: right;height: auto">
                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать карточку</button>
            </div>
        </form>





@endsection
