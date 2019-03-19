<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $table = 'misi';

    protected $fillable = ['id_user', 'title', 'photo', 'path'];

    public function user() {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function misi_content() {
        return $this->hasMany('App\Misi_content');
    }
}
