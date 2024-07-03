<?php

namespace App\Http\Controllers;

use App\Billings\BankPaymentGateway;
use Illuminate\Http\Request;
use App\Billings\PaymentGateway;
use App\Billings\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PaymentOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGatewayContract)
    {
        $order = $orderDetails->all();
        dd($paymentGatewayContract->change(2500));
    }
}
