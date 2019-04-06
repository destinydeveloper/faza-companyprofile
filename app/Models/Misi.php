<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $table = 'misi';

    protected $fillable = ['title', 'photo', 'path'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function misi_content() {
        return $this->hasMany('App\Misi_content');
    }
}
