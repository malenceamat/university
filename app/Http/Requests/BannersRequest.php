<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannersRequest extends FormRequest
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
            'button' => ['required','string','max:255'],
            'emailbutton' => ['required', 'string','max:255'],
            'colortext' => ['required','string','max:255'],
            'text' => ['required','string','max:255'],
            'smalltext' => ['required','string','max:255'],
            'bigtext' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'button.required' => 'Основной текст обязателен',
            'emailbutton.required' => 'Вспомогательный текст обязателен',
            'colortext.required' => 'Текст кнопки обязателен',
            'text.required' => 'Ссылка для кнопки обязателена',
            'smalltext.required' => 'Текст кнопки обязателен',
            'bigtext.required' => 'Ссылка для кнопки обязателена'
        ];
    }
}
