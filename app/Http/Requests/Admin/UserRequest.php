<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\GoogleRecaptcha;

class UserRequest extends FormRequest
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
            'email'=>['required'],
            'password'=>['required','numeric','min:8'],
            'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ,[ 'g-recaptcha-response.required' => 'Recapchani to\'ldiring!']
        ];
    }

    public function messages(){
        return [
            'email.required'=>'Inputni to\'ldiring',
            'password.required'=>'Inputni to\'ldiring',
            'password.numeric'=>'Input son bo\'lishi kerak!',
            'password.min'=>'Inputni soni 8 ta dan ko\'p bo\'lishi kerak!',
        ];


    }
}
