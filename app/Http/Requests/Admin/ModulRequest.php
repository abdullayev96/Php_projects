<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ModulRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'number'=>['required','numeric','max:3'],
            'title'=>['required'],
            'description'=>['required'],
            'body'=>['required'],

        ];
    }

    public function messages(){
        return 
        [

            'number.required'=>'Inputni to\'ldiring',
            'number.numeric'=>'Inputni faqat son bo\'lishi kerak',
            'number.max'=>'Inputni faqat 2 ta son bo\'lishi kerak',
            'title.required'=>'Inputni to\'ldiring',
            'description.required'=>'Inputni to\'ldiring',
            'body.required'=>'Inputni to\'ldiring',

        ];
    }
}
