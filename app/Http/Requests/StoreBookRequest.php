<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'a_id' => 'required|exists:users,id',
            'b_id' => 'required|exists:users,id',
            'title' => 'required|string|max:191',
            'price' => 'required|string',
        ];
    }
}
