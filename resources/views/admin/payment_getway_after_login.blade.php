
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EVERGOAL PROJECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://sandbox-payments.open.money/layer"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >

</head>
<style type="text/css">
	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;
        margin-top:5px;
	}
	.logo {
		margin-bottom:20px;
        margin-top:5px;
	}
</style>

<body style="background-image:url('img/back1.png'); background-repeat: no-repeat;background-size:cover;">

<div class="row">
        <div class="offset-2"></div>
        <div class="col-md-8">
        <div class="card mt-5 mb-5 registform border_color card_border">
					<div class="card-header bg_red card_header">
						<h5 class="card-title text-center text-white">Pay From Here...</h5>
					</div>
                <div class="card-body">

                 <!-- onsubmit="validateCaptcha()" -->
           
             <p class="text-justify"><strong>Your Detail</strong></p>
              <div class="form-group">
                <label>Sponser Id:</label>
                 <label>{{$sponserid}}</label>
             </div>
             
         
            <div class="form-group">
                
                <label>Name : </label>
                <label>{{$name}}</label>
            </div>
           
            <div class="form-group ">
                <label>Mobile No. : </label>
                <label>{{$mobile}}</label>
                
            </div>

            <div class="form-group ">
               <label>Email Id : </label>
                <label>{{$email}}</label>
            </div> 
            
            
            <div id="layerloader">
		
        		<?php 
        			if(!empty($error)) echo $error;
        			?>
        			<div class="dv">
        				<input id="submit" name="submit" value="Pay" type="button" onclick="triggerLayer();">
        			</div>
        			
        			<form action="{{url('/payment_check_after_login')}}" method="post" style='display: none' name="layer_payment_int_form">
        			    @csrf
                      <input name="sponserid" value="{{$sponserid}}"/>
                      <input name="name" value="{{$name}}"/>
                      <input name="email" value="{{$email}}"/>
                      <input name="password" value="{{$password}}"/>
                      <input name="password1" value="{{$password1}}"/>
                      <input name="pimg" value="{{$pimg}}}}"/>
                      <input name="layer_pay_token_id" value="{{$payment_token_data['id']}}"/>
                      <input name="tranid" value="{{$tranid}}"/>
                      <input name="layer_order_amount" value="{{$payment_token_data['amount']}}"/>
                      <input id="layer_payment_id" name="layer_payment_id" value=""/>
                      <input id="fallback_url" name="fallback_url" value=""/>
                      <input name="hash" value="{{$hash}}"/>
                    </form>
                    
                 <?php if (isset($html)) { echo $html;?>
                 
                   <div class="form-group ">
                   <label style='display: none'>Email Id : </label>
                    <label style='display: none'>{{$html}}</label>
                </div> 
                 
                 <?php } ?>
                            
                            
        	</div>
        	
        	@if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

                @if(Session::has('message'))
                        <div class="alert alert-danger">
                            <ul>
                                
                                    <li>{{ Session::get('message') }}</li>
                                
                            </ul>
                        </div>
                @endif
            
             

<!-- Close Main Content -->


<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>