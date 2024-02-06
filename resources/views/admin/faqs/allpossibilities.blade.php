@extends('admin.main')
@section('allpossibilities')
    <div class="profile-image">
        <form action="{{Route ('faqs')}}" method="POST" enctype="multipart/form-data" id="save">
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
                                            <label for="question">Название категории вопроса</label>
                                            <input id="question" name="question"
                                                   placeholder="Название категории вопроса" class="form-control">
                                        </div>
                                    </div>
                                    <div class="container mt-5">
                                        <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название категории</th>
                    <th class="text-center" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($faq as $data)
                    <tr>
                        <td>
                            <p>{{$data['id']}}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{$data['question']}}</p>
                        </td>
                        <td class="text-center">
                            <div class="row">
                            <form method="POST" action="/faq/{{$data->id}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger mb-2">Delete</button>
                            </form>
                            <form method="POST" action="/faq_edit/{{$data->id}}">
                                {{csrf_field()}}
                                <button class="btn btn-primary mb-2">Обзор</button>
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


