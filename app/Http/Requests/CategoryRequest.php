<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|unique:categories|max:11',
            "title_en" => "required|min:5|max:255",
            "title_ar" => "required|min:5|max:255",
            "description_en" => "required|min:10|max:255",
            "description_ar" => "required|min:10|max:255",
            'parent_id' => 'required|max:255',
            'cate_image' => 'required|image|nullable|mimes:jpg,png,jpeg,gif|max:2048'
        ];
    }
}
