
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
<form method="post" action="{{  url('/pques5') }}" class="basicform" enctype="multipart/form-data"> 
        <div  class="float-right" style="border: solid 1px; border-radius: 5px; padding: 5px;" >{{session('user.id')}}</div>
                        @csrf
            <h4 class="ml-4" class="font-family: sans-serif">Family History[specific to hair fall]</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge"> <i class="fas fa-minus"></i></span>Does Anyone of your Parents have Hairfall/Baldness<span
                                        class="float-right" id="check" value="68"><img src="img/tick.png"></span>
                                    <input name="faqHeading-1" value="Does Anyone of your Parents have Hairfall/Baldness" style="display:none;">
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns()" >

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one" value="1" name="customRadioInline62" class="custom-control-input">
                                    <label class="custom-control-label" for="one">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two" value="0" name="customRadioInline62" class="custom-control-input" >
                                    <label class="custom-control-label" for="two">No</label>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- End First Que -->
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Does Anyone of your Sibling have Haifall/Baldness<span
                                        class="float-right" id="check1"><img src="img/tick.png"></span>
                                        <input name="faqHeading-2" value="Does Anyone of your Sibling have Haifall/Baldness" style="display:none;">
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns1()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="four" value="1" name="customRadioInline63" class="custom-control-input" >
                                    <label class="custom-control-label" for="four">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="five" value="0" name="customRadioInline63" class="custom-control-input">
                                    <label class="custom-control-label"  for="five">No</label>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- End Sceond Que -->

                     <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Does Anyone of your Paternal/Maternal Uncle/Aunt have Hairfall/Baldness
                                    <span class="float-right" id="check2"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-3" value="Does Anyone of your Paternal/Maternal Uncle/Aunt have Hairfall/Baldness" style="display:none;">
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns2()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seven" name="customRadioInline64"
                                        class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="seven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eight" name="customRadioInline64"
                                        class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="eight">No</label>
                                </div>


                            </div>
                        </div>
                    </div>
