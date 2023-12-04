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
    </style>
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
                            <button class="btn btn-secondary btn-rounded mb-2 me-4" style="margin: 10px">Редактировать</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
