<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class BatchesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    { 
        [
            
            'virtual_location_id' => 'required|exists:virtual_locations,id',
            'code' => 'required',
            'pilgrims' => 'required|integer|max:188',
            'name'=> 'required',
    ];
    }

protected function failedValidation(Validator $validator)
{
     $errors = $validator->errors();

    throw new HttpResponseException(response()->json([
        'message' => 'Validation Failed',
        'errors' => $errors,
    ], 422));
}
}
