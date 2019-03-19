<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About_us extends Model
{
    protected $table = 'about_us';
    protected $fillable = ['id_user', 'description', 'photo', 'path', 'title'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
