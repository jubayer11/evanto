<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded=[];

    public function users(){
        return $this->belongsToMany(User::class,'user__products','user_id','product_id');
    }

    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
