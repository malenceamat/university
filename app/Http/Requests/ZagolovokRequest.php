<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZagolovokRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /*public function authorize()
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
            'head' => ['required','string','max:255'],
            'text' => ['required','string','max:255'],
            'button' => ['required','string','max:255'],
            'link_button' => ['required','string','max:255'],
            'telegram' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'head.required' => 'Основной текст обязателен',
            'text.required' => 'Вспомогательный текст обязателен',
            'button.required' => 'Текст кнопки обязателен',
            'link_button.required' => 'Ссылка в кнопке обязательна',
            'telegram.required' => 'telegram'
        ];
    }
}
