<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    protected $table = 'et1_url_alias';

    protected $fillable = [
        'url_alias_id',
        'query',
        'keyword'
    ];
}
