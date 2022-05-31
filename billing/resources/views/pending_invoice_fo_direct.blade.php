@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
	<link rel="stylesheet" type="text/css" href="dt/jquery.datetimepicker.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="dt/jquery.js"></script>
	<script type="text/javascript" src="dt/jquery.datetimepicker.js"></script>

	<script src="demo/demo.js"></script>
	<style>
		#sbt{
		background: url('images/genrpt.png') center;
		width: 100px;
		height: 33px;
		border-bottom: 0;
		border: 0;
		border-left: 0;
		border-right: 0;
		border-top: 0px;
		}
	</style>
<script>
function sendto()
{
	var campid=document.getElementById('cname1').value;
	alert(campid);
	//window.location='invoice_generation_fo_direct.php?clid='+campid;
    window.location = "/invoice_generation_fo/"+campid
}
</script>
</head>
<body>
<div id="wrapper" style="margin-top:20px;"> 
	<div id="page" style="width:1400px;">
		<div id="page-bgtop">
			<div id="page-bgbtm">
			<fieldset>
			<legend style="color: black; font-size:20px;">Clients</legend>
				<form method="post">
				<table border=''cellspacing='5px';cellpadding='0px' style="border-radius:12px;margin-left:10px;">	
				<tr>
					<td class="contact" style="font-weight:bold;font-size:14px;">Select Company Name</td> 
					<td>
                        <select name="cname" id="cname1" >
                            @foreach($company as $row)
                                <option value="{{ $row->id }}"> {{ $row->company_name }}</option>
                            @endforeach
                        </select>
                        <input type="button" name="submit" value="submit" style="font-weight:bold;font-weight:14px;" onclick="sendto();">
					</td>
				</tr>
		        </table>
   </form> 
	<!-- end #page --> 
</div>
</body>
</html>