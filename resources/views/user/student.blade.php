@foreach($select as $data)
    @if($hide['gives_hide'] == 'on')
        <section class="section bg-white pb-0 ov-h" id="tokens">
            <div class="container">
                <div class="section-head section-head-s3 wide-auto-sm text-center">
                    <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                        Что дает
                        ЦК</h6>
                    <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">{{$data['head']}}</h2>
                    <p class="animated" data-animate="fadeInUp" data-delay=".3">{{$data['text']}}</p>
                </div>
                <!-- Block @s -->
                <div class="nk-block nk-block-text-wrap">
                    <div class="row align-items-center justify-content-center gutter-vr-40px">
                        <div class="col-md-6 col-sm-9">
                            <div class="nk-block-text pdb-l">
                                <ul class="list pdb-r">
                                    <li class="animated" data-animate="fadeInUp" data-delay=".45">{!! $data['more'] !!}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-9 align-self-end">
                            <div class="nk-block-img me-md-n5 me-lg-0 animated" data-animate="fadeInUp" data-delay=".6">
                                <img src="{{asset('/storage/'.$data['image'])}}" alt="header">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach
