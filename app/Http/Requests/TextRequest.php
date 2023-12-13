<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
 /*   public function authorize()
    {
        return false;
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => ['required'],
            'head' => ['required','string','max:255'],
            'underhead' => ['required','string','max:255'],
            'basic' => ['required','string','max:255'],
            'qualification' => ['required','string','max:255'],
            'more' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Изображение обязательно',
            'head.required' => 'Название команды обязательно',
            'underhead.required' => 'Подтекст заголовка обязателен',
            'basic.required' => 'Основной текст обязателен',
            'qualification.required' => 'Текст квалификации обязателен',
            'more.required' => 'Текст в кнопке "Подробнее" обязателен',
        ];
    }
}
