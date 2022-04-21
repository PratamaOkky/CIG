<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends FormRequest
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
            'judul' => ['required', 'max:32', 'min:3', Rule::unique('artikels', 'judul')->ignore($this->artikel),],
            'isi' => ['required', 'min:5'],
            'image' => ['nullable' , 'image', 'mimes:png,jpg', 'max:2048']
        ];
    }
}
