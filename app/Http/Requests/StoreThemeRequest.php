<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreThemeRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:themes'],
            'price' => ['required', 'numeric'],
            'bdr_box' => ['required', 'numeric'],
            'color' => ['required', 'string', 'max:255'],
            'text_color' => ['required', 'string', 'max:255'],
            'icons_color' => ['required', 'string', 'max:255'],
            'background' => ['required', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:5000'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:3000'],
            'seat_ring' => ['required', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:3000'],
            'seat' => ['required', 'image', 'mimes:jpeg,jpg,png,svg,webp,gif', 'max:3000'],
        ];
    }
}
