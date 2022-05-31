<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice_generation_fo_direct extends Model
{
    protected $table = 'invoice_data';
    protected $fillable = ['id','inv_num','inv_num_actual','inv_disp_num','inv_hardcode_dt','inv_from','inv_to','inv_kam','inv_type','inv_client','inv_client_id','inv_kindattenation','inv_particular1','inv_quantity1','inv_rate1','currancy1','inv_amount1','inv_total','inv_amount_withouttax','inv_servicetax','inv_svtaxamount','inv_sbctaxamount','inv_rate6','inv_rate7','inv_kktaxamount','inv_kkrate','inv_date','inv_amount','amtword','inv_gen_date','inv_flag','anti_date','update_by'];
}
