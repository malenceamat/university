<section class="section bg-light ov-h" id="roadmap">
    <div class="container">
        <div class="section-head section-head-s3 wide-auto-sm text-center">
            <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                Дорожная карта</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Этапы</h2>
            <p class="animated" data-animate="fadeInUp" data-delay=".3">Чтобы обучаться на Цифровой кафедре, нужно
                следовать простым действиям.</p>
        </div>
        <div class="nk-block">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="roadmap-carousel-container-s2 text-center animated" data-animate="fadeInUp"
                         data-delay=".4">
                        <div
                            class="has-carousel roadmap-carousel roadmap-carousel-s2 roadmap-carousel-nav-s2 owl-carousel"
                            data-items="5" data-items-mobile-s="1" data-navs="true">
                            @foreach($stages as $data)
                                <div class="roadmap roadmap-s6 roadmap-s6-3-2">
                                    <div class="roadmap-head roadmap-head-s6">
                                        <span class="roadmap-time roadmap-time-s6">{{$data['date']}}</span>
                                    </div>
                                    <p>{{$data['stages']}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-ovm nk-ovm-fixed shape-w"></div>
</section>
