@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
</head>
<body>
    <div id="wrapper" style="margin-top:5px">
        <div id="page" style="width:1400px;">
            <div id="page-bgtop">
                <div id="page-bgbtm">
                    <fieldset style="text-align:center;"><legend style="color: black; font-size:20px;">Raised invoice list</legend>
                        <table  class="fancyTable" id="myTable01" cellpadding="0" cellspacing="0"   style='width:1125px;'>
                            <thead>
                                <tr>
                                    <th>Sr.no</th>
                                    <th>kam</th>
                                    <th>Company Name</th>
                                    <th>GST no</th>
                                    <th>Invoice Date</th>
                                    <th>Invoice Number</th>
                                    <th>Invoice Amount</th>
                                    <th>Base Amount</th>
                                    <th>CGST Amount</th>
                                    <th>SGST Amount</th>
                                    <th>IGST Amount</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($join as $row)
                                $s+=1;
                                <tr>
                                    <td>{{ $s }}</td>
                                    <td>{{ $row->inv_kam }}</td>
                                    <td>{{ $row->company_name }}</td>
                                    <td>{{ $row->c_gst }}</td>
                                    <td>{{ $row->inv_date }}</td>
                                    <td>{{ $row->inv_num_actual }}</td>
                                    <td>{{ $row->inv_amount }}</td>
                                    <td>{{ $row->inv_amount_withouttax }}</td>
                                    <td>{{ $row->inv_svtaxamount }}</td>
                                    <td>{{ $row->inv_sbctaxamount }}</td>
                                    <td>{{ $row->kktaxamount }}</td>
                                    <td><a href="{{ url('/setprintdiv_gst',$row->id) }}"  id="pt" style="font-weight:bold;font-size: 18px;">Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/setprintdiv_gst',$row->id) }}"  id="pt" style="font-weight:bold;font-size: 18px;">View</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                        <div style="clear:both;">&nbsp;</div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
$('#datetimepicker').datetimepicker({
                lang:'en',
                timepicker:false,
                format:'Y-m-d',
                formatDate:'Y-m-d',
});	

$('#datetimepicker2').datetimepicker({
                lang:'en',
                timepicker:false,
                format:'Y-m-d',
                formatDate:'Y-m-d',
});	
</script>
</body>
</html>