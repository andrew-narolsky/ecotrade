<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRelated extends Model
{
    protected $table = 'et1_product_related';

    protected $fillable = [
        'product_id',
        'related_id'
    ];
}
