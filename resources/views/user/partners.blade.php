
<section id="partners" tabindex="-1" class="container my-4 my-md-5 py-3">
    <div class="d-flex align-items-center justify-content-md-between justify-content-center mb-md-4 mb-3 ">
        <h2 class="text-center text-md-left h1 mb-0">Партнёры и&nbsp;работодатели</h2>
        <div class="d-md-flex d-none ms-4">
            <button type="button" id="prev-brand" class="btn btn-prev btn-icon btn-sm me-2">
                <img src={{asset('arrow/arrow-sm-left-svgrepo-com.svg')}}>
                <i class="fa fa-chevron-left"></i>
            </button>
            <button type="button" id="next-brand" class="btn btn-next btn-icon btn-sm ms-2">
                <img src={{asset('arrow/arrow-sm-right-svgrepo-com.svg')}}>
                <i class="fa fa-chevron-right"></i>
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
                @if($data['hideblock'] >0 )
            <div class="swiper-slide py-3">
                <div class=" card-hover  mx-2" style="background-color: white;">
                    <img src={{asset('/storage/'.$data['image'])}} s  style="width: 300px;height:115px; background-color: white;  filter: none!important;" >
                </div>
            </div>
                @endif
            @endforeach
        </div>
        <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex"></div>
    </div>
</section>
