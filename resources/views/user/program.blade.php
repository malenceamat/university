<style>
    .left-arrow,
    .right-arrow {
        display: inline-flex;
        position: relative;
        width: 30px; /* увеличиваем ширину до 30px */
        height: 30px; /* увеличиваем высоту до 30px */
        background-color: #ffffff;
        cursor: pointer;
    }

    .left-arrow::before,
    .right-arrow::before {
        position: absolute;
        display: inline-flex;
        width: 10px; /* увеличиваем ширину до 9px */
        height: 10px; /* увеличиваем высоту до 9px */
        content: '';
    }

    .left-arrow::before {
        top: 9px; /* корректируем положение верхней стрелки */
        left: 11px; /* корректируем положение левой стрелки */
        border-top: 3px solid #000000; /* увеличиваем толщину стрелки до 3px */
        border-left: 3px solid #000000; /* увеличиваем толщину стрелки до 3px */
        transform: rotate(-45deg);
    }

    .right-arrow::before {
        top: 9px; /* корректируем положение верхней стрелки */
        left: 8px; /* корректируем положение правой стрелки */
        border-top: 3px solid #000000; /* увеличиваем толщину стрелки до 3px */
        border-right: 3px solid #000000; /* увеличиваем толщину стрелки до 3px */
        transform: rotate(45deg);
    }

    .left-arrow:hover:before,
    .right-arrow:hover:before {
        border-color: #0d2fa7;
    }

    .card {
        display: grid;
    }

    .btn {
        border: none;
    }

    .card-footer {
        height: 127px !important;
    }

    .card-body {
        height: 467px !important;
    }
</style>
@if($hide['programs_hide'] == 'on')
    <section id="programs" tabindex="-1" class="overflow-hidden my-4 my-md-5 py-3">

        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="section-head section-head-s3 wide-auto-sm text-center">
                    <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                        Наши программы</h6>
                    <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">{{$head_block['head_block']}}</h2>
                    <p class="animated" data-animate="fadeInUp" data-delay=".3">Здесь вы можете увидеть наши
                        основные программы</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="position-relative">

                <div class="swiper overflow-visible" data-swiper-options='{
            "slidesPerView": "auto",
            "slidesPerGroupAuto": "auto",
            "slidesPerGroup": 1,
            "noSwiping": false,
            "loop": false,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
            },
            "navigation": {
              "prevEl": "#prev-programm",
              "nextEl": "#next-programm"
            },
            "breakpoints": {
              "0": {
                "slidesPerView": 1
              },
              "700": {
                "slidesPerView": 2
              },
              "1200": {
                "slidesPerView": 2
              },
              "2400": {
                "slidesPerView": 3,
                "noSwiping": true
              }
            }
          }'>

                    <div class="swiper-wrapper">
                        @foreach($cards as $data)
                            <div class="swiper-slide h-auto px-2">
                                <article class="card border-0 h-100 mx-1">
                                    <div class="position-relative">
                                        <img src="{{asset('/storage/' . $data['image'])}}" class="card-img-top"
                                             alt="Image"
                                             style="object-fit: cover;height: 200px;">
                                        <div class="card-img-overlay p-1">
                                            <div class="card-header border-0 text-end">
                                                <button class="btn btn-primary btn-sm" type="button"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom"
                                                        style="background-color: #0D2fa7!important;"
                                                        title="{{$data['underhead']}}">
                                                    {{$data['head']}}</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body pb-4">
                                        <h3 class="h5 mb-4 swiper-no-swiping">{{$data['basic']}}</h3>
                                        <ul class="list-unstyled swiper-no-swiping">
                                            @foreach($data->TextInCards as $d)
                                                <li class="d-flex fs-sm mb-2">
                                                    {!! $d['text'] !!}
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a type="button" class="link link-collapse d-flex text-decoration-none"
                                           data-bs-toggle="modal" data-bs-target="#exampleModal"
                                           data-bs-whatever2='<img src="{{asset('/storage/' . $data['image'])}}" class="card-img-top" alt="Image">'
                                           data-bs-whatever1="{{$data['head']}}" data-bs-whatever="{{$data['more']}}">
                                            <span class="text-primary link-collapse-default">Подробнее</span>
                                        </a>
                                    </div>

                                    <div class="card-footer py-4 fs-sm">
                                        <div class="d-flex align-items-top position-relative">
                                            <div class="d-table rounded-3 flex-shrink-0 me-3">
                                                <img src={{asset("assets/img/sh.jpg")}} s
                                                     class="d-inline-block mb-2" width="48"
                                                     style="background-color: white">
                                            </div>
                                            <div>
                                                <p class="nav-link p-0 mb-0 fw-bold text-decoration-none stretched-link fs-xs">
                                                    Квалификация</p>
                                                <span class="fs-xs text-muted d-block">{{$data['qualification']}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination position-relative pt-1 pt-sm-3 mt-5 d-xl-none d-flex"></div>

                </div>
                <div class="d-flex align-items-center justify-content-center mt-md-4 mt-3">
                    <div class="d-xl-flex d-none ms-4">
                        <button type="button" id="prev-programm" class="btn btn-prev btn-icon btn-sm me-2">
                            <div class="left-arrow"></div>
                        </button>
                        <button type="button" id="next-programm" class="btn btn-next btn-icon btn-sm ms-2">
                            <div class="right-arrow"></div>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endif
