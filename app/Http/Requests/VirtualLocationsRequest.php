<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class VirtualLocationsRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'virtual_location_id' => 'required|exists:actual_locations,id',
            'hajj_office_id' => 'exists:hajj_offices,id',
            'company_id' => 'required|exists:companies,id',
            'office_id' => 'required|exists:offices,id',
            'pilgrims' => 'required|integer|max:50000',
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
