<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
        /* name , email , age , address , phone , salary , department_id */
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:employees,email',
            'age' => 'required|numeric|min:18|max:64',
            'address' => 'required|string',
            'phone' => 'required|numeric|digits:11',
            'salary' => 'required|numeric|min:0|max:10000',
            'department_id' => 'required|numeric|exists:departments,id',
        ];
    }
}
