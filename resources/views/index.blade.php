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

<style>

.accordion {
  background-color: #fefffa;
  margin: 50px auto;
  border-top: 6px solid #44bba4;
  line-height: 1.6;
  box-shadow: 5px 5px 10px 0px #a4bac1;
}
.accordion__item {
  border-bottom: 1px solid #dce7eb;
}
.accordion__title {
  padding: 15px 15px 15px 40px;
  display: block;
  position: relative;
  font-weight: 400;
}
.accordion__title:before {
  font-family: FontAwesome;
  content: "";
  font-size: 20px;
  position: absolute;
  left: 15px;
  top: 12px;
  color: #44bba4;
}
.accordion__title h5 {
  border-bottom: 1px solid #fefffa;
  display: inline-block;
}
.accordion__title:hover, .accordion__title:focus {
  cursor: pointer;
  outline: none;
}
.accordion__title:hover h5, .accordion__title:focus h5 {
  border-bottom-color: #a8bdc4;
  display: inline-block;
}
.is-expanded .accordion__title:before {
  content: "";
}
.accordion__content-inner {
  padding: 0 40px 10px 40px;
}
.accordion__content {
  transition: height 0.3s ease-out;
  height: 0;
  overflow: hidden;
}
</style>
  
</head>

  <body>

  <div>
@include('mainnav')
</div>
    <div class="main">
  <div class="row">
  <div class="offset-3"></div>

  <div class="col-md-6">

     <!-- Accordion 1 -->
     <section class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">

<article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
  <span id="tab1" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
    <h5>Excessive Hair Growth </h5>
  </span>

  <div id="panel1" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
    <div class="accordion__content-inner">


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

</article>

<article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
  <span id="tab2" tabindex="0" class="accordion__title" aria-controls="panel2" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
    <h5>Duration</h5>
  </span>

  <div id="panel2" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab2" data-binding="expand-accordion-container">
    <div class="accordion__content-inner">
    <input class="form-control" type="text" placeholder="Duration In Month">
    </div>
  </div>
</article>

<article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
  <span id="tab3" tabindex="0" class="accordion__title" aria-controls="panel3" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
    <h5>Other</h5>
  </span>

  <div id="panel3" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab3" data-binding="expand-accordion-container">
    <div class="accordion__content-inner">
    <input class="form-control" type="text" placeholder="Other Details">

    </div>
  </div>
</article>

<article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
  <span id="tab4" tabindex="0" class="accordion__title" aria-controls="panel4" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
    <h5>Graying of Hair</h5>
  </span>

  <div id="panel4" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab4" data-binding="expand-accordion-container">
    <div class="accordion__content-inner">
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
</article>


<article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
  <span id="tab1" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
    <h5>Increased Hair Shedding</h5>
  </span>

  <div id="panel5" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab5" data-binding="expand-accordion-container">
    <div class="accordion__content-inner">

    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio3" name="hairshedding" value="Associated">
    <label class="custom-control-label" for="customRadio3">Associated</label>
   </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio4" name="hairshedding" value="Diffuse">
    <label class="custom-control-label" for="customRadio4">Diffuse </label>
  </div>
    

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio5" name="hairshedding" value="Localised">
    <label class="custom-control-label" for="customRadio5">Localised </label>
  </div>


  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio6" name="hairshedding" value="Falling">
    <label class="custom-control-label" for="customRadio6">Falling with Roots</label>
  </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio7" name="hairshedding" value="Duration">
    <label class="custom-control-label" for="customRadio7">Duration</label>
  </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio8" name="hairshedding" value="Regression">
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

  

</article>
</section>

  
  </div>
  </div>

 </div>
<!-- Questions ans -->








<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- <script src="js/jquery.js"></script> -->
<script src="js/bootstrapbundle.js"></script>
   <script src="js/main.js"></script>


<script>


// -----------------------------

     var accordion = $('body').find('[data-behavior="accordion"]');
var expandedClass = 'is-expanded';

$.each(accordion, function () { // loop through all accordions on the page

  var accordionItems = $(this).find('[data-binding="expand-accordion-item"]');

  $.each(accordionItems, function () { // loop through all accordion items of each accordion
    var $this = $(this);
    var triggerBtn = $this.find('[data-binding="expand-accordion-trigger"]');
    
    var setHeight = function (nV) {
      // set height of inner content for smooth animation
      var innerContent = nV.find('.accordion__content-inner')[0],
          maxHeight = $(innerContent).outerHeight(),
          content = nV.find('.accordion__content')[0];

      if (!content.style.height || content.style.height === '0px') {
        $(content).css('height', maxHeight);
      } else {
        $(content).css('height', '0px');
      }
    };
    
    var toggleClasses = function (event) {
      var clickedItem = event.currentTarget;
      var currentItem = $(clickedItem).parent();
      var clickedContent = $(currentItem).find('.accordion__content')
      $(currentItem).toggleClass(expandedClass);
      setHeight(currentItem);
      
      if ($(currentItem).hasClass('is-expanded')) {
        $(clickedItem).attr('aria-selected', 'true');
        $(clickedItem).attr('aria-expanded', 'true');
        $(clickedContent).attr('aria-hidden', 'false');

      } else {
        $(clickedItem).attr('aria-selected', 'false');
        $(clickedItem).attr('aria-expanded', 'false');
        $(clickedContent).attr('aria-hidden', 'true');
      }
    }
    
    triggerBtn.on('click', event, function (e) {
      e.preventDefault();
      toggleClasses(event);
    });

    // open tabs if the spacebar or enter button is clicked whilst they are in focus
    $(triggerBtn).on('keydown', event, function (e) {
      if (e.keyCode === 13 || e.keyCode === 32) {
        e.preventDefault();
        toggleClasses(event);
      }
    });
  });

});


// 

$('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".card1").not(targetBox).hide();
        $(targetBox).show();
    });

   </script>

 
   </body>
   
</html>