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
@if($hide['teacher_hide'] == 'on')
<div class="testimonial-area pt-100 pb-100" id="teacher">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="section-head section-head-s3 wide-auto-sm text-center">
                <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                    Наши преподаватели</h6>
                <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Команда цифровой кафедры</h2>
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Здесь вы можете увидеть наших преподавателей</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="testimonial-item-wrap-1 testimonial-carousel-2">
                    @foreach($team as $data)
                        <div>
                            <div class="team team-s4">
                                <div class="team-photo round-full team-photo-bg">
                                    <img src={{asset('/storage/'. $data['image'])}} alt="team" class="round-full">
                                </div>
                                <h5 class="team-name title title-sm" style="text-align: center!important;">{{$data['fio']}}</h5>
                                <span class="team-position" style="text-align: center;width: 200px;">{{$data['job']}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<script src={{asset("/assets/js/vendors.js")}}></script>
<script src={{asset("/assets/js/plugins.js")}}></script>
<script src={{asset("/assets/js/main.js")}}></script>
