<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFrameRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:frames'],
            'price' => ['required', 'numeric'],
            'category' => ['required', 'string', 'max:255'],
            'src_static' => ['required', 'image', 'mimes:jpeg,jpg,png,svg,webp', 'max:3000'],
            'src_animated' => ['required', 'file', 'mimes:jpeg,jpg,png,svg,webp,mp4,wave,gif', 'max:5000'],
            'bdr_box' => ['required', 'numeric'],
            'size' => ['required', 'numeric'],
        ];
    }
}
