<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    protected $table = 'et1_product_to_store';

    protected $fillable = [
        'product_id',
        'store_id'
    ];
}
