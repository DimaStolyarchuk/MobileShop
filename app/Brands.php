<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';
    protected $fillable = ['image', 'name', 'slug', 'action', 'priority'];
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'brands_category', 'brand_id', 'category_id');
    }
}
