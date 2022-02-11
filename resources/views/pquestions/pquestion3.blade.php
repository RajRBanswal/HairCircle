<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hair Transplant</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap" rel="stylesheet">
 <link href="css/login.css" rel="stylesheet">
 <style>
  label{
  font-family: Open-sans,'sans-serif';
  font-size:18px;
  /* color:#201755; */
  }
  .modal-title{
  font-family: 'Roboto', sans-serif;
  }
 </style>
</head>
<body>
  <div>
@include('mainnav1')
</div>
<main id="main">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-aos="fade-down">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Slider II-01.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/Slider II-02.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/Slider II-03.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<section class="faq-section results_table">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="pb-3 text-center faq-title"data-aos="fade-up">
                    <h2>Questions</h2>

                </div>
            </div>

            <div class="col-md-10 offset-md-1">
                <div class="faq" id="accordion"><br>
<form method="post" action="{{  url('/pques3') }}" class="basicform" enctype="multipart/form-data"> 
        <div  class="float-right" style="border: solid 1px; border-radius: 5px; padding: 5px;" >{{session('user.id')}}</div>
                        @csrf
            <h4 class="ml-4" class="font-family: sans-serif">Eating Pattern/Habits</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">Q</span>According to you is your Diet Healthy and Balanced<span
                                        class="float-right" id="check"><img src="img/tick.png"></span>
                                    <input name="faqHeading-1" value="According to you is your Diet Healthy and Balanced" style="display:none;">                                        
                                </h5>
                            <div class="card-body" onclick="queAns()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one" name="customRadioInline29" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="one">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two" name="customRadioInline29" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="two">No</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End First Que -->
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">Q</span>Do you Think you Consume Appropriate Quantity and Quality of Proteins<span
                                        class="float-right" id="check1"><img src="img/tick.png"></span>
                                        <input name="faqHeading-2" value="Do you think you Consume Appropriate Quantity and Quality of Proteins" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns1()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="four" name="customRadioInline30" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="four">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="five" name="customRadioInline30" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="five">No</label>
                                </div>
                            </div>
                                <div id="yes-protein" class="yes-protein" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="prosource" class="form-control" placeholder="Source"> -->
                                    <select class="form-select form-control" name="prosource[]" aria-label="Default select example">
                                        <option selected>  Select Source </option>
                                        <option value="Pulses">Pulses</option>
                                        <option value="Eggs">Eggs</option>
                                        <option value="Animal Protein">Animal Protein</option>
                                        <option value="Supplements">Supplements</option>
                                    </select>
                                    <br>
                                    
                                    <input type="text" name="proquantity" class="form-control" placeholder="Quantity">
                                    
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End Sceond Que -->

                     <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge">Q</span>Do you Think you Consume Appropriate Quantity and Quality of EFA/W3<span class="float-right" id="check2"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-3" value="Do you Think you Consume Appropriate Quantity and Quality of EFA/W3" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns2()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seven" name="customRadioInline31"
                                        class="custom-control-input" value="Yes">
                                    <label class="custom-control-label" for="seven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eight" name="customRadioInline31"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="eight">No</label>
                                </div>
                            </div>
                                <div id="yes-efa" class="yes-efa" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="efasource" class="form-control" placeholder="Source"> -->
                                    <select class="form-select form-control" name="efasource[]" aria-label="Default select example">
                                        <option selected>  Select Source </option>
                                        <option value="Edible Oil">Edible Oil</option>
                                        <option value="Seed Mix">Seed Mix</option>
                                        <option value="Nuts">Nuts</option>
                                        <option value="Fish Oil Capsule">Fish Oil Capsule</option>
                                        <option value="Cod Liver Capasules">Cod Liver Capasules</option>
                                        </select>
                                    <br>
                                    <input type="text" name="efsquantity" class="form-control" placeholder="Quantity">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>

                    <!-- End Third Que -->

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">Q</span>Fruits,Sprouts and Salad Consumption<span cl0ass="float-right" id="check3"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-4" value="Fruits,Sprouts and Salad Consumption" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns3()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ten" name="customRadioInline32" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="ten">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eleven" name="customRadioInline32"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="eleven">No</label>
                                </div>

                            </div>
                                <div id="yes-fruits" class="yes-fruits" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="frusource" class="form-control" placeholder="Source"> -->
                                    <select class="form-select form-control" name="frusource[]" aria-label="Default select example">
                                        <option selected>  Select Source </option>
                                        <option value="Fruit">Fruit</option>
                                        <option value="Salad">Salad</option>
                                        <option value="Sproute">Sproute</option>
                                        </select>
                                    <br>
                                    <input type="text" name="fruquantity" class="form-control" placeholder="Quantity">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>

                    <!-- End Four Que -->
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-5">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                    <span class="badge">Q</span>How Frequently you Consume Junk Food<span class="float-right" id="check4"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-5" value="How Frequently you Consume Junk Food" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns4()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="thirteen" name="customRadioInline33"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="thirteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Fourteen" name="customRadioInline33"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="Fourteen">No</label>
                                </div>

                            </div>
                                <div id="yes-food" class="yes-food" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="foodtype" class="form-control" placeholder="Type"> -->
                                    <select class="form-select form-control" name="foodtype[]" aria-label="Default select example">
                                        <option selected>  Select Type </option>
                                        <option value="Bakery">Bakery</option>
                                        <option value="Deep Fried">Deep Fried</option>
                                        <option value="Noodles">Noodles</option>
                                    </select>
                                    <br>
                                    <select class="form-select form-control" name="foodfrequency[]" aria-label="Default select example">
                                        <option selected>  Select Type </option>
                                        <option value="Daily">Daily</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                    </select>
                                    <br>
                                     
                                    <!-- <input type="text" name="foodfrequency" class="form-control" placeholder="Frequency"><br> -->
                                    <input type="text" name="foodquantity" class="form-control" placeholder="Approximate Quantity">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>

                    <!-- End Fifth Que -->


                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-8">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-8">
                                    <span class="badge">Q</span>Consumption of Milk and Milk Products <span
                                        class="float-right" id="check5"><img src="img/tick.png"></span>
                                    <input name="faqHeading-6" value="Consumption of Milk and Milk Products" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns5()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyone" name="customRadioInline34" class="custom-control-input"
                                        value="Yes">
                                    <label class="custom-control-label" for="twentyone">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwo" name="customRadioInline34" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentytwo">No</label>
                                </div>
                            </div>
                                <div id="yes-milk" class="yes-milk" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="milktype" class="form-control" placeholder="Type"> -->
                                    <select class="form-select form-control" name="milktype[]" aria-label="Default select example">
                                        <option selected>  Select Type </option>
                                        <option value="Cow">Cow</option>
                                        <option value="Boffallo">Boffallo</option>
                                        <option value="Camel">Camel</option>
                                        <option value="Full Cream">Full Cream</option>
                                        <option value="Boffallo">Boffallo</option>
                                        <option value="Goat">Goat</option>
                                    </select>
                                    <br>
                                    <input type="text" name="milkfrequency" class="form-control" placeholder="Frequency"><br>
                                    <input type="text" name="milkquantity" class="form-control" placeholder="Approximate Quantity-----ml/day">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End First Que -->

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-9">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                    <span class="badge">Q</span>Consumption of Cold Drinks,Canned Fruit Juices<span
                                        class="float-right" id="check6"><img src="img/tick.png"></span>
                                    <input name="faqHeading-7" value="Consumption of Cold Drinks,Canned Fruit Juices" style="display:none;">    
                                </h5>
                            <div class="card-body" onclick="queAns6()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefour" name="customRadioInline35" class="custom-control-input"
                                        value="Yes">
                                    <label class="custom-control-label" for="twentyonefour">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefive" name="customRadioInline35" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentyonefive">No</label>
                                </div>
                            </div>
                            <div id="yes-juice" class="yes-juice" style="display:none; padding-right: 10px;" >
                                    <input type="text" name="juitype" class="form-control" placeholder="Type"><br>
                               
                                    <input type="text" name="juifrequency" class="form-control" placeholder="Frequency"><br>
                                    <input type="text" name="juiquantity" class="form-control" placeholder="Approximate Quantity-----ml/day">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End Sceond Que -->

                   <!--  <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-6">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                    <span class="badge"><i class="fas fa-plus"></i></span>consumption of cold drinks,canned fruit juices<span class="float-right" id="check7"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-8" value="Consumption of Cold Drinks,Canned Fruit Juices" style="display:none;">
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns7()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sixteen" name="customRadioInline36"
                                        class="custom-control-input" value="1" >
                                    <label class="custom-control-label" for="sixteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seventeen" name="customRadioInline36"
                                        class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="seventeen">No</label>
                                </div>


                            </div>
                        </div>
                    </div> -->

                    <!-- End sixth Que -->

            <h4 class="ml-4 " class="font-family: sans-serif">Weight History</h4>
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-7">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                    <span class="badge">Q</span>Have you Lost Weight Recently
                                    <span class="float-right" id="check8"><img src="img/tick.png"></span>
                                    <input name="faqHeading-8" value="Have you Lost Weight Recently" style="display:none;">
                                </h5>
                                 <div class="card-body" onclick="queAns8()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nineteen" name="customRadioInline37"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="nineteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twenty" name="customRadioInline37"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="twenty">No</label>
                                </div>
                            </div>
                            <div id="yes-lostw" class="yes-lost" style="display:none; padding-right: 10px;" >
                                    <input type="text" name="lostwho" class="form-control" placeholder="Who/How"><br>
                               
                                    <input type="text" name="lostquantity" class="form-control" placeholder="Quantity in Kg">
                                    <br>
                                    <input type="text" name="lostduration" class="form-control" placeholder="Duration in Months">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7"
                            data-parent="#accordion">
                           
                        </div> -->
                    </div>


