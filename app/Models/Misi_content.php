<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Misi_content extends Model
{
    protected $table = 'misi_content';
    protected $fillable = ['id_misi', 'description'];

    public function misi() {
        return $this->belongsTo('App\Misi', 'id_misi', 'id');
    }
}
