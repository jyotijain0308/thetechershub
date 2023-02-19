<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveContactUsForm extends FormRequest
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
        // $roles = [
        //     'name' => ['required', 'max:30'],
        //     'email' => ['required', Rule::unique(ladmin()->getAdminTable(), 'email'), 'email'],
        //     'password' => ['required', 'confirmed', 'min:6'],
        //     'roles' => ['required', 'array']
        // ];

        // if ($this->id) {
        //     $roles['email'] = ['required', Rule::unique(ladmin()->getAdminTable(), 'email')->ignore($this->id), 'email'];
        //     $roles['password'] = ['nullable', 'confirmed', 'min:6'];
        // }
        // dd($this->all());
        return [
            'name' => ['required', 'max:30'],
            'email' => ['required', 'email'],
            'contact_number' => ['required', 'digits_between:1,12'],
            'services' => ['required', 'array'],
            'message' => ['nullable']
        ];
    }
}