<br>
                    <!-- End Third Que -->
                    <h4 class="ml-4 " class="font-family: sans-serif">Family History[General]</h4>
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Do you have Family History of<span class="float-right" id="check3"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-4" value="Do you have Family History of" style="display:none;">
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns3()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ten" value="1" name="customRadioInline65" class="custom-control-input" >
                                    <label class="custom-control-label" for="ten">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eleven" value="0" name="customRadioInline65"
                                        class="custom-control-input" >
                                    <label class="custom-control-label" for="eleven">No</label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- End Four Que -->
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-5">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Diabetes <span class="float-right" id="check4"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-5" value="Diabetes" style="display:none;">
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns4()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="thirteen" name="customRadioInline66"
                                        class="custom-control-input" value="1" >
                                    <label class="custom-control-label" for="thirteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Fourteen" name="customRadioInline66"
                                        class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="Fourteen">No</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Fifth Que -->


                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-8">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-8">
                                    <span class="badge"> <i class="fas fa-plus"></i></span>Hypertension/Blood Pressure<span
                                        class="float-right" id="check5"><img src="img/tick.png"></span>
                                    <input name="faqHeading-6" value="Hypertension/Blood Pressure" style="display:none;">
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns5()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyone" value="1" name="customRadioInline67" class="custom-control-input"
                                        value="1">
                                    <label class="custom-control-label" for="twentyone">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwo" value="0" name="customRadioInline67" class="custom-control-input"
                                        value="0">
                                    <label class="custom-control-label" for="twentytwo">No</label>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- End First Que -->

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-9">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                    <span class="badge"><i class="fas fa-plus"></i></span>thyroid issues<span
                                        class="float-right" id="check6"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns6()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefour" name="customRadioInline68" class="custom-control-input"
                                        value="1" >
                                    <label class="custom-control-label" for="twentyonefour">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefive" name="customRadioInline68" class="custom-control-input"
                                        value="0" >
                                    <label class="custom-control-label" for="twentyonefive">No</label>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- End Sceond Que -->

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-6">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                    <span class="badge"><i class="fas fa-plus"></i></span>pcod
                                    <span class="float-right" id="check7"><img
                                            src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns7()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sixteen" name="customRadioInline69"
                                        class="custom-control-input" value="1" >
                                    <label class="custom-control-label" for="sixteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seventeen" name="customRadioInline69"
                                        class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="seventeen">No</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">

                            </div>
                        </div>
                    </div>
                </div>

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-7">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                    <span class="badge"><i class="fas fa-plus"></i></span>rheumatoid artheitis
                                    <span class="float-right" id="check8"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns8()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nineteen" name="customRadioInline70"
                                        class="custom-control-input" value="1" >
                                    <label class="custom-control-label" for="nineteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twenty" name="customRadioInline70"
                                        class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="twenty">No</label>
                                </div>


                            </div>
                        </div>
                  
                    </div>



                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-10">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                    <span class="badge"> <i class="fas fa-plus"></i></span>sle<span
                                        class="float-right" id="check9"><img src="img/tick.png"></span>
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns9()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneseven" name="customRadioInline71" class="custom-control-input"
                                        value="1">
                                    <label class="custom-control-label" for="twentyoneseven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwoeight" name="customRadioInline71" class="custom-control-input"
                                        value="0">
                                    <label class="custom-control-label" for="twentytwoeight">No</label>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- End First Que -->



                <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-11">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                    <span class="badge"><i class="fas fa-plus"></i></span>psoriasis<span
                                        class="float-right" id="check10"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns10()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine" name="customRadioInline72" class="custom-control-input"
                                        value="1" >
                                    <label class="custom-control-label" for="twentyonenine">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneten" name="customRadioInline72" class="custom-control-input"
                                        value="0">
                                    <label class="custom-control-label" for="twentyoneten">No</label>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- End Sceond Que -->


                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-12">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-12">
                                    <span class="badge"> <i class="fas fa-plus"></i></span>psychiatric ilness<span
                                        class="float-right" id="check11"><img src="img/tick.png"></span>
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns11()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneeight" name="customRadioInline73" class="custom-control-input"
                                        value="1" >
                                    <label class="custom-control-label" for="twentyoneeight">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine" name="customRadioInline73" class="custom-control-input"
                                        value="0">
                                    <label class="custom-control-label" for="twentytwonine">No</label>
                                </div>


                            </div>
                        </div>
                    </div>
                                        <!-- End First Que -->
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-13">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                    <span class="badge"><i class="fas fa-plus"></i></span>any other autoimmune condition<span
                                        class="float-right" id="check12"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns12()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine1" name="customRadioInline74" class="custom-control-input"
                                        value="1">
                                    <label class="custom-control-label" for="twentyonenine1">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine1" name="customRadioInline74" class="custom-control-input"
                                        value="0">
                                    <label class="custom-control-label" for="twentytwonine1">No</label>
                                </div>




                            </div>
                        </div>
                    </div>

<br>

                        <h4 class="ml-4 " class="font-family: sans-serif">Investigation History</h4>
                        <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-01">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-01"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-01">
                                    <span class="badge"><i class="fas fa-plus"></i></span>have you done any blood investigation in recent 2 months
                                    <span class="float-right" id="check01"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-01" class="collapse" aria-labelledby="faqHeading-01"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns01()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one1" value="1" name="customRadioInline75"
                                        class="custom-control-input" >
                                    <label class="custom-control-label" for="one1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two2" value="0" name="customRadioInline75"
                                        class="custom-control-input" >
                                    <label class="custom-control-label" for="two2">No</label>
                                </div>


                            </div>
                        </div>
                    </div>
                   
                    <br>

{{-- ****************************Image********************************* --}}

 <h4 class="ml-4 " class="font-family: sans-serif">Pictorial History</h4>
 <br>
