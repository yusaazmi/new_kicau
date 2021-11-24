<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;
use Carbon;

class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();
        $this->order = $order;
    }

    public function getSnapToken()
    {
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->id,
                'gross_amount' => $this->order->total_price,
                'payment_type' => 'credit_card',
                'token' => $this->order->snap_token
        ],
        'items_details' => [
            'id' => $this->order->id,
            'price' => $this->order->total_price,
            'quantity' => 1,
            'name' => $this->order->jenis_burung,
            'seller id' => $this->order->seller_id
        ],
        'customer_details' => [
            'first_name' => $this->order->name,
            'email' => $this->order->email,
        ],
        // 'expiry' => [
        //     'start_time' => date("Y-m-d h:m:s +Z"),
        //     'unit' => 'minutes',
        //     'duration' => 30
        // ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}


?>