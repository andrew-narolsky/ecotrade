<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    protected $table = 'et1_product_special';

    protected $fillable = [
        'product_special_id',
        'product_id',
        'customer_group_id',
        'priority',
        'price',
        'date_start',
        'date_end'
    ];
}
