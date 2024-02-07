@extends('admin.main')
@section('hide')

    <form method="POST" action="/hide_save">
        @csrf
        <div class="container mt-5">
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="banner_hide"
                           @if($data['banner_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Баннер"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="partners_hide"
                           disabled>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Партнеры"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="about_us_hide"
                           @if($data['about_us_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "О цифровой кафедре"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="advantagesh"
                           @if($data['advantagesh'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Преимущества"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="gives_hide"
                           @if($data['gives_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Что даек ЦК"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="stages_hide"
                           @if($data['stages_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Этапы"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="programs_hide"
                           @if($data['programs_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Программы"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="teacher_hide"
                           @if($data['teacher_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Преподаватели"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="faqs_hide"
                           @if($data['faqs_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "FAQS"
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="checkbox" id="form-check-default" name="contact_hide"
                           @if($data['contact_hide'] == 'on') checked @endif>
                    <label class="form-check-label" for="form-check-default">
                        Отображать блок "Контакты"
                    </label>
                </div>
            </div>
            <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить</button>
        </div>
    </form>
@endsection
