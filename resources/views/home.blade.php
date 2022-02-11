@extends('nav')

@section('content')

   
 <!-- ======= Slider ======= -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>-->
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
		</div>
		<div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="asset/images/slider12.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="asset/images/slider8.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="asset/images/slider3.jpg" class="d-block w-100" alt="...">
		    </div>
            <!--<div class="carousel-item">-->
            <!--  <img src="asset/images/slider6.jpg" class="d-block w-100" alt="...">-->
            <!--</div>-->
            <div class="carousel-item">
              <img src="asset/images/slider7.jpg" class="d-block w-100" alt="...">
            </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		</button>
	</div>
 <!-- End Slider --> 

 <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg bg-white mt-0">
      <div class="section-title" data-aos="fade-up" >
          <!-- <h2>About</h2> -->
          <div class="row">
            <div class="form-group col-md-9 col-lg-9 col-8">
              <h3>About Us</h3>
            </div>
            <div class="form-group col-md-3 col-lg-3 col-4">
               <a href="{{url('/registration')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>
                <!--<a href="{{url('/test')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>-->
            </div>
              
          </div>
        </div>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 mt-5" data-aos="fade-right" data-aos-delay="100">
            <img src="img/logo/Logo Final (1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul>
              <li>
                  <div> <p>Hair Circle. the wholistic hair therapy as the name suggest is holistic and complete therapy for all your hair related concerns.</p>
            
                  <p>Hair Circle is one stop solution.
                    Our experts designed treatment protocol with special focus on nutrition and erratic lifestyle of current world.
                    Our experts are qualified dermatologists having experience of more than 10 years.
                    Hair is an ornament for everyone and loosing hair is cause of stress for many. As it is not a lifesaving emergency, treatment is delayed most of the time and when problem worsens treatment is searched. There is information overload in this era and constant bombardment of advertises and myths and false claims related to hair treatment misleads the sufferer only to lose his time and money.</p>
            
                  <p>Research has proven that hair fall is having psychosocial impact on individual life. 
                    Lost hair can be regained and regrown if timely interventions are done. Finding a correct treatment partner is challenging as every individuals is unique though symptoms are common reason may be different for each one. If treatment started at right time hairs can be preserved.
                  We provide personalized treatment option to patients considering unique needs of their bodies. Integrative treatment approach is followed which consist of ayurveda, nutrition, allopathy medicines and surgeries and camouflaging options. We provide best of everything. Treatment protocols are trusted by thousands of patients.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
       <div class="section-title" data-aos="fade-up" >
          <!-- <h2>About</h2> -->
          <div class="row">
            <div class="form-group col-md-9 col-lg-9 col-8">
            </div>
            <div class="form-group col-md-3 col-lg-3 col-4">
               <!--<a href="{{url('/test')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>-->
               <a href="{{url('/registration')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>
            </div>
              
          </div>
        </div>
    </section><!-- End About Section -->

   <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      
      <div class="container" data-aos="zoom-in">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img " alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
      <div class="divs1" data-aos="fade-up" >
        <div class="row">
            <div class="form-group col-md-9 col-lg-9 col-8">
              
            </div>
            <div class="form-group col-md-3 col-lg-3 col-4">
               <!--<a href="{{url('/test')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>-->
               <a href="{{url('/registration')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>
            </div>
              
          </div>
        </div>
    </section><!-- End Testimonials Section -->
    
    <!--    <section id="testimonial" class="testimonials1 mt-5">-->
    <!--  <div class="container" data-aos="zoom-in">-->
    <!--    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">-->

    <!--      <div class="swiper-wrapper">-->

    <!--        <div class="swiper-slide">-->
    <!--          <div class="testimonial-item">-->
    <!--            <div class="row">-->
    <!--              <div class="form-group col-md-4 col-lg-4 col-12">-->
    <!--                <img src="img/diagnosis/aa1.jpg" class="testimonial-img mt-5" alt="">-->
    <!--              </div>-->
    <!--              <div class="form-group col-md-8 col-lg-8 col-12">-->
    <!--                <h3>Alopecia Areata</h3>-->
    <!--                <p style="text-align: justify;">-->
    <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--                  This is a hair condition where hairs are lost in patches and noticed all of a sudden. It can involve any part of body bearing hairs such as scalp, beard, moustache, body hairs. This is an autoimmune disorder where bodies defence system act against hair follicles. This is a hair condition where you can regain hairs without treatment also in some cases, or new patches may come during treatment. With proper diagnosis and treatment condition can be halted and hairs can be regrown completely.-->
    <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--                </p>-->
    <!--              </div>-->
    <!--            </div>-->
                
    <!--          </div>-->
    <!--        </div><!-- End testimonial item -->

    <!--        <div class="swiper-slide">-->
    <!--          <div class="testimonial-item">-->
    <!--            <div class="row">-->
    <!--              <div class="form-group col-md-4 col-lg-4 col-12">-->
    <!--                <img src="img/diagnosis/aga2.jpg" class="testimonial-img mt-5" alt="">-->
    <!--              </div>-->
    <!--              <div class="form-group col-md-8 col-lg-8 col-12">-->
    <!--                <h3>AndroGenetic Alopecia(male pattern baldness)</h3>-->
    <!--                <p style="text-align: justify;">-->
    <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--                  This is most common type of baldness seen in males. Genetic predisposition plays important role in AGA, also hormonal and nutritional imbalances plays influential role. Falling hair is not major concern in this but over the the period of time hair line regresses and thinning of hairs is seen. Patches of baldness are seen. With proper diagnosis of the condition appropriate treatment can be initiated and further progress can be arrested. And lost hair can be regrown to some extent. This is one condition of hair fall which will require some form of treatment in maintainance phase -->
    <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--                </p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div><!-- End testimonial item -->

    <!--        <div class="swiper-slide">-->
    <!--          <div class="testimonial-item">-->
    <!--            <div class="row">-->
    <!--              <div class="form-group col-md-4 col-lg-4 col-12">-->
    <!--                <img src="img/diagnosis/te1.jpg" class="testimonial-img mt-5" alt="">-->
    <!--              </div>-->
    <!--              <div class="form-group col-md-8 col-lg-8 col-12">-->
    <!--                <h3>Telogen Effluvium</h3>-->
    <!--                <p style="text-align: justify;">-->
    <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--                 telogen effluvium (TE), one of the most common cause of alopecia(hair fall).-->
    <!--                 It is an abnormality of hair cycling occurring as a reaction pattern to various physical or mental stressors. -->
    <!--                 generally present with complaints of increased hair loss while washing or brushing-->
    <!--                may even bring in bags of shed hair to demonstrate the quantity of loss [Figure 1]. They are often very anxious that they will go bald if this continues.-->
    <!--                Experts can differentiate between the causes and suggest appropriate treatment. If diagnosed correctly this can be treated 1000% successfully and lost hair can be regained completely. -->

    <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--                </p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div><!-- End testimonial item -->

    <!--        <div class="swiper-slide">-->
    <!--          <div class="testimonial-item">-->
    <!--            <div class="row">-->
    <!--              <div class="form-group col-md-4 col-lg-4 col-12">-->
    <!--                <img src="asset/image/ca1.jpg" class="testimonial-img mt-5" alt="">-->
    <!--              </div>-->
    <!--              <div class="form-group col-md-8 col-lg-8 col-12">-->
    <!--                <h3>Cicatricial Alopecia</h3>-->
    <!--                <p style="text-align: justify;">-->
    <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--                  In this type of hair fall there is some underlying systemic disease which results in permanent damage to hair follicle resulting in loss of hair which can not be regrown. Even any type of deep injury leading to loss of hair follicles in a particular area will lead to this condition. In this condition medical management has limited role only to halt the progress of disease. For lost hair surgical options can be tried after experts opinion.-->
    <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--                </p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div><!-- End testimonial item -->

    <!--        <div class="swiper-slide">-->
    <!--          <div class="testimonial-item">-->
    <!--            <div class="row">-->
    <!--              <div class="form-group col-md-4 col-lg-4 col-12">-->
    <!--                <img src="asset/image/ttm 1.jpg" class="testimonial-img mt-5" alt="">-->
    <!--              </div>-->
    <!--              <div class="form-group col-md-8 col-lg-8 col-12">-->
    <!--                <h3>TrichoTiloMania</h3>-->
    <!--                <p style="text-align: justify;">-->
    <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--                  This type of hair fall is not commonly seen in normal peoples. This is common in patients undergoing any treatment for psychological distress. Brokrn hairs can be seen in the patches of hair fall. There is no clear patch of baldness seen. Patches are usually in the areas which are easily aacessible to hairs. With the treatment of underlying condition hairs can be regrown completely. Hair transplant is not required in such patients. -->
    <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--                </p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div><!-- End testimonial item -->

    <!--        <div class="swiper-slide">-->
    <!--          <div class="testimonial-item">-->
    <!--            <div class="row">-->
    <!--              <div class="form-group col-md-4 col-lg-4 col-12">-->
    <!--                <img src="asset/image/ta.jpg" class="testimonial-img mt-5" alt="">-->
    <!--              </div>-->
    <!--              <div class="form-group col-md-8 col-lg-8 col-12">-->
    <!--                <h3>Tractional Alopecia</h3>-->
    <!--                <p style="text-align: justify;">-->
    <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
    <!--                  This type is commonly seen in people who are having habit tight pony tail, use of caps, turbans,use of head gadgets such as helmets. Commonly affects frontal hair line or temporeal recession. If follicles are active then hair can be regrown with change in habits.  -->
    <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
    <!--                </p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div><!-- End testimonial item -->

    <!--      </div>-->
    <!--      <div class="swiper-pagination"></div>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</section><!-- End Testimonials Section --><!-- End Testimonials Section -->
    <section class="testimonial text-center mt-5" id="testimonial">
        
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <div class="row">
                              <div class="form-group col-md-4 col-lg-4 col-12">
                                <img src="img/diagnosis/aa1.jpg" class="testimonial-img" alt="">
                              </div>
                              <div class="form-group col-md-8 col-lg-8 col-12">
                                  <h3>Alopecia Areata</h3>
                                    
                                  <p style="text-align: justify;">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Alopecia Areata is a hair condition where hairs are lost in patches and noticed all of a sudden. It can involve any part of body bearing hairs such as scalp, beard, moustache, body hairs. This is an autoimmune disorder where bodies defence system act against hair follicles. This is a hair condition where you can regain hairs without treatment also in some cases, or new patches may come during treatment. With proper diagnosis and treatment condition can be halted and hairs can be regrown completely.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                  </p>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                          <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-12">
                              <img src="img/diagnosis/aga2.jpg" class="testimonial-img" alt="">
                            </div>
                            <div class="form-group col-md-8 col-lg-8 col-12">
                             
                               <h3> Androgenetic Alopecia</h3>

                              <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Androgenetic Alopecia is most common type of baldness seen in males. Genetic predisposition plays important role in AGA, also hormonal and nutritional imbalances plays influential role. Falling hair is not major concern in this but over the period of time hair line regresses and thinning of hairs is seen. Patches of baldness are seen. With proper diagnosis of the condition appropriate treatment can be initiated and further progress can be arrested and lost hair can be regrown to some extent. This is one condition of hair fall which will require some form of treatment in maintainance phase 
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <div class="row">
                              <div class="form-group col-md-4 col-lg-4 col-12">
                                <img src="img/diagnosis/te1.jpg" class="testimonial-img" alt="">
                              </div>
                              <div class="form-group col-md-8 col-lg-8 col-12">
                                  <h3>Telogen Effluvium </h3>
                                <p style="text-align: justify;">
                                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 Telogen Effluvium (TE), One of the most common cause of alopecia (Hair Fall).
                                 It is an abnormality of hair cycling occurring as a reaction pattern to various physical or mental stressors. 
                                 Generally present with complaints of increased hair loss while washing or brushing
                                may even bring in bags of shed hair to demonstrate the quantity of loss. They are often very anxious that they will go bald if this continues.
                                Experts can differentiate between the causes and suggest appropriate treatment. If diagnosed correctly this can be treated 100% successfully and lost hair can be regained completely. 

                                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                          <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-12">
                              <img src="asset/image/ca1.jpg" class="testimonial-img" alt="">
                            </div>
                            <div class="form-group col-md-8 col-lg-8 col-12">

                                <h3>Cicatricial Alopecia</h3>

                              <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                In this type of hair fall there is some underlying systemic disease which results in permanent damage to hair follicle resulting in loss of hair which cannot be regrown. Even any type of deep injury leading to loss of hair follicles in a particular area will lead to this condition. In this condition medical management has limited role only to halt the progress of disease. For lost hair surgical options can be tried after experts opinion.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                          <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-12">
                              <img src="asset/image/ttm 1.jpg" class="testimonial-img" alt="">
                            </div>
                            <div class="form-group col-md-8 col-lg-8 col-12">
                                <h3>Trichotillo Mania</h3>
                              <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Trichotillo Mania is not commonly seen in normal people. This is common in patients undergoing any treatment for psychological distress. Broken hairs can be seen in the patches of hair fall. There is no clear patch of baldness seen. Patches are usually in the areas which are easily accessible to hands. With the treatment of underlying condition, hairs can be regrown completely. Hair transplant is not required in such patients.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                          <div class="row">
                            <div class="form-group col-md-4 col-lg-4 col-12">
                              <img src="asset/image/ta.jpg" class="testimonial-img" alt="">
                            </div>
                            <div class="form-group col-md-8 col-lg-8 col-12">
                                <h3>Tractional Alopecia</h3>
                              <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                               Tractional Alopecia is commonly seen in people who are having habit of tight pony tail, use of caps, turbans, use of head gadgets such as helmets. Commonly affects frontal hair line or temporeal recession. If follicles are active then hair can be regrown with change in habits.  
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        <div class="divs1" data-aos="fade-up" >
          <div class="row">
              <div class="form-group col-md-9 col-lg-9 col-8">
                
              </div>
              <div class="form-group col-md-3 col-lg-3 col-4">
                 <!--<a href="{{url('/test')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>-->
                 <a href="{{url('/registration')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>
              </div>
                
            </div>
        </div>
    </section>
       <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="section-title">
            <h3>Contact Us</h3>
        </div>
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="form-group col-lg-6 col-md-6 col-12">
            <div class="row">
              <div class="form-group col-lg-6 col-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>contact@example.com</p>
                </div>
              </div>
              <div class="form-group col-lg-6 col-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
            </div>
            
            <br>
            <div class="info-box mb-4 abcmap">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Basement-1, Yogeshwari Complex, Sahyog Nagar, Gajanan Mandir Road,Near Sutgirni Chowk, Garkheda,Aurangabad.</p>

            </div>
            <br>
              <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->

           
          </div>
          <div class="form-group col-lg-6 col-md-6 col-12">
               <div class="info-box p-4" data-aos="fade-up" data-aos-delay="100">
            <form action="{{url('/contactus')}}" method="POST" class="" enctype="multipart/form-data">
              @csrf
               <div class="form-group col-md-12 col-12 mt-3 mb-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-12 col-12 mt-3 mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              <div class="form-group col-md-12 col-12 mt-3 mb-3">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" required>
              </div>
              <div class="form-group col-md-12 col-12 mt-3 mb-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group col-md-12 col-12 mt-3 mb-3">
                <textarea class="form-control" name="message" rows="2" placeholder="Message" required></textarea>
              </div>
             <!--  <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center mt-5 mb-3 rrb">
                  <input type="submit" name="submit" class="btn btn-outline-info btn1" value="Send Message"> 
              </div>
            </form>
          </div>
         </div>
      </div>
      </div>
       <div class="section-title">
          <div class="row">
              <div class="form-group col-md-9 col-lg-9 col-8">
              </div>
              <div class="form-group col-md-3 col-lg-3 col-4">
                 <!--<a href="{{url('/test')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>-->
                 <a href="{{url('/registration')}}" class="feedback btn ">Are You Serious About Your Hair Health</a>
              </div>
                
            </div>
        </div>
    </section><!-- End Contact Section -->
              <style type="text/css">
                .rrb .btn1:hover{
                  background-color: #000;
                  color: #fff;
                }
                .rrb .btn1{
                  color: #000;
                  border-color: #DAA520;
                }
                .abcmap:hover + iframe{
                  display: block;
                }
                .img-fluid{
                    margin-top:-30px;    
                }

                  .feedback {
                     background-color: transparent;
                      color:#000;
                      font-weight: bold;
                      padding: 8px 8px;
                      /*border-radius: 4px;*/
                      border:solid 2px;
                      border-radius: 10px;
                      border-color: #DAA520;
                      font-size: 15px;
                    }
                   .testimonials .divs1 .feedback {
                      overflow: hidden;
                   }
                    #mybutton {
                      position: fixed;
                      bottom: 50px;
                      right: 10px;
                    }
                     #mybutton:hover {
                      background-color: #DAA520;
                      color:#000;
                      border-radius: 10px;
                    }
                    .feedback:hover {
                      background-color: #DAA520;
                      color:#000;
                      border-style:none;
                    }
                    .feedback{
                      animation: color-change 3s infinite;
                    }

                    @keyframes color-change {
                      0% { color: #fff; }
                      50% { color: goldenrod; }
                      100% { color: black; }
                    }
                }
                    /*-----Testimonial-------*/

