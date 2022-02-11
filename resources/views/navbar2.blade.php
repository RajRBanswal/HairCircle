<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">


<nav class="navbar navbar-expand-lg sticky-top bg-light " style="background: linear-gradient(to  right bottom, lightblue, pink);" >
  <a class="navbar-brand" href="#"><img src="img/Hair Circle Logo-01.png" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
     
    <li class="nav-item active"><a href="{{url('/')}}" class="nav-link text-uppercase font-weight-bold">Home </a></li>
                         

  <!-- <li class="nav-item"> -->
   <!--  <div class="dropdown">
      <a href="#" role="button" class="nav-link text-uppercase font-weight-bold"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SignUp
      </a> -->

  <!--   <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item font-weight-bold" href="{{ url('/vendor-register') }}">Vendor SignUp</a>
        <a class="dropdown-item font-weight-bold" href="{{ url('/e_register')}}">Employee SignUp</a> -->
        <!-- <a class="dropdown-item font-weight-bold" href="{{url('/signin')}}">Signup</a> -->

   <!--  </div> -->
<!--   </div> -->
          <!--     </li>
              <li class="nav-item"><a href="{{url('/login')}}" class="nav-link text-uppercase font-weight-bold">Login</a></li> -->
              
      <!--   <li class="nav-item"><a href="{{url('/viewcart')}}" class="nav-link text-uppercase font-weight-bold">cart(<span class="total-count"></span>)</a></li> -->
        
        <li class="nav-item">
          <div class="dropdown">
              <a href="#" role="button" class="nav-link text-uppercase font-weight-bold"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{session('user.name')}}
              </a>
           
          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink" >
            <a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/profile')}}">Profile</a>
            <a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/logout')}}">logout</a>
    
          </div>
           </div>
        </li>
    </ul>
  </div>
</nav>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>