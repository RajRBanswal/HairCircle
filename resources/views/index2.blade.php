<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Hair Transplant</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/productcarousel.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

  
</head>

  <body>

  <div>
@include('mainnav')
</div>


<!-- Questions ans -->


<section>

<div class="container mt-5">
 <div class="row">
  <div class="offset-2"></div>

  <div class="col-md-8 mt-2">

  <div class="card" style="border:none;">
  <div class="card-body">
  
  <div id="accordion" class="faq"> 
  <div class="card" style="border-top:6px solid #201755 !important;border:none;">
    <div class="card-header" id="headingOne" style="background-color:white !important;">
      <h5 class="mb-0 faq-title"
        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
        <span class="badge"><i class="fas fa-plus"></i></span> Excessive Hair Growth
      

     
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck"  value="customEx">
    <label class="custom-control-label" for="customCheck"> Lip</label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck1"  value="customEx1">
    <label class="custom-control-label" for="customCheck1"> Chin </label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck2"  value="customEx2">
    <label class="custom-control-label" for="customCheck2"> Abdomen</label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck3"  value="customEx3">
    <label class="custom-control-label" for="customCheck3">No </label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck4"  value="customEx4">
    <label class="custom-control-label" for="customCheck4"> Face</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck5"  value="customEx5">
    <label class="custom-control-label" for="customCheck5"> Other</label>
  </div>

      </div>
    </div>
  </div>
  <div class="card" style="border:none;" >
    <div class="card-header" id="headingTwo" style="background-color:white !important;">
      <h5 class="mb-0 faq-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <span class="badge"><i class="fas fa-plus"></i></span>  Duration
       
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <input class="form-control" type="text" placeholder="Duration In Month">
      </div>
    </div>
  </div>

  <div class="card" style="border:none;" >
    <div class="card-header" id="headingThree" style="background-color:white !important;">
      <h5 class="mb-0 faq-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <span class="badge"><i class="fas fa-plus"></i></span>  Graying of Hair
       
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio">Patchy </label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio2">Diffuse </label>
  </div>
      </div>
    </div>
  </div>


  <div class="card" style="border:none;" >
    <div class="card-header" id="headingFour" style="background-color:white !important;">
      <h5 class="mb-0 faq-title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      <span class="badge"><i class="fas fa-plus"></i></span>  Other
       
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      <input class="form-control" type="text" placeholder="Other">
      </div>
    </div>
  </div>

  <div class="card" style="border:none;" >
    <div class="card-header" id="headingFive" style="background-color:white !important;">
      <h5 class="mb-0 faq-title collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      <span class="badge"><i class="fas fa-plus"></i></span>  Increased Hair Shedding
        
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio3" name="hairshedding" value="Associated" onclick="radioBtn(this)">
    <label class="custom-control-label" for="customRadio3">Associated</label>
   </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio4" name="hairshedding" value="Diffuse" onclick="radioBtn(this)">
    <label class="custom-control-label" for="customRadio4">Diffuse </label>
  </div>
    

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio5" name="hairshedding" value="Localised" onclick="radioBtn(this)">
    <label class="custom-control-label" for="customRadio5">Localised </label>
  </div>


  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio6" name="hairshedding" value="Falling" onclick="radioBtn(this)">
    <label class="custom-control-label" for="customRadio6">Falling with Roots</label>
  </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio7" name="hairshedding" value="Duration" onclick="radioBtn(this)">
    <label class="custom-control-label" for="customRadio7">Duration</label>
  </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio8" name="hairshedding" value="Regression" onclick="radioBtn(this)">
    <label class="custom-control-label" for="customRadio8">Regression of Hair Lines</label>
  </div>

  

<div class="Associated card card1">
<div class="card-body">
   <div class="custom-control custom-checkbox custom-control-inline col-auto">
    <input type="checkbox" class="custom-control-input" id="customCheck7"  value="Pain ">
    <label class="custom-control-label" for="customCheck7"> Pain </label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline col-auto">
    <input type="checkbox" class="custom-control-input" id="customCheck8"  value="Other">
    <label class="custom-control-label" for="customCheck8"> Other  </label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline col-auto">
    <input type="checkbox" class="custom-control-input" id="customCheck9"  value="Burning">
    <label class="custom-control-label" for="customCheck9"> Burning </label>
  </div>
   

  <div class="custom-control custom-checkbox custom-control-inline col-auto">
    <input type="checkbox" class="custom-control-input" id="customCheck10"  value="Itching">
    <label class="custom-control-label" for="customCheck10"> Itching </label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline col-auto">
    <input type="checkbox" class="custom-control-input" id="customCheck11"  value="Scaling ">
    <label class="custom-control-label" for="customCheck11"> Scaling  </label>
  </div>

   </div>
   </div>
   












<div class="Diffuse card card1">
<div class="card-body">
<input class="form-control" type="text" placeholder="Diffuse">
</div>
</div>
   


<div class="Localised card card1">
<div class="card-body">
<input class="form-control" type="text" placeholder="Localised">
</div>
</div>

<div class="Falling card card1"> 
<div class="card-body">
   <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input"  id="yes" name="fall" value="yes">
    <label class="custom-control-label" for="yes">Yes</label>
  </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="no" name="fall" value="no">
    <label class="custom-control-label" for="no">No</label>
  </div>

     <div class="card card1">
      <div class="card-body">

     
    <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="splits"  value="Splits">
    <label class="custom-control-label" for="splits">Splits Ends </label>
  </div>

  <div class="custom-control custom-checkbox custom-control-inline ">
    <input type="checkbox" class="custom-control-input" id="broken"  value="Broken">
    <label class="custom-control-label" for="broken"> Broken Hair </label>
  </div>
      </div>
     </div>
</div>
</div>

<div class="Duration card card1">
<div class="card-body">
<input class="form-control" type="text" placeholder="Duration">
</div>
</div>

<div class="Regression card card1">
<div class="card-body">

<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input"  id="yesregration" name="regression" value="yes">
    <label class="custom-control-label" for="yesregration">Yes</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="noregration" name="regression" value="no">
    <label class="custom-control-label" for="noregration">No</label>
  </div>
  </div>
</div>



   
      </div>
    </div>
  </div>
</div>

  </div>
  </div>

  
  </div>
 </div>
</div>

</section>


<!-- End Questions Ans -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
   <script src="js/main.js"></script>
   <!-- <script src="js/productcarousel.js"></script> -->
   <script> 
        // $('.card').click(function() { 
        //     $(this).find('i').toggleClass('fas fa-plus fas fa-minus') 
         
        // }); 

        $('#accordion').on('show.bs.collapse', function(e) {   
     $(e.target).prev('.card-header').find('i').removeClass('fas fa-plus');        
     $(e.target).prev('.card-header').find('i').addClass('fas fa-minus');   

   
    
  })
  .on('hide.bs.collapse', function(e) {
   $(e.target).prev('.card-header').find('i').removeClass('fas fa-minus');
   $(e.target).prev('.card-header').find('i').addClass('fas fa-plus');   
  });


  $( document ).ready(function() {
    $('.card1').hide();
  });
  function radioBtn(a) {

      var inputValue = a.value;
      var targetBox = $("." + inputValue);
      $(".card1").not(targetBox).hide();
      $(targetBox).show();

}


</script> 


</body>
   
</html>