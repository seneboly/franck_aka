<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

use App\Gallery;
use App\Category;

class Article extends Model
{
    public $guarded = [];

    public $table = 'posts';

   

    public static function rules(){

    	return [
    		'title'=>'required',
    		'content'=>'required|min:10',
    		'category_id'=>'required',
    	];
    }

   

    public function getRouteKeyName(){

    	return 'slug';
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

     public function galleries(){

        return $this->belongsToMany(Gallery::class, 'gallery_post', 'post_id', 'gallery_id');
    }
}





