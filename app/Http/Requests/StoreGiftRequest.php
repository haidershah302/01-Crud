<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGiftRequest extends FormRequest
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
            'type' => ['required', 'in:Normal,Cp,Vip,Country,Celebrity,Bag'],
            'name' => ['required', 'string', 'max:255', 'unique:gifts'],
            'price' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'src_static' => ['required', 'image', 'mimes:jpeg,jpg,png,svg,webp', 'max:3000'],
            'src_animated' => ['required', 'file', 'mimes:jpeg,jpg,png,svg,webp,mp4,wave,gif', 'max:5000'],
        ];
    }
}
