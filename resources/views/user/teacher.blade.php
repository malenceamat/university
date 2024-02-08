<style>
    .left-arrow,
    .right-arrow {
        display: inline-flex;
        position: relative;
        width: 30px; /* увеличиваем ширину до 30px */
        height: 30px; /* увеличиваем высоту до 30px */
        background-color: #ffffff;
        border-radius: 50%;
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

    /* Изменение фона и цвета при наведении */
    .left-arrow:hover,
    .right-arrow:hover {
        background-color: #ffffff;
    }

    .left-arrow:hover:before,
    .right-arrow:hover:before {
        border-color: #0d2fa7;
    }


</style>

<link rel="stylesheet" href={{asset('assets/css/plugins.css')}}>

{{--@if($hide['teacher_hide'] == 'on')
    <section class="container my-4 my-md-5 py-3" id="teacher">
        <div class="row pt-2 py-xl-3">
            <div class="col-lg-3 col-md-4">
                <h2 class="h1 text-center text-md-start mx-auto mx-md-0 pt-md-2" style="max-width: 330px;">Команда <br
                        class="d-none d-sx-inline">цифровой <br class="d-none d-sx-inline">кафедры</h2>

                <!-- Slider controls (Prev / next buttons) -->
                <div class="d-flex justify-content-center justify-content-md-start pb-4 mb-2 pt-2 pt-md-4 mt-md-5">
                    <button type="button" id="prev-testimonial" class="btn btn-prev btn-icon btn-sm me-2">
                        <div class="left-arrow"></div>
                    </button>
                    <button type="button" id="next-testimonial" class="btn btn-next btn-icon btn-sm ms-2">
                        <div class="right-arrow"></div>
                    </button>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="swiper mx-n2" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 8,
              "loop": true,
              "navigation": {
                "prevEl": "#prev-testimonial",
                "nextEl": "#next-testimonial"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "1000": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }'>
                    <div class="swiper-wrapper">
                        @foreach($team as $data)
                            {{$data['head']}}
                            <div class="swiper-slide h-auto pt-4">
                                <figure class="d-flex flex-column h-100 px-0 px-md-2 px-lg-0 mb-0 mx-2">
                                    <figcaption class="d-flex align-items-center pb-4">
                                        <img src={{asset('/storage/'. $data['image'])}} width="84"
                                             class="rounded-circle border-2 border-primary border"
                                             alt="Булакина Мария Борисовна">
                                        <div class="ps-3">
                                            <h6 class="fs-6 fw-semibold mb-0">{{$data['fio']}}</h6>
                                        </div>
                                    </figcaption>
                                    <div class="card h-100 position-relative border-0 shadow-sm">
                                        <blockquote class="card-body pb-3">
                                            <p class="mb-3 fs-sm">{{$data['job']}}</p>
                                            <hr>
                                            <ul class="p-0 mt-3 mb-0 fs-sm">
                                                <li class="d-flex fs-xs align-items-top">
                                                    {{$data['merits']}}
                                                </li>
                                            </ul>
                                        </blockquote>
                                    </div>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif--}}



@if($hide['teacher_hide'] == 'on')
<div class="testimonial-area pt-100 pb-100" id="teacher">
    <!-- Container -->
    <div class="container">
        <!-- row -->
        <div class="row justify-content-center text-center">
            <!-- col -->
            <div class="section-head section-head-s3 wide-auto-sm text-center">
                <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                    Наши преподаватели</h6>
                <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Команда цифровой кафедры</h2>
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Здесь вы можете увидеть наших преподавателей</p>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /Container -->
    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="testimonial-item-wrap-1 testimonial-carousel-1">
                    @foreach($team as $data)
                        <div style="width: 50%;">
                            <div class="team team-s4">
                                <div class="team-photo round-full team-photo-bg">
                                    <img src={{asset('/storage/'. $data['image'])}} alt="team" class="round-full">
                                </div>
                                <h5 class="team-name title title-sm">{{$data['fio']}}</h5>
                                <span class="team-position" style="text-align: left;width: 200px;">{{$data['job']}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Vendor Js -->
<script src={{asset("/assets/js/vendors.js")}}></script>
<!-- /Vendor js -->

<!-- Plugins Js -->
<script src={{asset("/assets/js/plugins.js")}}></script>
<!-- /Plugins Js -->

<!-- Main JS -->
<script src={{asset("/assets/js/main.js")}}></script>
<!-- /Main JS -->
