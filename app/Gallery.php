<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Gallery extends Model
{
    public $timestamps = false;
    public $guarded = [];

    public function posts(){

    	return $this->belongsToMany(Article::class, 'gallery_post', 'post_id', 'gallery_id');
    }
}
