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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
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
</main>
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
            <form method="post" action="{{  url('/pques2') }}" class="basicform" enctype="multipart/form-data"> 
                        <div  class="float-right" style="border: solid 1px; border-radius: 5px; padding: 5px;" >{{session('user.id')}}</div>
                        @csrf
            <h4 class="ml-4" class="font-family: sans-serif">Associated Symptom</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge">Q</span>Hairs Do Not Come After Pulling<span
                                        class="float-right" id="check"><img src="img/tick.png"></span>
                                        <input name="faqHeading-1" value="Hairs do not come after Pulling" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns()">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="one" name="customRadioInline14" class="custom-control-input"
                                        value="Yes" >
                                        <label class="custom-control-label" for="one">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="two" name="customRadioInline14" class="custom-control-input"
                                        value="No">
                                        <label class="custom-control-label" for="two">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--     <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End First Que -->
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-2">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                    <span class="badge">Q</span>hairs are seen while combing,washing,on pillow<span
                                        class="float-right" id="check1"><img src="img/tick.png"></span>
                                        <input name="faqHeading-2" value="hairs are seen while combing,washing,on pillow" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns1()">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="four" name="customRadioInline15" class="custom-control-input"
                                        value="Yes" >
                                        <label class="custom-control-label" for="four">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="five" name="customRadioInline15" class="custom-control-input"
                                        value="No">
                                        <label class="custom-control-label" for="five">No</label>
                                    </div>
                                </div>
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
                                    <span class="badge">Q</span>Itching<span class="float-right" id="check2"><img
                                            src="img/tick.png"></span>
                                    <input name="faqHeading-3" value="Itching" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns2()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seven" name="customRadioInline16"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="seven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eight" name="customRadioInline16"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="eight">No</label>
                                </div>
                                </div>
                            </div>
                        </div>
                      <!--   <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>

                    <!-- End Third Que -->

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge">Q</span>Pain<span class="float-right" id="check3"><img
                                            src="img/tick.png"></span>
                                            <input name="faqHeading-4" value="Pain" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns3()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ten" name="customRadioInline17" class="custom-control-input"
                                        value="Yes">
                                    <label class="custom-control-label" for="ten">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eleven" name="customRadioInline17"
                                        class="custom-control-input" value="No" >
                                    <label class="custom-control-label" for="eleven">No</label>
                                </div>
                                </div>
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
                                    <span class="badge">Q</span>Burning<span class="float-right" id="check4"><img
                                            src="img/tick.png"></span>
                                            <input name="faqHeading-5" value="Burning" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns4()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="thirteen" name="customRadioInline18"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="thirteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Fourteen" name="customRadioInline18"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="Fourteen">No</label>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>

                    <!-- End Fifth Que -->


