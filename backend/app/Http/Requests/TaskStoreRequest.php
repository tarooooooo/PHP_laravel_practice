<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
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
            //定義を追加
            'name' => 'required|max:200'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'タスク名は必ず入力してください。',
            'name.max'      => 'タスク名は200文字以内で入力してください。',
        ];
    }
}
