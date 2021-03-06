<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['logo', 'path', 'address', 'email', 'telp', 'facebook_link', 'twitter_link', 'instagram_link'];
}
