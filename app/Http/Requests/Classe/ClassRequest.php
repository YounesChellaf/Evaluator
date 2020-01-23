<?php

namespace App\Http\Requests\Classe;

use Illuminate\Foundation\Http\FormRequest;

class ClassRequest extends FormRequest
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
            'scolar_designation' => 'required',
            'physic_designation' => 'required',
            'student_number' => 'required',
            'places_number' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'scolar_designation.required' => 'la désignation scolaire est obligatiore',
            'physic_designation.required' => 'la désignation physique est obligatiore',
            'student_number.required' => 'la nombre d etudiant en classe scolaire est obligatiore',
            'places_number.required' => 'la capacité totale est obligatiore',
        ];
    }
}
