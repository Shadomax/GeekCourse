<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = "courses";

    public function category(){
    	return $this->belongsTo('Category::class');
    }

    public function video(){
    	return $this->hasMany('Video::class');
    }

}
