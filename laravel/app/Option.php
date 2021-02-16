<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'et1_option';

    protected $fillable = [
        'option_id',
        'type',
        'sort_order'
    ];
}
