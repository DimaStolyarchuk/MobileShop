<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samsung extends Model
{
    protected $table = 'Samsungs';
    protected $fillable = ['image', 'name', 'action', 'priority'];
    protected $guarded = [];
}
