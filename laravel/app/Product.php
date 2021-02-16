<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = '_products';

    protected $fillable = [
        'product_id',
        'model',
        'sku',
        'upc',
        'ean',
        'jan',
        'isbn',
        'mpn',
        'location',
        'quantity',
        'stock_status_id',
        'image',
        'manufacturer_id',
        'shipping',
        'price',
        'points',
        'tax_class_id',
        'date_available',
        'weight',
        'weight_class_id',
        'length',
        'width',
        'height',
        'length_class_id',
        'subtract',
        'minimum',
        'sort_order',
        'status',
        'viewed',
        'date_added',
        'date_modified',
        'density',
        'volume'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\OldCategory', '_product_structure', 'product_id', 'category_id');
    }
}

