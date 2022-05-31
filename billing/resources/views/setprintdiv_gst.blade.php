<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final View</title>
    <link rel="stylesheet" type="text/css" href="css/theme1.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script>
function printdiv(){
	var DocumentContainer = document.getElementById('prt');
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
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
	 document.getElementById('wd').value=str;
	 document.getElementById('wd').AutoSize = true;
}
</script>
<script>
function printdiv2(){
	
	document.getElementById('pt').style.display='none';
	document.getElementById('pt1').style.display='none';
	document.getElementById('ttl').style.display='none';
	document.getElementById('prt').style.marginLeft='50px'
	document.getElementById('prt').style.marginTop='190px';
	document.getElementById('prt').style.fontfamily = "arial";
	document.getElementById('prt').style.align='center';
     var idn=document.getElementById('inum1').value;           
	window.print();
}
</script>
<script type="text/javascript">
$("container").each(function(){	
	$(this).attr("readonly","1");
});
</script>
</head>
<body style="font-size:15px; font-family:arial;">
    <div class="container" style="width:1200px;margin-top:40px;">
        <div class="wrapper">
            <div class="content" style="font-family:arial;font-size:15px;">
                <a href="javascript:printdiv2();"  id="pt" style="font-size:15px;">Print</a>  
                <a href="{{ url('/invoicelist_gst_1819_fo_back') }}"  id="pt1" style="font-size:15px;">Back</a>
                <div id="prt">
                    <div id="1" style="width: 1000px;">
                        <label style="font-weight:bold;margin-left:470px;">INVOICE<br><label style="font-size:12px;margin-left:370px;">[ Invoice under Section 31 of CGST Act, 2017 ]</label></label>	
                        <br/>					
                        <br/>					
                        <input type="hidden" name="inum" id="inum1" value="{{ $idnum }}" readonly></label>
                    </div>
                    <div id="2" style="width: 1000px;float:left;">
                        <div id='21' style="float: left; border: 1px solid; height: 99px; width: 514px;" >
				        <label style="font-weight:bold;padding-left:15px">Quest Solutions</label><br/><br/><label style="padding-left:15px">E-219, 2nd Floor, Tower # 3, International InfoTech Park,vashi<br></label>
						<label style="padding-left:15px">Navi Mumbai - 400705</label> 
						<label style="padding-left:15px">State- <b>Maharashtra</b>,State Code - <b>27</b></label> <BR>
						<label style="padding-left:15px">Contact Tel.- (022)49796372</label>
						<label style="padding-left:15px">Email ID.- accounts@firstoption.in</label> 
						
					  </div>
					   <div id="22" style="float:left;height:100px;width: 240px; readonly">
						   <div id='221' style="border-top: 1px solid; text-align: center;"><span style='margin-left: -32px;margin-top: 27px;position: absolute;'>Invoice No.</span></div>
						   <div id='222' style="border-bottom: 1px solid; text-align: center;margin-top:52px;height:48px"><?php echo $raw['inv_disp_num']?></div>						  
						  
						</div><!--end 22-->
						<div id='23' style="float:left;height:100px;width: 238px;border:1px solid;border-top:0px solid">
						     <div id='231' style="border-top: 1px solid; text-align: center;"><span style='margin-left: -32px;margin-top: 27px;position: absolute;'>Dated</span></div>
							<div id='232'style=" height: 48px;font-weight:bold;text-align: center;margin-top:52px;"><?php echo date('d F Y',strtotime($raw['inv_date']));?></div>
			            </div><!--end 23-->
                    </div>
                    <br/><br/>
                    <div id='3' style='/*border:1px solid;*/' >				
                     <div id='31' style="float: left; border-width: 0px 1px 1px; border-style: none solid solid; border-color:none; /* border-image: none; */ height: 132px; width: 514px;border-right: 1px solid;"><label style='padding-left:15px'>To,</label><br/>
					  <?php
					  $getclt=mysqli_query($con,"select * from `client_details` where `id`='".$raw['inv_client_id']."'");
					  $rocl=mysqli_fetch_array($getclt);
					?>
					      <div id='311' style="font-weight:bold;padding-left:15px"><?php echo ucwords($rocl['company_name'])?></div>
					      <div id='311' style="padding-left:15px"><label style="font-weight:bold">Address:-</label><?php echo ucwords($rocl['c_address'])?></div>
					      <div id='311' style="padding-left:15px"><label style="font-weight:bold">City:-</label><?php echo $rocl['city']?></label><label style="font-weight:bold">&nbsp;&nbsp;Pincode:-</label><?php echo $rocl['pincode']?><label style="font-weight:bold">State:-</label><?php echo $rocl['place_of_supply']?>
						   <?php
						     if($rocl['c_gst']==''){$stcode=$rocl['state_code'];}
							 else{$stcode=substr($rocl['c_gst'],0,2);}
						  ?>
						  </div>
					      <div id='311' style="padding-left:15px">
					      <label style="font-weight:bold">State Code:-</label><?php echo $stcode?>
				           <label style="font-weight:bold">GST NO.:-</label><?php echo $rocl['c_gst']?><br/>
				           <label style="font-weight:bold">PAN NO.:-</label><?php echo $rocl['panno']?><br/>
               			  </div>					      
					 </div><!--end 31--->					 
					 <div id='32' style="float:left;height:136px;width: 241px;">
					 
					  <div id='225' style="height: 25px; text-align: center;margin-top:33px; ">Kind Attention</div>
						   <div id='226' style="height: 25px;font-weight:bold; text-align: center; "><?php echo ucwords($rocl['c_name'])?></div>				  
					 </div><!--end 32-->
					 
					<div id='33' style="float:left;height:132x;width: 236px; border:1px solid; border-bottom:0px; border-top:0px;">
					 <!--<div id='321' style="text-align: center;margin-top:36px;">Order No.</div>-->
					 <div id='321' style="text-align: center;margin-top:36px;"><label style="font-weight:bold">Place of Supply:-</label></div>
						<!--<div id='322' style="height: 78px;font-weight:bold; text-align: center;"><?php echo $raw['inv_orderno']?></div>-->
						<!--<div id='322' style="height: 78px; text-align: left;"><?php echo ucwords($rocl['c_address'])?></div>-->
					    <div id='322' style="padding-left:15px"><label style="font-weight:bold">City:-</label><?php echo $rocl['city']?></label><br/><label style="font-weight:bold">Pincode:-</label><?php echo $rocl['pincode']?><br/>
						  </div>
					      <div id='322' style="padding-left:15px"><label style="font-weight:bold">State:-</label><?php echo $rocl['place_of_supply']?>
						  
						  <?php
						     if($rocl['c_gst']==''){$stcode=$rocl['state_code'];}
							 else{$stcode=substr($rocl['c_gst'],0,2);}
						  ?>
					      <br/><label style="font-weight:bold">State Code:-</label><?php echo $stcode ?><br/>
				   </div > <!---end 33-->
			 
			
				
				</div><!--end 3-->	 
				<br/>
				<div id='4' style="margin-top: -4px;width: 1000px;float: left;margin-left: -3px;">
					   
			   
			   <table cellspacing='0px' cellpadding='0px' style="width: 996px;font-family:arial;font-size:15px;margin-left:3px;">
              <tr>
			  <td style="border:1px solid;border-right:1px solid;text-align:center;font-weight:bold;">S.No.</td>
			  <td style="border:1px solid;border-left:0px solid;text-align:center;font-weight:bold;">Particulars</td>
			  <td style="border:1px solid;border-left:0px solid;text-align:center;font-weight:bold;">Quantity</td>
			  <td style="border:1px solid;border-left:0px solid;text-align:center;font-weight:bold;">Rate in Rs</td>
			  <td style="border:1px solid;border-left:0px solid;text-align:center;font-weight:bold;">Per</td>
			  <td style="border:1px solid;border-left:0px solid;text-align:center;font-weight:bold;">Amount</td>
			  </tr>
		      <?php
			  if($raw['inv_particular1'] !=''){$s1=1;$c1=$raw['currancy1'];}
			  else{$s1='';$c1='';}
			  if($raw['inv_particular2'] !=''){$s2=2;$c2=$raw['currancy2'];}
			  else{$s2='';$c2='';}
			  if($raw['inv_particular3'] !=''){$s3=3;$c3=$raw['currancy3'];}
			  else{$s3='';$c3='';}
			  if($raw['inv_particular4'] !=''){$s4=4;$c4=$raw['currancy4'];}
			  else{$s4='';$c4='';}
			  if($raw['inv_particular5'] !=''){$s5=5;$c5=$raw['currancy5'];}
			  else{$s5='';$c5='';}
			  ?>
			  <tr>
			  <td style="border-right:1px solid;border-left:1px solid; text-align: center;"><?php echo $s1?></td>
			  <td style="border-right: 1px solid;"><input type="text" readonly name="inv_particular1" style="width: 494px;border:0px;height:21px;font-weight:bold;text-align: center;" value="<?php echo $raw['inv_particular1']?>"></td>
			  <td style="border-right:1px solid;width: 89px;"><input type="text" readonly name="inv_quantity1" id="qty1" style="width: 90px;border:0px;text-align: center;" value="<?php echo $raw['inv_quantity1']?>"></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_rate1" readonly id="rt1" style="width:80px;border:0px;text-align: center;" value="<?php echo $c1.' '.$raw['inv_rate1']?>"></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_per1"  readonly style="width:80px;border:0px;text-align: center;" value="<?php echo $raw['inv_per1']?>"></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_amount1" readonly id="amt1" style="text-align:right;border:0px;width:165px;" value="<?php echo number_format((float)$raw['inv_amount1'], 2, '.', '')?>"></td>
			  </tr>
			  <tr>
			<td style="border-right:1px solid;border-left:1px solid; text-align: center;"><?php echo $s2?></td>
			    <td style="border-right: 1px solid;"><input  readonly type="text" name="inv_particular2" style="width: 494px;border:0px;height:21px;font-weight:bold;text-align: center;" value="<?php echo $raw['inv_particular2']?>"></td>
			 
			<!-- <td style="border-right: 1px solid;"><input  readonly type="text" name="inv_particular2" style="width: 494px;border:0px;height:21px;font-weight:bold;text-align: center;" value="(Service Tax Category:Business Auxiliary Service)"></td>-->
			 <td style="border-right:1px solid"><input readonly  type="text" name="inv_quantity2"  id="qty2" style="width: 90px;border:0px;text-align: center;" value="<?php echo $raw['inv_quantity2']?>"></td>
			  <td style="border-right:1px solid"><input readonly type="text" name="inv_rate2" id="rt2" style="width:80px;border:0px;text-align: center;" value="<?php echo $c2.$raw['inv_rate2']?>"></td>
			  <td style="border-right:1px solid;"><input readonly type="text" name="inv_per2" style="width:80px;border:0px;" value="<?php echo $raw['inv_per2']?>"></td>
			  <td style="border-right:1px solid;"><input readonly type="text" name="inv_amount2" id="amt2" style="text-align:right;border:0px;width:165px;" value="<?php echo $raw['inv_amount2']?>"></td>
			  </tr>
			  <!-------->
			   <tr>
			  <td style="border-right:1px solid;border-left:1px solid;"></td>
			  <td style="border-right:1px solid;height:40px;">Amount Before tax<br/></td>
			  <td style="border-right:1px solid;"></td>
			  <td style="border-right:1px solid;"></td>
			  <td style="border-right:1px solid;"></td>
			  <td style="border:1px solid;border-left: 0px;"><input readonly type="text" name="inv_amount_withouttax" style="border:0px;text-align:right;" id="amt55" value="<?php echo number_format((float)$raw['inv_amount_withouttax'], 2, '.', '')?>"></td>
			  </tr>
			  <!----------->
			   <tr>
			  <td style="border-right:1px solid;border-left:1px solid;"></td>
			  <td style="border-right:1px solid;height:40px;">SAC code:- 998361<br/></td>
			  <td style="border-right:1px solid;"></td>
			  <td style="border-right:1px solid;"></td>
			  <td style="border-right:1px solid;"></td>
			  <td style="border:1px solid;border-left: 0px;"></td>
			  </tr>
			  <!-------->
			  <tr>
			  <td style="border-left:1px solid;border-right:1px solid;"></td>
			  <td style="border-left:0px solid;border-right:1px solid;"><input readonly type="text" name="inv_servicetax" value="CGST @ 9%" style="width:494px;text-align:right;border:0px;height:23px;" value="<?php echo $raw['inv_servicetax']?>" ></td>
			  <td style="border-right:1px solid"><input type="text"  readonly name="inv_staxqty" id="qty6" style="width: 90px;border:0px;text-align: left;" value="<?php echo $raw['inv_staxqty']?>"></td>
			  <td style="border-right:1px solid"><?php echo $raw['currancysvtax']?><input readonly type="text" name="inv_rate6" id="rt6" style="width:80px;border:0px;text-align:center;" value="9.00"></td>
			  <td style="border-right:1px solid;"><input type="text" readonly name="inv_per6" style="width:80px;text-align:left;border:0px;" value="%"></td>
			  <td style="border-right:1px solid;"><input type="text" readonly name="inv_svtaxamount" id="amt6" style="text-align:right;border:0px;width:165px;" value="<?php echo $raw['inv_svtaxamount']?>" ></td>
			  </tr>
			  <!---->
			  <tr>
			  <td style="border-left:1px solid;border-right:1px solid;"></td>
			  <td style="border-left:0px;border-right:1px solid;"><input readonly type="text" name="inv_sbctax" value="SGST @ 9%" style="width:494px;text-align:right;border:0px;height:23px;" value="<?php echo $raw['inv_sbctax']?>" ></td>
			  <td style="border-right:1px solid"><input type="text" readonly  name="inv_sbctaxqty" id="qty7" style="width: 90px;border:0px;text-align: left;" value="<?php echo $raw['inv_sbctaxqty']?>"></td>
			  <td style="border-right:1px solid"><?php echo $raw['currancysvtax']?><input type="text" readonly  name="inv_rate7" id="rt7" style="width:80px;border:0px;text-align:center;" value="9.00"></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_per7" readonly style="width:80px;text-align:left;border:0px;" value="%"></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_sbctaxamount" readonly id="amt7" style="text-align:right;border:0px;width:165px;" value="<?php echo $raw['inv_sbctaxamount']?>" ></td>
			  </tr>
			  
			    <tr>
			  <td style="border-left:1px solid;border-right:1px solid;"></td>
			  <td style="border-left:0px;border-right:1px solid;"><input readonly type="text" name="inv_sbctax" value="IGST @ 18%" style="width:494px;text-align:right;border:0px;height:23px;" value="<?php echo $raw['inv_kktax']?>" ></td>
			  <td style="border-right:1px solid"><input type="text" readonly  name="inv_kktaxqty" id="qtykk" style="width: 90px;border:0px;text-align: left;" value="<?php echo $raw['inv_kktaxqty']?>"></td>
			  <td style="border-right:1px solid"><?php echo $raw['currancysvtax']?><input type="text" readonly  name="inv_ratekk" id="rtkk" style="width:80px;border:0px;text-align:center;" value="18.00"></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_perkk" readonly style="width:80px;text-align:left;border:0px;" value="%"></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_kktaxamount" readonly id="amtkk" style="text-align:right;border:0px;width:165px;" value="<?php echo $raw['inv_kktaxamount']?>" ></td>
			  </tr>
			  <!---->
			  <tr>
			  <td style="border-left:1px solid;border-right:1px solid;"></td>
			  <td style="border-left:0px;border-right:1px solid;"><input type="text" name="inv_tottax" readonly  value="Total tax" style="width:494px;text-align:right;border:0px;height:23px;" value="<?php echo $raw['inv_tottax']?>" ></td>
			  <td style="border-right:1px solid"></td>
			  <td style="border-right:1px solid"><?php echo $raw['currancysvtax']?><input readonly  type="text" name="inv_rate7" id="rt7" style="width:80px;border:0px;text-align:right;" value=""></td>
			  <td style="border-right:1px solid;"><input type="text" name="inv_per8" readonly style="width:80px;text-align:left;border:0px;" value=""></td>
			  <td style="border:1px solid;border-bottom: 0px;border-left: 0px;"><input type="text" readonly name="inv_tottax" id="amt7" style="border:0px;text-align:right;" value="<?php echo $raw['inv_tottax']?>" ></td>
			  
			 
			  </tr>
              <tr>
			  <td style="border-left:1px solid;border-right:1px solid;border-top:1px solid;border-bottom:1px solid;"></td>
			  <td style="border-left:0px solid;border-top:1px solid;border-bottom:1px solid;font-weight:bold;padding-left:412px">Grand Total</td>
			  <td style="border-left:1px solid;border-top:1px solid;border-bottom:1px solid;"></td>
			  <td style="border-left:1px solid;border-top:1px solid;border-bottom:1px solid;"></td>
			  <td style="border-left:1px solid;border-top:1px solid;border-bottom:1px solid;"></td>
			  <td style="border-left:1px solid;border-top:1px solid;border-bottom:1px solid;border-right:1px solid"><input type="text"  readonly name="inv_amount" id="tamt"  style="border:0px;text-align:right;width:165px;" value="<?php echo $raw['inv_amount']?>"></td>
              </tr>
