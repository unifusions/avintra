<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;



class StoreDocumentRequest extends FormRequest
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
            'title' => ['required', 'unique:documents', 'max:255', Rule::unique('documents')->ignore($this->document)],

            'document_no' => 'required',
            'document_category_id'=> 'required',
            'division_id' => 'required',
            'section_id' => 'required',
            'document_file' => [
                'required',
                File::types(['pdf', 'docx', 'xlsx'])
            ],
            'slug' => 'required',
            
            'user_id' => 'required',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => str()->slug($this->title),
            'user_id' => auth()->user()->id,
        ]);
    }




    public function messages(): array
    {
        return [
            'title.required' => 'A Document Title is required',
            'title.unique' => 'Document with same Title already exists. Use different title',
            'document_no.required' => 'A Document No is required',
            'division_id.required' => 'Please select Division for the Document',
            'section_id.required' => 'Please select Section for the Document',
            'document_file.required' => 'Please select PDF File',
            'document_file.mimes' => 'Only PDF/Docx/Xlsx File type is allowed',
            'document_category_id.required'=> 'Please select Category of the document'
        ];
    }
}
