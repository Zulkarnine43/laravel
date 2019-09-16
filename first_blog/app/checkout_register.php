<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkout_register extends Model
{
    //
    protected $fillable=['first_name','last_name','phone_number','email','address','Password','ConfirmPassword'];
}