{{-- *******************----Pattern[onset]-----********************  --}}

                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-10">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                    <span class="badge">Q</span>Have you Gained Weight Recently<span
                                        class="float-right" id="check9"><img src="img/tick.png"></span>
                                    <input name="faqHeading-9" value="Have you Gained Weight Recently" style="display:none;">    
                                </h5>
                            <div class="card-body" onclick="queAns9()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneseven" name="customRadioInline38" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="twentyoneseven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwoeight" name="customRadioInline38" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentytwoeight">No</label>
                                </div>
                            </div>
                                <div id="yes-gainw" class="yes-gain" style="display:none; padding-right: 10px;" >
                                    <input type="text" name="gainwho" class="form-control" placeholder="Who/How"><br>
                               
                                    <input type="text" name="gainquantity" class="form-control" placeholder="Quantity in Kg"><br>

                                    <input type="text" name="gainduration" class="form-control" placeholder="Duration in Months">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End First Que -->
                   <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-11">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                    <span class="badge">Q</span>Do you have Difficulty in Losing Weight<span
                                        class="float-right" id="check10"><img src="img/tick.png"></span>
                                    <input name="faqHeading-10" value="Do you have Difficulty in Losing Weight" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns10()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine" name="customRadioInline39" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="twentyonenine">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneten" name="customRadioInline39" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentyoneten">No</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End Sceond Que -->


            <h4 class="ml-4 " class="font-family: sans-serif"> Psychosocial History</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-12">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-12">
                                    <span class="badge">Q</span>Does your Looks Makes you Anxious/Depressive<span
                                        class="float-right" id="check11"><img src="img/tick.png"></span>
                                        <input name="faqHeading-11" value="Does your Looks Makes you Anxious/Depressive" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns11()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneeight" name="customRadioInline40" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="twentyoneeight">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine" name="customRadioInline40" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentytwonine">No</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12"
                            data-parent="#accordion">
                        </div> -->
                    </div>
                                        <!-- End First Que -->
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-13">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                    <span class="badge">Q</span>Do you Avoid Interacting with People<span
                                        class="float-right" id="check12"><img src="img/tick.png"></span>
                                    <input name="faqHeading-12" value="Do you Avoid Interacting with People" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns12()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine1" name="customRadioInline41" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="twentyonenine1">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine1" name="customRadioInline41" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentytwonine1">No</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>



                        <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-01">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-01"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-01">
                                    <span class="badge">Q</span>Have you Suffered from any Psychological Trauma in Recent Past
                                    <span class="float-right" id="check01"><img src="img/tick.png"></span>
                                    <input name="faqHeading-13" value="Have you Suffered from any Psychological Trauma in Recent Past" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns01()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one1" name="customRadioInline42"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="one1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two2" name="customRadioInline42"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="two2">No</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-01" class="collapse" aria-labelledby="faqHeading-01"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>


                      <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-02">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-02"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-02">
                                    <span class="badge">Q</span>Do you have Habit of Playing with your Hairs
                                    <span class="float-right" id="check02"><img src="img/tick.png"></span>
                                    <input name="faqHeading-14" value="Do you have Habit of Playing with your Hairs" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns02()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one2" name="customRadioInline43"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="one2">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two3" name="customRadioInline43"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="two3">No</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-02" class="collapse" aria-labelledby="faqHeading-02"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>


                      <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-03">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-03"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-03">
                                    <span class="badge">Q</span>Do you Express your Emotions/Anger
                                    <span class="float-right" id="check03"><img src="img/tick.png"></span>
                                    <input name="faqHeading-15" value="Do you Express your Emotions/Anger" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns03()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one3" name="customRadioInline44"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="one3">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two4" name="customRadioInline44"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="two4">No</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-03" class="collapse" aria-labelledby="faqHeading-03"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>


                    <!-- End Sceond Que -->







