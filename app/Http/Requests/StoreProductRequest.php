<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'sub' => 'required|string|max:255',
            'category_id' => 'required|string|max:255|exists:categories,id',
            'images' => 'required|array|min:1|max:4',
            'images.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            'tags' => 'array|max:5',
            'tags.*' => 'integer|exists:tags,id',
            'story' => 'required|string',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Name',
            'sub' => 'Sub',
            'category_id' => 'Category',
            'images' => 'Images',
            'images.*' => 'Image',
            'story' => 'Story',
        ];
    }
}
