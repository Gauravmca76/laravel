<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'login';
    protected $fillable = ['id','username','password','disp_username','dept','position'];
}
