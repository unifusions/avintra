<?php

namespace App\Http\Requests\Settings;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class LeadershipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'designation' => 'required',
            'bio' => 'string',
            'address' => 'string',
            'email' => [
                'required',
                Rule::unique('leaderships')->ignore($this->leadership)
            ],
         
            
            'image_path' => 'string',
            'display_order' =>'integer'
            // 'leader_image' => [
            //     File::types(['pdf', 'docx', 'xlsx'])
            // ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please Enter Full Name'
        ];
    }
}
