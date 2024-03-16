@extends('admin.main')


@section('allteam')
    <style>
        .card
        {
            width: 100%;
            height: 100%;
            object-fit: none;

        }
        img{
            width: 100%;
            height: 40%;
            object-fit: cover;
        }
        .card-body {
            overflow: hidden;
            position: relative;
            height: 20px;
        }
        .card-body:after {
            content: "";
            text-align: right;
            position: absolute;
            bottom: 0;
            right: 0;
            width: 70%;
            height: 1.2em;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), white 100%);
            pointer-events: none;
        }
    </style>


    <a href="/team">
        <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Добавить преподавателя</button>
    </a>
    <a href="/team_group">
        <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Создать группу</button>
    </a>
    <a href="/program_team">
        <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Обзор всех групп</button>
    </a>
    <div class="col-xxl-12">
        <div class="row">
            @foreach($team as $data)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <img src="{{asset('/storage/'. $data['image'])}}"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$data->fio}}</h5>
                        </div>
                        <div>
                            <form method="get" action="/team/{{$data->id}}">
                                @csrf
                                <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Редактировать</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
