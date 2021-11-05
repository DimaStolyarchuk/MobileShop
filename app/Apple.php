<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apple extends Model
{
    protected $table = 'apples';
    protected $fillable = ['image', 'name', 'action', 'priority'];
    protected $guarded = [];
}
