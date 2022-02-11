<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>
    <style type="text/css">
    body {
        height: 450px;
    }
    </style>
</head>

<body style="background: radial-gradient(red, blue);">
<div class="m-5">
@if(Session::has('message'))
    <div class="alert alert-danger w-50">
        <ul>

            <li>{{ Session::get('message') }}</li>

        </ul>
    </div>
    @endif
</div>

    <div class="m-5 p-5 shadow-lg p-3 mb-5 bg-body rounded" style="height:400px;  ">
 
        <form  method="POST"  action="{{url('/admin_login')}}">
        @csrf
            <div class="Absolute-Center is-Responsive">
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <img src="img/security.jpg" class="rounded-circle" style="" alt="Cinque Terre"
                        width="120" height="120">
                </div>


                <div class="mb-3 d-flex justify-content-center align-items-center">

                    <input type="text" class="form-control w-50" id="" aria-describedby="" name="user"
                        placeholder="Username" width="50px" style="border-radius:20px;" required>

                </div>
                <div class="mb-3 d-flex justify-content-center align-items-center">

                    <input type="password" class="form-control w-50" id="exampleInputPassword1" name="pass"
                        placeholder="Password" style="border-radius:20px;" required>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="form-control btn w-50 text-white"
                        style="border-radius:20px; background-image: linear-gradient(to bottom right, #403836, #de5f35);">
                        Login </button>
                </div>

<!--                 
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">New User</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">Forgate Password</a>
                        </div>
                    </div>
                </div> -->

        </form>

    </div>
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>