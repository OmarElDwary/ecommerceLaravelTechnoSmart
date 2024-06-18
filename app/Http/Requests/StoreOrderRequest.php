<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id', // Assuming user_id is required and exists in the users table
            'product_id' => 'required|exists:products,id', // Assuming product_id is required and exists in the products table
            'quantity' => 'required|integer|min:1', // Assuming quantity is required and must be an integer greater than 0
            'price' => 'required|numeric|min:0', // Assuming price is required and must be a numeric value greater than or equal to 0
            'status' => 'required|in:pending,processing,completed,declined', // Assuming status is required and must be one of the given values
            'product_name' => 'required|string', // Assuming product_name is required and must be a string
        ];
    }
}
