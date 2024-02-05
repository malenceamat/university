@extends('admin.main')
@section('hide')
    <div class="container mt-5">
        <div class="container">
            @if($data['banner_hide'] == 1)
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="radio" name="banner_hide" id="form-check-radio-default-checked"
                           checked="" >
                    <label class="form-check-label" for="form-check-radio-default-checked">
                        Скрыть
                    </label>
                </div>
            @else
                <div class="form-check form-check-primary form-check-inline">
                    <input class="form-check-input" type="radio" name="banner_hide" id="form-check-radio-default">
                    <label class="form-check-label" for="form-check-radio-default">
                        Отобразить
                    </label>
                </div>
            @endif
            Отображение блока "Баннер"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="possibilities_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="possibilities_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Возможности"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="statistics_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="statistics_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Статистика"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="audience_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="audience_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Аудитория"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="cards_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="cards_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Карточки"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="stages_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="stages_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Этапы обучения"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="selection_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="selection_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Условия отбора"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="additional_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="additional_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Доп. Ассессмент"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="team_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="team_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Команда"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="result_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="result_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Результаты"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="partners_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="partners_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Партнеры"
        </div>

        <div class="container">
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="contact_hide" id="form-check-radio-default">
                <label class="form-check-label" for="form-check-radio-default">
                    Отобразить
                </label>
            </div>
            <div class="form-check form-check-primary form-check-inline">
                <input class="form-check-input" type="radio" name="contact_hide" id="form-check-radio-default-checked"
                       checked="">
                <label class="form-check-label" for="form-check-radio-default-checked">
                    Скрыть
                </label>
            </div>
            Отображение блока "Запись"
        </div>
        <br>
        <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Сохранить</button>
    </div>

@endsection
