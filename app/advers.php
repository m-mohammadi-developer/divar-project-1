<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advers extends Model
{
    protected $table = "adverses";

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'meta_keys', 
        'meta_description', 
        'user_id', 
        'is_confirmed'
    ];

    
    
}
