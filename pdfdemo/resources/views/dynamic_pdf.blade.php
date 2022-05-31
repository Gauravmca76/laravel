<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Laravel - How to Generate Dynamic PDF from HTML using DomPDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Invoice Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>ID</th>
       <th>Invoice Number</th>
       <th>Invoice Display Number</th>
       <th>Invoice From Date</th>
       <th>Invoice To Date</th>
       <th>Invoice Generate Name</th>
       <th>Invoice Client Name</th>
       <th>Invoice Amount Without Tax</th>
       <th>Invoice Actual Amount</th>
       <th>Invoice Amount in Words</th>
      </tr>
     </thead>
     <tbody>
     @foreach($invoice_data as $invoice)
      <tr>
       <td>{{ $invoice->id }}</td>
       <td>{{ $invoice->inv_num }}</td>
       <td>{{ $invoice->inv_disp_num }}</td>
       <td>{{ $invoice->inv_from }}</td>
       <td>{{ $invoice->inv_to }}</td>
       <td>{{ $invoice->inv_kam }}</td>
       <td>{{ $invoice->inv_client }}</td>
       <td>{{ $invoice->inv_amount_withouttax }}</td>
       <td>{{ $invoice->inv_amount }}</td>
       <td>{{ $invoice->amtword }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>