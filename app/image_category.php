<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image_category extends Model
{
    protected $table="images_cate";
    public function images()
    {
    	return $this->HasMany('App\images','category','id');
    }
}
