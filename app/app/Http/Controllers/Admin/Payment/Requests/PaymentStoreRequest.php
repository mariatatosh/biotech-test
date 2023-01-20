<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Payment\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class PaymentStoreRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->get('phone');
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->get('email');
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return (float) $this->get('amount');
    }

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'phone'  => 'required|numeric|min:11',
            'name'   => 'max:30|nullable',
            'email'  => 'required|email',
            'amount' => 'required|numeric'
        ];
    }
}
