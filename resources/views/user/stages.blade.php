<style>
    .separator:after{
        display: inline-block;
        content: " ";
        border-right: 1px solid #0025ff;
        height: 100%;
    }
</style>

<section id="stages" tabindex="-1" class="container my-4 my-md-5 py-3">
    @if (!$stages->isEmpty())
        <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5">Этапы обучения</h2>
    @else
        <h2 class="h1 text-center pb-3 pb-md-0 mb-md-5"></h2>
    @endif
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-xl-5">
                <div class="steps ps-lg-4">
                    @foreach($stages as $data)
                        <div class="step pb-5">
                            <div class="step-number" style="background-color: gray;">
                                <div class="step-number-inner" style="background-color: gray;color: white">{{$data['number']}}</div>
                            </div>
                            <div class="step-body">
                                <p class="mb-2">{{$data['date']}}</p>
                                <h5 class="fw-bolder">{{$data['stages']}}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>
<div class="separator"></div>


