<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register_save extends Model
{
    //
    protected $fillable=['username','email','password','confirm_password'];
}
