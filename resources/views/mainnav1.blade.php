<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
<link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">
 <link href="css/login.css" rel="stylesheet">
    <!-- Styles -->
    <!-- <link href="css/app.css" rel="stylesheet"> -->

<!-- <nav class="navbar navbar-expand-lg sticky-top " style="background: linear-gradient(to  right bottom, lightblue, pink);" >
  <a class="navbar-brand" href="#"><img src="img/Hair Circle Logo-01.png" class="img-fluid"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="color: black;">
    <span class="navbar-toggler-icon" ></span>
  </button> -->
  <!-- <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <!-- <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
     
    <li class="nav-item active"><a href="{{url('/')}}" class="nav-link text-uppercase font-weight-bold">Home </a></li>

              <li class="nav-item"><a href="{{url('/product')}}" class="nav-link text-uppercase font-weight-bold">Product</a></li>
              
        <li class="nav-item"><a href="{{url('/viewcart')}}" class="nav-link text-uppercase font-weight-bold">cart(<span class="total-count"></span>)</a></li>
        
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
  </div> -->
<!-- </nav> -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(to  right bottom, lightblue, pink);">
  <a class="navbar-brand" href="#"><img src="img/Hair Circle Logo-01.png" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active"><a href="{{url('/')}}" class="nav-link text-uppercase font-weight-bold">Home </a></li>
      <li class="nav-item"><a href="{{url('/product')}}" class="nav-link font-weight-bold">Product</a></li>
      <!-- <li class="nav-item"><a href="{{url('/viewcart')}}" class="nav-link text-uppercase font-weight-bold">cart(<span class="total-count"></span>)</a></li> -->
      <li class="nav-item"><a href="{{url('/pquestion1')}}" class="nav-link font-weight-bold " >HairAnalysis Q.</a></li>
      <li class="nav-item">
          <div class="dropdown">
            <a href="#" role="button" class="nav-link font-weight-bold"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{session('user.name')}}
            </a>
          <div class="dropdown-menu " aria-labelledby="dropdownMenuLink" >
            @if(session('user.patients_id'))
            <a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/details_after')}}">Profile</a>
            @else
            <a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/profile')}}">Profile</a>
            @endif
            <a class="dropdown-item text-uppercase font-weight-bold" href="{{url('/logout')}}">logout</a>
    
          </div>
        </div>
        </li>
    </ul>
  </div>
</nav>
<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
<script src="js/main.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>