.testimonial:after {
    position: absolute;
    top: -0 !important;
    left: 0;
    content: " ";
    background: url(img/testimonial.bg-top.png);
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
}

.testimonial {
    min-height: 375px;
    position: relative;
    background: url(https://i.ibb.co/PTJDkgb/testimonials.jpg);
    padding-top: 50px;
    padding-bottom: 50px;
    background-position: center;
        background-size: cover;
}
#testimonial4 .carousel-inner:hover{
  cursor: -moz-grab;
  cursor: -webkit-grab;
}
#testimonial4 .carousel-inner:active{
  cursor: -moz-grabbing;
  cursor: -webkit-grabbing;
}
#testimonial4 .carousel-inner .item{
  overflow: hidden;
}

.testimonial4_indicators .carousel-indicators{
  left: 0;
  margin: 0;
  width: 100%;
  font-size: 0;
  height: 20px;
  bottom: 15px;
  padding: 0 5px;
  cursor: e-resize;
  overflow-x: auto;
  overflow-y: hidden;
  position: absolute;
  text-align: center;
  white-space: nowrap;
}
.testimonial4_indicators .carousel-indicators li{
  padding: 0;
  width: 14px;
  height: 14px;
  border: none;
  text-indent: 0;
  margin: 2px 3px;
  cursor: pointer;
  display: inline-block;
  background: #ffffff;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators .active{
  padding: 0;
  width: 14px;
  height: 14px;
  border: none;
  margin: 2px 3px;
  background-color: #9dd3af;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar{
  height: 3px;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb{
  background: #eeeeee;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.testimonial4_control_button .carousel-control{
  top: 175px;
  opacity: 1;
  width: 40px;
  bottom: auto;
  height: 40px;
  font-size: 10px;
  cursor: pointer;
  font-weight: 700;
  overflow: hidden;
  line-height: 38px;
  text-shadow: none;
  text-align: center;
  position: absolute;
  background: transparent;
  border: 2px solid #ffffff;
  text-transform: uppercase;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: all 0.6s cubic-bezier(0.3,1,0,1);
  transition: all 0.6s cubic-bezier(0.3,1,0,1);
}
.testimonial4_control_button .carousel-control.left{
  left: 7%;
  top: 50%;
  right: auto;
}
.testimonial4_control_button .carousel-control.right{
  right: 7%;
  top: 50%;
  left: auto;
}
.testimonial4_control_button .carousel-control.left:hover,
.testimonial4_control_button .carousel-control.right:hover{
  color: #000;
  background: #fff;
  border: 2px solid #fff;
}

.testimonial4_header{
  top: 0;
  left: 0;
  bottom: 0;
  width: 550px;
  display: block;
  margin: 30px auto;
  text-align: center;
  position: relative;
}
.testimonial4_header h3{
  color: #ffffff;
  font-size: 30px;
  font-weight: 600;
  position: relative;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.testimonial4_slide{
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 70%;
  margin: auto;
  padding: 20px;
  position: relative;
  text-align: center;
}
.testimonial4_slide img {
    top: 0;
    left: 0;
    right: 0;
 width: 100%;
  height: 230px;
  /*border: 6px solid rgba(255, 255, 255, 0.15);*/
  margin: 0 auto;
    margin: auto;
    margin-top:60px;
    display: block;
    color: #f2f2f2;
    font-size: 18px;
    line-height: 46px;
    text-align: center;
    position: relative;
/*    border-radius: 50%;*/
    box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
}
.testimonial4_slide p {
    color: #ffffff;
    font-size: 17px;
    line-height: 1.4;
    margin: 40px 0 20px 0;
}
.testimonial4_slide h3 {
  color: #ffffff;
  margin-top: 15px;
  margin-bottom: -30px;
  /*font-size: 22px;*/
}

.testimonial .carousel {
  padding-bottom:50px;
}
.testimonial .carousel-control-next-icon, .testimonial .carousel-control-prev-icon {
    width: 35px;
    height: 35px;
}
/* ------testimonial  close-------*/
</style>
    <!--Right Side Buttons Start-->
    <!--<div id="mybutton">-->
         <!--<button class="feedback">Feedback</button>-->
    <!--     <a href="{{url('/test')}}" class="feedback btn ">Evaluate My <br> Hair Health</a>-->
    <!--</div>-->
    <!--<div class="sticky-container bounceInUp" data-aos="zoom-in" data-aos-delay="100">-->
    <!--  <ul class="sticky">-->
    <!--    <li>-->
    <!--      <p><a href="{{url('/test')}}" style="color:white;">Are You Serious <br> About you Hair</a></p>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</div>-->
<!--Right Side Buttons End-->
     <!-- ======= Footer ======= -->
  <footer id="footer">
  <div class="container">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Hair Circle<span>.</span></h3>
            <p >Basement-1, Yogeshwari Complex, Sahyog Nagar, Gajanan Mandir Road,Near Sutgirni Chowk, Garkheda,Aurangabad.</p><br>
              <p><strong>Phone:</strong> +91 7798908888<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonial">Info</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Hair Circle</span></strong>. All Rights Reserved 2021
      </div>
      <div class="credits">
        Developed by <a href="https://www.ewebdigital.com">eWeb Digital</a>
      </div>
    </div>
  </footer><!-- End Footer -->

@endsection
  


@section('scripts')


@endsection