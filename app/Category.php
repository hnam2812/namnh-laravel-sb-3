<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name', 'id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
