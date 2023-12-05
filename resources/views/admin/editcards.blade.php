@extends('admin.main')










@section('editcards')

    <div class="profile-image">
        <form action="/editcards" method="post" enctype="multipart/form-data" id="save">
            @csrf
            <div class="col-md-12">
                <div class="mb-3">
                    <input type="file" name="image" placeholder="Выбрать изображение" id="image" class="form-control file-upload-input" value="{{$edit['image']}}">
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
                                            <input type="text" class="form-control mb-3" placeholder="Заголовок" id="head" name="head" value="{{$edit['head']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="underhead">Подтекст заголовка</label>
                                            <input type="text" class="form-control mb-3" placeholder="Подтекст заголовка" id="underhead" name="underhead" value="{{$edit['underhead']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="text">Основной текст</label>
                                            <input type="text" class="form-control mb-3" placeholder="Основной текст" id="basic" name="basic" value="{{$edit['basic']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="qualification">Текст квалификации</label>
                                            <input type="text" class="form-control mb-3" placeholder="Текст квалификации" id="qualification" name="qualification" value="{{$edit['qualification']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$edit['id']}}">
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
                                        <table class="table table-bordered table-striped" id="user_table">
                                            <thead>
                                            <tr>
                                                <th>Text</th>
                                                <th><button type="button" name="add" id="add" class="btn btn-outline-secondary btn-rounded mb-2 me-4">Добавить строку</button></th>
                                            </tr>
                                            @if(isset($edit->TextInCards))
                                                @foreach($edit->TextInCards as $text)

                                                    <tr>
                                                        <td><input type="text" name="text[]" class="form-control" value="{{$text['text']}}" /></td>
                                                        <td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td>
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
            <div class="container">
                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Отредактировать</button>
            </div>
        </form>
        <form method="POST" action="/editcards/{{$edit->id}}">
            @csrf
            {{method_field('DELETE')}}
            <button class="btn btn-danger mb-2">Delete</button>
        </form>
    </div>

@endsection

