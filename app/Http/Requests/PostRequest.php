<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [


                    'title' => 'required' ,
                    'posted_by' => 'required' ,
                    'description' => 'required' ,



        ];
    }



    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
   public function messages(): array
   {
    return [
        'title.required' => 'A title is required',
        'posted_by.required' => 'A creator is required',
    ];
    }


}