<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
class StoreWordoftheDay extends FormRequest
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
            'word_english' => ['required', 'unique:today_words', 'max:255', Rule::unique('today_words')->ignore($this->todayword)],
            'word_tamil' => 'required',
            'word_hindi' => 'required',
            'word_audio_file' => [
                'required',
                File::types(['mp3'])
            ],

           
            'slug' => 'string',
            'word_meaning' => 'required',


        ];
    }

    protected function prepareForValidation(): void
    {
    
        $this->merge([
            'slug' => str()->slug($this->word_english),
            'user_id' => auth()->user()->id,
           
        ]);
    }

    public function messages(): array
    {
        return [
            'word_english.required' => 'An English word is required',
            'word_english.unique' => 'Word with same already exists. Use different title',
            'word_tamil.required' => 'A Tamil Word is required',
            'word_hindi.required' => 'An Hindi Word is required',
            'word_meaning.required' => 'Meaning for the word is required',
            'word_audio_file.required' => 'Please select Audio MP3 File',
            'word_audio_file.mimes' => 'Only MP3 File type is allowed'
        ];
    }

}
