@extends('admin.main')
@section('faq')
    <div class="profile-image">
        <form action="{{Route ('response')}}" method="POST" enctype="multipart/form-data" id="save">
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
                                            <label for="ask">Вопрос</label>
                                            <input id="ask" name="ask"
                                                   placeholder="Вопрос" class="form-control">
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="{{$faq['id']}}">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="response">Ответ на вопрос</label>
                                            <input id="response" name="response"
                                                   placeholder="Ответ на вопрос" class="form-control">
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
                    <th scope="col">Вопрос</th>
                    <th scope="col">Ответ на вопрос</th>
                    <th class="text-center" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($temp as $d)
                    <tr>
                        <td>
                            <p>{{$d['id']}}</p>
                        </td>
                        <td>
                            <p>{{$d['ask']}}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{$d['response']}}</p>
                        </td>

                        <td class="text-center">
                            <div class="row">
                                <form method="POST" action="/ask_delete/{{$d['id']}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger mb-2">Delete</button>
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


