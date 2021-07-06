<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.neworder', [
            'customerName' => $this->order->customer_name,
            'qty' => $this->order->order_quantity,
            'totalPrice' => $this->order->total_amount,
            'price' => $this->order->products[0]->product_price ?? false,
            'productName' => $this->order->products[0]->product_name ?? false,
            'dateOrdered' => $this->order->created_at->format('d-M-Y'),
            'url' => route('view', $this->order->products->first()->slug ?? false)
        ]);
    }
}