<!-- <div class="pagination">
    <a href="pquestion">&laquo;</a>
    <a href="pquestion1">1</a>
    <a href="pquestion2">2</a>
    <a href="pquestion3">3</a>
    <a href="pquestion4">4</a>
    <a href="pquestion5">5</a>
    <a href="#">&laquo;</a>
</div> -->
<br>
<!-- <div class="row"> -->
<div class="form-group col-md-12 card-body">
<center>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="pquestion1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="{{url('/pquestion1')}}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/pquestion2')}}">2</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/pquestion3')}}">3</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/pquestion4')}}">4</a></li>
    <li class="page-item"><a class="page-link" href="{{url('/pquestion5')}}">5</a></li>
    <li class="page-item">
      <a class="page-link" href="/pquestion5" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</center>
</div>
<!-- </div> -->

                    <div class="mt-4 col-md-3 offset-4" data-aos="fade-up">
       <center>  <button type="submit" class="btn btn-outline-success"><strong>Submit</strong></button></center>
     </div>
                    
                    <br>
                    </form>
                </div>
                <!--Accordian div-->


            </div> <!-- col-md-10-->



            <!-- </div> -->

        </div>
    </div>
</section>
</main>




<!-- End Questions Ans -->

<br><br><br><br>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>

<script src="js/jquery.min.js"></script>
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

