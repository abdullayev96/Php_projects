<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'firstname'=>['required','string'],
            'lastname'=>['required','string'],
            'phone'=>['required','numeric'],
            'category_id'=>['required'],
        ];
    }

    public function messages(){
        return 

        [

            'firstname.required'=>'Inputni to\'ldiring',
            'firstname.string'=>'Inputni faqat so\'z bo\'lishi kerak',
            'lastname.required'=>'Inputni to\'ldiring',
            'lastname.string'=>'Inputni faqat so\'z bo\'lishi kerak',
            'phone.required'=>'Inputni to\'ldiring',
            'category_id.required'=>'Inputni to\'ldiring',
            'phone.numeric'=>'Inputni faqat son bo\'lishi kerak',

        ];

    }
}
