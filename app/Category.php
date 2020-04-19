<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['nom_categorie', 'slug'];

    public function posts(){

    	return $this->hasMany(Article::class);
    }

    public function getRouteKeyName(){

    	return 'slug';
    }
    
}
