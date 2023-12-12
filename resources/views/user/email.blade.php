@foreach($record as $data)
<section class="container">
    <div class="">
        <div class="card-body p-md-5 p-4 bg-size-cover" style="background-image: url({{asset('/storage/'. $data['image'])}});">
            <div class="py-md-5 py-4 text-center">
                <a href="{{$data['button']}}" type="button" class="btn btn-email btn-lg fs-6 rounded mb-4" target="_blank" rel="noopener">
                    &nbsp;{{$data['buttontext']}}
                </a>
                <p class="fw-normal text-light mt-4 mb-1">{{$data['text']}}</p>
                <a href="mailto:{{$data['email']}}" class="text-light">{{$data['email']}}</a>
            </div>
        </div>
    </div>
</section>
@endforeach
