<style>
    .it-courses::after {
        content: "не по IT";
        font-size: 13px;
        background: #6366f1;
        padding: 3px 8px 4px 8px;
        border-radius: 15px;
        position: relative;
        top: -150px;
        right: -55px;
    }

    .gradient-text {
        background-image: linear-gradient(to right, #6384ff, #0528ec);
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
    }

    .gradient-text-zvezda {
        background-image: linear-gradient(to right, #0025ff, #0025ff);
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
    }

    .separator:after {
        display: inline-block;
        content: " ";
        border-right: 1px solid #0025ff;
        height: 100%;
    }

    @media screen and (max-width: 900px) {
        #mobile  {
            width: 100%;
        }
    }

</style>


<section id="start" tabindex="-1" class="container mt-sm-0 mb-4 mb-md-5">
    <h2 class="h1 text-center pb-3 pb-md-0 mb-md-2">У нас вы получите:</h2>
    <br>
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 pt-2 pt-sm-3 pt-xl-2">
        @foreach($poss as $data)
            <div class="col p-4">
                <img src="{{asset('/storage/'.$data['image'])}}" width="150" alt="Bulb icon" class="d-block mb-4 "
                     style="border-radius: 30px">
                <div class="d-table mb-1 lh-sm">
                    <p class="mb-0" style="color: black">{{$data['text']}}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>


<div class="separator"></div>

<section tabindex="-1" class="container my-4 my-md-5 py-3">

    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-4">

        @foreach($stat as $data)
            <div class="col pt-2 pt-md-0" id="mobile">
                <div class=" lh-sm px-xxl-4">
                    <div class="card border-0 h-100">
                        <div class="card-body p-3 p-sm-3" style="background-color: #c8d2d9;border-radius: 30px">
                            <h2 class="display-4 gradient-text">{{$data['head']}}</h2>
                            <p class="fs-4 fs-xs-5 fw-medium text-light"><span
                                    class="opacity-70 sizetext" style="color: black">{{$data['text']}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<div class="separator"></div>
@foreach($aud as $data)
    <section id="forwhom" tabindex="-1" class="container my-4 my-md-5 py-3">
        <h2 class="h1 text-center pb-3 pb-md-0 mb-md-2">{{$data['head']}}<sup class="gradient-text-zvezda">*</sup></h2>
        <p class="fs-xs mb-0 text-center mb-md-5"><span class="gradient-text-zvezda">*</span> - {{$data['text']}}</p>
        @endforeach
        <div
            class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-4">  {{--поставить row-cols-lg-4 чтобы вернуть к изначальному--}}
            @foreach($ince as $data)
                <div class="col pt-2 pt-md-0" id="mobile">
                    <div class=" lh-sm px-xxl-4">
                        <div class="card border-0 h-100">
                            <div class="card-body p-3 p-sm-4" style="background-color: #c8d2d9;border-radius: 30px">
                                <h2 class="display-4 gradient-text">{{$data['text']}}</h2>
                                <p class="fs-4 fs-xs-5 fw-medium text-light"><span
                                        class="opacity-70 sizetext" style="color: black">{{$data['head']}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <div class="separator"></div>
