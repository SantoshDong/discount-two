<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use App\CategoryProduct;

class Product extends Model
{
    protected $fillable=['name','body','location','address','remark','contact_nbr','logo'];
    //
    // public function has_catagories(){
    //     return $this->hasMany('App\ProductHasCatagory');
    // }

        public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function has_catagory(){
    	 return $this->hasMany(CategoryProduct::class);
    }

}
