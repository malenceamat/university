@extends('admin.main')


@section('stages')
    <div class="profile-image">
        <form @if (isset($stage->id)) action="{{url('stages/edit')}}"
              @else action="{{url('stages/save')}}" @endif method="post"
              enctype="multipart/form-data" id="save">
            @csrf
            @if($stage->id)
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
                                            <label for="date">Временные рамки</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Временные рамки" id="date" name="date"
                                                   value="{{$stage['date']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="stages">Этапы</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Этапы"
                                                   id="stages" name="stages"
                                                   value="{{$stage['stages']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">Порядковый номер</label>
                                            <input type="text" class="form-control mb-3"
                                                   placeholder="Порядковый номер"
                                                   id="number" name="number"
                                                   value="{{$stage['number']}}">
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="{{$stage['id']}}">



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($stage->id))
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
        @if(isset($stage->id))
            <div class="" style="float: right;height: auto">
                <form method="POST" action="/stages/{{$stage->id}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mb-2 me-4">Удалить карточку</button>
                </form>
            </div>
        @endif
    </div>
@endsection
