<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $guarded = [];
    // public function products() {
    //     return $this->belongsToMany('App\Models\Product', 'cart_products')->withTimestamps();
    // }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function products() {
        return $this->belongsToMany('App\Models\Product', 'cart_products')->withTimestamps();
    }
}
