@extends('nav2')

@section('content')
<div class="container">
  <div class="container mt-3 mx-auto" id="loginmain">
    <form method="post" action="{{ url('/details') }}" enctype="multipart/form-data">
            @csrf
    <div class="card card0 border-0 mb-3">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 ">
                    <div class="row justify-content-center m-4 border-line"> <img src="img/logo/chang_logo2.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0">
                    <div class="row mb-4 px-3 mt-2">
                        <div id="hideDiv">
                             @if(Session::has('alert'))
                                <div class="alert alert-info texts" id="success">
                                        {{ Session::get('alert') }}
                                </div>
                            @endif
                        </div>
                        <h2 class="mb-0 mr-4 mt-4">Sign in</h2>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Email Address Or Mobile Number</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Email Or Mobile"> </div>
                    <div class="row px-3 mb-3"> 
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> 
                        <input type="password" name="password" placeholder="Enter password" id="id_password"><i class="bi bi-eye-slash" id="togglePassword" ></i>
                        <!--<i class="far fa-eye-slash" id="togglePassword" style="margin-top: -35px; margin-left: 330px; cursor: pointer;"></i> -->
                        <style type="text/css">
                           #togglePassword{
                            margin-top: -40px; 
                            margin-left: 390px; 
                            cursor: pointer;
                        }
                        @media only screen and (max-width: 767px){
                            #togglePassword{
                            margin-top: -40px; 
                            margin-left: 230px; 
                            cursor: pointer;
                        } 
                        }
                       @media screen and (min-device-width: 792px) and (max-device-width: 920px) { 
                            #togglePassword{
                            margin-top: -35px; 
                            margin-left: 300px; 
                            cursor: pointer;
                        } 
                        }
                        </style> 
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-md-1 col-2">
                            <input id="chk1" type="checkbox" name="chk" class="form-control-input"> 
                        </div>
                        <div class="form-group col-md-5 col-4">
                            <label for="chk1" class="form-group text-sm">Remember me</label> 
                        </div>
                        <div class="form-group col-md-6 col-6">
                            <a href="{{url('/reset_password')}}" class="resetpassword" data-target="#resetpassword">Forgot Password?</a>
                        </div>
                    </div>
                   
                    <div class="form-group col-lg-6 col-md-6 col-12 rrb" >
					   <input type="submit" name="submit" class="btn btn-outline-info btn1" value="Login">
					</div>
					 <!--<div class="row mb-2">-->
      <!--                  <div class="form-group col-lg-6 col-md-6 col-12">-->
      <!--                      <a href="{{url('/reset_password')}}" class="resetpassword" data-target="#resetpassword">Forgot Password?</a>-->
      <!--                  </div>-->
      <!--              </div>-->
                  
              <style type="text/css">
                .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                  width:200px;
                }
                .signup1{
                    color: #DAA520;
                }
                .signup1:hover{
                    color: #000;
                }
                .resetpassword{
                    color: #DAA520;
                }
                .resetpassword:hover{
                    color: #000;
                }
              </style>
                    <div class="row mb-4 mt-3"> 
                        <!-- Default dropup button -->
                        <div class="btn-group dropup">
                          <small class="font-weight-bold">Don't Have an Account? <a href="{{url('/registration')}}" class="signup1">Sign Up</a>
                          </small>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
          
        </div>
        <!-- <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div> -->
    </div>
    </form>
  </div>
  </div>

<!--</div-->
<script type="text/javascript">
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
    <script>
      $(document).ready(function () {
        $("a[class='resetpassword']").click(function () {
            $("#resetpassword").show();
            $("#loginmain").hide();
        });
    });

//    setTimeout(function() {
//     $('#successMessage').fadeOut('fast');
// }, 30000); // <-- time in milliseconds
    </script>
    <script type="text/javascript">
        // const togglePassword = document.querySelector('#togglePassword');
        // const password = document.querySelector('#id_password');
 
        // togglePassword.addEventListener('click', function (e) {
        //     // toggle the type attribute
        // const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        // password.setAttribute('type', type);
        // // toggle the eye slash icon
        // this.classList.toggle('far fa-eye');
        // });
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');
        togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
    </script>
    <script>
        // $("#success").ready(function(){
        //     setTimeout(function() { $("#success").hide(); }, 5000);
        // });
            
    </script>
<script>
        // function hideDiv(){
        // $("#success").ready(function(){
        //     setTimeout(function() {
        //       $('#success').fadeOut('fast');
        //       }, 300); 
        // }
setTimeout(function() {
    $('#hideDiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<style type="text/css">
    body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 10px;
}

.card2 {
    margin: 0px 40px;
}

.logo1 {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px
}

.image {
    /*margin: 25px;*/
    width: 400px;
    height: 400px
}

.border-line {
    border-right: 1px solid #EEEEEE
}
.dropup a{
    font-size: 17px;
    font-weight: bold;
}
 .dropdown-menu a:hover{
    background-color: #DAA520;
}

.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px
}

.or {
    width: 10%;
    font-weight: bold
}

.text-sm {
    font-size: 14px !important
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

/*a {
    color: inherit;
    cursor: pointer
}*/

.btn-blue {
    background-color: #1A237E;
    width: 150px;
    color: #fff;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer
}

.bg-blue {
    color: #fff;
    background-color: #1A237E
}

@media screen and (max-width: 991px) {
    .logo1 {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 250px
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px
    }
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
@endsection

