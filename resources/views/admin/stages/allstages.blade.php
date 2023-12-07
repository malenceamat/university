@extends('admin.main')


@section('allstages')
    <form action="/stages">
        @csrf
        <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Создать этап</button>
    </form>
    <div class="col-xxl-12">
        <div class="row">
            @foreach($stage as $data)
            <div class="col-sm-3" style="padding: 10px">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-0">{{$data->stages}}</p>
                        <h4 class="card-title">{{$data->date}}</h4>
                        <p class="mb-0">{{$data->number}}</p>
                    </div>
                    <form method="get" action="/stages/{{$data->id}}">
                        @csrf
                        <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
