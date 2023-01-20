<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Payment\Actions;

use App\Http\Controllers\Admin\Payment\Requests\PaymentUpdateRequest;
use App\Http\Controllers\Controller;
use App\Service\Payment\DTO\PaymentDTO;
use App\Service\Payment\PaymentService;
use Illuminate\Http\RedirectResponse;

final class PaymentUpdateAction extends Controller
{
    /**
     * @param \App\Service\Payment\PaymentService $paymentService
     */
    public function __construct(private readonly PaymentService $paymentService)
    {
    }

    /**
     * @param \App\Http\Controllers\Admin\Payment\Requests\PaymentUpdateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(PaymentUpdateRequest $request): RedirectResponse
    {
        $this->paymentService->update(
            new PaymentDTO(
                (int) $request->route('id'),
                $request->getPhone(),
                $request->getName(),
                $request->getEmail(),
                $request->getAmount()
            )
        );

        return redirect()->route('admin.payments.list')->with('alert', [
            'type'    => 'success',
            'message' => 'Payment updated successfully',
        ]);
    }
}
