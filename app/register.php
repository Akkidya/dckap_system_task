<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table = 'registers';

    protected $fillable = ['name','username','email','password','confirm_password','mobile','dob','address','city','state','country','image'];
}
