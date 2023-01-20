<?php

declare(strict_types=1);

namespace App\Service\Payment\DTO;
final class PaymentStoreDTO
{
    /**
     * @param string      $phone
     * @param string|null $name
     * @param string      $email
     * @param float       $amount
     */
    public function __construct(
        private readonly string  $phone,
        private readonly ?string $name,
        private readonly string  $email,
        private readonly float   $amount
    )
    {
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}
