<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    protected $fillable = ['id_user', 'caption', 'photo', 'path'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
