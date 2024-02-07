<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contactrequest extends FormRequest
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

            'email' => ['required','string','max:255'],
            'phone' => ['required', 'string','max:255'],
        ];
    }
    public function messages()
    {
        return [

            'email.required' => 'Почта обязателена',
            'phone.required' => 'Номер телефона обязателен',
        ];
    }
}
