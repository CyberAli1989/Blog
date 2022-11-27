<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'old_pass' => 'required|min:8',
            'new_pass' => 'required|min:8',
            'confirm_pass' => 'required|min:8|same:new_pass',

        ];
    }

    public function messages()
    {
        return [
            'old_pass.required' => 'Old Password is empty',
            'new_pass.required' => 'New Password is empty',
            'confirm_pass.required' => 'Confirm Password is empty',
            'min' => 'Password is less than 8 character',
            'confirm_pass.same' => 'password is not save'
        ];
    }
}
