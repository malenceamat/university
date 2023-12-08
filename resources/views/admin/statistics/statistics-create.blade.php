@extends('admin.main')


@section('statistics')
    <div class="profile-image">
        <form @if (isset($statistics->id)) action="{{url('statistics/edit')}}"
              @else action="{{url('statistics/save')}}" @endif method="post"
              enctype="multipart/form-data" id="save">
            @csrf
            @if($statistics->id)
                @method('post')
            @endif

            <div class="tab-content" id="animateLineContent-4">
                <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                            <div class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="head">Основной текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Основной текст" id="head" name="head"
                                                   value="{{$statistics['head']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="text">Вспомогательный текст</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Вспомогательный текст"
                                                   id="text" name="text"
                                                   value="{{$statistics['text']}}">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$statistics['id']}}">



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($statistics->id))
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
        @if(isset($statistics->id))
            <div class="" style="float: right;height: auto">
                <form method="POST" action="/statistics/{{$statistics->id}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mb-2 me-4">Удалить карточку</button>
                </form>
            </div>
        @endif
    </div>
@endsection
