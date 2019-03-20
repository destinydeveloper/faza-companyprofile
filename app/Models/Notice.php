<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';
    protected $fillable = ['id_user', 'description', 'photo', 'path', 'title'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
