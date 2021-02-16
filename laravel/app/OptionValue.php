<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    protected $table = 'et1_option_value';

    protected $fillable = [
        'option_value_id',
        'option_id',
        'image',
        'sort_order'
    ];
}
