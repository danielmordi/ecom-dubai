<?php

namespace App\Models;

use NumberFormatter;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'customer_name', 'customer_tel_no',
        'customer_address', 'customer_city',
        'order_quantity', 'is_delivered', 'total_amount'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id');
    }

    public function getTotalAmountAttribute($total_amount)
    {
        $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($total_amount, 'AED');
    }
}
