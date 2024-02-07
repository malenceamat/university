<section class="section section-contact bg-white ov-h" id="contact">
    <div class="container">
        <div class="section-head section-head-s3 wide-auto-sm text-center">
            <h6 class="title title-xs title-xs-s3 tc-primary animated" data-animate="fadeInUp" data-delay=".1">
                Контакты</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Наши контакты</h2>
        </div>
        <!-- Block @s -->
        <div class="nk-block block-contact" id="contact">
            <div class="row justify-content-center gutter-vr-30px">
                <div class="col-lg-4">
                    <div class="pdt-s">
                        @foreach($record as $data)
                            <div class="d-flex flex-column h-100">
                                <p class="animated" data-animate="fadeInUp" data-delay=".3">Остались вопросы? Напишите
                                    нам,
                                    и мы свяжемся с вами в ближайшее время.</p>
                                <ul class="contact-list contact-list-s3">
                                    <li class="animated" data-animate="fadeInUp" data-delay=".4">
                                        <em class="contact-icon contact-icon-s3 fas fa-phone"></em>
                                        <div class="contact-text">
                                            <span>{{$data['phone']}}</span>
                                        </div>
                                    </li>
                                    <li class="animated" data-animate="fadeInUp" data-delay=".5">
                                        <em class="contact-icon contact-icon-s3 fas fa-envelope"></em>
                                        <div class="contact-text">
                                            <span>{{$data['email']}}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="">
                        <form  action="{{route('form')}}" method="POST">
                            @csrf
                            <div class="field-item animated" >
                                <input name="name" type="text" class="input-line">
                                <label class="field-label field-label-line">Ваше Имя</label>
                            </div>
                            <div class="field-item animated" >
                                <input name="email" type="email" class="input-line">
                                <label class="field-label field-label-line">Ваш Email</label>
                            </div>
                            <div class="field-item animated" >
                                <textarea name="message" class="input-line input-textarea"></textarea>
                                <label class="field-label field-label-line">Ваше сообщение</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 animated" >
                                    <button class="btn btn-md btn-grad">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
    <div class="ui-mask-right ui-mask-s6"></div>
</section>
