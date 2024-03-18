@extends('admin.main')
@section('program_team')
    <div class="row layout-top-spacing">
        <table id="zero-config" class="table dt-table-hover" style="width:100%">
            <thead>
            <tr>
                <th>id</th>
                <th>Название программы</th>
                <th>Кнопки действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($programs as $program)
                <tr>
                    <td>{{$program['id']}}</td>
                    <td>{{$program['name']}}</td>
                    <td>
                        <form method="POST" action="/program_team/{{$program->id}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger mb-2">Удалить</button>
                        </form>
                        <form method="GET" action="/team_group/{{$program->id}}">
                            @csrf
                            <button class="btn btn-primary mb-2">Редактировать</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
