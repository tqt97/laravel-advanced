<?php

namespace App\Billings;

use Illuminate\Support\Str;
use App\Billings\PaymentGatewayContract;

class BankPaymentGateway implements PaymentGatewayContract
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
        return [
            'method' => 'BANK',
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'total' => $amount,
            'discount' => $this->discount,
            'pay' => $amount - $this->discount,
        ];
    }
}
