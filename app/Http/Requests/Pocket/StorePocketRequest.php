<?php

namespace App\Http\Requests\Pocket;

use Illuminate\Foundation\Http\FormRequest;

class StorePocketRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'balanceGoal' => ['nullable', 'numeric', 'min:0'], // Le goal doit être >= balance
            'dueDate' => ['nullable', 'date', 'after:today'], // Une date optionnelle, mais si fournie, elle doit être future
            'isBlocked' => ['nullable', 'boolean'],
            //'progression' => ['nullable', 'numeric', 'between:0,100'], // Facultatif, entre 0 et 100%
        ];
    }

    /**
     * Messages personnalisés pour chaque règle de validation.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le nom de la poche est requis.',
            'name.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'balanceGoal.required' => 'Un objectif de solde est requis.',
            'balanceGoal.gte' => 'L’objectif de solde doit être supérieur ou égal au solde actuel.',
            'dueDate.after' => 'La date d’échéance doit être dans le futur.',
        ];
    }
}
