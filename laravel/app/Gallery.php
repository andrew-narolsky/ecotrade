<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'et1_product_image';

    protected $fillable = [
        'product_image_id',
        'product_id',
        'image',
        'sort_order'
    ];
}
