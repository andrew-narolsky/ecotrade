<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryDescription extends Model
{
    protected $table = 'et1_category_description';

    protected $fillable = [
        'category_id',
        'language_id',
        'name',
        'description',
        'meta_title',
        'meta_h1',
        'meta_description',
        'meta_keyword'
    ];
}
