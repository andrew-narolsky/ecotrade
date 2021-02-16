<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionDescription extends Model
{
    protected $table = 'et1_option_description';

    protected $fillable = [
        'option_id',
        'language_id',
        'name'
    ];
}
