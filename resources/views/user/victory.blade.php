@foreach($result as $data)
<section class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card h-100 border-0 overflow-hidden px-md-4 top-r">
                <span class="bg-gradient-primary position-absolute top-0 start-0 w-100 h-100 opacity-10 d-none d-md-block"></span>
                <div class="card-body d-flex align-items-center justify-content-center position-relative zindex-2 p-0 pb-2 p-lg-4">

                    <img src={{asset('/storage/'. $data['image'])}} width="130" alt="Award icon"
                         class="mt-2 mt-md-0 mb-0 mb-md-3">

                    <div class="text-left pb-0 pb-md-4 p-4">
                        <h5 class="mb-2 pb-1">{{$data['head']}}<br><span class="text-primary mb-0">{{$data['subtext']}}</span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card border-0 pt-0 pt-md-4 p-4 p-xxl-5 bottom-r">
                <figure class="card h-100 position-relative border-0 bg-transparent mb-0">
                    <blockquote class="card-body p-0 mb-0">
                        <p class="fs-lg mb-0">{{$data['text']}}</p>
                    </blockquote>
                </figure>
            </div>
        </div>
    </div>
</section>
@endforeach
