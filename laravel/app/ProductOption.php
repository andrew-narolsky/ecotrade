<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $table = 'et1_product_option';

    protected $fillable = [
        'product_option_id',
        'product_id',
        'option_id',
        'value',
        'required'
    ];
}
