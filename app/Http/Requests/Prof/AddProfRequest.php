<?php

namespace App\Http\Requests\Prof;

use Illuminate\Foundation\Http\FormRequest;

class AddProfRequest extends FormRequest
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
            'last_name' =>'required',
            'first_name' =>'required',
            'birth_date' =>'required|date',
            'sexe' =>'required',
            'module_id' =>'required',
            'address' =>'required',
            'email' =>'required|email',
            'phone_number' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'last_name.required' => 'Le nom d\'enseignent est obligatoire',
            'first_name.required' => 'Le prénom d\'enseignent est obligatoire',
            'birth_date.required' => 'La date de naissance d\'enseignent est obligatoire',
            'sexe.required' => 'Le sexe d\'enseignent est obligatoire',
            'module_id.required' => 'Le module enseigné doit etre indiqué',
            'address.required' => 'L\'adresse de l\'enseignent est obligatoire',
            'email.required' => 'L\'e-email de l\'enseignent est obligatoire',
            'email.email' => 'L\'e-email doit correspondre á une format valide',
            'phone_number.required' => 'Le numéro du teléphone de l\'enseignent est obligatoire',
        ];
    }
}
