<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Invoice Bill</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
	<div style="text-align: right;">
      <a  class="btn printPage h3 mr-3" href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
      </svg><br>
      Prints
      </a>
      <a href="{{url('/close')}}" class="btn mr-2" > <span class="h3 text-dark" aria-hidden="true">&times;</span></a>
  </div> 

<div class="invoice" id="invoice">  
    <div class="container" style="border: solid 2px;">
       <div class="row" style="border: solid 1px; height: 110px;">
	        <div class="col-md-2 col-lg-2 col-4">  
	            <img src="{{asset('img/logo/chang_logo2.png')}}" alt="Logo" height="95px" width="95px;" style="padding: 5px;">
	        </div>
	       
	          <div class="col-md-10 col-lg-10 col-8 text-right" style="text-align: right;">
	              <h4>Divit Enterprises</h4>
	              <small> Basement-1, Yogeshwari Complex, Sahyog Nagar, Gajanan Mandir Road,<br>Near Sutgirni Chowk, Garkheda,Aurangabad.</small><br>              

	          </div>
	     </div>

      <div class="row" style="border: solid 1px;">
      		<div class="form-group col-md-6 col-lg-6 col-6">
            @foreach($get_prd as $pd)
      			<label><b>BILL No. :  {{$pd->bill_no}}</b></label><br>
            @endforeach
      			<label><b>GSTIN No. :</b></label>
      		</div>
      		<div class="form-group col-md-6 col-lg-6 col-6">
      			<label><b>PAN No. :</b></label><br>
      			<label><b>CIN No. :</b></label>
      		</div>
      		
      	
          <table class="table table-bordered table-stripped" style="border: solid 1px;">
            <thead class="thead-dark">
              <th class="text-center">Details of Receiver(Billed to)</th>
              <th class="text-center">Details of Consignee(Shipped to)</th>
            </thead>
            <tbody>
              @foreach($vendor as $vdr)
              <tr>
                <td>
                  <label><strong>Name  :   {{$vdr->name}}</strong></label><br>
                  <label>Address  :   {{$vdr->address}},{{$vdr->city}}</label><br>
                  <label>State  :   {{$vdr->state}}</label>
                  <label>Pin  :   {{$vdr->pincode}}</label><br>
                  <label>Mobile No  :   {{$vdr->mobile_no}}</label> <label>GSTIN  :   9876543210</label><br>
                </td>
                <td>
                  <label><strong>Name : {{$vdr->name}}</strong></label><br>
                  <label>Address : {{$vdr->address}},{{$vdr->city}},</label><label>{{$vdr->pincode}}</label><br>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- <div class="table-responsive" id=""> -->
              <table id="example" class="table table-bordered table-responsive" style="width:100%; border: solid 1px;">
            <thead>
              <tr >
                <th class="center">Sr No</th>
                <th>Product</th>
                <!--<th>HSN/SAC</th>-->
                <th>Batch</th>
                <th>Exp.Dt</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>MRP</th>
                <th>Total</th>
                <th>Discount</th>
                <th>GST</th>
                <th>Taxable</th>
              </tr>
            </thead>
          @foreach($get_prd as $pd)
            <tbody>
             
                <tr>
                  <td></td>
                  <td>{{$pd->product_name}}</td>
                  <!--<td>{{$pd->hsn}}</td>-->
                  <td>{{$pd->batch_no}}</td>
                  <td>{{$pd->expiry_date}}</td>
                  <td>{{$pd->quantity}}</td>
                  <td>{{$pd->rate}}</td>
                  <td>{{$pd->price}}</td>
                  <td>{{$pd->total_amount}}</td>
                  <td>{{$pd->discount}}</td>
                  <td>18%</td>
                  <td>{{$pd->total_gst}}</td>
                <!--<td><?php //$gst = number_format((float)$pd->total_amount*18/100, 2, '.', ''); echo $gst;?></td>-->
                </tr>
              
            </tbody>
            <thead>
              <tr >
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>{{$pd->total_amount}}</th>
                <th></th>
                <th colspan="2" style="text-align: right;">{{$pd->total_gst}}</th>
              </tr>
            </thead>
           
            </table>
          <!-- </div> -->
          <table class="table table-bordered" style="border: solid 1px;">
            <tr>
              <td rowspan="4" colspan="8">
                <b>Remark : </b> <label> {{$pd->product_name}}</label><br /><br />
                <b>GST Summary :</b><label>( {{$pd->total_amount}} @ 18.00% IGST = {{$pd->total_gst}} )</label>
              </td>
              <td >
                <tr>
                  <td style="text-align: right;">Total Gross Value  : </td><td style="text-align: right;">{{$pd->total_amount}}</td>
                </tr>
                <tr>
                  <td style="text-align: right;">Add : IGST </td><td style="text-align: right;">{{$pd->total_gst}}</td>
                </tr>
                <tr>
                  <td style="text-align: right;">Round Off  : </td><td style="text-align: right;">  0.00</td>
                </tr>
              </td>
              
            </tr>
            <tr>
              <td colspan="8"><strong>Invoice Value(In Words) : </strong><i class="fa fa-rupee-sign"></i> <span id="inword"></span></td><td style="text-align: right;"><strong>Invoice Total  : </strong></td><td style="text-align: right;"><strong><?php echo $pd->total_gst+$pd->total_amount; ?></strong><input type="hidden" id="ruppe" value="<?php echo $pd->total_gst+$pd->total_amount; ?>"/></td> 
            </tr>
          </table>
          @endforeach
          <table class="table table-bordered" style="border: solid 1px;">
            <thead class="thead-dark">
              <th>AUTHORISED SIGNATORY</th>
              <th>DIVIT ENTERPRISES</th>
            </thead>
            <tbody>
              <tr>
                <td>
                  <label>Name</label> : <br>
                  <label>Designation</label> : 
                </td>
                <td>
                  <label>Signature </label> :
                </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div> 
