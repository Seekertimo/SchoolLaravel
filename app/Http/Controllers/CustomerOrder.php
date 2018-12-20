<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerOrder extends Controller
{
    public function test()
    {
        $order = new \App\CustomerOrder();
        $order->companyname = 'Timo';
        $order->email = '24451@ma-web.nl';
        $order->deliverydate = '2018-16-11';
        $order->price = '$0';
    }
}
