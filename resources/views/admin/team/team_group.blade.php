@extends('admin.main')
<link rel="stylesheet" type="text/css" href={{asset("../src/plugins/src/vanillaSelectBox/vanillaSelectBox.css")}}>
<link rel="stylesheet" type="text/css"
      href={{asset("../src/plugins/css/light/vanillaSelectBox/custom-vanillaSelectBox.css")}}>
<link href={{asset("../src/assets/css/dark/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css"
      href={{asset("../src/plugins/css/dark/vanillaSelectBox/custom-vanillaSelectBox.css")}}>
@section('team_group')

    <div class="tab-content" id="animateLineContent-4">
        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
             aria-labelledby="animated-underline-home-tab">
            <div class="row">
                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                    <form method="POST" action="/team_group_create">
                        @csrf
                        <div class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_team">Название группы</label>
                                        <input type="text" class="form-control mb-3"
                                               placeholder="Название группы"
                                               id="name_team" name="name"
                                               value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Выбор преподавателей</h4>
                                    </div>
                                </div>
                                <div id="multipleOptions" class="col-lg-12 layout-spacing">
                                    <label for="multipleSelect"></label>
                                    <select id="multipleSelect" multiple  name="teacher[]">
                                        @foreach($teams as $team)
                                        <option value="{{$team['id']}}">{{$team['fio']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="container">
                                    <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src={{asset("../src/assets/js/scrollspyNav.js")}}></script>
    <script src={{asset("../src/plugins/src/vanillaSelectBox/vanillaSelectBox.js")}}></script>
    <script src={{asset("../src/plugins/src/vanillaSelectBox/custom-vanillaSelectBox.js")}}></script>
    <script>
        selectBox3 = new vanillaSelectBox("#multipleSelect", {
            "minWidth": 178,
            "maxHeight": 200,
            "search": true,
            "stayOpen": true
        });
    </script>
@endsection
