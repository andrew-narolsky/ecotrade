<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'et1_category';

    public function products()
    {
        return $this->belongsToMany('App\Product', '_product_structure', 'product_id', 'category_id');
    }

    protected $fillable = [
        'category_id',
        'image',
        'parent_id',
        'top',
        'column',
        'sort_order',
        'status',
        'date_added',
        'date_modified'
    ];

    // SELECT product_id, COUNT(*) c FROM `_product_structure` GROUP BY product_id HAVING c > 1
}
