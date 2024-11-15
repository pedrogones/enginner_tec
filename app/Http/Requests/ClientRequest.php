<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        if ($this->has('birthdate')){
            $this->merge([
                'birthdate' => Carbon::createFromFormat('d/m/Y', $this->birthdate)->format('Y-m-d'),
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userId = $this->route('id');

        $rules = [
            'name' => 'required|min:3|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($userId)],
        ];

        if ($this->has('gender')) $rules['gender'] = 'required';
        if ($this->has('phone')) $rules['phone'] = 'required';
        if ($this->has('birthdate')) $rules['birthdate'] = 'required|date';

        return $rules;
    }
}
