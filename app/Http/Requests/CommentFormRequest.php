<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentFormRequest extends FormRequest
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
            'author' => 'bail|required|regex:/(^[A-Za-z0-9 ]+$)+/|min:2|max:255',
            'content' => 'bail|required|regex:/(^[A-Za-z0-9 ]+$)+/|min:1|max:255',
            'post_id' => 'required',
        ];
    }
}
