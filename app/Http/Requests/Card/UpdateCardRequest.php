<?php

namespace App\Http\Requests\Card;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCardRequest extends FormRequest
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
        $cardId = $this->route('card');

        return [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:50'],
            'cardNumber' => ['required', 'numeric', 'digits_between:13,19', Rule::unique('cards', 'cardNumber')->ignore($cardId)],
            'cvv' => ['required', 'numeric', 'digits:3'],
            'expiry_date' => ['required', 'date_format:Y-m-d', 'after_or_equal:today']
        ];
    }

    /**
     * Messages d'erreur personnalisés.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le nom de la carte est requis.',
            'type.required' => 'Le type de carte est requis.',
            'cardNumber.required' => 'Le numéro de la carte est requis.',
            'cardNumber.numeric' => 'Le numéro de carte doit contenir uniquement des chiffres.',
            'cardNumber.digits_between' => 'Le numéro de carte doit avoir entre 13 et 19 chiffres.',
            'cardNumber.unique' => 'Ce numéro de carte est déjà utilisé.',
            'cvv.required' => 'Le CVV est requis.',
            'cvv.numeric' => 'Le CVV doit contenir uniquement des chiffres.',
            'cvv.digits' => 'Le CVV doit avoir exactement 3 chiffres.',
            'expiry_date.required' => 'La date d\'expiration est requise.',
            'expiry_date.date_format' => 'La date d\'expiration doit être au format AAAA-MM.',
            'expiry_date.after_or_equal' => 'La date d\'expiration doit être future ou actuelle.',
        ];
    }
}
