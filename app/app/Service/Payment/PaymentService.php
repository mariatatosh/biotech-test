<?php

declare(strict_types=1);

namespace App\Service\Payment;

use App\Models\Payment;
use App\Service\Payment\DTO\PaymentStoreDTO;

final class PaymentService
{
    /**
     * @param \App\Service\Payment\DTO\PaymentStoreDTO $dto
     *
     * @return void
     */
    public function store(PaymentStoreDTO $dto): void
    {
        $payment = new Payment();

        $payment->phone  = $dto->getPhone();
        $payment->name   = $dto->getName();
        $payment->email  = $dto->getEmail();
        $payment->amount = $dto->getAmount();

        $payment->save();
    }
}
