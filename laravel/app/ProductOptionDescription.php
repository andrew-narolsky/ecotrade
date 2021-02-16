<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOptionDescription extends Model
{
    protected $table = 'et1_product_option_value';

    protected $fillable = [
        'product_option_value_id',
        'product_option_id',
        'product_id',
        'option_value_id',
        'quantity',
        'option_id',
        'subtract',
        'base_price',
        'price',
        'price_prefix',
        'points',
        'points_prefix',
        'weight',
        'weight_prefix'
    ];
}
