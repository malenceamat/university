<style>
    .element73 {
        height: 100vh;
        width: 100vw;
    }
</style>

@foreach($banner as $data)

    <section class="position-relative d-flex align-items-center min-vh-100 bg-light py-lg-5 pt-5" data-jarallax
             data-img-position="0% 100%" data-speed="0.5">
        <div class="element73">

            <img src="{{asset('/storage/'. $data['image'])}}" class="card-img-top" alt="Image"
                 style="margin-top: 25px;height: 75%;">
        </div>
    </section>
@endforeach
