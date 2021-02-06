<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    protected $table = 'et1_category_path';

    protected $fillable = [
        'category_id',
        'path_id',
        'level'
    ];
}
