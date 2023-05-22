<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'nullable|max:65000',
            'link' => 'nullable|url|max:255',
            'preview_image' => 'nullable|url|max:255',
        ];

    }
    public function messages()
    {
        return[
            'title.required' => 'Titolo richiesto',
            'title.max' => 'Lunghezza massima titolo di 100 caratteri',

            'description.max' => 'Lunghezza massima descrizione di 65000 caratteri',

            'link.url' => 'L\'URL inserito non è valido',
            'link.max' => 'Lunghezza massima link di 255 caratteri',

            'preview_image.url' => 'L\'URL inserito non è valido',
            'preview_image.max' => 'Lunghezza massima pewview image link di 255 caratteri',

        ];
    }
}
