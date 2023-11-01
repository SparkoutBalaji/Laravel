<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:30|regex:/^[a-zA-Z] +$/', // Validate the name field as a string with a maximum length of 255 characters.
            'email' => 'required|email|unique:users,email', // Validate the email field as a valid email address and ensure it is unique in the "users" table.
            'password' => 'required|string|min:8|confirmed', // Validate the password field as a string with a minimum length of 8 characters and confirm it with a "password_confirmation" field.
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