{{-- *******************----Duration---------****************** --}}
            <h4 class="ml-4 " class="font-family: sans-serif">Treatment History</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-8">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-8">
                                    <span class="badge">Q</span>Have you Taken Any Treatment in the Past for Same Issue <span
                                        class="float-right" id="check5"><img src="img/tick.png"></span>
                                        <input name="faqHeading-6" value="Have you taken any Treatment in the past for same issue" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns5()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyone" name="customRadioInline19" class="custom-control-input"
                                        value="Yes">
                                    <label class="custom-control-label" for="twentyone" >Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwo" name="customRadioInline19" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentytwo">No</label>
                                </div>
                                </div>
                                <div id="yes-form" class="yes-form" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="treattype" class="form-control" placeholder="Enter Treatment Type"> -->
                                    <select class="form-select form-control" name="treattype[]" aria-label="Default select example">
                                        <option selected>  Select Type  </option>
                                        <option value="Allopathic">Allopathic</option>
                                        <option value="Ayurvedic">Ayurvedic</option>
                                        <option value="Homeopathic">Homeopathic</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <br>
                                    <!-- <input type="text" name="result" class="form-control" placeholder="Enter Result"> -->
                                    <select class="form-select form-control" name="result[]" aria-label="Default select example">
                                        <option selected>  Select Result </option>
                                        <option value="Responded">Responded</option>
                                        <option value="Not Responded">Not Responded</option>
                                    </select>
                                    <br>
                                    <input type="text" name="reason" class="form-control" placeholder="Reason for Stopping Treatment">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8"
                            data-parent="#accordion">
                        
                            
                        </div> -->
                    </div>
                    <!-- End First Que -->
                <h4 class="ml-4 " class="font-family: sans-serif">Medical History</h4>

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-9">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                    <span class="badge">Q</span>Are you Suffering From Any Other Illness<span
                                        class="float-right" id="check6"><img src="img/tick.png"></span>
                                        <input name="faqHeading-7" value="Are you Suffering from any other Illness" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns6()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefour" name="customRadioInline20" class="custom-control-input"
                                        value="Yes">
                                    <label class="custom-control-label" for="twentyonefour">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefive" name="customRadioInline20" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentyonefive">No</label>
                                </div>
                            </div>
                            <div id="yes-illness" class="yes-illness" style="display:none; padding-right: 10px;" >
                                    <input type="text" name="historytype" class="form-control" placeholder="Enter Type"><br>
                                    <select class="form-select form-control" name="takingtreat[]" aria-label="Default select example">
                                        <option selected>  Select Result </option>
                                        <option value="Allopathy">Allopathy</option>
                                        <option value="Ayurvedic">Ayurvedic</option>
                                        <option value="Homeopathy">Homeopathy</option>
                                    </select>
                                    <br>
                                    <input type="text" name="reason" class="form-control" placeholder="Enter is it Under Control/Cured">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9"
                            data-parent="#accordion">
                            
                        </div> -->
                    </div>
                    <!-- End Sceond Que -->

            <h4 class="ml-4 " class="font-family: sans-serif">Surgical History</h4>
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-6">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                    <span class="badge">Q</span>Have you Undergone any Surgery/Procedure in  the past
                                    <span class="float-right" id="check7"><img
                                            src="img/tick.png"></span>
                                            <input name="faqHeading-8" value="Have you Undergone any Surgery/Procedure in  the past" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns7()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sixteen" name="customRadioInline21"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="sixteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seventeen" name="customRadioInline21"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="seventeen">No</label>
                                </div>
                            </div>
                            <div id="yes-surgery" class="yes-surgery" style="display:none; padding-right: 10px;" >
                                    <input type="text" name="surgerytype" class="form-control" placeholder="Enter Type"><br>
                               
                                    <input type="text" name="sdonetreat" class="form-control" placeholder="when it was done"><br>
                                
                                    <input type="text" name="sreason" class="form-control" placeholder="Reason for surgery">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6"
                            data-parent="#accordion">
                        </div> -->
                    </div>

                    <!-- End sixth Que -->

            <h4 class="ml-4 " class="font-family: sans-serif">Drug History</h4>
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-7">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                    <span class="badge">Q</span>Are you Taking any Medicine or Supplement Regularly
                                    <span class="float-right" id="check8"><img src="img/tick.png"></span>
                                    <input name="faqHeading-9" value="Are you Taking any Medicine or Supplement Regularly" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns8()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nineteen" name="customRadioInline22"
                                        class="custom-control-input" value="Yes">
                                    <label class="custom-control-label" for="nineteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twenty" name="customRadioInline22"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="twenty">No</label>
                                </div>
                            </div>
                                <div id="yes-predoc" class="yes-predoc" style="display:none; padding-right: 10px;" >
                                    <input type="text" name="predoctype" class="form-control" placeholder="Enter Type"><br>
                               
                                    <input type="text" name="predoctreat" class="form-control" placeholder="Is it prescribed by doctor"><br>
                                
                                    <!-- <input type="text" name="predocreason" class="form-control" placeholder="Frequency"> -->
                                    <select class="form-select form-control" name="predocreason[]" aria-label="Default select example">
                                        <option selected>  Select Frequency </option>
                                        <option value="Daily">Daily</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7"
                            data-parent="#accordion">  
                        </div> -->
                    </div>


