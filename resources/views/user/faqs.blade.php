<section class="section bg-white pb-0 ov-v" id="faq">
    <div class="container">
        <div class="section-head section-head-s3 wide-auto-sm text-center">
            <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Faqs</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Часто задаваемые вопросы</h2>
            <p class="animated" data-animate="fadeInUp" data-delay=".3">Возможно, у Вас остались вопросы. Вы можете
                попробовать найти ответы здесь</p>
        </div>
        <div class="nk-block">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <ul class="nav tab-nav tab-nav-s2 tab-nav-center mgb-r animated" data-animate="fadeInUp"
                        data-delay=".4">
                        @foreach($faqs as $data)
                            <li><a class="active{{$data['id']}}" data-bs-toggle="tab"
                                   href="#general-questions{{$data['id']}}">{{$data['question']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


            @foreach($faqs as $data)
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tab-content animate" data-animate="fadeInUp" data-delay=".5">
                            <div class="tab-panel fade active show{{$data['id']}}" id="general-questions{{$data['id']}}">
                                <div class="row gutter-vr-50px">
                                    @foreach($data->ques as $key)
                                        <div class="col-md-6">
                                            <div class="nk-block-text">
                                                <h5 class="title title-sm">{{$key['ask']}}</h5>
                                                <p>{{$key['response']}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="ui-mask-left ui-mask-s5"></div>
</section>
