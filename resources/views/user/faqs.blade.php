@if ($hide['faqs_hide'] == 'on')
    <section class="section bg-white pb-0 ov-v" id="faq">
        <div class="container">
            <div class="section-head section-head-s3 wide-auto-sm text-center">
                <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                    Faqs</h6>
                <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Часто задаваемые вопросы</h2>
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Возможно, у Вас остались вопросы. Вы можете
                    попробовать найти ответы здесь</p>
            </div>
            <!-- Block @s -->
            <div class="nk-block">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <ul class="nav tab-nav tab-nav-s2 tab-nav-center mgb-r animated" data-animate="fadeInUp"
                            data-delay=".4">
                            @foreach($faqs as $key => $category)
                                <li><a class="@if($key == 0) active @endif" data-bs-toggle="tab"
                                       href="#data_teacher{{$category['id']}}">{{$category['question']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tab-content animated" data-animate="fadeInUp" data-delay=".5">
                            @foreach($faqs as $key => $category_question)
                                <div class="tab-pane fade @if($key == 0) active show @endif"
                                     id="data_teacher{{$category_question['id']}}">
                                    <div class="row gutter-vr-50px">
                                        @foreach($category_question->ques as $questions)
                                            @if ($category_question['id'] == $questions['faq_id'])
                                                <div class="col-md-6">
                                                    <div class="nk-block-text">
                                                        <h5 class="title title-sm">{!! $questions['ask'] !!}</h5>
                                                        <p>{!! $questions['response'] !!}</p>
                                                    </div>
                                                </div>
                                            @endif
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






