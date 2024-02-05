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
            'text' => ['required','string','max:255'],
            'smalltext' => ['required','string','max:255'],
            'secondbutton' => ['required','string','max:255'],
        ];
    }
    public function messages()
    {
        return [
            'button.required' => 'Текст первой кнопки обязателен',
            'emailbutton.required' => 'Ссылка первой кнопки обязателена',
            'text.required' => 'Основной текст обязателен',
            'smalltext.required' => 'Дополнительный текст обязателен',
            'secondbutton.required' => 'Текст второй кнопки обязателен',
        ];
    }
}
