<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hair Circle</title>
</head>
<body>
<div class="row">
    @extends('mainnav')
</div>
<div class="mt-1"> -->
<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Slider II-01.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
<!-- /div>

</body>
</html> -->
  

<!-- <div class="row">
   
</div> -->



    <!-- <link href="{{asset('css/bootstrapsss.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/productcarousel.css')}}" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<link id="t-colors" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}" rel="stylesheet">



<div class="">
   @include('mainnav')  
</div>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/Slider II-01.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/Slider II-01.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Slider II-01.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
<!-- alert box -->

<!-- end alert box  -->
<!-- Questions ans -->


<section class="faq-section results_table">
<div class="container">
  <div class="row">
                  
                    <div class="col-md-12">

                        <div class="faq-title text-center pb-3">
                        <h2>Analysis Questions</h2>
                          
                        </div>
                    </div>

                    <div class="col-md-10 offset-md-1">
                        <div class="faq" id="accordion">

                     <form method="post" action="{{ url('/question') }}" class="basicform" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                                <!-- <div class="card-header">
                                    <div class="mb-0" style="padding: 10px;">
                                        <div class="row" style="margin-left:40%;">
                                            <center><h4>Personal Details</h4></center>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required="Enter Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" required="Enter Mobile No">
                                             </div>
                                        </div>
                                                                   
                                      </div>
                                </div>
                            </div> -->
                            
                        <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 name="question1" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">Q</span>My hair is Sensitive?<span class="float-right" id="check"><img src="img/tick.png"></span>
                                            <input type="text" name="faqHeading-1" value="My hair is Sensitive?" style="display:none;">
                                        </h5>
                                        <div class="card-body">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="never1" name="answer1" class="custom-control-input" value="Never">
                                                 <label class="custom-control-label" for="never1">Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes1" name="answer1" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes1">Sometimes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always" name="answer1" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always">Always</label>
                                            </div>                         
                                        </div>
                            </div>
                        </div>
                    </div>
                              <!-- End First Que -->
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 name="question2" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">Q</span>My Scalp Itches/Hurts ?<span class="float-right" id="check1"><img src="img/tick.png"></span>
                                            <input type="text" name="faqHeading-2" value="My Scalp Itches/Hurts ?" style="display:none;">
                                        </h5>
                                 <div class="card-body" onclick="queAns1()">
                                     
                                
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="never2" name="answer2" class="custom-control-input" value="Never">
                                        <label class="custom-control-label" for="never2">Never</label>
                                    </div>


                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="sometimes2" name="answer2" class="custom-control-input" value="Sometimes">
                                        <label class="custom-control-label" for="sometimes2">Sometimes</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="always2" name="answer2" class="custom-control-input" value="Always">
                                        <label class="custom-control-label" for="always2">Always</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                
                            </div>
                             <!-- End Sceond Que -->

                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 name="question3" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">Q</span>Everyone in My Family have Good Hair then Why Only I am Getting Bald ?<span class="float-right" id="check2"><img src="img/tick.png"></span>
                                            <input type="text" name="faqHeading-3" value="Everyone in My Family have Good Hair then Why Only I am Getting Bald ?" style="display:none;">
                                        </h5>
                                        <div class="card-body show">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="never3" name="answer3" class="custom-control-input" value="Never">
                                                <label class="custom-control-label" for="never3">Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes3" name="answer3" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes3">Someties</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always3" name="answer3" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always3">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <!-- End Third Que -->

                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 name="question4" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">Q</span>I am Afraid that My Loss of Hair Could Worsen ? <span class="float-right" id="check3"><img src="img/tick.png"></span>
                                            <input type="text" name="faqHeading-4" value="I am Afraid that My Loss of Hair Could Worsen?" style="display:none;">
                                        </h5>
                                        <div class="card-body">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="never4" name="answer4" class="custom-control-input" value="Never">
                                                <label class="custom-control-label" for="never4">Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes4" name="answer4" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes4">Sometimes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always4" name="answer4" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always4">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <!-- End Four Que -->   
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 name="question5" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">Q</span>I See Every Morning/Evening in the Mirror Whether My Hair is Lost ?<span class="float-right" id="check4"><img src="img/tick.png"></span>
                                            <input type="text" name="faqHeading-5" value="I See Every Morning/Evening in the Mirror Whether My Hair is Lost ?" style="display:none;">
                                        </h5>
                                        <div class="card-body">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  id="never5"  name="answer5" class="custom-control-input" value="Never">
                                                <label class="custom-control-label"  for="never5" >Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes5" name="answer5" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes5">Sometimes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always5" name="answer5" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always5">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- End Fifth Que -->

                             <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 name="question6" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge">Q</span>I Worry Sometimes About the Fact That I Look Old With My Hair Loss ?<span class="float-right" id="check5"><img src="img/tick.png"></span>
                                             <input type="text" name="faqHeading-6" value="I Worry Sometimes About the Fact That I Look Old With My Hair Loss ?" style="display:none;">
                                        </h5>
                                        <div class="card-body">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  id="never6"  name="answer6" class="custom-control-input" value="Never">
                                                <label class="custom-control-label"  for="never6" >Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes6" name="answer6" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes6">Sometimes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always6" name="answer6" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always6">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                             <!-- End sixth Que -->


                             <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 name="question7" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">Q</span>People Talk Behind My Back About My Loss of Hair/This Appearance of My Hair ?<span class="float-right" id="check6"><img src="img/tick.png"></span>
                                             <input type="text" name="faqHeading-7" value="People Talk Behind My Back About My Loss of Hair/This Appearance of My Hair ?" style="display:none;">
                                        </h5>
                                        <div class="card-body"  >
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  id="never7"  name="answer7" class="custom-control-input" value="Never">
                                                <label class="custom-control-label"  for="never7" >Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes7" name="answer7" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes7">Sometimes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always" name="answer7" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                             <!-- End sevent Que -->

                             <div class="card">
                                <div class="card-header" id="faqHeading-8">
                                    <div class="mb-0">
                                        <h5 name="question8" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                                            <span class="badge">Q</span>I Feel Embarrassed By My Hair Condition, So I Avoid Photos on Social Media and in Public Gatherings ?<span class="float-right" id="check7"><img src="img/tick.png"></span>
                                            <input type="text" name="faqHeading-8" value="I Feel Embarrassed By My Hair Condition, So I Avoid Photos on Social Media and in Public Gatherings ?" style="display:none;">
                                        </h5>
                                        <div class="card-body">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  id="never8"  name="answer8" class="custom-control-input" value="Never">
                                                <label class="custom-control-label"  for="never8" >Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes8" name="answer8" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes8">Sometimes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always8" name="answer8" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always8">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- End eight Que -->

                             <div class="card">
                                <div class="card-header" id="faqHeading-9">
                                    <div class="mb-0">
                                        <h5 name="question9" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                            <span class="badge">Q</span>My Loss of Hair is Problem For My Loved Ones(Parents, Spouse, Girlfriend), Marriage, Career Growth and Opportunities ?<span class="float-right" id="check8"><img src="img/tick.png"></span>
                                             <input type="text" name="faqHeading-9" value="My Loss of Hair is Problem For My Loved Ones(Parents, Spouse, Girlfriend), Marriage, Career Growth and Opportunities ?" style="display:none;">
                                        </h5>
                                        <div class="card-body">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  id="never9"  name="answer9" class="custom-control-input" value="Never">
                                                <label class="custom-control-label"  for="never9" >Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes9" name="answer9" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes9">Sometimes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always9" name="answer9" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always9">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- End nine Que -->


                             <div class="card">
                                <div class="card-header" id="faqHeading-10">
                                    <div class="mb-0">
                                        <h5 name="question10" class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                            <span class="badge">Q</span>I Was Not Taken Seriously at All by My Doctor With Regard to My Hair Problem and I Will Not Get My Lost Hairs Back Again ?<span class="float-right" id="check9"><img src="img/tick.png"></span>
                                            <input type="text" name="faqHeading-10" value="I Was Not Taken Seriously at All by My Doctor With Regard to My Hair Problem and I Will Not Get My Lost Hairs Back Again ?" style="display:none;">
                                        </h5>
                                        <div class="card-body">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  id="never10"  name="answer10" class="custom-control-input" value="Never">
                                                <label class="custom-control-label"  for="never10" >Never</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="sometimes10" name="answer10" class="custom-control-input" value="Sometimes">
                                                <label class="custom-control-label" for="sometimes10">Sometimes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="always10" name="answer10" class="custom-control-input" value="Always">
                                                <label class="custom-control-label" for="always10">Always</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                             <!-- End ten Que -->






                             <div class="col-md-3  offset-4 mt-4">
                      
                     
                             <center><button type="submit" class="btn btn-outline-primary" ><strong>Submit</strong></button></center>

                             </div>
                             <!-- <br> -->

                        </form>
                            
                     
                         </div> <!-- Accordian div -->

                     
                    </div>  <!-- col-md-10 -->
                        

                    
                   </div>
                  
     </div>
  </div>
