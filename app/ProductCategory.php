<?php

namespace App;

use App\Product;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table ="category_product";

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
