<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PartecipantRequest extends Request
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
			'name' => ['required', 'max:50'],
        	'surname' => ['required', 'max:50'],
            'email' => ['required', 'email', 'unique:users' . ($this->method() == 'POST' ? '' : (',email,' . $this->route('users')->id))], 
			'phone' => ['required', 'min:8'],
        ];
    }
}