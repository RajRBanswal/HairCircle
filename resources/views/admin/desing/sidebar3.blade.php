
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background: #7386D5;
    color: #fff;">
            <ul class="sidebar-nav" >
                <li class="sidebar-brand">
                    <B style="color: blue;">Welcome to
                        HairCircle

                    </B>

                </li>
                <li class="pb-3">
                    
                        <div class="">
                            <img src="img/logo/hairlogo.jpeg" class="img-fluid">
                        </div>
                        
                    
                </li>
                <li >

                    <a href="{{url('/my_dashbord')}}" style="color: black;">Dashboard</a>
                </li>
                <li >
                    <a href="{{url('/customer_list')}}" style="color: black;">Customers</a>
                </li>
                <li >
                    <a href="{{url('/vendor_list')}}" style="color: black;">Vendors</a>
                </li>
                <li >
                    <a href="{{url('/employee_list')}}" style="color: black;">Employees</a>
                </li>
                <li >
                    <a href="{{url('/all_order')}}" style="color: black;">Ordered</a>
                </li>
                 <li >
                    <a href="{{url('/all_enquiry')}}" style="color: black;">All Enquiry</a>
                </li>
                 <li >
                    <a href="{{url('/products_list')}}" style="color: black;">Product List</a>
                </li>
            
                <li >
                    <a href="{{url('/kyc')}}" style="color: black;">Account KYC</a>
                </li>

                <!-- <li >
                    <a href="{{url('/payment')}}" style="color: black;">Payments</a>
                </li> -->
                <li >
                    <a href="{{url('/new_user')}}" style="color: black;">Add New User</a>
                </li>
                <li >
                    <a href="{{url('/change_password')}}" style="color: black;">Change Password</a>
                </li>
                
                
            </ul>
            
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <!-- <div class="row"> -->
            <!-- <div class="container" > -->
                <div class="row nav" style="background: linear-gradient(to bottom right, lightblue, pink);">
                    <div class="form-group col-md-2 col-6 mt-3">
                        <a href="#menu-toggle" class="text-dark" style="text-decoration:none" id="menu-toggle">
                            <!-- Icon Here -->
                            <h1> <i style="font-size:24px; padding-left: 10px;" class="fa">&#xf0c9;</i> </h1>
                        </a>
                    </div>
                    
                    <div class="col-md-8 col-2"></div>
                    <div class=" form-group col-md-2 col-4 mt-3">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 15px; border:solid 1px black; ">
                                        {{session('user.username')}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item texts" style="font-size: 15px;" href="admin_panel">Logout</a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            <!-- </div> -->

            <div class="container p-4">
                @yield('content')
            </div>

        <!-- </div> -->
        <!-- /#page-content-wrapper -->

    </div>

    <!-- /#wrapper -->
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>









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


<!doctype html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/app.css" rel="stylesheet">

    <title>Vendor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

   <link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="{{ asset('/main/main.js') }}"></script>

    <style type="text/css">
        .nav{
            width: 100%;
        }
    </style>
   
</head>

<body>




    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background: linear-gradient(to bottom right, lightblue, pink);"  >
            <ul class="sidebar-nav" >
                <li class="sidebar-brand">
                    <B style="color: blue;">Welcome to
                        HairCircle

                    </B>

                </li>
                <li class="pb-3">
                    
                        <div class="">
                            <img src="img/Hair Circle Logo-01.png" class="img-fluid">
                        </div>
                        
                    
                </li>
                <li >
                    <a href="{{url('/my_dashboard')}}" style="color: black;">Dashboard</a>
                </li>
                <li >
                    <a href="{{url('/my_profile')}}" style="color: black;">My Profile </a>
                </li>
                <li >
                    <a href="{{url('/all_customers')}}" style="color: black;">Customers</a>
                </li>
                <!-- <li >
                    <a href="{{url('/')}}" style="color: black;">Employees</a>
                </li>
            
                <li >
                    <a href="{{url('/')}}" style="color: black;">Account KYC</a>
                </li>

                <li >
                    <a href="{{url('/payment')}}" style="color: black;">Payments</a>
                </li> -->
                <li >
                    <a href="{{url('/place_order')}}" style="color: black;">Place Order</a>
                </li>
                <li >
                    <a href="{{url('/product_list')}}" style="color: black;">Product List</a>
                </li>
                <li >
                    <a href="{{url('/all_user')}}" style="color: black;">Genealogy</a>
                </li>
                
            </ul>
            
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <!-- <div class="row"> -->
            <!-- <div class="container" > -->
                <div class="row nav" style="background: linear-gradient(to bottom right, lightblue, pink);">
                    <div class="col-md-10 col-8 mt-3">

                        <a href="#menu-toggle" class="text-dark" style="text-decoration:none; margin-right: 10px" id="menu-toggle">
                            <!-- Icon Here -->
                            <h1> <i style="font-size:24px; padding-left: 10px;" class="fa">&#xf0c9;</i> </h1>
                        </a>
                    </div>
                   <!--  <div class="col-md-8 mt-2">
                    </div> -->
                    <div class="col-md-2 col-4 mt-3">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 15px; border:solid 1px black; ">
                                        {{session('user.name')}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item texts" style="font-size: 15px;" href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                        </div>   
                    </div>
                </div>
            <!-- </div> -->

            <div class="container p-4">
                @yield('content')
            </div>

        <!-- </div> -->
        <!-- /#page-content-wrapper -->

    </div>

    <!-- /#wrapper -->
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>









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