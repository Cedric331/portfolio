<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
      return [
         'subject' => 'required|max:255',
         'name' => 'required|max:255',
         'email' => 'required|email',
         'message' => 'required|max:1000',
      ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'subject.required' => 'Merci de mettre un sujet',
            'subject.max' => 'Le sujet est trop long, il ne doit pas dépasser 255 caractères',
            'name.required' => 'Merci d\'indiquer votre nom',
            'name.max' => 'Le nom est trop long, il ne doit pas dépasser 255 caractères',
            'email.required' => 'Merci d\'indiquer votre adresse email',
            'email.email' => 'L\'adresse email n\'est pas valide',
            'message.required' => 'Un message est requis',
            'message.max' => 'Le message est trop long, il ne doit pas dépasser 1000 caractères',
        ];
    }
}
