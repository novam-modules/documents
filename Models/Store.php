<?php

namespace Modules\Documents\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'cols', 'data', 'status'
    ];
}
