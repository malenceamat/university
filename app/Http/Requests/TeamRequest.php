<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'fio' => ['required','string','max:255'],
            'job' => ['required','string','max:255'],
            'merits' => ['required','string','max:255']
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Изображение обязательно',
            'fio.required' => 'Имя Фамилия Отчество обязателено',
            'job.required' => 'Должность обязателена',
            'merits.required' => 'Заслуги обязателены'
        ];
    }
}
