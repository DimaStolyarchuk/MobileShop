<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['image', 'name', 'price', 'description', 'brand_id', 'category_id', 'slug', 'action', 'priority'];
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brand_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
