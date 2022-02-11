
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    Customers
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="{{asset('assets/img/favicon.png')}}" rel="icon"> -->
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('./sidebar/style.css')}}">
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
       <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" rel="stylesheet" /> -->
       
</head>

<body >
  @if(session('user.name'))
        <div class="wrapper d-flex align-items-stretch">
             <nav id="sidebar" class="sidebar1">
                  <h1>
                   <a href="{{url('/')}}" class="logo"><img src="{{asset('img/logo/hairlogo.jpeg')}}" class="img-fluid" style="height: 250px; width: 300px; border-right: solid 1px #000;"></a>
                </h1>
                <div class="p-4 pt-2">
                <!-- <div class="p-4">
                <h1>
                    <a href="{{url('/')}}" class="logo"><img src="{{asset('img/logo/hairlogo.jpeg')}}" class="img-fluid" style="height: 250px; width: 300px; border-right: solid 2px #000;"></a>
                </h1> -->
                    <ul class="list-unstyled components mb-5">
                      <li class="active">
                        <a href="{{url('/user_dashboard')}}"><span class="fa fa-home mr-3"></span> Dashboard</a>
                      </li>
                      <li>
                         <a class="active" href="{{url('/details_after')}}"><i class="fa fa-user mr-3"></i> My Profile</a>
                      </li>
                     <!--  <li>
                      <a href="{{url('/hair_health')}}"><i class="fa fa-area-chart mr-3"></i> Analyse My Hair</a>
                      </li>
                      <li>
                      <a href="{{url('/serious_abt_hair')}}"><i class="fa fa-list mr-3"></i>Are you Serious<br>About you Hair</a>
                      </li> -->
                      <li>
                      <a class="" href="{{url('/hair_health')}}"><i class="fa fa-shopping-cart mr-3"></i>Past Visits</a>
                      </li>
                      <li>
                      <a class="" href="{{url('/images')}}"><i class="fa fa-shopping-cart mr-3"></i>Images</a>
                      </li>
                      <li>
                      <a class="" href="{{url('/purchase_history')}}"><i class="fa fa-shopping-cart mr-3"></i>Purchase History</a>
                      </li>
                      <!--<li>-->
                      <!--<a href="{{url('/buy_product')}}"><i class="fa fa-suitcase mr-3"></i>Buy Product</a>-->
                      <!--</li>-->
                      <li>
                      <a class="" href="{{url('/all_ref_user')}}"><i class="fa fa-trophy mr-3"></i>Credit Points</a>
                      </li>
                      
                    </ul>
                </div>
            </nav>

            
             <div id="content">
              <!--Navbar -->
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark lighten-1 " style="background-color: #DAA520;">
                  <a class="navbar-brand ml-4" id="sidebarCollapse" href="#" style="margin-left:10px;">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                  </a>
                  <div class=" navbar-collapse d-flex" id="navbarSupportedContent-555">
                    <ul class="navbar-nav mr-auto">
                        <!--<li><a class="nav-link scrollto active home" href="{{url('/')}}">HOME</a></li>-->
                    </ul>
                    
                    <ul class="navbar-nav ml-auto mt-1 nav-flex-icons" >
                        
                      <li class=" avatar dropdown">
                        <a class="nav-link username1" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <b id="usb">{{session('user.name')}} </b> <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-secondary"
                          aria-labelledby="navbarDropdownMenuLink-55">
                          <a class="dropdown-item" href="{{url('/reset_password')}}">Reset Password</a>
                          <a class="dropdown-item" href="{{url('/logout_user')}}">Log Out</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>
<!--/.Navbar -->
            
                    @yield('content')
            </div>
           
        </div>
        @else
        <div class="container">
            <div class="row mt-5 l-9">
                <div class="form-group">
                    <h1><a href="{{url('/login')}}">Login First</a></h1>
                </div>
            </div>
        </div>
        @endif
        <style>
            #sidebar li a{
                text-decoration: none;;
            }
            #usb{
              color: #fff;
              font-size: 20px;
            }
            #usb:hover{
            color: #000;
            }
           .username1{
                margin-right: 100px;
            }
            @media (max-width: 991px) {
               .username1{
                   margin-right:0px;
                   margin-top: -45px;
               }
            }

        </style>

  <script src="{{asset('./sidebar/js/jquery.min.js')}}"></script>  
  <script src="{{asset('./sidebar/js/popper.js')}}"></script>
  <script src="{{asset('./sidebar/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('./sidebar/js/main.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js">
    </script> -->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <script>
    jQuery(document).ready(function($) {
      //jQuery Functionality
      $('#example').DataTable();
      $(document).on('click', '#example tbody tr button', function() {       
        $("#modaldata tbody tr").html("");
        $("#modaldata tbody tr").html($(this).closest("tr").html());
        $("#exampleModal").modal("show");
      });
    } );
    
    
        $('.siderbar1 a').on('click', function(e) {
        e.preventDefault();
        $('.siderbar1 a').removeClass('active');
        $(this).addClass('active');
    })
    </script>
</body>

<!-- @yield('scripts') -->
</html>