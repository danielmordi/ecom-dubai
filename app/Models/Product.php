<?php

namespace App\Models;

use NumberFormatter;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'product_image', 'product_price',
        'product_description', 'discounted_price', 'product_sold',
        'product_stock_conut', 'category_id', 'slug'
    ];

    public function getProductPriceAttribute($price)
    {
        $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($price, 'AED');
    }

    public function getDiscountedPriceAttribute($price)
    {
        $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($price, 'AED');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
