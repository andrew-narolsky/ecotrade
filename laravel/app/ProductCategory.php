<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'et1_product_to_category';

    protected $fillable = [
        'product_id',
        'category_id',
        'main_category'
    ];
}
