@foreach($banner as $data)
<section class="position-relative d-flex align-items-center min-vh-100 bg-light py-lg-5 pt-5" data-jarallax data-img-position="0% 100%" data-speed="0.5">        <div class="container position-relative zindex-5 py-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
                <div class="mb-md-5 pb-xl-5 mb-4">
                    <div class="d-inline-flex align-items-center position-relative mb-3">
                        <a href="{{$data['emailbutton']}}" class="btn btn-video btn-icon btn-lg flex-shrink-0 me-3 stretched-link" data-bs-toggle="video">
                            <img src={{asset('arrow-narrow-circle-broken-down-svgrepo-com.svg')}}>
                        </a>
                        <p class="mb-0">{{$data['button']}}</p>
                    </div>
                    <h1 class="display-2 mb-3 pb-3" style="line-height: 1.1;">
                        <span class="text-gradient-primary">{{$data['colortext']}}</span><br> {{$data['text']}}
                    </h1>
                    <div class="align-items-md-start">
                        <h4 class="text-gradient-primary">{{$data['text']}}</h4><h6>{{$data['smalltext']}}</h6>

                        <p class="lead mt-3 pb-3" style="font-size: 1.3rem;">{{$data['bigtext']}}<sup class="text-gradient-primary">*</sup></p>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative d-none d-md-block">
                    <a href="#programs" data-scroll data-scroll-offset="100" class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3">
                        <i class=" fa-chevron-down">
                            <img src={{asset('arrow-narrow-down-svgrepo-com.svg')}}>
                        </i>
                    </a>
                    <span class="fs-sm">Узнать больше</span>
                </div>
            </div>
            <div class="col-sm-6 col-sm-6 col-9 order-md-2 order-1">
                <img src="{{asset('/storage/'. $data['image'])}}" class="card-img-top" alt="Image" style="width: 600px;height: 475px">
            </div>
        </div>
    </div>
</section>
@endforeach
