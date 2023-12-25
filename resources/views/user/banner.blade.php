<style>
    .element73 {
        height: 100vh;
        width: 100vw;
        position: relative;
        text-align: center;
    }

    .bottom-left {
        position: absolute;
        top: 37%;
        left: 17%;
        color: white;
        max-width: 40%;
        word-wrap: break-word;
    }

    .top-left {
        position: absolute;
        top: 15%;
        left: 17%;
        color: #ffffff;
        max-width: 40%;
        word-wrap: break-word;
        text-align: left;
    }

    .top-right {
        position: absolute;
        top: 5%;
        left: 5%;
        max-width: 40%;
        word-wrap: break-word;
    }

    .bottom-right {
        position: absolute;
        top: 55%;
        left: 17%;
        color: #f5f4f4;
        max-width: 40%;
        word-wrap: break-word;
        text-align: left;
    }

    .button {
        position: absolute;
        top: 80%;
        left: 48.5%;
        color: black;
        max-width: 40%;
        word-wrap: break-word;
        text-align: left;
    }
</style>

@foreach($banner as $data)
    <section class="position-relative d-flex align-items-center min-vh-100 bg-light py-lg-5 pt-5" data-jarallax
             data-img-position="0% 100%" data-speed="0.5" style="margin-top: 30px">
        <div class="element73">
            <img src="{{asset('/storage/'. $data['image'])}}" class="card-img-top" alt="Image"
                 style="margin-top: 25px;height: 75%;">
            <div class="bottom-left">
                <h4 class="" style="color: #f5f4f4;">{{$data['smalltext']}}</h4>
            </div>
            <div class="top-left">
                <h1 class="display-2 mb-3 pb-3" style="line-height: 1.1;">
                    <span class="text-gradient-primary">{{$data['colortext']}}</span>
                    <br> {{$data['text']}}
                </h1>
            </div>
            <div class="top-right">
                <a href="{{$data['emailbutton']}}"
                   class="btn btn-video btn-icon btn-lg flex-shrink-0 me-3 stretched-link" data-bs-toggle="video">
                    <img src={{asset('arrow/movie_film_basic_essential_multimedia_video_player_play_ui_icon_219939.svg')}}>
                </a>
                <span>{{$data['button']}}</span>
            </div>
            <div class="bottom-right">
                <p class="lead mt-3 pb-3" style="font-size: 1.3rem;">{{$data['bigtext']}}<sup
                        class="text-gradient-primary">*</sup></p>
            </div>
            <div class="button">
                <a href="#programs" data-scroll data-scroll-offset="100"
                   class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3">
                    <i class=" fa-chevron-down">
                        <img src={{asset('arrow/arrow-narrow-down-svgrepo-com.svg')}}>
                    </i>
                </a>
                <span class="fs-sm">Узнать больше</span>
            </div>

        </div>
    </section>
@endforeach

