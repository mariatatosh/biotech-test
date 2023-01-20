<?php

declare(strict_types=1);

namespace App\Http\Controllers\User\Payment\Actions;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\Payment\Requests\PaymentStoreRequest;
use App\Service\Payment\DTO\PaymentStoreDTO;
use App\Service\Payment\PaymentService;

final class PaymentStoreAction extends Controller
{
    /**
     * @param \App\Service\Payment\PaymentService $paymentService
     */
    public function __construct(private readonly PaymentService $paymentService)
    {
    }

    /**
     * @param \app\Http\Controllers\User\Payment\Requests\PaymentStoreRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(PaymentStoreRequest $request)
    {
        $this->paymentService->store(
            new PaymentStoreDTO(
                $request->getPhone(),
                $request->getName(),
                $request->getEmail(),
                (float)$request->getAmount()
            )
        );

        return back()->with('alert', [
            'type'    => 'success',
            'message' => 'Payment created successfully',
        ]);
    }
}
