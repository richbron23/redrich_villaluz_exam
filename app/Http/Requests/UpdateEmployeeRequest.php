<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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

           
            'firstname' => ['required', 'string','min:2', 'max:255'],
            'lastname' => ['required', 'string', 'min:2', 'max:255'],
            'age' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'birthdate'=> ['required','string'],
            'job_title' => ['required', 'string', 'min:2', 'max:255'],
        ];
    }
}
