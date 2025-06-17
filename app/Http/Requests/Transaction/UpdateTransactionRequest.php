<?php

namespace App\Http\Requests\Transaction;

use App\Models\Card;
use App\Models\Pocket;
use App\Models\Transaction;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionRequest extends FormRequest
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
            'type' => [
                'required',
                'in:'.implode(',', [
                    Transaction::TYPE_TRANSACTION_EXPENSE,
                    Transaction::TYPE_TRANSACTION_INCOME,
                    Transaction::TYPE_TRANSACTION_TRANSFER,
                ]),
            ], // Assure-toi que le type est valide
            'source_id' => [
                'nullable',
                'required_if:type,'.Transaction::TYPE_TRANSACTION_EXPENSE,
                'required_if:type,'.Transaction::TYPE_TRANSACTION_TRANSFER,
                function ($attribute, $value, $fail) {
                    if ($value) {
                        // Vérifie si la source est une carte ou une poche
                        $isCard = Card::find($value);
                        $isPocket = Pocket::find($value);

                        if (! $isCard && ! $isPocket) {
                            $fail('La source doit être soit une carte soit une poche valide.');
                        }
                    }
                },
            ],

            'destination_id' => [
                'nullable',
                'different:source_id',
                'required_if:type,'.Transaction::TYPE_TRANSACTION_INCOME,
                'required_if:type,'.Transaction::TYPE_TRANSACTION_TRANSFER,
                function ($attribute, $value, $fail) {
                    if ($value) {
                        // Vérifie si la source est une carte ou une poche
                        $isCard = Card::find($value);
                        $isPocket = Pocket::find($value);

                        if (! $isCard && ! $isPocket) {
                            $fail('La source doit être soit une carte soit une poche valide.');
                        }
                    }
                },
            ],
            'description' => ['nullable', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:10.00'], // Vérifie que le montant est valide
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'Le type de transaction est requis.',
            'type.in' => 'Le type de transaction doit être l\'un des suivants : Revenu, Dépense, Transfert.',

            'source_id.required_if' => 'La source est requise pour ce type de transaction.',
            'source_id.exists' => 'La source doit être soit une carte soit une poche valide.',
            'source_id.nullable' => 'La source peut être vide si le type de transaction est Revenu.',

            'destination_id.required_if' => 'La destination est requise pour ce type de transaction.',
            'destination_id.different' => 'La destination ne peut pas être la même que la source.',
            'destination_id.exists' => 'La destination doit être soit une carte soit une poche valide.',
            'destination_id.nullable' => 'La destination peut être vide si le type de transaction est Dépense.',

            'amount.required' => 'Le montant est requis.',
            'amount.numeric' => 'Le montant doit être un nombre.',
            'amount.min' => 'Le montant doit être supérieur ou égal à 10.00.',

            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne doit pas dépasser 255 caractères.',
        ];
    }
}
