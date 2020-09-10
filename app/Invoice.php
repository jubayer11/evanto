<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $guarded=[];

    public function product(){
        return $this->belongsToMany(Product::class,'invoice__products','product_id','invoice_id')->withPivot('quantity');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
