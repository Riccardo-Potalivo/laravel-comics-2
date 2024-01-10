<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'max  :5000',
            'thumb' => 'required|max:255',
            'price' => 'required|numeric',
            'sale_date' => 'date',
            'series' => 'required|max:100',
            'type' => 'required|max:30'
        ];
    }
    /**
     * Summary of messages
     * @return array
     *
     */
    public function message()
    {
        return [
            'title.required' => 'Il campo title è obbligatorio',
            'title.min' => 'Il campo title deve avere almeno :min caratteri',
            'title.max' => 'Il campo title non può contenere più di :max caratteri',
            'description.max' => 'Il campo description non può contenere più di :max caratteri',
            'thumb.required' => 'Il campo thumb è obbligatorio',
            'thumb.max' => 'Il campo thumb non può contenere più di :max caratteri',
            'price.required' => 'Il campo price è obbligatorio',
            'price.numeric' => 'Il campo price deve essere un numero',
            'sale_date.date' => 'Il campo sale date deve essere una data',
            'series.required' => 'Il campo series è obbligatorio',
            'series.max' => 'Il campo series non può contenere più di :max caratteri',
            'type.required' => 'Il campo type è obbligatorio',
            'type.max' => 'Il campo type non può contenere più di :max caratteri',
        ];
    }
}
