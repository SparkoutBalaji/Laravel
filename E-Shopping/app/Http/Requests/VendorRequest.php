<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VendorRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            // 'email' => ['required', 'string', 'email', Rule::unique('vendors', 'email')->ignore($this->route('vendor')),],
            'email' => 'required|string|email|unique:vendors,email',
            'password' => 'required|string|min:8', 
            'shop_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|numeric',
            'profile_picture' => 'required|image|mimes:png,jpg,jpeg|between:100,15000',
        ];
    }
    public function messages()
    {
    return [
        'name.required' => 'The name field is required.',
        'email.required' => 'The email field is required.',
        'email.email' => 'Please enter a valid email address.',
        'email.unique' => 'The email address has already been taken.',
        'password.required' => 'The password field is required.',
        'password.min' => 'The password must be at least :min characters.',
        'shop_name.required' => 'The shop name field is required.',
        'address.required' => 'The address field is required.',
        'city.required' => 'The city field is required.',
        'postal_code.required' => 'The postal code field is required.',
        'postal_code.numeric' => 'The postal code must be a number.',
        'profile_picture.max' => 'The profile picture should be a maximum of :max characters.',
    ];
}

}
