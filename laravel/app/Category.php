<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'et1_category';

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
}
