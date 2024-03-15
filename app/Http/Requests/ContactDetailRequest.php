<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactDetailRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string','required'],
            'family' => ['string','required'],
            'phone' => ['string','nullable'],
            'telegram' => ['string','nullable'],
            'brokerName' => ['string','nullable'],
            'cabinNumber' => ['string','nullable'],
            'message' => ['string','nullable'],
        ];
    }
}
