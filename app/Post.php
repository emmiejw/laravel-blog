<?php

namespace App;

use App\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    use softDeletes;

    protected $fillable = [
        'title',
        'featured',
        'content',
        'category_id',
        'slug',
        'user_id'
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    protected $dates = ['deleted_at'];

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
