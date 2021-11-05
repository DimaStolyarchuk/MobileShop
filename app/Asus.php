<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asus extends Model
{
    protected $table = 'asuss';
    protected $fillable = ['image', 'name', 'action', 'priority'];
    protected $guarded = [];
}
