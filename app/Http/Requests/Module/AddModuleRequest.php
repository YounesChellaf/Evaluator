<?php

namespace App\Http\Requests\Module;

use Illuminate\Foundation\Http\FormRequest;

class AddModuleRequest extends FormRequest
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
            'designation' =>'required',
            'description' =>'required',
            'coefficient' =>'required',
            'hours_volume' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'designation.required' => 'La designation du module est obligatoire',
            'description.required' => 'La description du module est obligatoire',
            'coefficient.required' => 'Le coefficient du module est obligatoire',
            'hours_volume.required' => 'Le volume horaire du module est obligatoire',
        ];
    }
}
