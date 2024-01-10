<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:255|unique:comics',
            'thumb' => 'url',
            'price' => 'required|numeric|min:0',
            'sale_date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'title.unique' => 'Il titolo deve essere unico',
            'thumb.url' => 'L\'immagine deve essere un URL',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il prezzo deve essere superiore a :min',
            'sale_date.required' => 'La data di vendita è obbligatoria',
        ];
    }
}
