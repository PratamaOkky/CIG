<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KarirRequest extends FormRequest
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
            'lowongan' => ['required', 'max:35', 'unique:karirs,lowongan,' . optional($this->karir)->id],
            'posisi' => ['required', 'max:35'],
            'detail' => ['required'],
            'image' => ['nullable', 'mimes:png,jpg' ,'max:2048'],
        ];
    }
}