<div class="container">

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox aga" style="border:solid 1px;" onclick="queAns_aga();">
           <input type="radio" class="custom-control-input" id="img-id1" name="customRadioInline76">
           <label class="custom-control-label" for="img-id1">
            <a href="{{ URL::to('/asset/image/hair.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/hair.jpg') }}" class="img-size"  alt="Nature" style="width:100%" name="image" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
            
          
          <input type="text" name="image11" value="{{ URL::to('/asset/image/hair.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
          <input name="hair" value="" style="display:none;">
          </span>
           </label>
           
           
           <div class="caption">
            <h5 class="text-center text-success">Image 1</h5>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox aga"  onclick="queAns_aga()">
            <input type="radio" class="custom-control-input" id="img-id2" name="customRadioInline77">
            <label class="custom-control-label" for="img-id2">
            <a href="{{ URL::to('/asset/image/hair1.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/hair1.jpg') }}" class="img-size"  alt="Nature" style="width:100%" name="image" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
           
           <input type="text" name="image1" value="{{ URL::to('/asset/image/hair1.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="hair1" value=" " style="display:none;">
           </label>
           
          <div class="caption">
            <h5 class="text-center text-success">Image 2</h5>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox aga" onclick="queAns_aga()">
            <input type="radio" class="custom-control-input" id="img-id3" name="customRadioInline78">
            <label class="custom-control-label" for="img-id3">
        <a href="{{ URL::to('/asset/image/hair2.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/hair2.jpg') }}" class="img-size"  alt="Nature" style="width:100%"></span>
           
          <input type="text" name="image2" value="{{ URL::to('/asset/image/hair2.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="hair2" value="" style="display:none;">
           </label>
           
          <div class="caption">
            <h5 class="text-center text-success">Image 3</h5>
          </div>
      </div>
    </div>
  </div>
</div>



<div class="container">

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox aga" onclick="queAns_aga()">
            <input type="radio" class="custom-control-input" id="img-id4" name="customRadioInline79">
            <label class="custom-control-label" for="img-id4">
          <a href="{{ URL::to('/asset/image/hair3.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/hair3.jpg') }}" class="img-size"  alt="Nature" style="width:100%"></span>
           
           <input type="text" name="image3" value="{{ URL::to('/asset/image/hair3.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="hair3" value="" style="display:none;">
            </label>
            

           <div class="caption">
        <h5 class="text-center text-success">Image 4</h5>
          </div>
    
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox aga" onclick="queAns_aga()">
            <input type="radio" class="custom-control-input" id="img-id5" name="customRadioInline80">
            <label class="custom-control-label" for="img-id5">
            <a href="{{ URL::to('/asset/image/hair4.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fas"></i><img src="{{ URL::to('/asset/image/hair4.jpg') }}" class="img-size"  alt="Nature" style="width:100%"></span>
           <input type="text" name="image4" value="{{ URL::to('/asset/image/hair4.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="hair4" value="" style="display:none;">
            </label>
            
           <div class="caption">
            <h5 class="text-center text-success">Image 5</h5>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox aga" onclick="queAns_aga()">
            <input type="radio" class="custom-control-input" id="img-id6" name="customRadioInline81">
            <label class="custom-control-label" for="img-id6">
        <a href="{{ URL::to('/asset/image/hair5.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fas"></i><img src="{{ URL::to('/asset/image/hair5.jpg') }}" class="img-size"  alt="Nature" style="width:100%"></span>
           <input type="text" name="image5" value="{{ URL::to('/asset/image/hair5.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="hair5" value="" style="display:none;">
            </label>
            
           <div class="caption">
            <h5 class="text-center text-success">Image 6</h5>
          </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox ca"  onclick="queAns_ca()">
            <input type="radio" class="custom-control-input" id="img-id7" name="customRadioInline82">
            <label class="custom-control-label" for="img-id7">
            <a href="{{ URL::to('/asset/image/ca1.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ca1.jpg') }}" class="img-size"  alt="Nature" style="width:100%" name="image6" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
           
           <input type="text" name="ca1" value="{{ URL::to('/asset/image/ca1.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="ca1_s" value="KIT-1C" style="display:none;">
           </label>
           
          <div class="caption">
            <h5 class="text-center text-success">CA-1</h5>
          </div>
      </div>
    </div>


  <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox ca"  onclick="queAns_ca()">
            <input type="radio" class="custom-control-input" id="img-id8"   name="customRadioInline83">
          <label class="custom-control-label" for="img-id8">
            <a href="{{ URL::to('/asset/image/ca2.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ca2.jpg') }}" class="img-size"  alt="Nature" style="width:100%" name="image7" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
           
           <input type="text" name="ca2" value="{{ URL::to('/asset/image/ca2.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="ca2_s" value="KIT-1C" style="display:none;">
           </label>
           
          <div class="caption">
            <h5 class="text-center text-success">CA-2</h5>
          </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox ttm"  onclick="queAns_ttm()">
            <input type="radio" class="custom-control-input" id="img-id9" name="customRadioInline84">
            <label class="custom-control-label" for="img-id9">
            <a href="{{ URL::to('/asset/image/ttm 1.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ttm 1.jpg') }}" class="img-size"  alt="Nature" style="width:100%" name="image8" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
           
           <input type="text" name="ttm1" value="{{ URL::to('/asset/image/ttm 1.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="ttm1_s" value="KIT-2" style="display:none;">
           </label>
           
          <div class="caption">
            <h5 class="text-center text-success">TTM-1</h5>
          </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox ttm"  onclick="queAns_ttm()">
            <input type="radio" class="custom-control-input" id="img-id10" name="customRadioInline85">
            <label class="custom-control-label" for="img-id10">
            <a href="{{ URL::to('/asset/image/ttm2.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ttm2.jpg') }}" class="img-size"  alt="Nature" style="width:100%" name="image9" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
           
           <input type="text" name="ttm2" value="{{ URL::to('/asset/image/ttm2.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="ttm2_s" value="KIT-2" style="display:none;">
           </label>
           
          <div class="caption">
            <h5 class="text-center text-success">TTM-2</h5>
          </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail custom-control custom-radio image-checkbox ttm"  onclick="queAns_ttm()">
            <input type="radio" class="custom-control-input" id="img-id11" name="customRadioInline86">
            <label class="custom-control-label" for="img-id11">
            <a href="{{ URL::to('/asset/image/ttm3.jpg') }}" target="_blank"></a>
           <span class="badge"><i class="fa"></i><img src="{{ URL::to('/asset/image/ttm3.jpg') }}" class="img-size"  alt="Nature" style="width:100%" name="image10" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"></span>
           
           <input type="text" name="ttm3" value="{{ URL::to('/asset/image/ttm3.jpg') }}"  style="width:100%; display: none; " data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" >
           <input name="ttm3_s" value="KIT-2" style="display:none;">
           </label>
           
          <div class="caption">
            <h5 class="text-center text-success">TTM-3</h5>
          </div>
      </div>
    </div>

  </div>


