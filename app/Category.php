<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category_name','logo'];
    
    // Public function products(){
    //  return $this->belongsToMany(Product::class);
    // }

    public function products(){
        return $this->belongsToMany('App\Product');
    }
    //
}
