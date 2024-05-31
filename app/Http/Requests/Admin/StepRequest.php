<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StepRequest extends FormRequest
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
            'title'=>['required'],
            'content'=>['required'],
            'image'=>['required'],
        ];
    }

    public function messages(){
        return 
        [
            'title.required'=>'Inputni to\'ldiring',
            'content.required'=>'Inputni to\'ldiring',
            'image.required'=>'Inputni to\'ldiring',
        ];
    }
}
