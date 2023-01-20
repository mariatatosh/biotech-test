<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Payment\Actions;

use App\Http\Controllers\Controller;
use App\Service\Payment\PaymentService;
use Illuminate\Http\RedirectResponse;

final class PaymentDestroyAction extends Controller
{
    /**
     * @param \App\Service\Payment\PaymentService $paymentService
     */
    public function __construct(private readonly PaymentService $paymentService)
    {
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(int $id): RedirectResponse
    {
        $this->paymentService->destroy($id);

        return back()->with('alert', [
            'type'    => 'success',
            'message' => 'Payment deleted successfully',
        ]);
    }
}
