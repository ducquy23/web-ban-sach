<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'POST':
                switch ($currentAction) {
                    case 'update':
                    case 'store' :
                        $rules = [
                            'name' => 'required',
                            'status' => 'required',
                            'slug' => 'unique:authors',
                            'biography' => 'required',
                            'nationality' => 'required',
                            'email' => 'required|unique:authors',
                        ];
                        break;
                }
                break;
            default:
                break;
        }
        return $rules;
    }
}
