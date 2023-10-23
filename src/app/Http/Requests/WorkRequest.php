<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'start' => ['required', 'numeric', 'max:7'],
         'end' => ['required', 'numeric', 'max:7'],
         'break' => ['required', 'numeric', 'max:7'],
            
        ];
    }

    {
        return [
            'start.required' => '勤務開始時間を入力してください',
            'start.numeric' => '勤務開始時間を数値で入力してください',
            'start.max' => '勤務開始時間を7文字以下で入力してください',
            'end.required' => '勤務終了時間を入力してください',
            'end.numeric' => '勤務終了時間を数値で入力してください',
            'end.max' => '勤務終了時間を7文字以下で入力してください',
            'break.required' => '休憩時間を入力してください',
            'break.numeric' => '休憩時間を数値で入力してください',
            'break.max' => '休憩時間を7文字以内で入力してください',
        ];
    }
}
