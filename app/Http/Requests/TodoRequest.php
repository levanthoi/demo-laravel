<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest as RequestsBaseRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class TodoRequest extends RequestsBaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return true;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'isCompleted' => 'required|boolean',
            'time' => 'nullable|date',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Tiêu đề không được bỏ trống',
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     $response = [
    //         'status' => false,
    //         'message' => $validator->errors()->first(),
    //     ];
    //     throw new HttpResponseException(response()->json($response, 422));
    // }
}
