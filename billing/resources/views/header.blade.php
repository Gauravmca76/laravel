<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>	
    <title>Billing</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="/cssmenu/styles.css">
</head>
<body>
    <div id="cssmenu">
        <ul>
            <li class="active has-sub"><a href='/addclient'><span>Client Details</span></a>
                <ul>
                    <li class="has-sub"><a href='/addclient'><span>Add Client</span></a></li>
                    <li class="has-sub"><a href='/viewclientlist'><span>View Client</span></a></li>
                </ul>
            </li>

            <li class="active has-sub"><a href='#'><span>All Lists</span></a>
                <ul>
                    <li class="has-sub"> <a href='/invoicelist_gst_1819_fo'><span>Invoice List-FO</span></a> </li>
                    <li class="has-sub"> <a href='/proformalist'><span>Proforma List-FO</span></a> </li>
                </ul>
            </li>

            @if(Session::has('username'))
                @if(Session::get('username') == 'foaccount')
                    <li class='active has-sub'><a href='#'><span>Accounts</span></a>
                        <ul> 
                            <li class='has-sub'><a href='/billing_approval'><span>Pending-Approval-fo</span></a></li>
                            <li class='has-sub'><a href='/invoicetoberaised'><span>Pending-Invoice</span></a></li>
                            <li class='has-sub'><a href='/pending_invoice_fo_direct'><span>Generate Direct invoice-FO</span></a></li>
                        </ul>
                    </li>
                @endif

                @if(Session::get('username') == 'fo')
                    <li><a href='/pending_invoice_new'><span>Generate Invoice</span></a>
                        <ul>
                            <li class='has-sub'><a href='/pending_invoice_new'><span>Tax Invoice</span></a>
                            <li class='has-sub'><a href='/createproforma'><span>Proforma Invoice</span></a>
                            <li class='has-sub'><a href='/pendinginv_email'><span>Pre campaign Tax Invoice</span></a>
                        </ul>
                    </li>
                @endif

                @if(Session::get('username') == 'foadmin')
                    <li class='has-sub'><a href='/inv_list_collection_sandeep'><span>Invoice courier update</span></a></li>
                    <li class='has-sub'><a href='/personal'><span>Upload Personal </span></a></li> 		  
                @endif
            @endif

            <li class='last'><a href='/logout'><span>logout</span></a></li>
        </ul>
    </div>
    <div id="header-wrapper" style="text-align:center;">
        <div id="header">
            <div id="logo">
                <h1>Account</h1>	
                <div style="color:red;font-size:20px;font-familiy:verdana;">Welcome {{ Session::get('username') }}</div>
            </div>
        </div>
    </div>
</body>
</html>