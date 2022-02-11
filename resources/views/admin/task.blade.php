<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Evergoal</title>
  </head>
  <body>
    @include('navbar')

    <div class="container ">
            <div class="row">
              <div class="offset-2"></div>
              <div class="col-md-8">
                  <center>	<img  src="{{asset('/img/Evergoal Circle Logo.png')}}"   alt="" style="height: 6rem;"></center>
                    <h1 class="text-center cname"><span style="color:#00284d;">Welcome to </span></h1><img  src="{{asset('/img/logo123.png')}}" class="img-fluid">

              </div>
          </div><hr>
          <form class="mt-2" action="{{url('/submit_task')}}" method="post" enctype='multipart/form-data'>
            @csrf
			
				<div class=" mt-5 jumbotron jumbotron-fluid">
					<div class="row justify-content-center">
			
                <div class="col-12 col-lg-6 text-center " >
                    
                     <div class="row justify-content-center">
						<div class="col-12">
							<label clsss=""><b>1 Task: </b>Please Upload one Post on Facebook, Instagram, WhatsApp and upload screen shot here.</label>
						</div>
                            <div class=" col-lg-7 col-md-7 mt-3">
                             <input type="file" name="task" class="btn">
                            </div>
                            <div class=" col-11 col-lg-3 col-md-3 mt-3">
                            <button type="submit" class="btn btn-secondary allbtn card_border btn-block">Submit</button>
                            </div>
                    </div>
                    <div class="row">
                    @if ($errors->any())
                        <div class="alert text-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif

                      @if(Session::has('message'))
                        <p class="alert text-success">{{ Session::get('message') }}</p>
                     @endif
                    </div>
                </div>
                
               
				</div>
            </div>
        
        </form>             
     </div>
    
        <!--------footer--------->
    @include("footer")






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>