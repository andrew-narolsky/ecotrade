<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldCategoryThree extends Model
{
    protected $table = '_product_categories_3';

    protected $fillable = [
        'id',
        'parent_id',
        'key',
        'name',
        'description_html',
        'seotext_html',
        'title',
        'keywords',
        'description',
        'file',
        'position',
        'disabled',
        'currency'
    ];
}
