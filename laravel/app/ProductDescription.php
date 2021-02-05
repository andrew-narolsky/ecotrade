<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{
    protected $table = 'et1_product_description';

    protected $fillable = [
        'product_id',
        'language_id',
        'name',
        'description',
        'tag',
        'meta_title',
        'meta_h1',
        'meta_description',
        'meta_keyword'
    ];
}
