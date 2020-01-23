<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSchoolRequest extends FormRequest
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
            'name' =>'required',
            'address' =>'required',
            'contract_number' =>'required',
            'first_name' =>'required',
            'last_name' =>'required',
            'phone_number' =>'required',
            'card_identity' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom de l\'école est obligatoire',
            'address.required' => 'L adresse de l\'école est obligatoire',
            'contract_number.required' => 'Le numero du contact de l\'école est obligatoire',
            'first_name.required' => 'Le prenom de l\'administrateur  d\'école est obligatoire',
            'last_name.required' => 'Le nom de l\'administrateur d\'école est obligatoire',
            'phone_number.required' => 'Le numero telephone de l\'dministrateur d\'école est obligatoire',
            'card_identity.required' => 'Le Numéro d\'identité d\'administrateur d\'école est obligatoire',
        ];
    }
}
