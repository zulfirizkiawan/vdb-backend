<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'name' => 'required|max:255',
            'workplace' => 'required',
            'doctor_specialist' => 'required',
            'gender' => 'required',
            'phoneNumber' => 'required',
            'price' => 'required|integer',
            'doctor_photo_path' => 'required|image',
        ];
    }
}