</div>

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
<!-- <//div> -->
                    <!-- End Sceond Que -->

                    <div class="mt-4 col-md-3 offset-4" data-aos="fade-up">
       <center>  <button type="submit" class="btn btn-outline-success"><strong>Submit</strong></button></center>
     </div>
                    <br>

                    

                   <br>
</form>
                </div>



            </div> <!-- col-md-10-->



            <!-- </div> -->

        
    </div>
</div>
</section>
</main>
<style type="text/css">
    .img-size{
        width: 200px;
        height: 200px;
    }
</style>

<br><br><br><br>


<!-- End Questions Ans -->




<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
    $('#check04').hide();
    $('#check05').hide();
    $('#check05').hide();
    $('#check06').hide();
    $('#check07').hide();
    $('#check08').hide();
    $('#check09').hide();

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
    var checked_ans = document.querySelector('input[name = "customRadioInline62"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check').show(); //Alert the value of the checked.
    } else {
        $('#check').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns1() {
    var checked_ans = document.querySelector('input[name = "customRadioInline63"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check1').show(); //Alert the value of the checked.
    } else {
        $('#check1').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns2() {
    var checked_ans = document.querySelector('input[name = "customRadioInline64"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check2').show(); //Alert the value of the checked.
    } else {
        $('#check2').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns3() {
    var checked_ans = document.querySelector('input[name = "customRadioInline65"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check3').show(); //Alert the value of the checked.
    } else {
        $('#check3').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns4() {
    var checked_ans = document.querySelector('input[name = "customRadioInline66"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check4').show(); //Alert the value of the checked.
    } else {
        $('#check4').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns5() {
    var checked_ans = document.querySelector('input[name = "customRadioInline67"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check5').show(); //Alert the value of the checked.
    } else {
        $('#check5').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns6() {
    var checked_ans = document.querySelector('input[name = "customRadioInline68"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check6').show(); //Alert the value of the checked.
    } else {
        $('#check6').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns7() {
    var checked_ans = document.querySelector('input[name = "customRadioInline69"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check7').show(); //Alert the value of the checked.
    } else {
        $('#check7').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns8() {
    var checked_ans = document.querySelector('input[name = "customRadioInline70"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check8').show(); //Alert the value of the checked.
    } else {
        $('#check8').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns9() {
    var checked_ans = document.querySelector('input[name = "customRadioInline71"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check9').show(); //Alert the value of the checked.
    } else {
        $('#check9').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns10() {
    var checked_ans = document.querySelector('input[name = "customRadioInline72"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check10').show(); //Alert the value of the checked.
    } else {
        $('#check10').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns11() {
    var checked_ans = document.querySelector('input[name = "customRadioInline73"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check11').show(); //Alert the value of the checked.
    } else {
        $('#check11').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns12() {
    var checked_ans = document.querySelector('input[name = "customRadioInline74"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check12').show(); //Alert the value of the checked.
    } else {
        $('#check12').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns01() {
    var checked_ans = document.querySelector('input[name = "customRadioInline75"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check01').show(); //Alert the value of the checked.
    } else {
        $('#check01').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns02() {
    var checked_ans = document.querySelector('input[name = "customRadioInline02"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check02').show(); //Alert the value of the checked.
    } else {
        $('#check02').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns03() {
    var checked_ans = document.querySelector('input[name = "customRadioInline03"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check03').show(); //Alert the value of the checked.
    } else {
        $('#check03').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns04() {
    var checked_ans = document.querySelector('input[name = "customRadioInline04"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check04').show(); //Alert the value of the checked.
    } else {
        $('#check04').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }

}
function queAns05() {
    var checked_ans = document.querySelector('input[name = "customRadioInline05"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check05').show(); //Alert the value of the checked.
    } else {
        $('#check05').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }

}
function queAns06() {
    var checked_ans = document.querySelector('input[name = "customRadioInline06"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check06').show(); //Alert the value of the checked.
    } else {
        $('#check06').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }

}
function queAns07() {
    var checked_ans = document.querySelector('input[name = "customRadioInline07"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check07').show(); //Alert the value of the checked.
    } else {
        $('#check07').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }

}
function queAns08() {
    var checked_ans = document.querySelector('input[name = "customRadioInline08"]:checked');

    if (checked_ans != null) { //Test if something was checked
        $('#check08').show(); //Alert the value of the checked.
    } else {
        $('#check08').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }

}
function queAns09() {
    var checked_ans = document.querySelector('input[name = "customRadioInline09"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check09').show(); //Alert the value of the checked.
    } else {
        $('#check09').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }

}
function queAns_ca() {
    var checked_ans = document.querySelector('input[name = "customRadioInline09"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('.ca').show(); //Alert the value of the checked.
    } else {
        $('.ttm').hide();
        $('.aga').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }

}
function queAns_ttm(){
    var checked_ans = document.querySelector('input[name = "customRadioInline09"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('.ttm').show(); //Alert the value of the checked.
    } else {
        $('.ca').hide();
        $('.aga').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns_aga(){
    var checked_ans = document.querySelector('input[name = "customRadioInline09"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('.aga').show(); //Alert the value of the checked.
    } else {
        $('.ca').hide();
        $('.ttm').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


</script>


    <script>
        var no_box = document
            .querySelector('.no-box');

        var i = 1;

        function prev() {

            // Start position
            if (i == 1) {

                // Add disabled attribute on
                // prev button
                document.getElementsByClassName(
                        'prev').disabled = true;

                // Remove disabled attribute
                // from next button
                document.getElementsByClassName(
                        'next').disabled = false;
            } else {
                i--;
                return setNo();
            }
        }

    </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>

