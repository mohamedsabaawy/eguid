<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandmarkRequest extends FormRequest
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
            'name' => 'required|unique:cities',
            'city_id' => 'required|numeric',
            'cover' => 'required|image',
            'details' => 'required',
        ];
    }

    public function messages()
    {
        return [
//            'country_id.required'=>'The country field is required.',
        ];
    }
}
