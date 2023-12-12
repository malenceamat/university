
<section id="programs" tabindex="-1" class="overflow-hidden my-4 my-md-5 py-3">
    <div class="container">
        <h2 class="h1 mb-5 text-center">Образовательные программы</h2>
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
              "576": {
                "slidesPerView": 2
              },
              "768": {
                "slidesPerView": 2
              },
              "1200": {
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
                                    <img src="{{asset('/storage/' . $data['image'])}}" class="card-img-top" alt="Image" style="height: 300px;width: 600px">
                                    <div class="card-img-overlay p-1">
                                        <div class="card-header border-0 text-end">
                                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom"
                                                    title="{{$data['underhead']}}">
                                                {{$data['head']}}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-4">
                                    <h3 class="h5 mb-3 swiper-no-swiping">{{$data['basic']}}<sup
                                            class="text-gradient-primary">(new)</sup></h3>
                                    <ul class="list-unstyled swiper-no-swiping">

                                            @foreach($data->TextInCards as $d)
                                            <li class="d-flex fs-sm mb-2">
                                                <i class="fa-regular fa-check-circle fs-5 text-primary me-2"></i>
                                                {{$d['text']}}
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
                                            <img src="assets/img/svg/shield.svg" class="d-inline-block mb-2" width="48" alt="Icon">
                                        </div>
                                        <div>
                                            <p class="nav-link p-0 mb-0 fw-bold text-decoration-none stretched-link fs-xs">Квалификация</p>
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
                        <img src={{asset('arrow-sm-left-svgrepo-com.svg')}}>
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button type="button" id="next-programm" class="btn btn-next btn-icon btn-sm ms-2">
                        <img src={{asset('arrow-sm-right-svgrepo-com.svg')}}>
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>
