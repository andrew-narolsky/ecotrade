<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldCategoryTwo extends Model
{
    protected $table = '_product_categories_2';

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
