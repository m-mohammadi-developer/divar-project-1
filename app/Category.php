<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 
        'meta_keys',
        'meta_description',
    ];
}
