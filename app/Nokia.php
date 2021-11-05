<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nokia extends Model
{
    protected $table = 'Nokias';
    protected $fillable = ['image', 'name', 'action', 'priority'];
    protected $guarded = [];
}