</section>




<!-- End Questions Ans -->






<!-- <section class="product-section results_charts"> -->
<!-- <div class="container mt-5">
     <div class="text-center pt-3">
      <h2 >YOUR PRODUCTS LIST</h2>
      </div> 

     <div class="row">

 
  
		<div class="col-md-12">
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<!-- <!-- <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<!-- <div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">

  
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="{{url('/product-description')}}">	<img src="https://5.imimg.com/data5/OU/DC/VV/SELLER-74737604/tresemme-keratin-smooth-shampoo-185ml-500x500.jpg" class="img-fluid" alt=""></a>
								</div>
								<div class="thumb-content">
									<h4>Shampoo</h4>
									<p class="item-price"><strike>&#x20B9;400.00</strike> <span>&#x20B9;369.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>  -->
									<!-- <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a> -->
							<!-- 	</div>						
							</div>
						</div>



						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://media1.popsugar-assets.com/files/thumbor/44c4HvEgk8HnF9AMGvScleVe_Ag/fit-in/728xorig/filters:format_auto-!!-:strip_icc-!!-/2018/01/05/788/n/1922153/3966541e5a4fbc2e3ffd01.26572541_edit_img_cover_file_44472878_1515081282/i/Best-New-Hair-Products-2018.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Hair & Care</h4>
									<p class="item-price"><strike>&#x20B9;25.00</strike> <span>&#x20B9;23.99</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div> -->
									<!-- <a href="#" class="btn btn-primary">Add to Cart</a> 
								</div>						
							</div>
						</div>		
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tresemme.com/content/dam/unilever/tresemme/global/pack_shot/front/hair_care/wash_and_care/tresemme_shampoo_colour_revitalise_100ml/ps-personal_care-hair-tresemme-colour_revitalise-100ml-uk_ie_no_de_se_fi-9231161-916187-png.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Moisture Rich</h4>
									<p class="item-price"><strike>&#x20B9;899.00</strike> <span>&#x20B9;649.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div> -->
									<!-- <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a> 
								</div>						
							</div>
						</div>								
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.bigbasket.com/media/uploads/p/l/40158271-2_3-tresemme-hair-fall-defense-shampoo.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Hair Fall Defense</h4>
									<p class="item-price"><strike>&#x20B9;315.00</strike> <span>&#x20B9;250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a> 
								</div>						
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<div class="row">
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
                                 <img src="https://www.tresemme.com/content/dam/unilever/tresemme/global/pack_shot/front/hair_care/wash_and_care/tresemme_shampoo_colour_revitalise_100ml/ps-personal_care-hair-tresemme-colour_revitalise-100ml-uk_ie_no_de_se_fi-9231161-916187-png.png" class="img-fluid" alt="">

								</div>
								<div class="thumb-content">
									<h4>Hair & Care</h4>
									<p class="item-price"><strike>&#x20B9;289.00</strike> <span>&#x20B9;269.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a> 
								</div>						
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=1500&h=1500&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2020%2F03%2F03%2Fbiolage-volumebloom-conditioner-weightless-moisture-long-lasting-voluminous-hair.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Shampoo</h4>
									<p class="item-price"><strike>&#x20B9;1099.00</strike> <span>&#x20B9;869.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<!-- <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a> 
								</div>						
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
						    			<img src="https://d3r2zleywq7959.cloudfront.net/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/5/5/55460_xlarge.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Moistures</h4>
									<p class="item-price"><strike>&#x20B9;109.00</strike> <span>&#x20B9;99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<!-- <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.londondrugs.com/on/demandware.static/-/Sites-londondrugs-master/default/dwd567ebb9/products/L0656840/large/L0656840.JPG" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Dove Shampoo</h4>
									<p class="item-price"><strike>&#x20B9;599.00</strike> <span>&#x20B9;569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<!-- <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a> 
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.dove.com/content/dam/unilever/dove/united_kingdom/pack_shot/8710447337684-2290866-png.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Dove</h4>
									<p class="item-price"><strike>&#x20B9;369.00</strike> <span>&#x20B9;349.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<!-- <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a> 
								</div>						
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://media.glamour.com/photos/5c128f83bc6b5a2ccac7a13a/1:1/w_1600,h_1600,c_limit/volumetry-1600.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Loreal</h4>
									<p class="item-price"><strike>&#x20B9;315.00</strike> <span>&#x20B9;250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<!-- <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tresemme.com/content/dam/unilever/tresemme/canada/pack_shot/022400002194-2319643-png.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Flaweless Curls</h4>
									<p class="item-price"><strike>&#x20B9;450.00</strike> <span>&#x20B9;418.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
                
								</div>						
							</div>
						</div>	

						<div class="col-md-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://images-na.ssl-images-amazon.com/images/I/41umQUlFzfL.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Keratin Smooth</h4>
									<p class="item-price"><strike>&#x20B9;350.00</strike> <span>&#x20B9;330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i></a>
									<a href="#" class="btn btn-primary">Buy Now</a>
				 				</div>						
							</div>
						</div>

					</div>
				</div>

			</div>
			 Carousel controls 
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div> -->