</table>

</div><!-- end 4-->
<div id='5' style="width: 1018px; margin-top: -3px;float:left;">
<table  cellspacing='0px' cellpadding='0px' style="font-size: 15px;font-family:arial; width: 997px">	
		  <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;" colspan='6'></td></tr>
			 <tr style="border-right:1px solid;border-left:1px solid;">
			  <td colspan='5' style=" width: 884px;border-left:1px solid; padding-left:15px">Amount Chargeable (in words)</td>
			  
			  <td style="border-right: 1px solid;width: 100px;text-align: right;">E. & O.E</td>			  
			 </tr>	
			  <tr style="border-right:1px solid;">
			  <td colspan='5' style="border-left:1px solid;font-weight:bold; padding-left:15px">Rupees:-&nbsp; <input readonly type="text" name="amtword" id="wd" style="width:85%;border:none;height:30px;font-weight:bold;font-size:15px;" value="<?php echo ucwords($raw['amtword'])?>"> </td>			  
			  <td style="border-right:1px solid;font-weight:bold;"></td>
			 </tr>
			 <tr><td style="border-left:1px solid;font-weight:bold; padding-left:15px"><?php echo ucwords($raw['advance'])?></td><td></td></tr>
			 <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;font-weight:bold" colspan='6'></td></tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;font-weight:bold;padding-left:15px">GST No. : <label style="font-weight:bold;">27AAAFQ2370F1ZH</label></td>
			 </tr>
			 <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;" colspan='6'></td></tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;font-weight:bold;padding-left:15px">PAN No. : <label style="font-weight:bold;">AAAFQ2370F</label></td>
			 </tr>
			  <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;" colspan='6'></td></tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;font-weight:bold;padding-left:15px;text-decoration: underline;">Bank Account Details:  </td>
			 </tr>
			 <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;" colspan='6'></td></tr>
			 <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;" colspan='6'></td></tr>
			 <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;" colspan='6'></td></tr>
			<tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;font-weight:bold;padding-left:15px"> ICICI Bank Ltd: </td>
			 </tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;padding-left:15px">Account Name:  "Quest Solutions"</td>
			 </tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;padding-left:15px">Account Type:  CURRENT ACCOUNT</td>
			 </tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;padding-left:15px">Account No: 015105019148</td>
			 </tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;padding-left:15px">IFSC Code: ICIC0000151</td>
			 </tr>
			 <tr>
			 <td colspan='6' style="border-left:1px solid;border-right:1px solid;padding-left:15px">Branch: Vashi</td>
			 </tr>
			 <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;padding-left:15px" colspan='6'></td></tr>
			 <tr>
			 <td colspan='6'style="border-left:1px solid;border-right:1px solid;font-weight:bold;padding-left:15px">Please issue cheque favouring "Quest Solutions"</td>
			 </tr>
			 <tr><td style="height: 10px;border-left: 1px solid;border-right: 1px solid;" colspan='6'></td></tr>
			 </table>

