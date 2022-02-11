<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
   <!--Made with love by Mutiullah Samim -->
   
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body style="background-image: url('img/bgimage.jpg');">
<div class="container" id="login">
        <div class="row">
            @if(Session::has('message'))
                <div class="alert alert-success w-50 mt-5" id="myElem">
                    <ul>

                        <li>{{ Session::get('message') }}</li>

                    </ul>
                </div>
            @endif
        </div>
    <div class="d-flex justify-content-center h-100">

        <div class="card" >
            <div class="card-header">
                <h3>Admin Login</h3>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{url('/admin_login')}}">
                @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="user" class="form-control" placeholder="Username Or Mobile Number">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="pass" class="form-control" placeholder="password">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="#" id="registerbtn" onclick="register();">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="#" id="forgotpassword">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container " id="register" style="display:none">
    <div class="d-flex justify-content-center h-100">
        <div class="card1">
            <div class="card-header">
                <h3>Admin Sign Up</h3>
            </div>
            <div class="card-body mb-4">
               <form  method="POST"  action="{{url('/admin_register')}}">
                @csrf
                     <div class="input-group form-group">
                        <input type="number" name="mobile" class="form-control" placeholder="Mobile">
                    </div>
                    <div class="input-group form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email@gmail.com">
                    </div>
                    <div class="input-group form-group">
                        <input type="text" name="user" class="form-control" placeholder="username">
                    </div>
                    <div class="input-group form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Sign Up" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-center links">
                    You have Already Account?<a href="#" id="loginbtn" onclick="login();">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container " id="frpass" style="display:none">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Forgot Password</h3>
            </div>
            <div class="card-body">
               <form  method="POST"  action="{{url('/admin_frpass')}}">
                @csrf
                     <div class="input-group form-group">
                        <input type="text" name="email_or_mo" class="form-control" placeholder="Mobile Or Email">
                    </div>  
                    <div class="input-group form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-center links">
                    You have Already Account?<a href="#" id="loginbtn">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        $("#registerbtn").click(function(){
            $("#login").hide();
            $("#register").show();
        });    

        $("#loginbtn").click(function(){
            $("#login").show();
            $("#register").hide();
        });

        $("#forgotpassword").click(function(){
            $("#login").hide();
            $("#register").hide();
            $('#frpass').show();
        });    


$("#myElem").show();
setTimeout(function() { 
    $("#myElem").hide(); 
}, 5000);
    
</script>
</body>
</html>