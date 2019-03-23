<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About_us extends Model
{
    protected $table = 'about_us';
    protected $fillable = ['description', 'photo', 'path', 'title'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
