<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValueDescription extends Model
{
    protected $table = 'et1_option_value_description';

    protected $fillable = [
        'option_value_id',
        'language_id',
        'option_id',
        'name'
    ];
}
