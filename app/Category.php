<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = ['image', 'name', 'slug', 'action', 'priority'];
    protected $guarded = [];

    public function brands()
    {
        return $this->belongsToMany(Brands::class);
    }
}
