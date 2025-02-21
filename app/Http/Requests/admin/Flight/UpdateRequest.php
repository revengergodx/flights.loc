<?php

namespace App\Http\Requests\Admin\Flight;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'airline' => 'required|string',
            'flight_number' => [
                'required',
                'string',
                Rule::unique('flights', 'flight_number')->ignore($this->flight, 'flight_number')
            ],
            'departure_airport_id' => 'required|exists:airports,id',
            'arrival_airport_id' => 'required|exists:airports,id',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date|after:departure_time',
            'total_seats' => 'required|integer',
            'available_seats' => 'required|integer|lte:total_seats',
            'price' => 'required|integer'
        ];
    }
}
