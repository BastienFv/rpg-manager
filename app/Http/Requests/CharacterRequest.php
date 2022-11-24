<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
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
            'name' => 'required |string',
            'description' => 'required|string',
            'class' => 'required|string',
            'magic' => 'int|min:0|max:14',
            'strength' => 'int|min:0|max:14',
            'agility' => 'int|min:0|max:14',
            'intelligence' => 'int|min:0|max:14',
            'pv' => 'int|min:20|max:50',
        ];
    }
}
