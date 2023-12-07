<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   /* public function authorize()
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
            'text' => ['required', 'string','max:255'],
            'button' => ['required','string','max:255'],
            'url' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Изображение обязательно',
            'head.required' => 'Основной текст обязателен',
            'text.required' => 'Вспомогательный текст обязателен',
            'button.required' => 'Текст кнопки обязателен',
            'url.required' => 'Ссылка для кнопки обязателена'
        ];
    }
}
