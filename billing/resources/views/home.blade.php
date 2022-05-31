@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dt/jquery.datetimepicker.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<link href="cssfx/defaultTheme.css" rel="stylesheet" media="screen" />
       <link href="demo/css/myTheme.css" rel="stylesheet" media="screen" />
	<script type="text/javascript" src="dt/jquery.js"></script>
	<script type="text/javascript" src="dt/jquery.datetimepicker.js"></script>
	<script src="jquery.fixedheadertable.js"></script>
	<script src="demo/demo.js"></script>

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
    <title>Dashboard</title>
</head>
<body>
<div id="wrapper" style="margin-top:10px">
	<div id="page" style="width:800px;">
		<div id="page-bgtop">
			<div id="page-bgbtm">
			
			<div class="container_12">
				<table  class="fancyTable" id="myTable01" cellpadding="0" cellspacing="0" style='font-family:calibri;width:750px;' >
				<thead>
				<tr>					
					<th>Inv_Month</th>
					<th>Paid</th>
					<th>Pending Payment</th>
					<th>Not updated</th>
					<th>Grand Total</th>				
				</tr>
				</thead>
				<tbody>
				<tr>	
				</tr>
				<tfoot>
				<tr>	
				</tr>
				
				</tfoot>
				</tbody>
				
				</table>
				<br/>
				<br/>
			<br/>
			<br/>
				</fieldset>
				<div style="clear: both;">&nbsp;</div>
			
		</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page --> 
</div>
</body>
<script type="text/javascript">
$('#datetimepicker').datetimepicker({
                //yearOffset:201,
                lang:'en',
                timepicker:false,
                format:'Y/m/d',
                formatDate:'Y/m/d',
                //minDate:'-1970/01/02', // yesterday is minimum date
                //maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});	

$('#datetimepicker2').datetimepicker({
                //yearOffset:201,
                lang:'en',
                timepicker:false,
                format:'Y/m/d',
                formatDate:'Y/m/d',
                //minDate:'-1970/01/02', // yesterday is minimum date
                //maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});	
</script>
</html>