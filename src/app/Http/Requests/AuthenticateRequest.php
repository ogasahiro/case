<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AuthenticateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         'email' => ['required', 'string', 'email', 'max:191'],
         'pass' => ['required', 'string', 'string_between:8,15'],
        ];
    }
    public function messages()
     {
         return [
             'email.required' => 'メールアドレスを入力してください',
             'email.string' => 'メールアドレスを文字列で入力してください',
             'email.email' => '有効なメールアドレス形式を入力してください',
             'email.max' => 'メールアドレスを191文字以下で入力してください',
             'pass.required' => 'パスワードを入力してください',
             'pass.string' => 'パスワードを数値で入力してください',
             'pass.string_between' => 'パスワードを8から15文字の間で入力してください',
         ];
     }
}