</div><!---end 5-->
<div id='7'>
		  
		
			 <div id='71' style="border-top: medium none; float: left; width: 634px; border-left: 1px solid; margin-left: 0px; height: 86px; border-bottom: 1px solid;">
			 <br/>
				<label style='margin-left:15px;font-weight:bold'> Declaration</label>
				<p style='margin-left:15px;'>
				We declare that this Invoice shows the actual price of the<br/> Services described and that all particulars are true and correct
				</p>
             </div><!--end 71-->
			 
			 <div id='72' style="border: 1px solid black; text-align: right; float: left; width: 360px; ">
				<b>For Quest Solutions </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/><br/><br/><b>Authorised Signatory</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div><!--end 72-->
</div><!--end 7-->

<br/>		 
<div id='8' style="/* border: 1px solid black; */ width: 995px; margin-left: 0px;border-left: 1px solid;border-right: 1px solid;border-bottom: 1px solid;float:left; margin-top: 0px;">
	<label style="font-weight:bold;padding-left:15px">Terms</label> :<br/>
	<p style='margin-left:15px'>1] Any dispute should be reported within 7 days from the receipt of invoice in writing.<br/>
2] Payment to be made by due date. If not paid by due date interest @ 2% per month shall be chargeable on overdue number of days.<br/>
3] In the event of non-payment, part payment and/or late payment of the outstanding amount,<br/> Quest Solutions in its sole discretion, reserves the right to discontinue the services without any notice.<br/>
4] Unless mentioned, GST is not payable under reverse charge on these services.</br><br/><br/></p>
</div>	<!--end8-->	
<BR/>
<div id='9' style="width: 995px; margin-left: 0px;float:left; margin-top: 0px;text-align:center;">
<label style="font-size:9px">This is a computer generated invoice and does not require signature. </label><BR/>
<label style="font-size:9px"></label><BR/>
</div><!--end9-->						
                </div>
                <br/>
            </div>
        </div>
    </div>
</body>
</html>