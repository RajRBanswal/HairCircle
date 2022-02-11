@extends('sidebar')

@section('content')

<div class="container card mt-5 mb-5 m-2">
    <div id="hideDiv">
      @if ($message = Session::get('flash'))  
        <div class="alert alert-info">  
          {{ $message }}
        </div>
      @endif
    </div>
	<center><h3 class="mt-3">Follow Up Questions</h3></center>
    <form method="post" action="{{url('follow_up_question')}}">
        <div class="container mt-3 mb-3 p-2" >
            <!-- Start First Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-1" onclick="queAns()">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex">
                            <h5 name="question1" class="faq-title">
                                <span class="badge bg-dark"> 1. </span>  <label>How are you feeling overall?</label>
                                <input type="text" name="faqHeading-1" value="How are you feeling overall?" style="display:none;">
                                <span class="float-right" id="check"><img src="img/tick.png"></span>
                            </h5>

                        </div>
                    </div>
                    <div class="row">
                            <!-- <div class="form-group col-md-12 col-lg-8 col-12 "> -->
                            <!-- <div class="card-body "> -->
                                <div class="form-group custom-control custom-radio custom-control-inline col-md-4 col-lg-3 col-8">
                                    <input type="radio" id="always" name="answer1" class="custom-control-input mr-2" value="Not sure" onclick="queAns()">
                                    <label class="custom-control-label" for="always"> Not sure</label>
                                </div> 
                                <div class="form-group custom-control custom-radio custom-control-inline col-md-4 col-lg-3 col-8">
                                    <input type="radio" id="never1" name="answer1" class="custom-control-input mr-2" value="Good " onclick="queAns()">
                                    <label class="custom-control-label" for="never1"> Good </label>
                                </div>
                                <div class="form-group custom-control custom-radio custom-control-inline col-md-4 col-lg-3 col-8">
                                    <input type="radio" id="sometimes1" name="answer1" class="custom-control-input mr-2" value="Great" onclick="queAns()">
                                    <label class="custom-control-label" for="sometimes1"> Great</label>
                                </div>                        
                            <!-- </div> -->
                    </div>
                </div>
              </div>
            <!-- End First Question -->
            <br>
            <!-- Start Second Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-2">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex">
                            <h5 name="question1" class="faq-title">
                                <span class="badge bg-dark"> 2. </span>  <label> Have you noticed any reduction in falling/ shedding of hairs ?</label>
                                <input type="text" name="faqHeading-2" value="Have you noticed any reduction in falling/ shedding of hairs ?" style="display:none;">
                                <span class="float-right" id="check1"><img src="img/tick.png"></span>
                            </h5>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-lg-6 col-12 d-flex">
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                    <input type="radio" id="never2" name="answer2" class="custom-control-input mr-2" value="No" onclick="queAns1()">
                                    <label class="custom-control-label" for="never2">NO</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                    <input type="radio" id="sometimes2" name="answer2" class="custom-control-input mr-2" value="Yes" onclick="queAns1()">
                                    <label class="custom-control-label" for="sometimes2">Yes</label>
                                </div>                                                        
                            </div>
                    </div>
                </div>
              </div>
            <!-- End Second Question -->
            <br>
            <!-- Start Third Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-3">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex justify-content-between">
                            <h5 name="question1" class="faq-title">
                                <span class="badge bg-dark"> 3. </span> <span> What is Gap Between Your Consultation and Start of Treatment ?</span>
                                <input type="text" name="faqHeading-3" value="What is Gap Between Your Consultation and Start of Treatment ?" style="display:none;">
                                <span class="float-right" id="check2"><img src="img/tick.png"></span>
                            </h5>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-8 col-12 d-flex">
                            <input type="text" name="gapbetween" class="form-control" placeholder="Please Write Here">    
                        </div>
                    </div>
                </div>
              </div>
            <!-- End Third Question -->
            <br>
            <!-- Start Four Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-4">
                    <div class="row">
                        <div class="form-group col-md-8 col-12 d-flex">
                            <h5 name="question1" class="faq-title ">
                                <span class="badge bg-dark"> 4. </span> <label> Have you Tolerated Products Well ?</label>
                                <input type="text" name="faqHeading-4" value="Have you Tolerated Products Well ?" style="display:none;">
                                <span class="float-right" id="check3"><img src="img/tick.png"></span>
                            </h5> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8 col-lg-8 col-12 d-flex">
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                    <input type="radio" id="never4" name="answer4" class="custom-control-input mr-2" value="No" onclick="queAns3()">
                                    <label class="custom-control-label" for="never4">No</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                    <input type="radio" id="sometimes4" name="answer4" class="custom-control-input mr-2" value="Yes" onclick="queAns3()">
                                    <label class="custom-control-label" for="sometimes4">Yes</label>
                                </div>

                            </div>
                            <div class="form-group col-lg-8 col-md-12 col-12">
                                <div id="trouble" class="card p-3">    
                                    <label>What Trouble You Faced</label>
                                    <input type="text" name="troible" class="form-control">
                                </div>    
                            </div>
                             
                    </div>
                </div>
              </div>
            <!-- End Four Question -->
            <br>
            <!-- Start Five Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-5">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex">
                            <h5 name="question1" class="faq-title ">
                                <span class="badge bg-dark"> 5. </span> <label> Do you want to tell us anything new about your health/hair condition ?</label>
                                <input type="text" name="faqHeading-5" value="Do you want to tell us anything new about your health/hair condition ?" style="display:none;">
                                <span class="float-right" id="check4"><img src="img/tick.png"></span>
                            </h5>
                            
                        </div>
                        <div class="form-group col-md-12 col-lg-8 col-12 d-flex">
                            <input type="text" name="hair_condition" placeholder="Write Here Hair Condition" class="form-control">                  
                        </div>
                    </div>
                </div>
              </div>
            <!-- End Five Question -->
            <br>
            <!-- Start Six Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-6">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex">
                            <h5 name="question1" class="faq-title ">
                                <span class="badge bg-dark"> 6. </span> <label> Would you like to Continue Treatment Further.<small>(note: It is Recommended to Continue Treatment for Minimum 4-6 Months for God Results) ?</small></label>
                                <input type="text" name="faqHeading-6" value="Would you like to Continue Treatment Further. ?" style="display:none;">
                                <span class="float-right" id="check5"><img src="img/tick.png"></span>
                            </h5>
                        </div>
                        <div class="form-group col-md-12 col-lg-8 col-12 d-flex">
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                    <input type="radio" id="never6" name="answer6" class="custom-control-input mr-2" value="No" onclick="queAns5()">
                                    <label class="custom-control-label" for="never6">No</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
                                    <input type="radio" id="sometimes6" name="answer6" class="custom-control-input mr-2" value="Yes" onclick="queAns5()">
                                    <label class="custom-control-label" for="sometimes6">Yes</label>
                                </div>
                                                       
                            </div>
                            <div class="form-group col-lg-8 col-md-12 col-12">
                                <div id="reason" class="card p-3">  
                                    <label>What is Reason for Dropping Out.</label>
                                    <input type="text" name="reason_drop" class="form-control" placeholder="Write Reason for Dropping Out">
                                </div>    
                            </div>
                    </div>
                </div>
              </div>
            <!-- End Six Question -->
            <br>
            <!-- Start Seven Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-7">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex">
                            <h5 name="question1" class="faq-title ">
                                <span class="badge bg-dark"> 7 </span> <span> Select Timing to Schedule Your Follow up Consultation Call ?</span>
                                <input type="text" name="faqHeading-7" value="Select Timing to Schedule Your Follow up Consultation Call ?" style="display:none;">
                                <span class="float-right" id="check6"><img src="img/tick.png"></span>
                            </h5>
                            
                        </div>
                        <div class="form-group col-md-12 col-lg-8 col-12 d-flex rrb">
                            <!-- <div class="card-body "> -->
                                <button type="button" class="btn btn-outline-primary btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  Set Time Schedule
                                </button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        ...
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>                        
                            </div>
                    </div>
                </div>
              </div>
            <!-- End Seven Question -->
            <br>
            <!-- Start Eight Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-8">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex">
                            <h5 name="question1" class="faq-title ">
                                <span class="badge bg-dark"> 8. </span> <span> Please Upload Your Photos ?</span>
                                <input type="text" name="faqHeading-8" value="Please Upload Your Photos ?" style="display:none;">
                                <span class="float-right" id="check7"><img src="img/tick.png"></span>
                            </h5>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6 col-12">
                                <label>Front Side</label>
                                <input type="file" name="frontside" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-lg-6 col-12">
                                <label>Top Side</label>
                                <input type="file" name="topside" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6 col-12">
                                <label>Right Side</label>
                                <input type="file" name="rightside" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-lg-6 col-12">
                                <label>Left Side</label>
                                <input type="file" name="leftside" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            <!-- End Eight Question -->
            <br>
            <!-- Start Nine Question -->
              <div class="card">
                <div class="card-body" id="faqHeading-9">
                    <div class="row">
                        <div class="form-group col-md-12 col-lg-12 col-12 d-flex">
                            <h5 name="question1" class="faq-title ">
                                <span class="badge bg-dark"> 9. </span> <span> How Will you Rate Your Experience With Hair Circle ?</span>
                                <input type="text" name="faqHeading-9" value="How Will you Rate Your Experience With Hair Circle ?" style="display:none;">
                                <span class="float-right" id="check6"><img src="img/tick.png"></span>
                            </h5>
                            
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="form-group col-md-12 col-lg-8 col-12 "> -->
                            <!-- <div class="card-body "> -->
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-lg-3 col-8">
                                    <input type="radio" id="always9" name="answer9" class="custom-control-input mr-2" value="Average" onclick="queAns8()">
                                    <label class="custom-control-label" for="always9">Average</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-lg-3 col-8">
                                    <input type="radio" id="never9" name="answer9" class="custom-control-input mr-2" value="Good" onclick="queAns8()">
                                    <label class="custom-control-label" for="never9">Good</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline col-md-4 col-lg-3 col-8">
                                    <input type="radio" id="sometimes9" name="answer9" class="custom-control-input mr-2" value="Excellent" onclick="queAns8()">
                                    <label class="custom-control-label" for="sometimes9">Excellent</label>
                                </div>
                                                         
                            <!-- </div> -->
                    </div>
                </div>
              </div>
            <!-- End Nine Question -->

            <div class="row mt-3 rrb">
                <center><input type="submit" name="submit" class="btn btn-outline-primary btn1"></center>
            </div>
        </div> 
    </form>
</div>	
<style type="text/css">
.rrb .btn1:hover{
  background-color: #000;
  color: #fff;
}
.rrb .btn1{
  color: #000;
  border-color: #DAA520;
}

.custom-control-input{
  border:2px solid white;
  box-shadow:0 0 0 1px #000;
  appearance:none;
  border-radius:50%;
  width: 1em;
  height: 1em;
  background-color:#fff;
  transition:all ease-in 0.0s;

}
.custom-control-input:checked{
  background-color:#DAA520;
}
</style>

<script type="text/javascript">
  setTimeout(function() {
   $('#hideDiv').fadeOut('fast');
 }, 3000); 
</script>
@endsection
