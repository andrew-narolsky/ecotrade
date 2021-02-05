<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = '_products';

    protected $fillable = [
        'product_id',
        'model',
        'sku'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\OldCategory', '_product_structure', 'product_id', 'category_id');
    }
}

