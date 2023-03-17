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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:users|min:3|max:12',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|max:12',
            'password_confirmation' => 'required|max:12',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'chưa nhập :attribute ',
            'min' => ':attribute tối thiểu :min Ký Tự',
            'email' => 'Định dạng phải là email',
            'password' => 'chưa nhập :attribute',
            'unique' => ':attribute Đã Tồn Tại',
            'confirmed' => ':attribute không khớp.',
            'max' => ':attribute tối đa:max Ký Tự',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên Đăng Nhập',
            'email' => 'Gmail',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Mật khẩu',
        ];
    }
}