// if( $('.custom-radio ').attr("checked", "checked");){
//    $('.card-header').find('#check').show('fas fa-check');

// })

// }

$(document).ready(function() {
    $('#check').hide();
    $('#check1').hide();
    $('#check2').hide();
    $('#check3').hide();
    $('#check4').hide();
    $('#check5').hide();
    $('#check6').hide();
    $('#check7').hide();
    $('#check8').hide();
    $('#check9').hide();
    $('#check10').hide();
    $('#check11').hide();
    $('#check12').hide();
    $('#check01').hide();
    $('#check02').hide();
    $('#check03').hide();
    //   $(".results_charts").hide();



    //   $("#chart").on("click", function(){
    //     $(".results_table").hide();
    //     $(".results_charts").show();
    //   });
    //   $("#table").on("click", function(){
    //     $(".results_charts").hide();
    //     $(".results_table").show();
    //   });




});

function queAns() {
    var checked_ans = document.querySelector('input[name = "customRadioInline29"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check').show(); //Alert the value of the checked.
    } else {
        $('#check').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns1() {
    var checked_ans = document.querySelector('input[name = "customRadioInline30"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check1').show(); //Alert the value of the checked.
    } else {
        $('#check1').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

$(function () {
        $("input[name='customRadioInline30']").click(function () {
            if ($("#four").is(":checked")) {
                $("#yes-protein").show();
            } else {
                $("#yes-protein").hide();
            }
        });
    });

function queAns2() {
    var checked_ans = document.querySelector('input[name = "customRadioInline31"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check2').show(); //Alert the value of the checked.
    } else {
        $('#check2').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline31']").click(function () {
            if ($("#seven").is(":checked")) {
                $("#yes-efa").show();
            } else {
                $("#yes-efa").hide();
            }
        });
    });

