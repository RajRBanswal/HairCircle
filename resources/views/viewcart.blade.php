<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Hair Transplant</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/productcarousel.css" rel="stylesheet"> -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

  
</head>

  <body>

  <div>
@include('mainnav1')
</div>


 <div class="container">


     <div class="card">
         <div class="card-body" >

         <h2 class="text-center">MY CART</h2>

         <div class="row">

          <table class="show-cart table table-sm" >
          
          </table>
          </div>
        
         <div class="row">

              <div class="col-md-4 col-sm-6" id="demo"> Total price :  <i class="fas fa-rupee-sign"></i>  <span class="total-cart"></span></div>  
               <!-- <p class="showtext">"Nothing Selected"</p> -->
            


            <div class="col-md-4 col-sm-6">  <a href="{{url('/login')}}"> <button type="button" class="btn btn-primary">Order now</button></a>  </div>
            <div class="col-md-4 col-sm-6">   <button type="button" class="btn btn-primary clear-cart"  onclick="myFunction()">Clear Cart</button> </div>
        
              
           
         
        </div>
     
       
        
      
      
  
        


         </div>
     </div>

 
 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
   <script src="js/main.js"></script>

   <script>


$( document ).ready(function() {
  myFunction();

});

function myFunction(){
  var aa = $(".total-count").text();
  // alert(aa);
if(aa == 0){
  document.getElementById("demo").innerHTML = "Nothing Selected!";
}


}
 </script>
</body>
   
</html>