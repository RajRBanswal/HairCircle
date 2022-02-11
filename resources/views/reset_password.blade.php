@extends('nav2')

@section('content')
<div class="container">
  <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto" id="resetpassword">
    <form method="post" action="{{ url('/resetpassword') }}" class="basicform logincontent form-horizontal" id="form" enctype="multipart/form-data">
    @csrf
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 ">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="img/logo/Logo Final (1).png" class="image"> </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card2 card border-0">
                    <div class="row mb-4 px-3">
                        <h2 class="mb-0 mr-4 mt-5">Reset Password</h2>
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Mobile No. Or Email Address</h6>
                        </label> </label> <input class="mb-4" type="text" name="user" placeholder="Enter Mobile or Email">  
                    </div>
                    <!--<div class="row px-3"> <label class="mb-1">-->
                    <!--    <h6 class="mb-0 text-sm">Password</h6>-->
                    <!--    </label> <input class="mb-4" type="password" name="password" placeholder="Enter password"> -->
                    <!--</div>-->
                    <!--<div class="row px-3"> <label class="mb-1">-->
                    <!--    <h6 class="mb-0 text-sm">Confirm Password</h6>-->
                    <!--    </label> <input class="mb-4" type="password" name="cpassword" placeholder="Enter confirm password"> -->
                    <!--</div>-->
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Reset</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a href="{{url('/login')}}" class="text-danger ">Login</a></small> </div>
                </div>
            </div>
          
        </div>
    </div>
    </form>
  </div>
</div>


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
    width: 300px;
    height: 280px
}

.border-line {
    border-right: 1px solid #EEEEEE
}

/*.facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}*/

/*.twitter {
    background-color: #1DA1F2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}*/

/*.linkedin {
    background-color: #2867B2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}*/

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

a {
    color: inherit;
    cursor: pointer
}

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
        height: 220px
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
@endsection

