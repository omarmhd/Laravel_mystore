<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable=['name','price','long_description','category_id','image','details'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
