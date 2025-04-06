<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillables = [
        "name",
        "slug",
        "logo", 
        "description", 
        "website"
    ];
}
