<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
     * Personalize the error messages
     *
     * @return Array Custom messages
     */
    public function messages()
    {
        return [
            'title.required' => 'Un titre est requis',
            'title.min' => 'Le titre doit faire minimum :min caractères',
            'title.max' => 'Le titre doit faire maximum :max caractères',
            'content.required' => 'Le contenu est requis',
            'content.min' => 'Le contenu doit faire minimum :min caractères'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'bail|required|min:5|max:191',
            'content' => 'required|min:10'
        ];
    }
}
