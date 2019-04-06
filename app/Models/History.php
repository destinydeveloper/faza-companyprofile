<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $fillable = ['id_user', 'user_history'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
