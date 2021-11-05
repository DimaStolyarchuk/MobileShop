<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huawei extends Model
{
    protected $table = 'Huaweis';
    protected $fillable = ['image', 'name', 'action', 'priority'];
    protected $guarded = [];
}
