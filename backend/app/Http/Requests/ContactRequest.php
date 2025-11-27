<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'region' => ['required', 'string', 'in:north,central,south'],
            'company' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:25'],
            // 'product' => ['required', 'string', 'max:255'],
            'request' => ['nullable', 'string'],
        ];
    }
}
