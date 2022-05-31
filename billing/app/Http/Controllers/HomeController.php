<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\invoice_generation_fo_direct;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function homedata()
    {
        $mytime = Carbon::now('Asia/Kolkata');
        $selmon = $mytime->format('M');
        $year = $mytime->format('Y');
        $query = DB::table('invoice_data')
                ->join('billing_details','billing_details.inv_id','invoice_data.id')
                ->whereYear('invoice_data.inv_from',$year)
                ->whereMonth('invoice_data.inv_from',$selmon)
                ->groupBy('billing_details.payment_status')
                ->orderBy('invoice_data.inv_date')
                ->select('invoice_data.*','billing_details.payment_status',DB::raw('SUM(invoice_data.inv_amount) as inv_amt'))
                ->get();
        return view('home',compact($query));
    }

    public function invlistgst1819fo()
    {
        $invtime = Carbon::now('Asia/Kolkata');
        $frompage = $invtime->format('y');
        $invpatterncheck = 'QS'.$frompage.'-'.($frompage+1);
        $checkinvno = DB::table('invoice_data')->where('inv_num_actual','like',$invpatterncheck.'%')->get()->count();
        if($checkinvno > 1)
        {
            $invpattern = $invpatterncheck;
        }
        else
        {
            $invpattern = 'QS'.($frompage-1).'-'.$frompage;
        }

        //$qur = DB::table('invoice_data')->where('inv_num_actual','like',$invpattern.'%')->orderBy('inv_date','desc')->get();
        $join = DB::table('invoice_data')
                ->join('client_details','invoice_data.inv_client_id','client_details.id')
                ->where('invoice_data.inv_num_actual','like',$invpatterncheck.'%')
                ->orderBy('invoice_data.inv_date','desc')
                ->select('invoice_data.*','client_details.company_name','client_details.c_gst')
                ->get();
        return view('invoicelist_gst_1819_fo',compact('join'));
    }

    public function pending_invoice_fo()
    {
        $db = DB::table('client_details')->orderBy('company_name')->get();
        return view('pending_invoice_fo_direct',['company'=>$db]);
    }

    public function invoice_generation($id)
    {
        $mytime = Carbon::now('Asia/Kolkata');
        $frompage = $mytime->format('y').'-'.($mytime->format('y')+1);
        $cutfrompage = $mytime->format('y').'-'.(($mytime->format('m') > 3) ? $mytime->format('y')+1 : $mytime->format('y'));
        $invpatterncheck = 'QS'.$frompage;
        $checkinvno = DB::table('invoice_data')->where('inv_num_actual','like',$invpatterncheck.'%')->get()->count();
        if($checkinvno > 1)
        {
            $invpattern = $invpatterncheck;
        }
        else
        {
            $invpattern = 'QS'.$cutfrompage;
        }

        $getinv = DB::table('invoice_data')->where('inv_num_actual','like',$invpattern.'%')->max('inv_num');
        
        $invnewnum1 = $getinv + 1;
        if($invnewnum1 < 10)
        {
            $invnewnum = '00'.$invnewnum1;
        }
        elseif($invnewnum1 >= 10 && $invnewnum1 <= 99)
        {
            $invnewnum = '0'.$invnewnum1;
        }
        elseif($invnewnum1 > 99)
        {
            $invnewnum = $invnewnum1;
        }
        $invnumber = $invpattern.'/'.$invnewnum;

        $ipadd = request()->ip().'-Account';

        $client = $id;
        $place = DB::table('client_details')->where('id','=',$client)->get();
        $place1 = $place[0]->place_of_supply;
        $getclt = DB::table('client_details')->where('id','=',$client)->get();
        return view('invoice_generation_fo_direct',['place'=>$place1,'invnumber'=>$invnumber,'rocl'=>$getclt]);
    }

    public function invoice_generation_fo_insert(Request $request)
    {
        $mytime = Carbon::now('Asia/Kolkata');
        $frompage = $mytime->format('y').'-'.($mytime->format('y')+1);
        $cutfrompage = $mytime->format('y').'-'.(($mytime->format('m') > 3) ? $mytime->format('y')+1 : $mytime->format('y'));
        $invpatterncheck = 'QS'.$frompage;
        $checkinvno = DB::table('invoice_data')->where('inv_num_actual','like',$invpatterncheck.'%')->get()->count();
        if($checkinvno > 1)
        {
            $invpattern = $invpatterncheck;
        }
        else
        {
            $invpattern = 'QS'.$cutfrompage;
        }

        $getinv = DB::table('invoice_data')->where('inv_num_actual','like',$invpattern.'%')->max('inv_num');
        
        $invnewnum1 = $getinv + 1;
        if($invnewnum1 < 10)
        {
            $invnewnum = '00'.$invnewnum1;
        }
        elseif($invnewnum1 >= 10 && $invnewnum1 <= 99)
        {
            $invnewnum = '0'.$invnewnum1;
        }
        elseif($invnewnum1 > 99)
        {
            $invnewnum = $invnewnum1;
        }

        $invnumber = $request->inv_num_actual;
        $inv_disp_num = $request->inv_num_actual;
        $inv_num_actual = $request->inv_num_actual;
        $inv_num = $invnewnum;
        $inv_client = $request->inv_client;
        $inv_del_note = $request->inv_del_note;
        $inv_kindattentaion = $request->inv_kindatttenation;
        $inv_date = $request->inv_date;
        $inv_paymentmode = $request->inv_paymentmode;
        $inv_otherref = $request->inv_otherref;
        $inv_client = $request->inv_client;
        $inv_orderno = $request->inv_orderno;
        $inv_despatchno = $request->inv_despatchno;
        $inv_despatchthrough = $request->inv_despatchthrough;
        $inv_termdelivery = $request->inv_termdelivery;

        $inv_particular1 = $request->inv_particular1;
        $inv_quantity1 = $request->inv_quantity1;
        $inv_rate1 = $request->inv_rate1;
        $currancy1 = $request->inv_currancy1;
        $inv_amount1 = $request->inv_amount1;

        $inv_amount_withouttax = $request->inv_amount_withouttax;
        $inv_servicetax = $request->inv_servicetax;
        $inv_staxqty = $request->inv_staxqty;
        $inv_rate6=$request->inv_rate6;
        $currancysvtax=$request->currancysvtax;
        $inv_per6=$request->inv_per6;
        $inv_svtaxamount=$request->inv_svtaxamount;
        
        
        $inv_sbctaxamount=$request->inv_sbctaxamount;
        
        
        $inv_educationtax=$request->inv_educationtax;
        $inv_etaxqty=$request->inv_etaxqty;
        $currancyetax=$request->currancyetax;
        $inv_rate7=$request->inv_rate7;
        $inv_per7=$request->inv_per7;
        $inv_etaxamount=$request->inv_etaxamount;
        
        $inv_kktaxamount=$request->inv_kktaxamount;
        $inv_kkrate=$request->inv_kkrate;
        $inv_kkper=$request->inv_kkper;
        
        $inv_heducationtax=$request->inv_heducationtax;
        $inv_hetaxqty=$request->inv_hetaxqty;
        $inv_rate8=$request->inv_rate8;
        $inv_per8=$request->inv_per8;
        $inv_hetaxamount=$request->inv_hetaxamount;
        
        $inv_total=$request->inv_total;
        $inv_tottax=$request->inv_tottax;
        $amtword=$request->amtword;	
        $inv_amount=$request->inv_amount;
        $inv_signby=ucwords($request->inv_signby);

        $client = $request->client_id;
        $queryct = DB::table('client_details')->where('id','=',$client)->get();
        $pay_term = $queryct[0]->payment_day;
        $inv_raised_days=$queryct[0]->inv_raised_days;
	    //$fpay_term=$pay_term+$inv_raised_days;

        $inv_hardcode_dt = $request->inv_date;
        $final_anti = $request->inv_date;

        $uname = $request->session()->get('disp_name');
        $ipadd = request()->ip().'-Account';

        $insetdata = DB::table('invoice_data')->insert([
            'inv_num'=>$inv_num,
            'inv_num_actual'=>$invnumber,
            'inv_disp_num'=>$inv_disp_num,
            'inv_hardcode_dt'=>$inv_hardcode_dt,
            'inv_from'=>$inv_date,
            'inv_to'=>$inv_date,
            'inv_kam'=>$uname,
            'inv_type'=>'',
            'inv_client'=>$inv_client,
            'inv_client_id'=>$client,
            'inv_kindattenation'=>$inv_kindattentaion,
            'inv_particular1'=>$inv_particular1,
            'inv_quantity1'=>$inv_quantity1,
            'inv_rate1'=>$inv_rate1,
            'currancy1'=>$currancy1,
            'inv_amount1'=>$inv_amount1,
            'inv_total'=>$inv_total,
            'inv_amount_withouttax'=>$inv_amount_withouttax,
            'inv_servicetax'=>$inv_servicetax,
            'inv_svtaxamount'=>$inv_svtaxamount,
            'inv_sbctaxamount'=>$inv_sbctaxamount,
            'inv_rate6'=>$inv_rate6,
            'inv_rate7'=>$inv_rate7,
            'inv_kktaxamount'=>$inv_kktaxamount,
            'inv_kkrate'=>$inv_kkrate,
            'inv_date'=>$inv_date,
            'inv_amount'=>$inv_amount,
            'amtword'=>$amtword,
            'inv_gen_date'=>$inv_date,
            'inv_flag'=>'',
            'anti_date'=>$inv_date,
            'update_by'=>$ipadd
        ]);

        $getid = DB::table('invoice_data')->where('inv_num_actual','=',$invnumber)->get();
        $rowid = $getid[0]->id;
        $inserdata1 = DB::table('billing_details')->insert([
            'inv_no'=>$inv_num,
            'inv_id'=>$rowid
        ]);

        if($inserdata1)
        {
            return view('setprintdiv_gst',['idnum'=>$rowid]);
        }
    }

    public function invoicelist_gst_1819_fo_back()
    {
        return view('invoicelist_gst_1819_fo');
    }
}