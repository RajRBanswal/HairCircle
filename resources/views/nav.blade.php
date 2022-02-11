<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <!--<title>-->
  <!--  @yield('title')-->
  <!--</title>-->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/sticky.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="https://www.ewebdigital.com">www.ewebdigital.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 7798908888</span></i>
      </div>


      <!-- <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div> -->
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="{{url('/')}}">Hair Circle<span>.</span></a></h1> -->
      <!-- <h1 class="logo"><a href="{{url('/')}}"><img src="img/logo/hairlogo.jpeg" alt=""></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="{{url('/')}}" class="logo"><img src="{{asset('img/logo/chang_logo1.png')}}"  alt="">
        <h1 class="logo1">Hair Circle</h1><br><p>The Wholistic Hair Therapy</p> 
        </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
    
           @if(session('user.name'))
            <li class="dropdown"><a href="#"><span>{{session('user.name')}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @if(session('user.patients_id'))
                <li><a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/user_dashboard')}}">Profile</a></li>
              @else
                <li><a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/p_details')}}">Profile</a></li>
              @endif
                <li><a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/logout')}}">logout</a></li>
            </ul>
          </li>
        
          @else
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#testimonial">Info</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!--<li class="dropdown"><a href="#"><span>Signup</span> <i class="bi bi-chevron-down"></i></a>-->
          <!--  <ul>-->
          <!--    <li><a class="nav-link" href="{{url('/vendor-register')}}">Vendor</a></li>-->
          <!--    <li><a class="nav-link" href="{{url('/registration')}}">Customer</a></li>-->
          <!--    <li><a class="nav-link" href="{{url('/e_register')}}">Employee</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          <li><a class="nav-link scrollto" href="{{url('/login')}}">Login</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class="content">

        @yield('content')
        
</div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script> -->
 <script src="{{asset('assets/js/jquery.min.js')}}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</body>
@yield('scripts')
</html>