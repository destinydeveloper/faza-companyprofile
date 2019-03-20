<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_content extends Model
{
    protected $table = 'product_content';
    protected $fillable = ['id_product', 'title', 'link', 'description'];

    public function misi() {
        return $this->belongsTo('App\Product', 'id_product', 'id');
    }
}
