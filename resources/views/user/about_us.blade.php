@foreach($addit as $data)
<section class="section section-intro bg-white pb-0 ov-h" id="peculiarities">
    <div class="container">
        <div class="nk-block nk-block-about">
            <div class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-30px">
                <div class="col-lg-6 col-sm-9 pdb-m">
                    <div class="nk-block-text text-center text-lg-start">
                        <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp"
                            data-delay=".1">О ЦК</h6>
                        <h2 class="title title-semibold animated" data-animate="fadeInUp" data-delay=".2">{{$data['text']}}</h2>
                        <p class="lead-s2 animated" data-animate="fadeInUp" data-delay=".3">
                            {!! $data['more'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-9">
                    <div class="nk-block-video animated" data-animate="fadeInUp" data-delay=".6">
                        <img src="{{asset('/storage/'.$data['image'])}}" alt="image">
                        <a href="{{$data['emailbutton']}}"
                           class="nk-block-video-play video-popup btn-play-wrap btn-play-wrap-s2">
                            <div class="btn-play btn-play-sm btn-play-s2">
                                <em class="btn-play-icon"></em>
                            </div>
                            <div class="btn-play-text">{{$data['button']}}</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
