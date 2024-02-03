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


<section id="partners" tabindex="-1" class="container my-4 my-md-5 py-3">
    <div class="d-flex align-items-center justify-content-md-between justify-content-center mb-md-4 mb-3 ">
        <h2 class="text-center text-md-left h1 mb-0">Партнёры и&nbsp;работодатели</h2>
        <div class="d-md-flex d-none ms-4">
            <button type="button" id="prev-brand" class="btn btn-prev btn-icon btn-sm me-2">
                <div class="left-arrow"></div>
            </button>
            <button type="button" id="next-brand" class="btn btn-next btn-icon btn-sm ms-2">
                <div class="right-arrow"></div>
            </button>
        </div>
    </div>
    <div class="swiper mx-n2" data-swiper-options='{
        "slidesPerView": 2,
        "navigation": {
          "prevEl": "#prev-brand",
          "nextEl": "#next-brand"
        },
        "loop": true,
        "pagination": {
          "el": ".swiper-pagination",
          "clickable": true
        },
        "breakpoints": {
          "500": {
            "slidesPerView": 3,
            "spaceBetween": 8
          },
          "650": {
            "slidesPerView": 4,
            "spaceBetween": 8
          },
          "900": {
            "slidesPerView": 5,
            "spaceBetween": 8
          },
          "1100": {
            "slidesPerView": 6,
            "spaceBetween": 8
          }
        }
      }'>
        <div class="swiper-wrapper">
            @foreach($partners as $data)
            <div class="swiper-slide py-3">
                <div class=" card-hover  mx-2" style="background-color: white;">
                    <img src={{asset('/storage/'.$data['image'])}} s  style="object-fit: contain;height:115px; background-color: white;  filter: none!important;" >
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex"></div>
    </div>
</section>
