@if($hide['teacher_hide'] == 'on')
    <section class="section bg-white pb-0 ov-v" id="teacher">
    <div class="container">
                <div class="section-head section-head-s3 wide-auto-sm text-center">
                <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                    Наши преподаватели</h6>
                <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Команда цифровой кафедры</h2>
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Здесь вы можете увидеть наших преподавателей</p>
            </div>
            <div class="nk-block">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <ul class="nav tab-nav tab-nav-s2 tab-nav-center mgb-r animated" data-animate="fadeInUp"
                            data-delay=".4">
                            @foreach($programs as $key => $category_program)
                                <li><a class="@if($key == 0) active @endif" data-bs-toggle="tab"
                                       href="#data{{$category_program['id']}}">{{$category_program['name']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="tab-content animated" data-animate="fadeInUp" data-delay=".5">
                            @foreach($programs as $key => $category_program)
                                <div class="tab-pane fade @if($key == 0) active show @endif"
                                     id="data{{$category_program['id']}}">
                                    <div class="row gutter-vr-50px">
                                        @foreach($category_program->teachers as $data)
                                            <div class="team team-s4">
                                                <div class="team-photo round-full team-photo-bg">
                                                    <img src={{asset('/storage/'. $data['image'])}} alt="team"
                                                         class="round-full">
                                                </div>
                                                <h5 class="team-name title title-sm"
                                                    style="text-align: center!important;">{{$data['fio']}}</h5>
                                                <span class="team-position"
                                                      style="text-align: center;width: 200px;">{{$data['job']}}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui-mask-left ui-mask-s5"></div>
    </section>
@endif
