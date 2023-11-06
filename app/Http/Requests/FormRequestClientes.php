<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestClientes extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $request = [];
        if($this->method() == 'POST' || $this->method() == 'PUT'){
            return [
            'nome' => 'required',
            ];
        }
        return $request;
    }
}
