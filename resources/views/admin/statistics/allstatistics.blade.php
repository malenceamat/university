@extends('admin.main')


@section('allstatistics')
    <form action="/statistics">
        @csrf
        <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Создать этап</button>
    </form>
    <div class="col-xxl-12">
        <div class="row">
            @foreach($statistics as $data)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-0">{{$data->head}}</p>
                            <h4 class="card-title">{{$data->text}}</h4>

                        </div>
                        <form method="get" action="/statistics/{{$data->id}}">
                            @csrf
                            <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
