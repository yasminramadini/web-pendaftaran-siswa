<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users|min:3|max:10',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password'
        ];
    }
    
    public function messages()
    {
        return [
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah dipakai',
            'username.min' => 'Username minimal 3 huruf',
            'username.max' => 'Username maksimal 10 huruf',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah dipakai',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'confirmPassword.same' => 'Konfirmasi password tidak sama dengan password',
            'confirmPassword.required' => 'Konfirmasi password wajib diisi'
        ];
    }
}
