<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Model
{
    //
    protected $fillable = [
    'id',
    'name',
    'description',
    'img_url',
    'price',
        'current_count',
        'summary_count'
    ];


}
