<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvocationRequest extends FormRequest
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
            'motif' => 'required',
            'reason' => 'required|min:10',
            'reception_date' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'motif.required' => 'Le motif de la convocation est obligatoire',
            'reason.required' => 'La raison de la convocation est obligatoire',
            'reason.min' => 'La raison doit avoir au minimum 10 caractéres',
            'reception_date.required' => 'La date de reception du parent est obligatoire',
        ];
    }
}
