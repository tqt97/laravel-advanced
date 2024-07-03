<?php

namespace App\Billings;

use Illuminate\Support\Str;
use App\Billings\PaymentGatewayContract;

class CreditPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }
    
    public function change($amount)
    {
        $fees = $amount * 0.03;

        return [
            'method' => 'CREDIT',
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'total' => $amount,
            'discount' => $this->discount,
            'fees' => $fees,
            'pay' => $amount - $this->discount + $fees,
        ];
    }
}
