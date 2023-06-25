<?php

namespace App\Libraries\Action\Admin;

use App\Models\Order;

class OrderEdit
{
    public function __construct(private array $status, private int $order_id){}

    public function heandle(): string
    {
        Order::where('id', $this->order_id)->update([
            'status' => $this->status['status']
        ]);
        return json_encode($this->status['status']);
    }
}