{{-- *******************----Pattern[Onset]-----********************  --}}

            <h4 class="ml-4 " class="font-family: sans-serif">Physical Activity/Exercise</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-10">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                    <span class="badge">Q</span>Do you Exercise Regularly<span
                                        class="float-right" id="check9"><img src="img/tick.png"></span>
                                        <input name="faqHeading-10" value="Do you Exercise Regularly" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns9()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneseven" name="customRadioInline23" class="custom-control-input"
                                        value="Yes">
                                    <label class="custom-control-label" for="twentyoneseven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwoeight" name="customRadioInline23" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentytwoeight">No</label>
                                </div>
                            </div>
                                <div id="yes-exercise" class="yes-exercise" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="exercisetype" class="form-control" placeholder="Enter Exercise Type"> -->
                                   
                                    <select  id="multi-select-demo" class="form-select form-control" name="exercisetype[]" aria-label="Default select example" placeholder="Select Type" multiple>
                                        <option value="Aerobic">Aerobic</option>
                                        <option value="Endurance">Endurance</option>
                                        <option value="Strength">Strength</option>
                                        <option value="Yoga">Yoga</option>
                                        <option value="Cardio">Cardio</option>
                                        <option value="Walking">Walking</option>
                                        <option value="Running">Running</option>
                                        <option value="Cycling">Cycling</option>
                                    </select>
                                    <br>
                                    <input type="text" name="exFrequency" class="form-control" placeholder="Enter Frequency"><br>
                                
                                    <input type="text" name="month" class="form-control" placeholder="Duration in Months">
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
                                    <span class="badge">Q</span>Does your Job Require Continuous Sitting<span
                                        class="float-right" id="check10"><img src="img/tick.png"></span>
                                        <input name="faqHeading-11" value="Does your Job Require Continuous Sitting" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns10()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine" name="customRadioInline24" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="twentyonenine">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneten" name="customRadioInline24" class="custom-control-input"
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



                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-12">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-12">
                                    <span class="badge"> Q</span>Does your Job Involve Shift Duties/Odd Timings<span
                                        class="float-right" id="check11"><img src="img/tick.png"></span>
                                        <input name="faqHeading-12" value="Does your Job Involve Shift Duties/Odd Timings" style="display:none;">
                                </h5>
                                <div class="card-body" onclick="queAns11()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneeight" name="customRadioInline25" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="twentyoneeight">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine" name="customRadioInline25" class="custom-control-input"
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
                                    <span class="badge">Q</span>Do you Smoke <span
                                        class="float-right" id="check12"><img src="img/tick.png"></span>
                                        <input name="faqHeading-13" value="Do you Smoke" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns12()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine1" name="customRadioInline26" class="custom-control-input"
                                        value="Yes" >
                                    <label class="custom-control-label" for="twentyonenine1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine1" name="customRadioInline26" class="custom-control-input"
                                        value="No">
                                    <label class="custom-control-label" for="twentytwonine1">No</label>
                                </div>
                            </div>
                            <div id="yes-smoke" class="yes-smoke" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="smoketype" class="form-control" placeholder="Enter Exercise Type"> -->
                                    <select class="form-select form-control" name="smoketype[]" aria-label="Default select example">
                                        <option selected>  Select Type </option>
                                        <option value="Cigarette">Cigarette</option>
                                        <option value="Cigar">Cigar</option>
                                        <option value="Hookah">Hookah</option>
                                        <option value="Bidi">Bidi</option>
                                    </select>
                                    <br>                               
                                    <input type="text" name="quantity" class="form-control" placeholder="Quantity-packets-per-day"><br>
                                
                                    <input type="text" name="duratioyear" class="form-control" placeholder="Duration in Years">
                                </div>
                                <br>
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
                                    <span class="badge">Q</span>Do you Chew Tobacco in Any Form
                                    <span class="float-right" id="check01"><img src="img/tick.png"></span>
                                    <input name="faqHeading-01" value="Do you Chew Tobacco in any form" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns01()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one1" name="customRadioInline27"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="one1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two2" name="customRadioInline27"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="two2">No</label>
                                </div>
                            </div>
                            <div id="yes-tobacco" class="yes-tobacco" style="display:none; padding-right: 10px;" >
                                   <!--  <input type="text" name="tbktype" class="form-control" placeholder="Enter Exercise Type"> -->
                                     <select class="form-select form-control" name="tbktype[]" aria-label="Default select example">
                                        <option selected>  Select Type </option>
                                        <option value="Zarda">Zarda</option>
                                        <option value="Khaini">Khaini</option>
                                        <option value="Raw">Raw</option>
                                        <option value="Flavoured">Flavoured</option>
                                    </select>
                                    <br>
                                    <input type="text" name="quantity" class="form-control" placeholder="Quantity-packets-per-day"><br>
                                
                                    <input type="text" name="duratioyear" class="form-control" placeholder="Duration in Years">
                                </div>
                                <br>
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
                                    <span class="badge">Q</span>Do you Donsume Alcohol
                                    <span class="float-right" id="check02"><img src="img/tick.png"></span>
                                    <input name="faqHeading-02" value="Do you Consume Alcohol" style="display:none;">
                                </h5>
                            <div class="card-body" onclick="queAns02()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one2" name="customRadioInline28"
                                        class="custom-control-input" value="Yes" >
                                    <label class="custom-control-label" for="one2">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two3" name="customRadioInline28"
                                        class="custom-control-input" value="No">
                                    <label class="custom-control-label" for="two3">No</label>
                                </div>
                            </div>
                                <div id="yes-alcohol" class="yes-alcohol" style="display:none; padding-right: 10px;" >
                                    <!-- <input type="text" name="alctype" class="form-control" placeholder="Enter Exercise Type"> -->
                                    <select class="form-select form-control" name="alctype[]" aria-label="Default select example">
                                        <option selected>  Select Type </option>
                                        <option value="Beer">Beer</option>
                                        <option value="Vodka">Vodka</option>
                                        <option value="Whiskey">Whiskey</option>
                                        <option value="Wine">Wine</option>
                                        <option value="Rum">Rum</option>
                                        <option value="Breezer">Breezer</option>
                                    </select>
                                    <br>
                                    <input type="text" name="quantity" class="form-control" placeholder="Quantity-packets-per-day"><br>
                                
                                    <input type="text" name="duratioyear" class="form-control" placeholder="Duration in Years">
                                </div>
                                <br>
                            </div>
                        </div>
                        <!-- <div id="faqCollapse-02" class="collapse" aria-labelledby="faqHeading-02"
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
<script src="js/main.js"></script>\
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
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
    var checked_ans = document.querySelector('input[name = "customRadioInline14"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check').show(); //Alert the value of the checked.
    } else {
        $('#check').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns1() {
    var checked_ans = document.querySelector('input[name = "customRadioInline15"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check1').show(); //Alert the value of the checked.
    } else {
        $('#check1').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns2() {
    var checked_ans = document.querySelector('input[name = "customRadioInline16"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check2').show(); //Alert the value of the checked.
    } else {
        $('#check2').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns3() {
    var checked_ans = document.querySelector('input[name = "customRadioInline17"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check3').show(); //Alert the value of the checked.
    } else {
        $('#check3').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns4() {
    var checked_ans = document.querySelector('input[name = "customRadioInline18"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check4').show(); //Alert the value of the checked.
    } else {
        $('#check4').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns5() {
    var checked_ans = document.querySelector('input[name = "customRadioInline19"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check5').show(); //Alert the value of the checked.
    } else {
        $('#check5').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline19']").click(function () {
            if ($("#twentyone").is(":checked")) {
                $("#yes-form").show();
            } else {
                $("#yes-form").hide();
            }
        });
    });
function queAns6() {
    var checked_ans = document.querySelector('input[name = "customRadioInline20"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check6').show(); //Alert the value of the checked.
    } else {
        $('#check6').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

$(function () {
        $("input[name='customRadioInline20']").click(function () {
            if ($("#twentyonefour").is(":checked")) {
                $("#yes-illness").show();
            } else {
                $("#yes-illness").hide();
            }
        });
    });



function queAns7() {
    var checked_ans = document.querySelector('input[name = "customRadioInline21"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check7').show(); //Alert the value of the checked.
    } else {
        $('#check7').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

$(function () {
        $("input[name='customRadioInline21']").click(function () {
            if ($("#sixteen").is(":checked")) {
                $("#yes-surgery").show();
            } else {
                $("#yes-surgery").hide();
            }
        });
    });

function queAns8() {
    var checked_ans = document.querySelector('input[name = "customRadioInline22"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check8').show(); //Alert the value of the checked.
    } else {
        $('#check8').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline22']").click(function () {
            if ($("#nineteen").is(":checked")) {
                $("#yes-predoc").show();
            } else {
                $("#yes-predoc").hide();
            }
        });
    });


function queAns9() {
    var checked_ans = document.querySelector('input[name = "customRadioInline23"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check9').show(); //Alert the value of the checked.
    } else {
        $('#check9').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline23']").click(function () {
            if ($("#twentyoneseven").is(":checked")) {
                $("#yes-exercise").show();
            } else {
                $("#yes-exercise").hide();
            }
        });
    });

