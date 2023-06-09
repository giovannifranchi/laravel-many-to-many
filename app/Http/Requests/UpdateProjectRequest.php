<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|string|max:150',
            'summary' => 'nullable|max:500|string',
            'image' => 'nullable|image|max:2048',
            'type_id'=>'nullable|exists:types,id',
            'technologies'=>'nullable|array',
            'technologies.*'=>'exists:technologies,id'
        ];
    }
}
