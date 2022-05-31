@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" type="text/css" href="/css/theme1.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/dt/jquery.datetimepicker.css"/>
    <script type="text/javascript" src="/dt/jquery.js"></script>
    <script type="text/javascript" src="/dt/jquery.datetimepicker.js"></script>
    <script>
    var StyleFile = "theme1" + document.cookie.charAt(6) + ".css";
    document.writeln('<link rel="stylesheet" type="text/css" href="/css/' + StyleFile + '">');
    </script>
    <style>
.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:14px;
	-webkit-border-bottom-left-radius:14px;
	border-bottom-left-radius:14px;
	
	-moz-border-radius-bottomright:14px;
	-webkit-border-bottom-right-radius:14px;
	border-bottom-right-radius:14px;
	
	-moz-border-radius-topright:14px;
	-webkit-border-top-right-radius:14px;
	border-top-right-radius:14px;
	
	-moz-border-radius-topleft:14px;
	-webkit-border-top-left-radius:14px;
	border-top-left-radius:14px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:14px;
	-webkit-border-bottom-right-radius:14px;
	border-bottom-right-radius:14px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:14px;
	-webkit-border-top-left-radius:14px;
	border-top-left-radius:14px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:14px;
	-webkit-border-top-right-radius:14px;
	border-top-right-radius:14px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:14px;
	-webkit-border-bottom-left-radius:14px;
	border-bottom-left-radius:14px;
}.CSSTableGenerator tr:hover td{
	background-color:#ffffff;
		

}
.CSSTableGenerator td{
	vertical-align:middle;
		background:-o-linear-gradient(bottom, #e5e5e5 5%, #ffffff 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e5e5e5), color-stop(1, #ffffff) ); 
	background:-moz-linear-gradient( center top, #e5e5e5 5%, #ffffff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e5e5e5", endColorstr="#ffffff");	background: -o-linear-gradient(top,#e5e5e5,ffffff);

	background-color:#e5e5e5;

	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:12px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #4c4c4c 5%, #4c4c4c 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4c4c4c), color-stop(1, #4c4c4c) );
	background:-moz-linear-gradient( center top, #4c4c4c 5%, #4c4c4c 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4c4c4c", endColorstr="#4c4c4c");	background: -o-linear-gradient(top,#4c4c4c,4c4c4c);

	background-color:#4c4c4c;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 0px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #4c4c4c 5%, #4c4c4c 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #4c4c4c), color-stop(1, #4c4c4c) );
	background:-moz-linear-gradient( center top, #4c4c4c 5%, #4c4c4c 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#4c4c4c", endColorstr="#4c4c4c");	background: -o-linear-gradient(top,#4c4c4c,4c4c4c);

	background-color:#4c4c4c;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 0px 0px;
}
#sbt{
background-color:black;
color:white;
border:1px solid;
border-radius:25px;
margin-left:450px;
}
</style>
<script>
function showbx(){
var contby=document.getElementById('contby').value;
if(contby == 'reference'){document.getElementById('refby1').style.display='block';}
else{document.getElementById('refby1').style.display='none';}
}
</script>
<script>
function setnew(){
var indopt=document.getElementById('ind').value;
if(indopt == 'Other'){
document.getElementById('ot').style.display='block';
}
else{document.getElementById('ot').style.display='none';}
}
</script>
<script>
function printdiv(){
	var DocumentContainer = document.getElementById('content');
var WindowObject = window.open('', 'PrintWindow', 'width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes');
var strHtml = "<html>\n<head>\n <link rel=\"stylesheet\" type=\"text/css\" href=\"test.css\">\n</head><body><div style=\"testStyle\">\n"
+ DocumentContainer.innerHTML + "\n</div>\n</body>\n</html>";
WindowObject.document.writeln(strHtml);
WindowObject.document.close();
WindowObject.focus();
WindowObject.print();
WindowObject.close();
}
</script>
<script>
var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

function inWords(){
	num1=document.getElementById('tamt').value;	
	var num=parseInt(num1, 10);	
if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);	
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'And ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
	document.getElementById('wd').value=str;
	 document.getElementById('wd').AutoSize = true;
}
</script>
<script>
function addtotal2(){	
	var famt1=document.getElementById('amt1').value;
	var famt2=document.getElementById('amt2').value;
	var famt3=document.getElementById('amt3').value;
	var famt4=document.getElementById('amt4').value;
	var famt5=document.getElementById('amt5').value;
	var fullamt=Number(famt1)+Number(famt2)+Number(famt3)+Number(famt4)+Number(famt5);
	var fullamt1=fullamt.toFixed(2);
	document.getElementById('amt55').value=fullamt1;
	setservicetax2(fullamt1);
}
</script>
<script>
function addqty(){
	var fqty1=document.getElementById('qty1').value;
	var fqty2=document.getElementById('qty2').value;
	var fqty3=document.getElementById('qty3').value;
	var fqty4=document.getElementById('qty4').value;
	var fqty5=document.getElementById('qty5').value;
	var fullqty=Number(fqty1)+Number(fqty2)+Number(fqty3)+Number(fqty4)+Number(fqty5);
	var fullqty1=fullqty;
	document.getElementById('totalqty').value=fullqty1;
	addtotal();
}
</script>
<script>
function setservicetax2(val){
	var taxtype= '{{ $place }}';
	if(taxtype==''){
		alert('Place of supply need to be add');
	}
	var mainamt=val;
	var stax1=document.getElementById('rt7').value;
	
	var stax=(Number(mainamt)*Number(stax1))/100;
		var stax1=stax.toFixed(2);
	document.getElementById('amt7').value=stax1;
		if(taxtype == 'Maharashtra'){
			 setservicetax(mainamt);	
		}
		else{
		  setservicetaxkc(mainamt);
		}
} 
</script>
<script>
function setservicetaxkc(val){
	var mainamt=val;
	var stax1=document.getElementById('rtkk').value;
	var stax=(Number(mainamt)*Number(stax1))/100;
	var stax1=stax.toFixed(2);
	document.getElementById('amtkk').value=stax1;	
	document.getElementById('amt6').value='0.00';	
	document.getElementById('amt7').value='0.00';	
	var lstamt=Number(document.getElementById('amt55').value)+Number(document.getElementById('amtkk').value)	
	document.getElementById('taxt1').value=lstamt.toFixed(2);
	document.getElementById('tamt').value=lstamt.toFixed(2);
	inWords();
} 
</script>
<script>
function addtotal(){	
	var famt1=document.getElementById('amt1').value;
	var famt2=document.getElementById('amt2').value;
	var famt3=document.getElementById('amt3').value;
	var famt4=document.getElementById('amt4').value;
	var famt5=document.getElementById('amt5').value;
	var fullamt=Number(famt1)+Number(famt2)+Number(famt3)+Number(famt4)+Number(famt5);
	var fullamt1=fullamt.toFixed(2);
	document.getElementById('amt55').value=fullamt1;
	var famtkk=document.getElementById('amtkk').value;
	setservicetax2(fullamt1);
	var famt6=document.getElementById('amt6').value;
	var famt7=document.getElementById('amt7').value;
	var famtkk=document.getElementById('amtkk').value;
	var fulltamt=Number(famt6)+Number(famt7)+Number(famtkk);
	var fulltamt1=fulltamt.toFixed(2);
	document.getElementById('taxt1').value=fulltamt1;
}
</script>
<script>
function setservicetax(val){
	var mainamt=val;
	var stax1=document.getElementById('rt6').value;
	var stax=(Number(mainamt)*Number(stax1))/100;
		var stax1=stax.toFixed(2);
	document.getElementById('amt6').value=stax1;	
	
	  var lstamt=Number(document.getElementById('amt55').value)+Number(document.getElementById('amt6').value)+Number(document.getElementById('amt7').value)	
	document.getElementById('tamt').value=lstamt.toFixed(2);
		inWords();
} 
</script>
<script>
function setval(id){
	
	var crn=document.getElementById('currancy1'+id).value;
	var qty=document.getElementById('qty'+id).value;
	var rat=document.getElementById('rt'+id).value;
	
	if(crn =='Rs'){
		var amount=qty*rat;
		var amount1=amount.toFixed(2);
		document.getElementById('amt'+id).value=amount1;
	}
	else if(crn == 'Ps'){
		var amount=(qty*rat)/100;
		var amount1=amount.toFixed(2);
		document.getElementById('amt'+id).value=amount1;
	}
	addtotal();
	
}
</script>
<script>
function checkbilling(val){
	var chkval1=document.getElementById().value;
}
</script>
<script>
$(document).keypress(
    function(event){
     if (event.which == '13') {
        event.preventDefault();
      }


});
</script>

<script>
function validation(){
var amt=document.getElementById('tamt').value;
if(amt == ''){
alert('Invoice Amount Should not blank');
return false;}

var plo=document.getElementById('mypos1').value;
if(plo == ''){
	alert('Place of supply can not be blank');
	return false;
}
}
</script>
</head>
<body onload="addqty();">
    <div id="container" style="width:1200px;">
        <div id="wrapper">
            <div id="content">
                <form name="myform" id="myform" method="post" action="{{ route('invoice_genration_fo_insert') }}">
                {{ csrf_field() }}
                    <div style="width:840px;font-size:14px;">
                        <table>
                            <tr border="0px">
                                <td><input type="hidden" name="client_id" value="{{ $rocl[0]->id }}"  readonly></td>
                                <td colspan='6' align='center' style="font-size:20px;font-weight:bold;">Invoice</td>
                            </tr>
                        </table>
                        <table border="1px solid">
                            <tr>
                                <td>Quest Solutions<br>E-219, 2nd Floor, Tower # 3, International InfoTech Park,<br/> Vashi, Navi Mumbai - 400705 
                                    <table>
                                        <tr><td></td></tr>
                                        <tr><td></td></tr>
                                        <tr><td></td></tr>
                                        <tr><td></td></tr>
                                        <tr><td></td></tr>
                                        <tr><td></td></tr>
                                    </table>
                                </td>
                                <td>Invoice No.
                                    <table>
                                        <tr><td><input type="text" name="inv_num_actual" value="{{ $invnumber }}"  readonly></td></tr>
                                        <tr  border='1px solid'><td></td></tr>
                                    </table>
                                </td>

                                <td colspan="4">Dated
                                    <table border='1px solid'>
                                        <tr><td><input type="date" name="inv_date" ></td></tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>To,
                                    <table>
                                        <input type='hidden' name="inv_client" value='{{ $rocl[0]->c_name }}'>
                                        <tr><td>{{ $rocl[0]->company_name }}</td></tr>
                                        <tr><td>{{ $rocl[0]->c_address }}</td></tr>
                                        <tr><td>{{ $rocl[0]->city }},{{ $rocl[0]->pincode }}</td></tr>
                                        <tr>
                                            <td>
                                                GST NO.:- {{ $rocl[0]->c_gst }}<br/>
                                                Place of Supply:- {{ $rocl[0]->place_of_supply }}<br/>
                                                PAN NO.:- {{ $rocl[0]->panno }}
                                            </td>
                                        </tr>
                                        <tr><td></td></tr>
                                        <tr><td></td></tr>
                                    </table>
                                </td>
                                <td>Kind Attention,
                                    <table border="1px solid">
                                        <tr><td><input type='text' name='inv_kindattention' value="{{ $rocl[0]->c_name }}" ></td></tr>
                                    </table>
                                </td>
                                <td colspan="4">Place of supply
                                    <table border="1px solid">
                                        <tr>
                                            <td>
                                                <label style="font-weight:bold">City:-</label>{{ $rocl[0]->city }}</label><br/>
                                                <label style="font-weight:bold">Pincode:-</label>{{ $rocl[0]->pincode }}<br/>
                                                <label style="font-weight:bold">State:-</label><input type="hidden" name="mypos" id="mypos1" value="{{ $rocl[0]->place_of_supply }}">{{ $rocl[0]->place_of_supply }}<br/>
                                                <label style="font-weight:bold">State Code:-</label>{{ substr($rocl[0]->c_gst,0,2) }}<br/>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table border="1px solid">
                            <tr>
                                <td>S.No.</td>
                                <td>Particulars</td>
                                <td>Quantity</td>
                                <td>Rate</td>
                                <td>Per</td>
                                <td>Amount</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><input type="text" name="inv_particular1" style="width:380px;"></td>
                                <td><input type="text" name="inv_quantity1" id="qty1" style="width:80px;text-align:right;"  onchange="addqty(1)"></td>
                                <td>
                                    <input type="text" name="inv_rate1" id="rt1" style="width:60px;" onchange="setval(1);">
                                    <select type="text" name="currancy1" id="currancy11" onchange="setval(1);">
                                        <option>Rs</option>
                                        <option>Ps</option>
                                        <option>$</option>
                                    </select>
                                </td>
                                <td><input type="text" name="inv_per1" style="width:80px;"></td>
                                <td><input type="text" name="inv_amount1" id="amt1" onchange="addtotal();" style="width:80px;text-align:right;" value="" readonly></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td><input type="text" name="inv_particular2" style="width:380px;"></td>
                                <td><input type="text" name="inv_quantity2" id="qty2" style="width:80px;text-align:right;"  onchange="addqty(2)"></td>
                                <td>
                                    <input type="text" name="inv_rate2" id="rt2" style="width:60px;" onchange="setval(2);">
                                    <select type="text" name="currancy2" id="currancy12" onchange="setval(2);">
                                        <option>Rs</option>
                                        <option>Ps</option>
                                        <option>$</option>
                                    </select>
                                </td>
                                <td><input type="text" name="inv_per2" style="width:80px;"></td>
                                <td><input type="text" name="inv_amount2" id="amt2" onchange="addtotal();" style="width:80px;text-align:right;" value="" readonly></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td><input type="text" name="inv_particular3" style="width:380px;"></td>
                                <td><input type="text" name="inv_quantity3" id="qty3" style="width:80px;text-align:right;"  onchange="addqty(3)"></td>
                                <td>
                                    <input type="text" name="inv_rate3" id="rt3" style="width:60px;" onchange="setval(3);">
                                    <select type="text" name="currancy3" id="currancy13" onchange="setval(3);">
                                        <option>Rs</option>
                                        <option>Ps</option>
                                        <option>$</option>
                                    </select>
                                </td>
                                <td><input type="text" name="inv_per3" style="width:80px;"></td>
                                <td><input type="text" name="inv_amount3" id="amt3" onchange="addtotal();" style="width:80px;text-align:right;" value="" readonly></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td><input type="text" name="inv_particular4" style="width:380px;"></td>
                                <td><input type="text" name="inv_quantity4" id="qty4" style="width:80px;text-align:right;"  onchange="addqty(4)"></td>
                                <td>
                                    <input type="text" name="inv_rate4" id="rt4" style="width:60px;" onchange="setval(4);">
                                    <select type="text" name="currancy4" id="currancy14" onchange="setval(4);">
                                        <option>Rs</option>
                                        <option>Ps</option>
                                        <option>$</option>
                                    </select>
                                </td>
                                <td><input type="text" name="inv_per4" style="width:80px;"></td>
                                <td><input type="text" name="inv_amount4" id="amt4" onchange="addtotal();" style="width:80px;text-align:right;" value="" readonly></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td><input type="text" name="inv_particular5" style="width:380px;"></td>
                                <td><input type="text" name="inv_quantity5" id="qty5" style="width:80px;text-align:right;"  onchange="addqty(5)"></td>
                                <td>
                                    <input type="text" name="inv_rate5" id="rt5" style="width:60px;" onchange="setval(5);">
                                    <select type="text" name="currancy5" id="currancy15" onchange="setval(5);">
                                        <option>Rs</option>
                                        <option>Ps</option>
                                        <option>$</option>
                                    </select>
                                </td>
                                <td><input type="text" name="inv_per5" style="width:80px;"></td>
                                <td><input type="text" name="inv_amount5" id="amt5" onchange="addtotal();" style="width:80px;text-align:right;" value="" readonly></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Amount without tax</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="text" name="inv_amount_withouttax" id="amt55" style="width:80px;text-align:right;" readonly></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>SAC code:-998361</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td style="border:none;"><input type="text" name="inv_servicetax" value="CGST Tax @ 9%" style="width:380px;text-align:right;" ></td>
                                <td><input type="text" name="inv_staxqty" id="qty6" style="width:80px;" ></td>
                                <td><input type="text" name="inv_rate6" id="rt6" style="width:60px;"  value="09.00"></td>
                                <td><input type="text" name="inv_per6" style="width:80px;">%</td>
                                <td><input type="text" name="inv_svtaxamount" id="amt6" onchange="addtotal();" style="width:80px;text-align:right;" readonly></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="text" name="inv_sbctax" value="SGST Tax @ 9%" style="width:380px;text-align:right;" ></td>
                                <td><input type="text" name="inv_sbctaxqty" id="qty7" style="width:80px;" ></td>
                                <td><input type="text" name="inv_rate7" id="rt7" style="width:60px;"  value="09.00"></td>
                                <td><input type="text" name="inv_per7" style="width:80px;">%</td>
                                <td><input type="text" name="inv_sbctaxamount" id="amt7" onchange="addtotal();" style="width:80px;text-align:right;" readonly></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="text" name="inv_kktax" value="IGST  Cess @ 18%" style="width:380px;text-align:right;" ></td>
                                <td><input type="text" name="inv_kktaxqty" id="qty8" style="width:80px;" ></td>
                                <td><input type="text" name="inv_kkrate" id="rtkk" style="width:60px;"  value="18.00"></td>
                                <td><input type="text" name="inv_kkper" style="width:80px;">%</td>
                                <td><input type="text" name="inv_kktaxamount" id="amtkk" onchange="addtotal();" style="width:80px;text-align:right;" readonly></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td  style="width:380px;text-align:right;">Total Tax Amount</td>
                                <td></td>
                                <td>18</td>
                                <td><input type="text" name="inv_per7" style="width:80px;">%</td>
                                <td><input type="text" name="inv_tottax" id="taxt1" style="width:80px;text-align:right;" readonly></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td><input type="text" name="inv_total" id="totalqty"  style="width:80px;text-align:right;"></td>
                                <td></td>
                                <td></td>
                                <td><input type="text" name="inv_amount" id="tamt"  style="width:80px;text-align:right;"></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td colspan='4'>Amount Chargeable (in words)</td>
                                <td>E. & O.E</td>			  
                            </tr>
                            <tr>
                                <td colspan='5'>Indian Rupees:-&nbsp; <input type="text" name="amtword" id="wd" style="width:200%;border:none;"> </td>			  
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan='6'>GST No. : 27AAAFQ2370F1ZH</td>
                            </tr>
                            <tr>
                                <td colspan='6'>PAN No. : AAAFQ2370F</td>
                            </tr>

                            <tr>
                                <td colspan='6'>2) ICICI Bank Ltd:</td>
                            </tr>
                            <tr>
                                <td colspan='6'>Account Name:  "Quest Solutions"</td>
                            </tr>
                            <tr>
                                <td colspan='6'>Account No: 015105019148</td>
                            </tr>
                            <tr>
                                <td colspan='6'>IFSC Code: ICIC0000151</td>
                            </tr>
                            <tr>                            
                                <td colspan='6'>Branch: VASHI Sector &#47; 1.</td>
                            </tr>
                            <tr>
                                <td colspan='6'>Please issue cheque favouring "Quest Solutions"</td>
                            </tr>
                        </table>
                        <table border="1px solid">
                            <tr>
                                <td>Declaration<br/>
    We declare that this Invoice shows the actual price of the<br/> Services descibed and that all particulars are true and correct</td>
                                <td align="right">For Quest Solutions"<br/><br/><br/><br/>Authorised Signatory</td>
                            </tr>
                            <tr><td colspan='2'>Terms :<br/>
1]Any dispute should be reported within 7 days from the receipt of invoice in writing.<br/>
2]Payment to be made by due date. If not paid by due date interest @ 2% per month shall be chargeable on overdue number of days.<br/>
3]In the event of non-payment, part payment and/or late payment of the outstanding amount,<br/> Quest Solutions in its sole discretion, reserves the right to discontinue the services without any notice.</td></tr>
                        </table>
                        <table border='1px solid'>
				        </table>
                        <table><tr><td><input type="submit" name="submit" value="Submit invoice"  onclick="return validation();"></td></tr></table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
$('.datetimepicker2').datetimepicker({
	lang:'en',
	timepicker:false,
	format:'d-F-y',
	formatDate:'Y-m-d',
});
</script>
</html>