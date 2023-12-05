@extends('admin.main')
@section('allcards')
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
<form action="/cards">
    @csrf
   <button class="btn btn-secondary btn-rounded mb-2 me-4">Создать карточку</button>
</form>
        <div class="col-xxl-12">
            <div class="row">
                @foreach($card as $data)
                <div class="col-sm-3" style="padding: 10px">
                    <div class="card">
                        <img src="{{asset('/storage/'. $data['image'])}}"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{$data->head}}</h5>
                        </div>
                            <div>
                                <form method="POST" action="/editcards/{{$data->id}}">
                                    @csrf
                                        <button class="btn btn-secondary btn-rounded mb-2 me-4" style="margin: 10px">Редактировать</button>
                                </form>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection


