<?php

namespace App\Http\Requests;

use AllowDynamicProperties;
use Illuminate\Foundation\Http\FormRequest;

#[AllowDynamicProperties] class UpdateThemeRequest extends FormRequest
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
            'name' => ['nullable', 'string', 'max:255', 'unique:themes,name,' . $this->route('theme')->id],
            'price' => ['nullable', 'numeric'],
            'bdr_box' => ['nullable', 'numeric'],
            'color' => ['nullable', 'string', 'max:255'],
            'text_color' => ['nullable', 'string', 'max:255'],
            'icons_color' => ['nullable', 'string', 'max:255'],
            'background' => ['nullable', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:5000'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:3000'],
            'seat_ring' => ['nullable', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:3000'],
            'seat' => ['nullable', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:3000'],
        ];
    }
}
