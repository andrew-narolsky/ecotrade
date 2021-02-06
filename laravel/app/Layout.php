<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $table = 'et1_category_to_layout';

    protected $fillable = [
        'category_id',
        'store_id',
        'layout_id'
    ];
}
