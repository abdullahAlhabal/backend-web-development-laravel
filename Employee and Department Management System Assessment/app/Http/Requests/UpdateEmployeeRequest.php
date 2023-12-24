<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'email' => 'email|max:255|unique:employees,email',
            'age' => 'numeric|min:18|max:64',
            'address' => 'string',
            'phone' => 'numeric|digits:11',
            'salary' => 'numeric|min:0|max:10000',
            'department_id' => 'numeric|exists:departments,id',
        ];
    }
}
