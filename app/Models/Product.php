<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = ['photo', 'path'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function product_content() {
        return $this->hasMany('App\Product_content');
    }
}
