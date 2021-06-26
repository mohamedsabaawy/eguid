<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'name' => 'required|unique:hotel_rooms',
//            'type_id' => 'required|integer',
//            'view_id' => 'required|integer',
            'number' => 'required|integer',
            'price' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
//            'country_id.required'=>'The country field is required.',
        ];
    }
}
