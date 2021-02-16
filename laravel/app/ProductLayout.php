<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLayout extends Model
{
    protected $table = 'et1_product_to_layout';

    protected $fillable = [
        'product_id',
        'store_id',
        'layout_id'
    ];
}
