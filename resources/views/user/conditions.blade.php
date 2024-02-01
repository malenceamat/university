
@foreach($select as $data)
    @if($data['hideblock'] == 'on')
<section class="container my-5 pt-0 pt-md-3 pb-0 pb-md-5">
    <div class="row gy-4 align-items-center justify-content-center">
        <div class="col-10 col-md-6">
            <div class="rounded-3">
                <img src="{{asset('/storage/'. $data['image'])}}" class="rellax d-block" alt="Screen" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="md" style="transform: translate3d(-9px, 1px, 0px);height: 400px;width: 400px">
            </div>
        </div>
        <div class="col-md-6 px-md-5 align-self-center">
            <h2 class="pb-3 d-flex align-items-center justify-content-md-between justify-content-center">{{$data['head']}}</h2>
            <ul class="list-unstyled pb-3 mb-3">
                <p>
                    {!! $data['text'] !!}
                </p>
            </ul>
            <div class="d-flex align-items-center justify-content-md-between justify-content-center">
                <a href="{{$data['url']}}" class="btn btn-primary ">
                    {{$data['button']}}
                    <i class="fa fa-arrow-right fs-6 ms-2 me-n1"></i>
                </a>
            </div>
        </div>
    </div>
</section>
    @endif
@endforeach
<div class="separator"></div>
