<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function prepareForValidation()
    {
        $this->merge([
            'price' => str_replace(' ', '', $this->price) // Убираем пробелы
        ]);
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
            'description'=>'nullable|string|max:255',
            'price'=>'nullable|integer',
            'category_id'=>'required|exists:categories,id'
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
