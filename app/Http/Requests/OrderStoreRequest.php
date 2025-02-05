<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'email'=>'nullable|email|max:255',
            'phone'=>'required|string|min:12|max:15',
            'description'=>'nullable|string|max:255',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле "Имя" обязательно для заполнения.',
            'name.string' => 'Поле "Имя" должно быть строкой.',
            'name.max' => 'Поле "Имя" не должно превышать 255 символов.',

            'email.required' => 'Поле "Email" обязательно для заполнения.',
            'email.email' => 'Введите корректный email.',
            'email.max' => 'Поле "Email" не должно превышать 255 символов.',

            'phone.required' => 'Поле "Телефон" обязательно для заполнения.',
            'phone.string' => 'Поле "Телефон" должно быть строкой.',
            'phone.min' => 'Поле "Телефон" должно содержать не менее 15 символов.',
            'phone.max' => 'Поле "Телефон" должно содержать не более 15 символов.',

            'description.string' => 'Поле "Описание" должно быть строкой.',
            'description.max' => 'Поле "Описание" не должно превышать 255 символов.',

        ];
    }
}
