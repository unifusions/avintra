<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
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
            'name' => ['required', Rule::unique('divisions')->ignore($this->section)],
            'description' => 'required',
            'slug' => 'string',
            'division_id' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Please enter a valid Section name ',
            'description.required' => 'Please enter a short description for the section',
            'name.unique' => 'Section with same name already exists. Please give another name',
            'division_id.required' => 'Please select division'
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => str()->slug($this->name),
            
        ]);
    }

}

