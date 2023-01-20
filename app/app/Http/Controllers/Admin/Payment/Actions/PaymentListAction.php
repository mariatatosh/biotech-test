<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Payment\Actions;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

final class PaymentListAction extends Controller
{
    private const PER_PAGE = 20;

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return object
     */
    public function __invoke(Request $request): object
    {
        $searchQuery = $request->search;

        if (is_null($searchQuery)) {
            $payments = Payment::paginate(self::PER_PAGE);
        } else {
            $payments = Payment::where('email', 'LIKE', "%{$searchQuery}%")
                ->orWhere('phone', 'LIKE', "%{$searchQuery}%")->get()
                ->paginate(self::PER_PAGE);
        }

        return view('admin.payment.list', [
            'payments'    => $payments,
            'searchQuery' => $searchQuery,
        ]);
    }
}
