<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'avatar','user_id', 'youtube', 'facebook', 'about' 
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
