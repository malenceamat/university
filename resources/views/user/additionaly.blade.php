
@foreach($addit as $data)
    @if($data['hideblock'] == 'on')

<section class="container my-4 my-md-5 py-3">
    <div class="row align-items-lg-center">
        <div class="col-md-6 order-md-2 mb-4 mb-md-0 px-md-5">
            <img src={{asset('/storage/'. $data['image'])}} alt="Image" style="width: 500px;height: 450px">
        </div>
        <div class="col-md-6 order-md-1">
            <div class="pe-xl-5 me-md-2 me-lg-4 text-center">
                <h2 class="pb-3 text-sm-start d-flex align-items-center justify-content-center justify-content-md-between">
                    {{$data['head']}}</h2>
                <p class="mb-0 text-md-start">{{$data['text']}}</p>
            </div>
        </div>
    </div>
</section>
    @endif
@endforeach
<div class="separator"></div>
