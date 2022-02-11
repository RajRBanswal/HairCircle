<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hair Transplant</title>
    <link href="/css/fontawesome.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="css/productcarousel.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Open+Sans+Condensed:wght@300&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>
<style>
    .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}
.ml-4{
    color: #4CAF50;
}
</style>
<!-- Just an image -->
@include('header')
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
            <h4 class="ml-4" class="font-family: sans-serif">Chief Complaints</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                    <span class="badge"> <i class="fas fa-minus"></i></span>Hair loss?<span
                                        class="float-right" id="check"><img src="img/tick.png"></span>
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="one" name="customRadioInline1" class="custom-control-input"
                                        value="one">
                                    <label class="custom-control-label" for="one">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="two" name="customRadioInline1" class="custom-control-input"
                                        value="two">
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
                                    <span class="badge"><i class="fas fa-plus"></i></span>Hair shedding?<span
                                        class="float-right" id="check1"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns1()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="four" name="customRadioInline2" class="custom-control-input"
                                        value="four">
                                    <label class="custom-control-label" for="four">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="five" name="customRadioInline2" class="custom-control-input"
                                        value="five">
                                    <label class="custom-control-label" for="five">No</label>
                                </div>

                                {{-- <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="six" name="customRadioInline2" class="custom-control-input"
                                        value="six">
                                    <label class="custom-control-label" for="six">Always</label>
                                </div> --}}


                            </div>
                        </div>
                    </div>
                    <!-- End Sceond Que -->

                     <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-3">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Dandruff?<span class="float-right" id="check2"><img
                                            src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns2()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seven" name="customRadioInline3"
                                        class="custom-control-input" value="seven">
                                    <label class="custom-control-label" for="seven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eight" name="customRadioInline3"
                                        class="custom-control-input" value="eight">
                                    <label class="custom-control-label" for="eight">No</label>
                                </div>

                                {{-- <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nine" name="customRadioInline3" class="custom-control-input"
                                        value="nine">
                                    <label class="custom-control-label" for="nine">Always</label>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- End Third Que -->

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-4">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Baldness?<span class="float-right" id="check3"><img
                                            src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns3()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ten" name="customRadioInline4" class="custom-control-input"
                                        value="ten">
                                    <label class="custom-control-label" for="ten">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eleven" name="customRadioInline4"
                                        class="custom-control-input" value="eleven">
                                    <label class="custom-control-label" for="eleven">No</label>
                                </div>

                                {{-- <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twelve" name="customRadioInline4"
                                        class="custom-control-input" value="twelve">
                                    <label class="custom-control-label" for="twelve">Always</label>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- End Four Que -->
                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-5">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Excessive hairs?<span class="float-right" id="check4"><img
                                            src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns4()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="thirteen" name="customRadioInline5"
                                        class="custom-control-input" value="thirteen">
                                    <label class="custom-control-label" for="thirteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="Fourteen" name="customRadioInline5"
                                        class="custom-control-input" value="Fourteen">
                                    <label class="custom-control-label" for="Fourteen">No</label>
                                </div>

                                {{-- <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="fifteen" name="customRadioInline5"
                                        class="custom-control-input" value="fifteen">
                                    <label class="custom-control-label" for="fifteen">Always</label>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- End Fifth Que -->

                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-6">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                    <span class="badge"><i class="fas fa-plus"></i></span>Damaged hairs/split ends?<span class="float-right" id="check5"><img
                                            src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns5()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="sixteen" name="customRadioInline6"
                                        class="custom-control-input" value="sixteen">
                                    <label class="custom-control-label" for="sixteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="seventeen" name="customRadioInline6"
                                        class="custom-control-input" value="seventeen">
                                    <label class="custom-control-label" for="seventeen">No</label>
                                </div>

                                {{-- <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="eighteen" name="customRadioInline6"
                                        class="custom-control-input" value="eighteen">
                                    <label class="custom-control-label" for="eighteen">Always</label>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- End sixth Que -->


                    <div class="card"data-aos="fade-right">
                        <div class="card-header" id="faqHeading-7">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                    <span class="badge"><i class="fas fa-plus"></i></span>greying of hairs?
                                    <span class="float-right" id="check6"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns6()">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nineteen" name="customRadioInline7"
                                        class="custom-control-input" value="nineteen">
                                    <label class="custom-control-label" for="nineteen">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twenty" name="customRadioInline7"
                                        class="custom-control-input" value="twenty">
                                    <label class="custom-control-label" for="twenty">No</label>
                                </div>


                            </div>
                        </div>
                    </div>

{{-- *******************----Duration---------****************** --}}

            <h4 class="ml-4 " class="font-family: sans-serif">Duration</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-8">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8"
                                    data-aria-expanded="true" data-aria-controls="faqCollapse-8">
                                    <span class="badge"> <i class="fas fa-plus"></i></span>< 6 Weeks <span
                                        class="float-right" id="check7"><img src="img/tick.png"></span>
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns7()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyone" name="customRadioInline8" class="custom-control-input"
                                        value="twentyone">
                                    <label class="custom-control-label" for="twentyone">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwo" name="customRadioInline8" class="custom-control-input"
                                        value="twentytwo">
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
                                    <span class="badge"><i class="fas fa-plus"></i></span>> 6 weeks<span
                                        class="float-right" id="check8"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns8()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefour" name="customRadioInline9" class="custom-control-input"
                                        value="twentyfour">
                                    <label class="custom-control-label" for="twentyonefour">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonefive" name="customRadioInline9" class="custom-control-input"
                                        value="twentyonefive">
                                    <label class="custom-control-label" for="twentyonefive">No</label>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- End Sceond Que -->


{{-- *******************----Pattern[onset]-----******************** --}}

            <h4 class="ml-4 " class="font-family: sans-serif">Pattern[onset]</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-10">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                    <span class="badge"> <i class="fas fa-plus"></i></span>abrupt<span
                                        class="float-right" id="check9"><img src="img/tick.png"></span>
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns9()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneseven" name="customRadioInline10" class="custom-control-input"
                                        value="twentyseven">
                                    <label class="custom-control-label" for="twentyoneseven">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwoeight" name="customRadioInline10" class="custom-control-input"
                                        value="twentyeight">
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
                                    <span class="badge"><i class="fas fa-plus"></i></span>gradual<span
                                        class="float-right" id="check10"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns10()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine" name="customRadioInline11" class="custom-control-input"
                                        value="twentynine">
                                    <label class="custom-control-label" for="twentyonenine">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneten" name="customRadioInline11" class="custom-control-input"
                                        value="twentyten">
                                    <label class="custom-control-label" for="twentyoneten">No</label>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- End Sceond Que -->



            <h4 class="ml-4 " class="font-family: sans-serif">Pattern[Area]</h4>
                    <div class="card" data-aos="fade-right">
                        <div class="card-header" id="faqHeading-12">
                            <div class="mb-0">
                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12"
                                    data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                    <span class="badge"> <i class="fas fa-plus"></i></span>localised<span
                                        class="float-right" id="check11"><img src="img/tick.png"></span>
                                </h5>


                            </div>
                        </div>
                        <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns11()">

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyoneeight" name="customRadioInline12" class="custom-control-input"
                                        value="twentyeight1">
                                    <label class="custom-control-label" for="twentyoneeight">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine" name="customRadioInline12" class="custom-control-input"
                                        value="twentynine1">
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
                                    <span class="badge"><i class="fas fa-plus"></i></span>diffuse <span
                                        class="float-right" id="check12"><img src="img/tick.png"></span>
                                </h5>
                            </div>
                        </div>
                        <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13"
                            data-parent="#accordion">
                            <div class="card-body" onclick="queAns12()">


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentyonenine1" name="customRadioInline13" class="custom-control-input"
                                        value="twentyten2">
                                    <label class="custom-control-label" for="twentyonenine1">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="twentytwonine1" name="customRadioInline13" class="custom-control-input"
                                        value="twentyten2">
                                    <label class="custom-control-label" for="twentytwonine1">No</label>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- End Sceond Que -->






<div class="pagination justify-content-end page-item disabled">

    <a class="pagination"  href="pquestion">Prev</a>
    <a  class="pagination" href="pquestion1">1</a>
    <a  class="pagination" href="pquestion2">2</a>
    <a  class="pagination" href="pquestion3">3</a>
    <a  class="pagination" href="pquestion4">4</a>
    <a  class="pagination" href="pquestion5">Next</a>
</div>


                    {{-- <div class="mt-4 col-md-3 offset-4" data-aos="pagination"

                        <center> <a href="{{url('/login')}}"> <button type="button"
                                    class="btn btn-outline-success"><strong>Submit</strong></button> </a></center>


                    </div> --}}
                    </br>

                </div>
                <!--Accordian div-->


            </div> <!-- col-md-10-->



            <!-- </div> -->

        </div>
    </div>
</section>




<!-- End Questions Ans -->




<br><br>

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
    var checked_ans = document.querySelector('input[name = "customRadioInline1"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check').show(); //Alert the value of the checked.
    } else {
        $('#check').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns1() {
    var checked_ans = document.querySelector('input[name = "customRadioInline2"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check1').show(); //Alert the value of the checked.
    } else {
        $('#check1').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns2() {
    var checked_ans = document.querySelector('input[name = "customRadioInline3"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check2').show(); //Alert the value of the checked.
    } else {
        $('#check2').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns3() {
    var checked_ans = document.querySelector('input[name = "customRadioInline4"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check3').show(); //Alert the value of the checked.
    } else {
        $('#check3').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns4() {
    var checked_ans = document.querySelector('input[name = "customRadioInline5"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check4').show(); //Alert the value of the checked.
    } else {
        $('#check4').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns5() {
    var checked_ans = document.querySelector('input[name = "customRadioInline6"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check5').show(); //Alert the value of the checked.
    } else {
        $('#check5').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns6() {
    var checked_ans = document.querySelector('input[name = "customRadioInline7"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check6').show(); //Alert the value of the checked.
    } else {
        $('#check6').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}

function queAns7() {
    var checked_ans = document.querySelector('input[name = "customRadioInline8"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check7').show(); //Alert the value of the checked.
    } else {
        $('#check7').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns8() {
    var checked_ans = document.querySelector('input[name = "customRadioInline9"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check8').show(); //Alert the value of the checked.
    } else {
        $('#check8').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}


function queAns9() {
    var checked_ans = document.querySelector('input[name = "customRadioInline10"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check9').show(); //Alert the value of the checked.
    } else {
        $('#check9').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns10() {
    var checked_ans = document.querySelector('input[name = "customRadioInline11"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check10').show(); //Alert the value of the checked.
    } else {
        $('#check10').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns11() {
    var checked_ans = document.querySelector('input[name = "customRadioInline12"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check11').show(); //Alert the value of the checked.
    } else {
        $('#check11').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
function queAns12() {
    var checked_ans = document.querySelector('input[name = "customRadioInline13"]:checked');
    if (checked_ans != null) { //Test if something was checked
        $('#check12').show(); //Alert the value of the checked.
    } else {
        $('#check12').hide();

        // alert("ans not selected");  //Alert, nothing was checked.
    }
}
</script>


</body>

</html>

