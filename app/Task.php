<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function scopeComplete($query)
    {
        return $query->where('complete', 0);
    }    
}
