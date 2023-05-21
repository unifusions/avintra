<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreDivisionRequest extends FormRequest
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
            'name' => ['required', Rule::unique('divisions')->ignore($this->division)],
            'description' => 'required',
            'slug' => 'string',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Please enter a valid Division name ',
            'description.required' => 'Please enter a short description for the division',
            'name.unique' => 'Division with same name already exists. Please give another name'
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => str()->slug($this->name),
            
        ]);
    }

}
