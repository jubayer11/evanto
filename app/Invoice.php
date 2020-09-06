<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $guarded=[];

    public function products1(){
        return $this->belongsToMany(Invoice::class,'invoice__products','product_id','invoice_id')->withPivot('quantity');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
