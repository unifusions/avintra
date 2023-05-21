<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
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
            'title' => 'required|unique:documents|max:255',
            'document_no' => 'required',
            'division_id' => 'required',
            'section_id' => 'required',
            'document_file' => 'required|mimes:pdf',
            'slug' => 'required',
            'file_size' => 'integer',
           'file_name' => 'string',
           'file_type' => 'string',
           'document_path' => 'string',
           'user_id' => 'required',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => str()->slug($this->title),
            'user_id' => auth()->user()->id,
            'file_size' => $this->document_file->getSize(),
            'file_name' => $this->document_file->getClientOriginalName(),
            'file_type' =>  $this->document_file->getClientOriginalExtension(),
            'document_path' => Storage::putFileAs("documents", $this->document_file, $this->document_file->getClientOriginalName() ),
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
            'document_file.mimes' => 'Only PDF File type is allowed'
        ];
    }
}