function queAns10() {
    var checked_ans = document.querySelector('input[name = "customRadioInline24"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check10').show(); //Alert the value of the checked.
    } else {
        $('#check10').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns11() {
    var checked_ans = document.querySelector('input[name = "customRadioInline25"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check11').show(); //Alert the value of the checked.
    } else {
        $('#check11').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns12() {
    var checked_ans = document.querySelector('input[name = "customRadioInline26"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check12').show(); //Alert the value of the checked.
    } else {
        $('#check12').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline26']").click(function () {
            if ($("#twentyonenine1").is(":checked")) {
                $("#yes-smoke").show();
            } else {
                $("#yes-smoke").hide();
            }
        });
    });

$(document).ready(function() {
$('#multi-select-demo').multiselect();
});
  
$(document).ready(function(){

var multipleCancelButton = new Choices('#multi-select-demo', {
removeItemButton: true,
maxItemCount:5,
searchResultLimit:5,
renderChoiceLimit:5
});


});

function queAns01() {
    var checked_ans = document.querySelector('input[name = "customRadioInline27"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check01').show(); //Alert the value of the checked.
    } else {
        $('#check01').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline27']").click(function () {
            if ($("#one1").is(":checked")) {
                $("#yes-tobacco").show();
            } else {
                $("#yes-tobacco").hide();
            }
        });
    });
function queAns02() {
    var checked_ans = document.querySelector('input[name = "customRadioInline28"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check02').show(); //Alert the value of the checked.
    } else {
        $('#check02').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
$(function () {
        $("input[name='customRadioInline28']").click(function () {
            if ($("#one2").is(":checked")) {
                $("#yes-alcohol").show();
            } else {
                $("#yes-alcohol").hide();
            }
        });
    });
</script>


</body>

</html>

