<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class JamaratSchedulesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'batch_id' => 'required|exists:batches,id',
            'name' => 'required',
            'day' => 'required',
            'time' => 'required',
            'throwing' => 'required',
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
