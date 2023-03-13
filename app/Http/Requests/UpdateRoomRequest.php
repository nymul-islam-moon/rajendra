<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'room_category_id' => 'required',
            'images.*' => 'sometimes|nullable|image|mimes:JPG,jpg,png,jpeg,gif,svg|max:100000',
            'price' => 'required',
            'description' => 'sometimes|nullable|string',
        ];
    }
}
