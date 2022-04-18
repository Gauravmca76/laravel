<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salaried extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'mobile','alter_mobile','dob','age','m_income','a_income','gender','married_status','city','state','circle','msc_code','operator','occupation','email_id','pincode','location','exp','desgination','company_name','company_type','education','source',
    ];
}
