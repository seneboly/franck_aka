<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $guarded = [];
    
    public static function rules()
    {
        return [
                    'name.required'=>'A name is required',
                    'subject.required'=>'A subject is required',
                    'content.required'=>'A content is required',
              ];
    }
}
