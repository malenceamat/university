<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StagesRequest extends FormRequest
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
            'date' => ['required','string','max:255'],
            'stages' => ['required','string','max:255'],
            'number' => ['required', 'string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'date.required' => 'Дата обязательна',
            'stages.required' => 'Стадии обязателены',
            'number.required' => 'Порядковый номер обязателен'
        ];
    }
}
