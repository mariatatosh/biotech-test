<?php

declare(strict_types=1);

namespace App\Service\Payment;

use App\Models\Payment;
use App\Service\Payment\DTO\PaymentDTO;
use libphonenumber\PhoneNumberFormat;

final class PaymentService
{
    /**
     * @param \App\Service\Payment\DTO\PaymentDTO $dto
     *
     * @return void
     */
    public function store(PaymentDTO $dto): void
    {
        $payment = new Payment();

        $payment->phone  = $this->formatPhoneNumber($dto->getPhone());
        $payment->name   = $dto->getName();
        $payment->email  = $dto->getEmail();
        $payment->amount = $dto->getAmount();

        $payment->save();
    }

    /**
     * @param \App\Service\Payment\DTO\PaymentDTO $dto
     *
     * @return void
     */
    public function update(PaymentDTO $dto): void
    {
        $payment = Payment::find($dto->getId());

        if ($payment->phone !== $dto->getPhone()) {
            $payment->phone = $this->formatPhoneNumber($dto->getPhone());
        }

        if ($payment->name !== $dto->getName()) {
            $payment->name = $dto->getName();
        }

        if ($payment->email !== $dto->getEmail()) {
            $payment->email = $dto->getEmail();
        }

        if ($payment->amount !== $dto->getAmount()) {
            $payment->amount = $dto->getAmount();
        }

        $payment->save();
    }

    /**
     * @param int $id
     *
     * @return void
     */
    public function destroy(int $id): void
    {
        Payment::destroy($id);
    }

    /***
     * @param string $phoneNumber
     *
     * @return string
     */
    private function formatPhoneNumber(string $phoneNumber): string
    {
        return substr(phone('7 (978)75-35-449', 'RU', PhoneNumberFormat::E164), 1);
    }
}
