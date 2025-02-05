<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif|max:2048',
            'parent_id'=>'nullable|exists:categories,id'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Название категории обязательно.',
            'name.string' => 'Название категории должно быть строкой.',
            'name.max' => 'Название категории не должно превышать 255 символов.',
            'image.required' => 'Название изображения обязательно.',
            'image.image' => 'Файл должен быть изображением.',
            'image.mimes' => 'Разрешенные форматы: jpeg, png, jpg, gif.',
            'image.max' => 'Размер изображения не должен превышать 2MB.',
            'parent_id.exists' => 'Выбранная родительская категория не существует.',
        ];
    }
}
