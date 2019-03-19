<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['id_user', 'title', 'sub_title'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
