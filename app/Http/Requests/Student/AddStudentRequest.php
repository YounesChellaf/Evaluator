<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentRequest extends FormRequest
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
            'first_name' =>'required',
            'last_name' =>'required',
            'matricule' =>'required',
            'birth_date' =>'required',
            'sexe' =>'required',
            'scolar_year' =>'required',
            'address' =>'required',
            'tutel_last_name' =>'required',
            'tutel_first_name' =>'required',
            'job' =>'required',
            'phone_number' =>'required',
            'emergency_phone_number' =>'required',
            'class_id' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => 'Le nom de l\'école est obligatoire',
            'first_name.required' => 'Le prenom de l\'école est obligatoire',
            'matricule.required' => 'Le matricule d\'éleve est obligatoire',
            'birth_date.required' => 'La date de naissance d\'éleve est obligatoire',
            'sexe.required' => 'Le sexe d\'éleve est obligatoire',
            'scolar_year.required' => 'L\'année scolaire d\'éleve est obligatoire',
            'address.required' => 'L\'adresse d\'éleve est obligatoire',
            'tutel_last_name.required' => 'Le nom du tuteur d\'éleve est obligatoire',
            'tutel_first_name.required' => 'Le prénom tuteur d\'éleve est obligatoire',
            'phone_number.required' => 'Le numéro telephone tuteur d\'éleve est obligatoire',
            'emergency_phone_number.required' => 'Le numéro d\'urgence du tuteur d\'éleve est obligatoire',
            'class_id.required' => 'L\'éleve est obligatoirement affecté á une classe',
        ];
    }
}
