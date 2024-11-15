<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFrameRequest extends FormRequest
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
            'name' => ['nullable', 'string', 'max:255', 'unique:frames,name,' . $this->route('frame')->id],
            'price' => ['nullable', 'numeric'],
            'src_static' => ['nullable', 'image', 'mimes:jpeg,jpg,png,svg,webp', 'max:3000'],
            'src_animated' => ['nullable', 'file', 'mimes:jpeg,jpg,png,svg,webp,mp4,wave,gif', 'max:5000'],
            'bdr_box' => ['nullable', 'numeric'],
        ];
    }
}
