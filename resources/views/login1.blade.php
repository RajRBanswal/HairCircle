<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hair Transplant</title>
<!-- <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">
 <!-- <link href="{{asset('css/login.css')}}" rel="stylesheet"> -->
 <style>
  label{
	font-family: Open-sans,'sans-serif';
	font-size:18px;
	/* color:#201755; */
  }
  .modal-title{
	font-family: 'Roboto', sans-serif;
  }
.company__in{
    background-color: lightgray;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #201755;
    /*border-radius: 5px;*/
}

 </style>
</head>

<body >
<div>
@include('mainnav')
</div>
 <section>

 <div class="container-fluid " id="loginmain" >

		<div class="row main-content bg-success text-center">
		
            <!-- <div class="offset-1"></div> -->
			<div class="col-md-5 text-center company__in">
				<span class="company__logo"><h2><span><img src="img/logo3.png" class="img-fluid"></span></h2></span>
				<h4 class="company_title">Hair Circle Studio</h4>
			</div>
			<div class="col-md-7  login_form " style="background: linear-gradient(to  right bottom, lightblue, pink);">
			
				<div class="container" >
				<div class="row" style="padding-top: 10px;">
						<h2 class="logincontent"><span style="border-bottom:2px solid #201755;">Sign In </span></h2>
					</div>
            <br>
			<div class="row" >
            <form method="post" action="{{ url('/details') }}" class="basicform logincontent form-horizontal" id="form" enctype="multipart/form-data">
             @csrf
                    <div class="input-group">
                        
                        <input id="user" type="text" class="form-control" name="user" placeholder="User">                                        
                    </div>

                    <div class="input-group">
                      
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password"><!-- <i class="far fa-eye-slash" id="togglePassword" style=" cursor: pointer; padding: 5px; border:solid 1px #aaa;padding-top: 10px; border-radius: 1px;"></i> -->
                        <i class="bi bi-eye-slash" id="togglePassword" style=" cursor: pointer; padding: 5px; border:solid 1px grey;padding-top: 5px; border-radius: 1px; background-color:lightblue;"></i>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-12" style="display:flex;">
                        
                        <div class="col-lg-11">
                           <input type="checkbox" name="remember_me" id="remember_me" class="form-group"> 
                        
                             <label class="form-group" for="remember_me">Remember Me!</label>
                        </div>
                     </div>  
                 </div> 
                     <div class="row" style="margin-top:-50px;">   
                        <div class="form-group col-lg-12">
                         <a href="#resetpassword" class="resetpassword" data-target="#resetpassword" style="color: blue; justify-content: center;">Forgot Password</a>
                         </div>
                    </div>
                    <div class="row" style="margin-top:-50px;">
                        <div class="form-group col-lg-12">
                             <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form> 
                    <div class="row logincontent" style="margin-top: -20px;" >
                        <p>Don't have an account? <a href="{{url('/registeruser')}}"  style="color: blue;">SignUp Here</a></p>
                    </div>
                </div> 
            
			</div>
					
		</div>

    </div>
</div>
	<!-- </div> -->


 </section> 
  <div class="container-fluid " id="resetpassword" style="display: none; ">

        <div class="row main-content bg-success text-center">
        <div class="col-md-5 text-center company__info">
                <span class="company__logo"><h2><span><img src="img/logo3.png" class="img-fluid"></span></h2></span>
                <h4 class="company_title">Hair Circle Studio</h4>
            </div>
            <div class="col-md-7  login_form ">
                <div class="container">

                <div class="row" style="padding-top: 10px;" >
                        <h2 class="logincontent"><span style="border-bottom:2px solid #201755; ">Reset Password </span></h2>
                </div>
          <br>
            <!-- <div class="row"> -->
            <form method="post" action="{{ url('/resetpassword') }}" class="basicform logincontent form-horizontal" id="form" enctype="multipart/form-data">
             @csrf
                    <div class="input-group">
                        
                        <input id="email" type="text" class="form-control" name="user" placeholder="User">                                        
                    </div>

                    <div class="input-group">
                      
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" onkeydown="check()"><i class="bi bi-eye-slash" id="togglePassword" style=" cursor: pointer; padding: 5px; border:solid 1px #aaa;padding-top: 5px; border-radius: 1px;"></i>

                    </div> 
                    <div class="input-group">
                      
                        <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password" onkeydown="check()"><i class="bi bi-eye-slash" id="togglePassword" style=" cursor: pointer; padding: 5px; border:solid 1px #aaa;padding-top: 5px; border-radius: 1px;"></i>

                    </div> 
                    <span id='message'></span>
                    <div class="form-group">
                        <button class="btn" type="submit">Reset Password</button>
                    </div> 
                </form> 
               
                <!-- </div>  -->
                  
                    </div>
                   
                </div>

            </div>
        </div>
 <!--  <div id="resetpassword" class="modal">
                    <form method="post" action="" class="basicform logincontent form-horizontal" id="form" enctype="multipart/form-data">
                        <div class="row">
                            <center><h4>Reset Password</h4></center>
                        </div>
                    </form>
                </div> -->
<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 -->

  <script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "married") {
                    $("#otherAnswer").show();
                } else {
                    $("#otherAnswer").hide();
                }

        if ($(this).val() == "Divorced") {
                    $("#divorcedans").show();
                } else {
                    $("#divorcedans").hide();
                }
            });
        });


    </script>
    <script type="text/javascript">
//         $('#pass, #c_pass').on('keyup', function () {
//   if ($('#password').val() == $('#cpassword').val()) {
//     $('#message').html('Matching').css('color', 'green');
//   } else 
//     $('#message').html('Not Matching').css('color', 'red');
// });

var check = function() {
  if (document.getElementById('pass').value ===
    document.getElementById('c_pass').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}
    </script>
    <script type="text/javascript">
       $(document).ready(function () {
        $("a[class='resetpassword']").click(function () {
            $("#resetpassword").show();
            $("#loginmain").hide();
        });
    });
    </script>
<script type="text/javascript">
      const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi-eye');
});

//   const togglePassword = document.querySelector('#togglePassword');
//   const password = document.querySelector('#cpassword');
 
//   togglePassword.addEventListener('click', function (e) {
//     // toggle the type attribute
//     const type = password.getAttribute('type') === 'password' ? 'text' : 'cpassword';
//     password.setAttribute('type', type);
//     // toggle the eye slash icon
//     this.classList.toggle('bi-eye');
// });
    </script>
 
</body>
   
</html>