<!-- 
   <a href="{{url('/product')}}"> <button type="button"  class="btn btn-outline-primary mb-3 float-right">Show More</button></a> -->

		<!-- </div>row-->
    
	<!-- </div > --><!--container--> 


<!-- </section> -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrapbundle.js"></script>
   <script src="js/main.js"></script> -->
   <!-- <script src="js/productcarousel.js"></script> -->
    <script> 
        // $('.card').click(function() { 
        //     $(this).find('i').toggleClass('fas fa-plus fas fa-minus') 
         
        // }); 

  //       $('#accordion').on('show.bs.collapse', function(e) {   
  //    $(e.target).prev('.card-header').find('i').removeClass('fas fa-plus');        
  //    $(e.target).prev('.card-header').find('i').addClass('fas fa-minus');   

   
    
  // })
  // .on('hide.bs.collapse', function(e) {
  //  $(e.target).prev('.card-header').find('i').removeClass('fas fa-minus');
  //  $(e.target).prev('.card-header').find('i').addClass('fas fa-plus');   
  // });

  // if( $('.custom-radio ').attr("checked", "checked");){
  //    $('.card-header').find('#check').show('fas fa-check');        
    
  // })

  // }

  $( document ).ready(function() {
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
  $(".results_charts").hide();  



	//   $("#chart").on("click", function(){
	//     $(".results_table").hide();
	//     $(".results_charts").show();  
	//   });
	//   $("#table").on("click", function(){
	//     $(".results_charts").hide();  
	//     $(".results_table").show();
	//   });




  });

// function queAns() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline1"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }


// function queAns1() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline2"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check1').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check1').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }
// function queAns2() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline3"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check2').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check2').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }
// function queAns3() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline4"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check3').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check3').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }
// function queAns4() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline5"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check4').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check4').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }

// function queAns5() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline6"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check5').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check5').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }

// function queAns6() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline7"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check6').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check6').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }

// function queAns7() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline8"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check7').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check7').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }


// function queAns8() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline9"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check8').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check8').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }


// function queAns9() {
//      var checked_ans = document.querySelector('input[name = "customRadioInline10"]:checked');
//            if(checked_ans != null){  //Test if something was checked
//               $('#check9').show();  //Alert the value of the checked.
//             } 
//             else {
//                 $('#check9').hide();
               
//                 // alert("ans not selected");  //Alert, nothing was checked.
//             } 
// }




</script> 


</body>
   
</html>