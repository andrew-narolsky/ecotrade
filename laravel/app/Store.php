<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'et1_category_to_store';

    protected $fillable = [
        'category_id',
        'store_id'
    ];
}
