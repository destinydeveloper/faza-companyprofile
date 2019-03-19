<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    protected $table = 'visi';
    protected $fillable = ['id_user', 'description', 'photo', 'path', 'title'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
