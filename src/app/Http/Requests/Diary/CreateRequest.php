<?php

namespace App\Http\Requests\Diary;

use App\Enums\FeelList;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'when' => ['required', 'date', 'before_or_equal:today'],
            'feel' => ['required',  new Enum(FeelList::class)],
            'title' => ['required', 'string'],
            'content' => ['required' , 'string'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'when' => "日付",
            'feel' => "気分",
            'title' => "タイトル",
            'content' => "内容",
        ];
    }
}