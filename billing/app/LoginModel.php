<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $fillable = ['id','username','password','disp_username','dept','position'];
}
