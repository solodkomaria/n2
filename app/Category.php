<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'img_url'
    ];
    public function products()
{
    return $this->belongsToMany('App\Product',"product_in_categories");
}
}
