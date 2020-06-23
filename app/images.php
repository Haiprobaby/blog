<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table="images";
    public function nhanvien()
    {
    	return $this->belongsTo('App\images_cate','category','id');
    }
}
