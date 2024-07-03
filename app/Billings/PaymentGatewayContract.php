<?php

namespace App\Billings;

interface PaymentGatewayContract
{
    public function setDiscount($amount);
    public function change($amount);
}
