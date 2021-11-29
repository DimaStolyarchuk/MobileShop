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
        return $this->belongsToMany(Brands::class, 'brands_categories', 'category_id', 'brand_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