</div>
</body>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>

$('a.printPage').click(function(){
   // window.print();
           // return false;
     var printContents = document.getElementById('invoice').innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
});

        function generateInvoice(){

            var invoiceDiv = $('#invoice'),
                invoiceHeight = invoiceDiv.height(),
                invoiceWidth = invoiceDiv.width();

            var pdf = new jsPDF('p', 'pt', [invoiceWidth, invoiceHeight]);
            var options = {
                background: '#fff'
            };

            var trimmed = 'aaa';

            pdf.addHTML($(invoiceDiv)[0], options, function () {
                pdf.save('Invoice_'+ trimmed +'.pdf');
            });
        }
</script>
<script>
    const num = document.getElementById('ruppe').value;
const wordify = (num) => {
   const single = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
   const double = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"];
   const tens = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
   const formatTenth = (digit, prev) => {
      return 0 == digit ? "" : " " + (1 == digit ? double[prev] : tens[digit])
   };
   const formatOther = (digit, next, denom) => {
      return (0 != digit && 1 != next ? " " + single[digit] : "") + (0 != next || digit > 0 ? " " + denom : "")
   };
   let res = "";
   let index = 0;
   let digit = 0;
   let next = 0;
   let words = [];
   if (num += "", isNaN(parseInt(num))){
      res = "";
   }
   else if (parseInt(num) > 0 && num.length <= 10) {
      for (index = num.length - 1; index >= 0; index--) switch (digit = num[index] - 0, next = index > 0 ? num[index - 1] - 0 : 0, num.length - index - 1) {
         case 0:
            words.push(formatOther(digit, next, ""));
         break;
         case 1:
            words.push(formatTenth(digit, num[index + 1]));
            break;
         case 2:
            words.push(0 != digit ? " " + single[digit] + " Hundred" + (0 != num[index + 1] && 0 != num[index + 2] ? " and" : "") : "");
            break;
         case 3:
            words.push(formatOther(digit, next, "Thousand"));
            break;
         case 4:
            words.push(formatTenth(digit, num[index + 1]));
            break;
         case 5:
            words.push(formatOther(digit, next, "Lakh"));
            break;
         case 6:
            words.push(formatTenth(digit, num[index + 1]));
            break;
         case 7:
            words.push(formatOther(digit, next, "Crore"));
            break;
         case 8:
            words.push(formatTenth(digit, num[index + 1]));
            break;
         case 9:
            words.push(0 != digit ? " " + single[digit] + " Hundred" + (0 != num[index + 1] || 0 != num[index + 2] ? " and" : " Crore") : "")
      };
      res = words.reverse().join("")
   } else res = "";
   return res
};
document.getElementById('inword').innerHTML = wordify(num);
</script>
</html>