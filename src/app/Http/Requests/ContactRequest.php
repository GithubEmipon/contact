<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function messages()
    {
        return [
            'first_name.required' => '名を入力してください',
            'first_name.string' => '文字列で入力してください',
            'first_name.max' => '名前を255文字以下で入力してください',
            'last_name.required' => '姓を入力してください',
            'last_name.string' => '文字列で入力してください',
            'last_name.max' => '名前を255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'gender.integer' => '一つ選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email:strict,dns,spoof'=> 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'email.unique:users' =>'メールアドレスを入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を数値で入力してください',
            'tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
            'address1.required' => '住所を入力してください',
            'address1.string' => '文字列で入力してください',
            'address1.max' => '住所を255文字以下で入力してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.string' => '文字列で入力してください',
            'content.max' => 'お問い合わせ内容を120文字以下で入力してください',
        ];
    }/**
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
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'gender' => ['required', 'integer'],
        'email' => ['required', 'string','email:strict,dns,spoof', 'email', 'max:255','unique:users'],
        'tel' => ['required', 'numeric', 'digits_between:5'],
        'address1' => ['required', 'string', 'max:255'],
        'content' => ['required', 'string', 'max:120'],
        ];
    }
}
