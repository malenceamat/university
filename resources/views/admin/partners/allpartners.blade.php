@extends('admin.main')
@section('allpartners')
    <style>
        .card {
            width: 100%;
            height: 100%;
            object-fit: none;
        }

        img {
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
        <form action="/partners">
            @csrf
            <button class="btn btn-outline-secondary mb-2 me-4" style="margin: 10px">Создать карточку</button>
        </form>
    <div class="col-xxl-12">
        <div class="row">
            @foreach($partners as $data)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <img src="{{asset('/storage/'. $data['image'])}}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$data->head}}</h5>
                        </div>
                        <div>
                            <form method="POST" action="/partners/{{$data->id}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger mb-2 me-4" style="margin: 10px">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <form action="/allpartners">

        @if ($data['hideblock'] > 5)
            <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Скрыть блок</button>
            <input type="hidden" name="hideblock" value="1">
        @else
            <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Отобразить блок</button>
            <input type="hidden" name="hideblock" value="10">
        @endif
    </form>
@endsection


