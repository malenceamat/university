<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AudienceRequest extends FormRequest
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
            'text' => ['required','string','max:255'],
            'head' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Основной текст',
            'head.required' => 'Вспомогательный текст'
        ];
    }
}
