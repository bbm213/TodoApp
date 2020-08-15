<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //default value for completed attribute
    protected $attributes = [
        'completed' => false,
    ];
}
