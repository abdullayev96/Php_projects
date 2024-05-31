<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'course_name'=>['required'],
            'course_time'=>['required'],
            'course_practice'=>['required'],
            'course_bonus'=>['required'],
            'course_image'=>['required'],
            'category_id'=>['required'],
        ];
    }


    public function messages(){
        return 
        [
            'course_name.required'=>'Inputni to\'ldiring',
            'course_time.required'=>'Inputni to\'ldiring',
            'course_practice.required'=>'Inputni to\'ldiring',
            'course_bonus.required'=>'Inputni to\'ldiring',
            'course_image.required'=>'Inputni to\'ldiring',
            'category.required'=>'Inputni to\'ldiring',
        ];
    }
}
