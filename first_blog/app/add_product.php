<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_product extends Model
{
    //
    protected $fillable=['category_name','brand_name','product_name','product_price','product_quantity','product_description','long_description','product_image'];
}
