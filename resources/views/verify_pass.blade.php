<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hair Transplant</title>
    <link href="/css/fontawesome.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="css/productcarousel.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" >
    </script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>
<style>
    .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}
.ml-4{
    color: #4CAF50;
}
                        #togglePassword{
                            margin-top: -60px; 
                            margin-left: 300px; 
                        }
                        #id_password{
                           width:300px; 
                        }
                       /* @media only screen and (max-width: 767px){*/
                       /*     #togglePassword{*/
                       /*     margin-top: -40px; */
                       /*     margin-left: 230px; */
                       /*     cursor: pointer;*/
                       /* } */
                       /* }*/
                       /*@media screen and (min-device-width: 792px) and (max-device-width: 920px) { */
                       /*     #togglePassword{*/
                       /*     margin-top: -35px; */
                       /*     margin-left: 300px; */
                       /*     cursor: pointer;*/
                       /* } */
                       /* }*/
</style>
<div>
@include('nav2')
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pques">{{ __('Please Verify Code') }}</div>

                <div class="card-body">
                     @if(Session::has('message'))
                    <div class="alert alert-danger">{{Session::get('message')}}</div>
                    @endif
                    @foreach($password as $pass)
                    <form method="post" action="{{url('/rrb_pass',$pass->id)}}">
                        @csrf


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" required>

                                @if ($errors->has('code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Change Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="Enter password" id="id_password"><i class="bi bi-eye-slash" id="togglePassword" ></i>

                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="c_password" required onchange="check();" id="cpassword">
                          </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                           
                            </div>
                        </div>
 

                       
                    </form>
                    @endforeach
                </div>
                <!--<div class="card-footer">-->
                <!--    <a href="">Resend new code</a>-->
                <!--    <input type="hidden" name="phone" value="{{request()->phone}}">-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
<!--<script src="js/jquery.js"></script>-->
<!--<script src="js/main.js"></script>-->

    <script type="text/javascript">
        function check() {
          if (document.getElementById('password').value ===
            document.getElementById('cassword').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Matching';
          } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Not Matching';
          }
        }
    </script>
    <script type="text/javascript">
 
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
 
</body>
   
</html>