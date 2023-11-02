<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestValidation extends FormRequest
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
            'name' => 'required|min:3|max:30|name_regex',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:20|confirmed',
            'password_confirmation' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.name_regex' => 'The name field must contain only alphabetic characters a-z or A-Z.',
            'email.email' => 'Please Enter a valid Email ID',
        ];
    }
}
