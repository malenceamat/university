<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdditionalRequest extends FormRequest
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
            'text' => ['required','string','max:255'],
            'button' => ['required', 'string','max:255'],
            'emailbutton' => ['required', 'string' ,'max:255'],

        ];
    }
    public function messages()
    {
        return [
            'text.required' => 'Основной текст обязателен',
            'button.required' => 'Текст для кнопки обязателен',
            'emailbutton.required' => 'Ссылка в кнопке обязательна',

        ];
    }
}
