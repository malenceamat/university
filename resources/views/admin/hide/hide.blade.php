@extends('admin.main')
@section('hide')

    <div class="container mt-5">
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Баннер"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['partners_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Партнеры"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "О цифровой кафедре"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Преимущества"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Что даек ЦК"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Этапы"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Программы"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "FAQS"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Контакты"
                </label>
            </div>
        </div>
        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="checkbox" id="form-check-default" @if($data['banner_hide'] = true) checked @endif>
                <label class="form-check-label" for="form-check-default">
                    Отображать блок "Преподаватели"
                </label>
            </div>
        </div>


        <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить</button>
    </div>

@endsection
