<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;

final class PaymentDetails extends Component
{
    /**
     * @param string      $route
     * @param string      $btnText
     * @param string      $method
     * @param int|null    $id
     * @param string|null $phone
     * @param string|null $name
     * @param string|null $email
     * @param float|null  $amount
     */
    public function __construct(
        public string  $route,
        public string  $btnText,
        public string  $method = 'POST',
        public ?int    $id = null,
        public ?string $phone = null,
        public ?string $name = null,
        public ?string $email = null,
        public ?float  $amount = null
    )
    {
    }

    public function render(): object
    {
        return view('components.payment-details');
    }
}
