<?php

namespace App\Orders;

use App\Billings\PaymentGatewayContract;

class OrderDetails
{
    private $paymentGatewayContract;

    public function __construct(PaymentGatewayContract $paymentGatewayContract)
    {
        $this->paymentGatewayContract = $paymentGatewayContract;
    }

    public function all()
    {
        $this->paymentGatewayContract->setDiscount(500);

        return [
            'name' => 'Victor',
            'address' => '123 Street',
        ];
    }
}
