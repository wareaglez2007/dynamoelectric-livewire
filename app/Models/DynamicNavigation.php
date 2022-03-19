<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicNavigation extends Model
{
    use HasFactory;

    public static function getLinks()
    {
        $instance = new static;
        return $instance->get();
    }
}