function queAns3() {
    var checked_ans = document.querySelector('input[name = "customRadioInline32"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check3').show(); //Alert the value of the checked.
    } else {
        $('#check3').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline32']").click(function () {
            if ($("#ten").is(":checked")) {
                $("#yes-fruits").show();
            } else {
                $("#yes-fruits").hide();
            }
        });
    });
function queAns4() {
    var checked_ans = document.querySelector('input[name = "customRadioInline33"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check4').show(); //Alert the value of the checked.
    } else {
        $('#check4').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline33']").click(function () {
            if ($("#thirteen").is(":checked")) {
                $("#yes-food").show();
            } else {
                $("#yes-food").hide();
            }
        });
    });
function queAns5() {
    var checked_ans = document.querySelector('input[name = "customRadioInline34"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check5').show(); //Alert the value of the checked.
    } else {
        $('#check5').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline34']").click(function () {
            if ($("#twentyone").is(":checked")) {
                $("#yes-milk").show();
            } else {
                $("#yes-milk").hide();
            }
        });
    });
function queAns6() {
    var checked_ans = document.querySelector('input[name = "customRadioInline35"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check6').show(); //Alert the value of the checked.
    } else {
        $('#check6').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline35']").click(function () {
            if ($("#twentyonefour").is(":checked")) {
                $("#yes-juice").show();
            } else {
                $("#yes-juice").hide();
            }
        });
    });
function queAns7() {
    var checked_ans = document.querySelector('input[name = "customRadioInline36"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check7').show(); //Alert the value of the checked.
    } else {
        $('#check7').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns8() {
    var checked_ans = document.querySelector('input[name = "customRadioInline37"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check8').show(); //Alert the value of the checked.
    } else {
        $('#check8').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline37']").click(function () {
            if ($("#nineteen").is(":checked")) {
                $("#yes-lostw").show();
            } else {
                $("#yes-lostw").hide();
            }
        });
    });

function queAns9() {
    var checked_ans = document.querySelector('input[name = "customRadioInline38"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check9').show(); //Alert the value of the checked.
    } else {
        $('#check9').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline38']").click(function () {
            if ($("#twentyoneseven").is(":checked")) {
                $("#yes-gainw").show();
            } else {
                $("#yes-gainw").hide();
            }
        });
    });
function queAns10() {
    var checked_ans = document.querySelector('input[name = "customRadioInline39"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check10').show(); //Alert the value of the checked.
    } else {
        $('#check10').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns11() {
    var checked_ans = document.querySelector('input[name = "customRadioInline40"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check11').show(); //Alert the value of the checked.
    } else {
        $('#check11').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns12() {
    var checked_ans = document.querySelector('input[name = "customRadioInline41"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check12').show(); //Alert the value of the checked.
    } else {
        $('#check12').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns01() {
    var checked_ans = document.querySelector('input[name = "customRadioInline42"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check01').show(); //Alert the value of the checked.
    } else {
        $('#check01').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns02() {
    var checked_ans = document.querySelector('input[name = "customRadioInline43"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check02').show(); //Alert the value of the checked.
    } else {
        $('#check02').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns03() {
    var checked_ans = document.querySelector('input[name = "customRadioInline44"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check03').show(); //Alert the value of the checked.
    } else {
        $('#check03').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


</script>
{{-- <script>

function next() {
header("Location: http://127.0.0.1:8000/pquestion4");
}
</script> --}}

</body>

</html>

