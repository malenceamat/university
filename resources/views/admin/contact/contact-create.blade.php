@extends('admin.main')


@section('contact')
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



    <div class="profile-image">
        <form action="{{Route ('contact')}}" method="POST" enctype="multipart/form-data" id="save">
            @csrf


            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                     aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="container">
                            <div class="form">
                                <div class="row">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="e-text">Почта</label>
                                            <input id="e-text" type="email" name="email" value="{{$contact['email']}}"
                                                   placeholder="email@mail.com" class="form-control" required>

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="text">Номер телефона</label>
                                            <input type="tel" class="form-control mb-3" required
                                                   placeholder="Номер телефона"
                                                   id="text" name="phone"
                                                   value="{{$contact['phone']}}">
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="form-group">
                                            <label for="social">Соц сеть</label>
                                            <input id="social" type="text" name="link" value="{{$social['link']}}"
                                                   placeholder="https://vk.com/" class="form-control" required>

                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="{{$contact['id']}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Сообщение</th>
                    <th scope="col">Почта</th>
                    <th class="text-center" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>
                            <p>{{$d['id']}}</p>
                        </td>
                        <td>
                            <p>{{$d['name']}}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{$d['message']}}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{$d['email']}}</p>
                        </td>

                        <td class="text-center">
                            <div class="row">
                                <form method="POST" action="/contact/{{$d['id']}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger mb-2">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
