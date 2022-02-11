<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>EVERGOAL PROJECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

     <style>

.form-field {
  display: flex;
  align-items: center;
  height: 55px;
  margin: 0 40px 30px 40px;
  border-bottom: 1px solid #9596A2;
}
.form-field label {
  width: 10px;
  padding: 0 15px 0 0;
  color: #9596A2;
}
.form-field input {
  width: 100%;
  background: transparent;
  color: #fff;
  padding: 15px;
  border: 0;
  margin: 0;
}
 .form-field input + svg {
  width: 35px;
  width: 35px;
  fill: none;
  stroke: #00FCD1;
  stroke-width: 7;
  stroke-linecap: round;
  stroke-dasharray: 1000;
  stroke-dashoffset: -100;
  transition: all .3s ease-in-out;
}
 .form-field input:valid + svg {
  stroke-dashoffset: 0;
}
.form-field input:focus {
  outline: none;
}
.form-field *::placeholder {
  color: #313131;
}
.fa-unlock-alt{
    color:#CD220F;
}
@media (max-width: 1199.98px) { 
.fa-unlock-alt{
    color:#fff;
}
.fa-user{
    color:#fff;
}
.btn-link{
    color:#fff!important;
}
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}
     </style>

</head>

<body style="">

<!-- Main Content -->

      <div class="container">
          <div class="row">
              <div class="offset-md-2"></div>
              <div class="col-md-8">
                  <div class="card mt-5" style=" box-shadow: 5px 5px 10px 10px #888888;">
             <!--         	<a class="top-right" style="font-size:25px; font-style:bold;" href="{{ __('/registration') }}">-->
													<!--	{{ __('X') }}-->
													<!--</a>-->
                        <!--<div class="top-right"><i class="fas fa-times"></i></div>-->
                      <div class="card-body">
                          
                          
							<div class=" row justify-content-center"> 
								<div class="text-center ">
									<img  src="{{asset('/img/Evergoal Circle Logo.png')}}" class=" logo_height"  alt=""></br>
									
								</div>
							</div>
							<div class="mt-5">
							  <h3> <strong class="justify-content-center">Terms & Conditions</strong></h3> 
                              <ol>
				      
				        <li>Daily Payment.</li>
				        <li>Minimum windrwal bank transfer 600 rs.</li>
				        <li> Fast pement withdrwal minimum 5 direct compalsury.</li>
				        <li>1 level income compalsury 1 direct and 7 level income compalsury 10 direct.</li>
				        <li>User should 18 years plus.</li>
				        <li>Company will not be responsible about such types of fraud with the users. (i.e.) Id hack, fund deduction. Users will responsible their own id.</li>
				        <li>Company never asks OTP/adhar number/password or your personal details. please do not share with any one.</li>
				        <li>Company has a right to block your id permanently. if you will perform any illegal activity and spread any fake news about company or miss behave with any members of the company.</li>
				        <li>All payouts will be done after TDS an admin charge deduction.</li>
				        <li>The Company has a full right to change its plan to the benefit of the users.
05%TDS 10% admin charge will applicable.</li>
				    </ol>
				    </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


						


<!-- Close Main Content -->


<!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>