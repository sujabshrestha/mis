<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable=[
        'key',
        'value'

    ];
}
