<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuperposudaRequest extends FormRequest
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
            'surname' => 'required',
            'name' => 'required',
            'patronymic' => 'required',
            'comment' => 'required',
            'vendorcode' => 'required',
            'manufacturer' => 'required',
        ];
    }
}
