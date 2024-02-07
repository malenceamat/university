@foreach($aud as $key)
    @if($hide['advantagesh'] == 'on')
        <section class="section bg-white ov-h">
            <div class="container">
                <div class="section-head section-head-s3 wide-auto-sm text-center">
                    <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                        Почему ЦК
                        НовГУ</h6>
                    <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">{{$key['head']}}</h2>
                    <p class="animated" data-animate="fadeInUp" data-delay=".3">{{$key['text']}}</p>
                </div>
                <div class="nk-block">
                    <div class="row justify-content-center gutter-vr-30px">
                        @foreach($ince as $data)
                            <div class="col-lg-4 col-sm-8">
                                <div class="feature text-center animated" data-animate="fadeInUp" data-delay=".4">
                                    <div class="feature-icon feature-icon-s8">
                                        <img src="{{asset('/storage/'.$data['image'])}}">
                                    </div>
                                    <div class="feature-text">
                                        <h5 class="title title-md">{{$data['text']}}</h5>
                                        <p>{{$data['head']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center pdt-r">
                        <ul class="btn-grp animated" data-animate="fadeInUp" data-delay=".7">
                            <li><a href="{{$key['link_button']}}" class="btn btn-grad btn-md">{{$key['button']}}</a>
                            </li>
                        </ul>
                        <div class="pdt-r animated" data-animate="fadeInUp" data-delay=".8">
                            <a href="{{$key['telegram']}}" class="link link-light link-xs">
                                <em class="link-icon fa fa-paper-plane"></em><span>Канал в Телеграм</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach
