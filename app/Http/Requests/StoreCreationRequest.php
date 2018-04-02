<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreationRequest extends FormRequest
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
    public function messages() {
        return [
            'category.required' => 'Vous devez choisir une catégorie',
            'category.exists' => 'Cette catégorie n\'existe pas',
            'category.max' => 'Vous ne pouvez choisir que :max catégories maximum',
            'name.max' => 'Un nom est requis',
            'name.min' => 'Le nom doit faire minimum :min caractères',
            'content.required' => 'Le contenu est requis',
            'content.min' => 'Le contenu doit faire minimum :min caractères',
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
            'category' => 'bail|required|exists:categories,id|max:3',
            'name' => 'bail|required|min:5',
            'content' => 'bail|required|min:10',
            'creationImage' => 'nullable|image'
        ];
    }
}
