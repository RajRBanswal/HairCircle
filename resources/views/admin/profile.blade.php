  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <title>EVERGOAL</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      

  </head>

  <body>
  @include('navbar')
  <!-- Main Content -->

  <div class="container">
      <div class="row">
              <div class="offset-2"></div>
              <div class="col-md-8">
                  <center>	<img  src="{{asset('/img/Evergoal Circle Logo.png')}}"   alt="" style="height: 6rem;"></center>
                    <h1 class="text-center cname"><span style="color:#00284d;">Welcome to </span></h1><img  src="{{asset('/img/logo123.png')}}" class="img-fluid">

              </div>
          </div>
          <hr>
      <div class="row justify-content-center mt-3">
        
          <div class="col-md-4 mt-3">
          <h2 class="text-center" style="color:#00284d;">My Profile</h2></br>
            @if($errors->has("name"))
                <label class="text-danger">*{{$errors->first('name')}}</label>
              @endif  
              @if($errors->has("mobile"))
                <label class="text-danger">*{{$errors->first('mobile')}}</label>
              @endif  

              @if(Session::has("success"))
                <label class="text-success">*{{Session::get('success')}}</label>
              @endif  
              
                  <div class="card mb-5 p-4 card_border border_color" style="">
                  
                      @foreach($data as $user_data)
                      <img  class="img-fluid circle_img border_color" src="{{ asset('/storage/' . $user_data->pimg) }}"  alt="" style="height:200px;width:200px; margin-left:auto;margin-right:auto;display:block;">
                      <h3 class="text-center"></h3>
                      <div class="card-body text-center">
                          <h5 class="text-info">Your Id : {{$user_data->id}}</h5>
                          <h5 class="text-info">You Used Sponser Id : {{$user_data->sponserid}}</h5>
                          <!-- <p><strong>Name:</strong>Shubh</p> -->
                          <h5 class="text-info"> Mobile No : {{$user_data->mobile}}</h5>
                      @endforeach 
                          

                  <button type="button" class="btn allbtn card_border button_red btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Update</button>
                      </div>
                      </div>
          </div>
      </div>
  </div>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
          <form method="POST" action="{{route('profileUpdate.created')}}">
          @csrf
          @foreach($data as $user_data)
          <input type="hidden" class="form-control" id="recipient-id" name="id" value="{{$user_data->id}}">

        
            <div class="form-group">
              <label for="message-text" class="col-form-label">Name:</label>
              <input type="text" class="form-control"  name="name" id="recipient-name" value="{{$user_data->name}}">
            
            </div>

            <!-- <div class="form-group">
              <label for="message-text" class="col-form-label">Mobile No:</label>
              <input type="text" class="form-control" id="recipient-no" name="mobile"  value="{{$user_data->mobile}}">
            </div> -->
            @endforeach()
        

        </div>
        <div class="modal-footer">
          <button type="button" class="btn allbtn" data-dismiss="modal">Close</button>
          <button type="submit" class="btn allbtn">Save</button>
        </div>
        </form>
      </div>
    </div> 
  </div>



  <!-- Close Main Content -->


  @include('footer');
  <!-- Scripts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
          crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
          crossorigin="anonymous"></script>
      
  </body>

  </html>